<?php

namespace App\Http\Controllers;

use App\Models\data_institusi;
use App\Models\HeroSectionModel;
use App\Models\SocalMediaModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getDashboard () {
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $dataHeroSection = HeroSectionModel::where('id', 1)->first();
        $dataSosmed = SocalMediaModel::all();

        $data = [
            'dataInstitusi' => $dataInstitusi,
            'dataHeroSection' => $dataHeroSection,
            'dataSosmed' => $dataSosmed
        ];

        return view('dashboard/dashboard', $data);
    }
}
