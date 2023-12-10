<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminformController extends Controller
{
    // Method untuk menampilkan halaman form
    public function show()
    {
        return view('form'); // Sesuaikan dengan nama file blade yang akan digunakan
    }

    // Method untuk memproses data dari form
    public function processForm(Request $request)
    {
        // Logika pemrosesan form
    }
}

