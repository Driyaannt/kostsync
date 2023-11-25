<?php

namespace App\Http\Controllers;

use App\Models\Cabang;

use Illuminate\Http\Request;

class OutletDetailController extends Controller
{
    public function show($cabang_id)
    {
        // Fetch outlet details based on $cabang_id from the database
        $cabang = Cabang::find($cabang_id);

        // Check if the outlet is found
        if (!$cabang) {
            // Handle the case where the outlet is not found, for example, redirect to another page or show an error message.
            return redirect()->route('superadmin.dashboard')->with('error', 'Outlet not found.');
        }

        // Pass the outlet details to the view
        return view('layouts.superadmin.outlet-detail', ['cabang' => $cabang]);
    }
}
