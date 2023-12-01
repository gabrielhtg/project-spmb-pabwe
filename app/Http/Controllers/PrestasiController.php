<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function getviewPrestasi()
    {
        return view("prestasi.prestasiOverview");
    }

    public function getviewPrestasiInstitut()
    {
        return view("prestasi.prestasiInstitut");
    }

    public function getviewPrestasiDosenStaff()
    {
        return view("prestasi.prestasiDosenStaff");
    }

    public function getviewPrestasiMahasiswa()
    {
        return view("prestasi.prestasiMahasiswa");
    }
}
