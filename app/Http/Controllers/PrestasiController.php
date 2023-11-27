<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function getviewPrestasi()
    {
        return view("prestasi.prestasiOverview");
    }
}
