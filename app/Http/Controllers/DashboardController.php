<?php

namespace App\Http\Controllers;

use App\Models\data_institusi;
use App\Models\HeroSectionModel;
use Database\Seeders\add_hero_section_data;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getDashboard () {
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $dataHero = HeroSectionModel::where('id', 1)->first();

        $data = [
            'dataInstitusi' => $dataInstitusi,
            'dataHero' => $dataHero
        ];

        return view('dashboard/dashboard', $data);
    }

    public function getAdmisi () {
        $dataInstitusi = data_institusi::where('id', 1)->first();
//        $dataHero = HeroSectionModel::where('id', 1)->first();

        $data = [
            'dataInstitusi' => $dataInstitusi,
//            'dataHero' => $dataHero
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
