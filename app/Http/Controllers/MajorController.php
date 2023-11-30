<?php

namespace App\Http\Controllers;
use App\Models\data_institusi;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function getProdi () {
        $dataInstitusi = data_institusi::where('id', 1)->first();

        $data = [
            'dataInstitusi' => $dataInstitusi,
        ];

        return view('program.prodi', $data);
    }
}
