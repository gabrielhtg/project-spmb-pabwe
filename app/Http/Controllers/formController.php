<?php

namespace App\Http\Controllers;

use App\Models\AlamatInstitusiModel;
use App\Models\data_institusi;
use App\Models\HeroSectionModel;
use App\Models\SocalMediaModel;
use App\Models\Form; // Tambahkan ini
use App\Models\AkreditasiInstitutiModel;
use App\Models\AkreditasiSectionModel;
use App\Models\EmailModel;
use App\Models\InfografisModel;
use App\Models\JadwalUjianModel;
use App\Models\MbkmModel;
use App\Models\ModelHeaderAdmisi;
use App\Models\NomorTeleponModel;
use App\Models\Lokasi;
use App\Models\JenisTes;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class formController extends Controller
{
    public function form()
    {
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $dataHeroSection = HeroSectionModel::where('id', 1)->first();
        $dataSosmed = SocalMediaModel::all();
        $dataAlamat = AlamatInstitusiModel::all();
        $akreditasiDashboard = AkreditasiSectionModel::where('id', 1)->first();
        $dataNomorTelepon = NomorTeleponModel::all();
        $dataEmail = EmailModel::all();
        $dataAkreditasiInstitusi = AkreditasiInstitutiModel::all()->sortByDesc('tahun_akreditasi')->first();

        $data = [
            'dataInstitusi' => $dataInstitusi,
            'dataHeroSection' => $dataHeroSection,
            'dataSosmed' => $dataSosmed,
            'dataAlamat' => $dataAlamat,
            'akreditasiDashboard' => $akreditasiDashboard,
            'dataNomorTelepon' => $dataNomorTelepon,
            'dataEmail' => $dataEmail,
            'dataAkreditasiInstitusi' => $dataAkreditasiInstitusi,
            'dataTestimoni' => Testimoni::orderBy('created_at', 'desc')->take(8)->get(),
        ];

        return view('chatbot.form', $data);
    }

    public function submitForm(Request $request)
    {
        // Validasi data formulir
        $validatedData = $request->validate([
            'nama' => 'required',
            'nomor' => 'required',
            'pesan' => 'required',
        ]);

        // Simpan data ke database atau lakukan operasi lain sesuai kebutuhan
        Form::create([
            'nama' => $validatedData['nama'],
            'nomor' => $validatedData['nomor'],
            'pesan' => $validatedData['pesan'],
        ]);

        // Redirect atau tampilkan respons sesuai kebutuhan
        return redirect()->back()->with('success', 'Formulir berhasil dikirim!');
    }
}

