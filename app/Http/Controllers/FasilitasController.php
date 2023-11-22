<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function viewAsrama()
    {
        return view('fasilitas.fasilitasAsrama');
    }

    public function viewKesehatandanOlahraga()
    {
        return view('fasilitas.fasilitasKesehatandanOlahraga');
    }

    public function viewAreaMahasiswa()
    {
        return view('fasilitas.fasilitasAreaMahasiswa');
    }

    public function viewLaboratorium()
    {
        return view('fasilitas.fasilitasLaboratorium');
    }

    public function viewLayananMakanan()
    {
        return view('fasilitas.fasilitasLayananMakanan');
    }
}
