<?php

namespace App\Http\Controllers;

use App\Models\data_institusi;

use Illuminate\Http\Request;

class FacultyController extends Controller
{
    //
    public function getProgram () {
        $dataInstitusi = data_institusi::where('id', 1)->first();

        $data = [
            'dataInstitusi' => $dataInstitusi,
        ];

        return view('program.program', $data);
    }

    public function getFakultas () {
        $dataInstitusi = data_institusi::where('id', 1)->first();

        $data = [
            'dataInstitusi' => $dataInstitusi,
        ];

        return view('program.fakultas', $data);
    }
}
