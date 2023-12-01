<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;
use App\Models\data_institusi;

class FasilitasController extends Controller
{
    public function getviewFasilitas()
    {
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $fasilitas = Fasilitas::orderBy('created_at', 'desc')->get();
        $data = [
            'dataInstitusi' => $dataInstitusi,
            'fasilitas' => $fasilitas,
        ];
        return view('fasilitas.fasilitas', $data);
    }

}
