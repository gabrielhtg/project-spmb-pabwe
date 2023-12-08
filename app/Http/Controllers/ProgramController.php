<?php

namespace App\Http\Controllers;

use App\Models\Major;

use App\Models\Faculty;
use Illuminate\Http\Request;
use App\Models\data_institusi;
use Illuminate\Support\Facades\Auth;

class ProgramController extends Controller
{
    public function program()
    {
        $dataInstitusi = data_institusi::where('id', 1)->first();

        $admin = Auth::user();
        $faculties = Faculty::all();
        $majors = Major::all();

        $data = [
            'indexActive' => 3,
            'dataInstitusi'=>$dataInstitusi,
            'admin' => $admin,
            'faculties'=>$faculties,
            'majors'=>$majors,
        ];

        return view('program.program', $data);
    }
}
