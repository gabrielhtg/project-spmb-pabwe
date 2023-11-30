<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;

class FasilitasController extends Controller
{
    public function getviewFasilitas()
    {
        $fasilitas = Fasilitas::orderBy('created_at', 'desc')->get();
        return view('fasilitas.fasilitas', compact('fasilitas'));
    }

}
