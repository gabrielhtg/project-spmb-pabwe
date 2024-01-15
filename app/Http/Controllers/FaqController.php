<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\data_institusi;
use App\Models\SocalMediaModel;
use App\Models\CoverFaq;
use App\Models\AkreditasiSectionModel;
use App\Models\AlamatInstitusiModel;
use App\Models\HeroSectionModel;
use App\Models\ModelHeaderAdmisi;
use App\Models\AkreditasiInstitutiModel;
use App\Models\EmailModel;
use App\Models\InfografisModel;
use App\Models\JadwalUjianModel;
use App\Models\MbkmModel;
use App\Models\NomorTeleponModel;
use App\Models\Lokasi;
use App\Models\JenisTes;
use App\Models\Testimoni;

class FaqController extends Controller
{
    public function getviewFaq()
    { 
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $dataHeroSection = HeroSectionModel::where('id', 1)->first();
        $dataSosmed = SocalMediaModel::all();
        $dataAlamat = AlamatInstitusiModel::all();
        $akreditasiDashboard = AkreditasiSectionModel::where('id', 1)->first();
        $faq = Faq::orderBy('created_at', 'desc')->get();
        $dataNomorTelepon = NomorTeleponModel::all();
        $dataEmail = EmailModel::all();
        $dataAkreditasiInstitusi = AkreditasiInstitutiModel::all()->sortByDesc('tahun_akreditasi')->first();

        $data = [
            'dataInstitusi' => $dataInstitusi,
            'dataHeroSection' => $dataHeroSection,
            'dataSosmed' => $dataSosmed,
            'dataAlamat' => $dataAlamat,
            'akreditasiDashboard' => $akreditasiDashboard,
            'faq' => $faq,
            'dataNomorTelepon' => $dataNomorTelepon,
            'dataEmail' => $dataEmail,
            'dataAkreditasiInstitusi' => $dataAkreditasiInstitusi,
            'dataTestimoni' => Testimoni::orderBy('created_at', 'desc')->take(8)->get(),
        ];

        return view("faq.faq", $data);
    }
}
