<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_institusi;

class PrestasiController extends Controller
{
    public function getviewPrestasi()
    {
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $data = ['dataInstitusi'=> $dataInstitusi];
        return view("prestasi.prestasiOverview", $data);
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
