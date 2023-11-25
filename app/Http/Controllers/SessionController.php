<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function login()
    {
        return view('layouts.login');
    }

    function processLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email field is required',
            'email.email' => 'Email is invalid',
            'password.required' => 'Password field is required',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            //jika login sebagai user
            if (Auth::user()->id_role == 1) {
                return redirect()->route('user.beranda');
            }
            //jika login sebagai admin
            if (Auth::user()->id_role == 2) {
                return redirect()->route('admin.dashboard');
            }
            //jika login sebagai superadmin
            if (Auth::user()->id_role == 3) {
                return redirect()->route('superadmin.dashboard');
            }
        } else {
            return redirect()->back()->withErrors(['credentials' => 'Email or password is wrong'])->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
