<?php

namespace App\Http\Controllers;
use App\Models\data_institusi;
use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    public function getviewBeasiswa(){
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $data = ['dataInstitusi'=> $dataInstitusi];
        return view("beasiswa.beasiswa", $data);
    }
}
