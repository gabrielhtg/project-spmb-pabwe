<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function getviewFasilitas()
    {
        return view('fasilitas.fasilitas');
    }

}
