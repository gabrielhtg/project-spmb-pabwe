<?php

namespace App\Http\Controllers;

use App\Models\AlamatInstitusiModel;
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
        $dataAlamat = AlamatInstitusiModel::all();

        $data = [
            'dataInstitusi' => $dataInstitusi,
            'dataHeroSection' => $dataHeroSection,
            'dataSosmed' => $dataSosmed,
            'dataAlamat' => $dataAlamat
        ];

        return view('dashboard/dashboard', $data);
    }

    public function getAdmisi () {
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $dataAlamat = AlamatInstitusiModel::all();
        $dataSosmed = SocalMediaModel::all();

        $data = [
            'dataInstitusi' => $dataInstitusi,
            'dataSosmed' => $dataSosmed,
            'dataAlamat' => $dataAlamat
        ];

        return view('admisi.admisi-tanggal-penting', $data);
    }

    public function getJalurPendaftaran () {
        $dataInstitusi = data_institusi::where('id', 1)->first();
//        $dataHero = HeroSectionModel::where('id', 1)->first();

        $data = [
            'dataInstitusi' => $dataInstitusi,
//            'dataHero' => $dataHero
        ];

        return view('admisi.admisi-jalur-pendaftaran', $data);
    }

    public function getBiayaStudi () {
        $dataInstitusi = data_institusi::where('id', 1)->first();
//        $dataHero = HeroSectionModel::where('id', 1)->first();

        $data = [
            'dataInstitusi' => $dataInstitusi,
//            'dataHero' => $dataHero
        ];

        return view('admisi.admisi-biaya-studi', $data);
    }

    public function getPersyaratanKhusus () {
        $dataInstitusi = data_institusi::where('id', 1)->first();
//        $dataHero = HeroSectionModel::where('id', 1)->first();

        $data = [
            'dataInstitusi' => $dataInstitusi,
//            'dataHero' => $dataHero
        ];

        return view('admisi.admisi-persyaratan-khusus', $data);
    }

}
