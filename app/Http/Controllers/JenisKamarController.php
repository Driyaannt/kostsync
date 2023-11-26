<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\Fasilitas;
use App\Models\JenisKamar;
use App\Models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JenisKamarController extends Controller
{
    public function index()
    {
        $user_id_cabang = auth()->user()->id_cabang;

        $jenis_kamars = JenisKamar::where('id_cabang', $user_id_cabang)->get(); //mendapatkan jenis kamar pada cabang dari admin ini
        $cabang = Cabang::where('id', $user_id_cabang)->first();
        return view('layouts.admin.ruang', ['jenis_kamars' => $jenis_kamars, 'cabang' => $cabang]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //TODO: masukin foto
        $fasilitas_validated = $request->validate($this->validator_fasilitas);
        $new_fasilitas = Fasilitas::create(['nama_fasilitas' => $fasilitas_validated['fasilitas']]);

        $validated = $request->validate($this->validator_jenis_kamar);
        $validated['id_cabang'] = auth()->user()->id_cabang;
        $validated['id_fasilitas'] = $new_fasilitas->id;
        $validated['gambar'] = '';
        $new_jenis_kamar =  JenisKamar::create($validated);

        $jumlah_kamar_validated = $request->validate($this->validator_jumlah_kamar);
        $this->createKamar($jumlah_kamar_validated['jumlah_kamar'], $new_jenis_kamar->id, $new_jenis_kamar->nama_jenis);
        // for ($i = 1; $i <= $jumlah_kamar_validated['jumlah_kamar']; $i++) {
        //     DB::table('kamar')->insert([
        //         'id_jenis' => $new_jenis_kamar->id,
        //         'nama_kamar' => "Kamar $i $new_jenis_kamar->nama_jenis",
        //         'status' => 'tersedia',
        //     ]);
        // }

        return redirect()->route('admin.ruang');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $jenis_kamar = JenisKamar::with('cabang', 'fasilitas')->findOrfail($id);
        $jumlah_kamar_tidak_tersedia = Kamar::where('id_jenis', $id)->where('status', 'tidak tersedia')->count();
        $jumlah_kamar_tersedia = Kamar::where('id_jenis', $id)->where('status', 'tersedia')->count();
        $jumlah_kamar = $jumlah_kamar_tersedia + $jumlah_kamar_tidak_tersedia;
        return view('layouts.admin.ruang-detail', ['jenis_kamar' => $jenis_kamar, 'jumlah_kamar_tidak_tersedia' => $jumlah_kamar_tidak_tersedia, 'jumlah_kamar_tersedia' => $jumlah_kamar_tersedia, 'jumlah_kamar' => $jumlah_kamar]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisKamar $jenisKamar)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $jenisKamar =  JenisKamar::findOrFail($id);

        // dd($jenisKamar->id_fasilitas);
        //update fasilitas
        //TODO: masukin foto
        $fasilitas_validated = $request->validate($this->validator_fasilitas);
        $fasilitas = Fasilitas::findOrFail($jenisKamar->id_fasilitas);
        $fasilitas->update(['nama_fasilitas' => $fasilitas_validated['fasilitas']]);

        $validated = $request->validate($this->validator_jenis_kamar);
        $jenisKamar->update($validated);

        $jumlah_kamar_validated = $request->validate($this->validator_jumlah_kamar);

        $jumlah_kamar = $this->getJumlahKamar($jenisKamar->id);
        //jika yang dimasukkan jumlahnya lebih tinggal tambah
        if ($jumlah_kamar_validated['jumlah_kamar'] > $jumlah_kamar) {
            $jumlah_kamar_new = $jumlah_kamar_validated['jumlah_kamar'] - $jumlah_kamar;
            //TODO: apakah nama yang baru sama dengan yang lama? jika tidak maka bagaimana nama kamar yang lama? diganti? atau tetap?
            $this->createKamar($jumlah_kamar_new, $jenisKamar->id, $jenisKamar->nama_jenis, $jumlah_kamar + 1);
        }

        //jika kurang dari maka?
        if ($jumlah_kamar_validated['jumlah_kamar'] < $jumlah_kamar) {
            $jumlah_kamar_new = $jumlah_kamar - $jumlah_kamar_validated['jumlah_kamar'];

            $jumlah_kamar_tidak_tersedia = Kamar::where('id_jenis', $jenisKamar->id)->where('status', 'tidak tersedia')->count();

            //jika lebih banyak yang terpakai
            if ($jumlah_kamar_validated['jumlah_kamar'] < $jumlah_kamar_tidak_tersedia) {
                return redirect()->back()->with('kamarTerpakai', 'Tidak bisa mengubah jumlah kamar, beberapa masih terpakai');
            }

            //jika lebih banyak yang tidak terpakai
            //TODO: hapus kamar yang tidak terpakai seperti tadi dengan limit $jumlah_kamar_validated['jumlah_kamar']
            $kamar_tersedia = Kamar::where('id_jenis', $jenisKamar->id)->where('status', 'tersedia')->limit($jumlah_kamar_new)->get();
            foreach ($kamar_tersedia as $kamar) {
                $kamar->delete();
            }
        }

        return redirect()->route('admin.ruang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //mengecek apakah ada kamar yang terpakai, jika ada return
        $jumlah_kamar_tidak_tersedia = Kamar::where('id_jenis', $id)->where('status', 'tidak tersedia')->count();
        if ($jumlah_kamar_tidak_tersedia > 0) {
            return redirect()->back()->with('kamarTerpakai', 'Tidak bisa menghapus kamar yang masih terpakai');
        }


        //jika tidak, hapus, beserta tiap kamar
        Kamar::where('id_jenis', $id)->delete();
        JenisKamar::destroy($id);
    }

    private function getJumlahKamar($id)
    {
        $jumlah_kamar_tidak_tersedia = Kamar::where('id_jenis', $id)->where('status', 'tidak tersedia')->count();
        $jumlah_kamar_tersedia = Kamar::where('id_jenis', $id)->where('status', 'tersedia')->count();
        $jumlah_kamar = $jumlah_kamar_tersedia + $jumlah_kamar_tidak_tersedia;
        return $jumlah_kamar;
    }

    private function createKamar($jumlah_kamar, $id_jenis, $nama_jenis, $startIndex = 1)
    {
        $jumlah_kamar = $jumlah_kamar + $startIndex - 1;
        for ($startIndex; $startIndex <= $jumlah_kamar; $startIndex++) {
            DB::table('kamar')->insert([
                'id_jenis' => $id_jenis,
                'nama_kamar' => "Kamar $startIndex $nama_jenis",
                'status' => 'tersedia',
            ]);
        }
    }

    private $validator_fasilitas = [
        'fasilitas' => 'required|max:255|min:3',
    ];

    private $validator_jenis_kamar = [
        'nama_jenis' => 'required|max:255|min:3',
        'deskripsi' => 'required|min:3',
        'harga' => 'required|numeric',
    ];

    private $validator_jumlah_kamar = [
        'jumlah_kamar' => 'required|numeric',
    ];
}
