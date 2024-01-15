<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AkreditasiInstitutiModel;
use App\Models\AkreditasiSectionModel;
use App\Models\AlamatInstitusiModel;
use App\Models\EmailModel;
use App\Models\HeroSectionModel;
use App\Models\InfografisModel;
use App\Models\JadwalUjianModel;
use App\Models\MbkmModel;
use App\Models\ModelHeaderAdmisi;
use App\Models\NomorTeleponModel;
use App\Models\SocalMediaModel;
use App\Models\Fasilitas;
use App\Models\data_institusi;

class FasilitasController extends Controller
{
    public function getviewFasilitas()
    {
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $fasilitas = Fasilitas::orderBy('created_at', 'desc')->get();
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $dataAlamat = AlamatInstitusiModel::all();
        $dataSosmed = SocalMediaModel::all();
        $dataHeaderAdmisi = ModelHeaderAdmisi::where('id', 1)->first();
        $dataNomorTelepon = NomorTeleponModel::all();
        $dataEmail = EmailModel::all();
        $data = [
            'dataInstitusi' => $dataInstitusi,
            'dataSosmed' => $dataSosmed,
            'dataAlamat' => $dataAlamat,
            'dataHeaderAdmisi' => $dataHeaderAdmisi,
            'dataNomorTelepon' => $dataNomorTelepon,
            'dataEmail' => $dataEmail,
            'fasilitas' => $fasilitas,
        ];
        return view('fasilitas.fasilitas', $data);
    }

}
 