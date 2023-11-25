<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cabang;
use App\Models\Kamar;
use App\Models\Kontak;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        // get nama berdasarkan yang login
    $nama = Auth::user()->nama;
        // get id_cabang berdasarkan yang login
    $id_cabang = Auth::user()->id_cabang;
    $nama_cabang = Cabang::find($id_cabang)->nama_cabang;

    // Get the currently logged-in user
    $user = Auth::user();

    // Get the kamar associated with the user
    $kamar = $user->kamar;

    // Get the nama_kamar associated with the kamar
    $nama_kamar = $kamar->nama_kamar;

    // $data = [
    //     'nama' => $nama,
    //     'cabang' => $nama_cabang,
    //     'kamar' => $nama_kamar,
    // ];

        return view('layouts.user.kontak', compact('nama', 'nama_cabang', 'nama_kamar'));
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'nama' => 'required|string',
            'nama_cabang' => 'required|string',
            'nama_kamar' => 'required|string',
            'judul' => 'required|string',
            'pesan' => 'required|string',
        ]);

        // Create a new Contact model instance
        Kontak::create([
            'id_user' => $request->nama,
            'id_cabang' => $request->cabang,
            'id_kamar' => $request->kamar,
            'judul' => $request->judul,
            'pesan' => $request->pesan,
        ]);

        // Redirect or perform other actions after successful form submission
        return redirect()->route('user.kontak')->with('success', 'Form submitted successfully!');
    }
}
