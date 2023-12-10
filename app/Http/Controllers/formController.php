<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlamatInstitusiModel;
use App\Models\data_institusi;
use App\Models\HeroSectionModel;
use App\Models\SocalMediaModel;

class formController extends Controller
{
    public function form()
    {
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $dataHeroSection = HeroSectionModel::where('id', 1)->first();
        $dataSosmed = SocalMediaModel::all();


        $data = [
            'dataInstitusi' => $dataInstitusi,
            'dataHeroSection' => $dataHeroSection,
            'dataSosmed' => $dataSosmed,
        ];
        

        return view('chatbot.form', $data);
    }
}