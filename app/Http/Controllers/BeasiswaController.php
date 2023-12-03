<?php

namespace App\Http\Controllers;
use App\Models\data_institusi;
use Illuminate\Http\Request;
use App\Models\SocalMediaModel;
use App\Models\HeroSectionModel;

class BeasiswaController extends Controller
{
    public function getviewBeasiswa(){
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $dataHeroSection = HeroSectionModel::where('id', 1)->first();
        $dataSosmed = SocalMediaModel::all();

        $data = [
            'dataInstitusi' => $dataInstitusi,
            'dataHeroSection' => $dataHeroSection,
            'dataSosmed' => $dataSosmed
        ];
        return view("beasiswa.beasiswa", $data);
    }
}
