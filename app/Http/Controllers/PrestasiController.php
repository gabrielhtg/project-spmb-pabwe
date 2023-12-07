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
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $data = ['dataInstitusi'=> $dataInstitusi];
        return view("prestasi.prestasiInstitut", $data);
    }

    public function getviewPrestasiDosenStaff()
    {
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $data = ['dataInstitusi'=> $dataInstitusi];
        return view("prestasi.prestasiDosenStaff", $data);
    }

    public function getviewPrestasiMahasiswa()
    {
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $data = ['dataInstitusi'=> $dataInstitusi];
        return view("prestasi.prestasiMahasiswa", $data);
    }
}