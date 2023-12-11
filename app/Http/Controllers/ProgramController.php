<?php

namespace App\Http\Controllers;

use App\Models\Major;

use App\Models\Faculty;
use Illuminate\Http\Request;
use App\Models\data_institusi;
use App\Models\HeroSectionModel;
use App\Models\SocalMediaModel;
use App\Models\AlamatInstitusiModel;
use App\Models\AkreditasiInstitutiModel;
use App\Models\AkreditasiSectionModel;
use App\Models\NomorTeleponModel;
use App\Models\EmailModel;
use Illuminate\Support\Facades\Auth;


class ProgramController extends Controller
{
    public function program()
    {
        $dataInstitusi = data_institusi::where('id', 1)->first();

        $admin = Auth::user();
        $faculties = Faculty::all();
        $majors = Major::all();
        $dataHeroSection = HeroSectionModel::where('id', 1)->first();
        $dataSosmed = SocalMediaModel::all();
        $dataAlamat = AlamatInstitusiModel::all();
        $akreditasiDashboard = AkreditasiSectionModel::where('id', 1)->first();
        $dataNomorTelepon = NomorTeleponModel::all();
        $dataEmail = EmailModel::all();
        $dataAkreditasiInstitusi = AkreditasiInstitutiModel::all()->sortByDesc('tahun_akreditasi')->first();

        $data = [
            'indexActive' => 3,
            'dataInstitusi'=>$dataInstitusi,
            'admin' => $admin,
            'faculties'=>$faculties,
            'majors'=>$majors,
            'dataHeroSection' => $dataHeroSection,
            'dataSosmed' => $dataSosmed,
            'dataAlamat' => $dataAlamat,
            'akreditasiDashboard' => $akreditasiDashboard,
            'dataNomorTelepon' => $dataNomorTelepon,
            'dataEmail' => $dataEmail,
            'dataAkreditasiInstitusi' => $dataAkreditasiInstitusi,
            
        ];

        return view('program.program', $data);
    }
}
