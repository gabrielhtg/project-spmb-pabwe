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
}
