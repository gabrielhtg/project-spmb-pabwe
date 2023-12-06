<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlamatInstitusiModel;
use App\Models\data_institusi;
use App\Models\HeroSectionModel;
use App\Models\SocalMediaModel;

class MitraController extends Controller
{
    public function getviewMitra(){
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $dataHeroSection = HeroSectionModel::where('id', 1)->first();
        $dataSosmed = SocalMediaModel::all();
        $dataAlamat = AlamatInstitusiModel::all();

        $data = [
            'dataInstitusi' => $dataInstitusi,
            'dataHeroSection' => $dataHeroSection,
            'dataSosmed' => $dataSosmed,
            'dataAlamat' => $dataAlamat
        ];

        return view('mitra.mitra', $data);
        
    }
}