<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Cabang;
use Illuminate\Http\Request;

class SadminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dadmin = User::with('role')->where('id_role', 2)->get();
        $cabangs = Cabang::all();
        
        if (!$dadmin) {
            abort(404); 
        }

        return view('layouts.superadmin.admin', compact('dadmin', 'cabangs'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.superadmin.admin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'id_cabang' => 'required',
            'no_telepon' => 'required',
            'email' => 'required|email|unique:user,email',
            'alamat' => 'required',
            'password' => 'required|min:8',
        ]);

        $request->merge([
            'password' => bcrypt($request->password),
            'id_role' => 2,
        ]);
    
        User::create($request->all());
        return redirect()->route('superadmin.admin')->with('success', 'Admin added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin = User::findOrFail($id);
        $cabangs = Cabang::all();
        return view('layouts.superadmin.admin', compact('admin', 'cabangs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'id_cabang' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
        ]);

        $admin = User::findOrFail($id);
        $admin->update($request->all());
        return redirect()->route('admin')->with('success', 'Admin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $admin = User::findOrFail($id);
         $admin->delete();
         return redirect()->route('admin')->with('success', 'Admin deleted successfully');
    }

    public function checkEmail(Request $request)
{
    $emailExists = User::where('email', $request->email)->exists();

    return response()->json([
        'available' => !$emailExists,
        'message' => $emailExists ? 'Email is already taken.' : '',
    ]);
}
}
