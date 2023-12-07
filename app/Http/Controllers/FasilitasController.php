<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function getviewAsrama()
    {
        return view('fasilitas.fasilitasAsrama');
    }

    public function getviewKesehatandanOlahraga()
    {
        return view('fasilitas.fasilitasKesehatandanOlahraga');
    }

    public function getviewAreaMahasiswa()
    {
        return view('fasilitas.fasilitasAreaMahasiswa');
    }

    public function getviewLaboratorium()
    {
        return view('fasilitas.fasilitasLaboratorium');
    }

    public function getviewLayananMakanan()
    {
        return view('fasilitas.fasilitasLayananMakanan');
    }
}