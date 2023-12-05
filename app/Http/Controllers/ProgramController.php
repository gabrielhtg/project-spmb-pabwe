<?php

namespace App\Http\Controllers;

use App\Models\data_institusi;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function program()
    {
        $dataInstitusi = data_institusi::where('id', 1)->first();

        $data = [
            'dataInstitusi' => $dataInstitusi,
        ];

        return view('program.program', $data);
    }
}
