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

        $new_fasilitas = Fasilitas::create([
            'nama_fasilitas' => $request->fasilitas,
        ]);

        $validated = $request->validate([
            'nama_jenis' => 'required|max:255|min:3',
            'deskripsi' => 'required|min:3',
            'harga' => 'required|numeric',
            // 'jumlah_kamar' => 'required|numeric',
            //'fasilitas' => 'required|max:255|min:3',
            // 'foto' => 'required',
        ]);

        $validated['id_cabang'] = auth()->user()->id_cabang;
        $validated['id_fasilitas'] = $new_fasilitas->id;
        $validated['gambar'] = '';

        $new_jenis_kamar =  JenisKamar::create($validated);

        for ($i = 0; $i < $request->jumlah_kamar; $i++) {
            DB::table('kamar')->insert([
                'id_jenis' => $new_jenis_kamar->id,
                'nama_kamar' => "Kamar $i $new_jenis_kamar->nama_jenis",
                'status' => 'tersedia',
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $jenis_kamar = JenisKamar::with('cabang', 'fasilitas')->findOrfail($id);
        // dd($jenis_kamar);
        $jumlah_kamar_tidak_tersedia = Kamar::where('id_jenis', $id)->where('status', 'tidak tersedia')->count();
        $jumlah_kamar_tersedia = Kamar::where('id_jenis', $id)->where('status', 'tersedia')->count();
        return view('layouts.admin.ruang-detail', ['jenis_kamar' => $jenis_kamar, 'jumlah_kamar_tidak_tersedia' => $jumlah_kamar_tidak_tersedia, 'jumlah_kamar_tersedia' => $jumlah_kamar_tersedia]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisKamar $jenisKamar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JenisKamar $jenisKamar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JenisKamar $jenisKamar)
    {
        //
    }
}
