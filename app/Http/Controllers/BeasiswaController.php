<?php

namespace App\Http\Controllers;
use App\Models\data_institusi;
use Illuminate\Http\Request;
use App\Models\SocalMediaModel;
use App\Models\HeroSectionModel;
use App\Models\AkreditasiSectionModel;
use App\Models\AlamatInstitusiModel;
use App\Models\ModelHeaderAdmisi;

class BeasiswaController extends Controller
{
    public function getviewBeasiswa(){
        
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $dataHeroSection = HeroSectionModel::where('id', 1)->first();
        $dataSosmed = SocalMediaModel::all();
        $dataAlamat = AlamatInstitusiModel::all();
        $akreditasiDashboard = AkreditasiSectionModel::where('id', 1)->first();

        $data = [
            'dataInstitusi' => $dataInstitusi,
            'dataHeroSection' => $dataHeroSection,
            'dataSosmed' => $dataSosmed,
            'dataAlamat' => $dataAlamat,
            'akreditasiDashboard' => $akreditasiDashboard
        ];
        return view("beasiswa.beasiswa", $data);
    }
}
