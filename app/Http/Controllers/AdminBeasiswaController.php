<?php

namespace App\Http\Controllers;
use App\Models\data_institusi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AdminModel;
use App\Models\AkreditasiSectionModel;
use App\Models\AlamatInstitusiModel;
use App\Models\CoverFaq;

use App\Models\Faq;
use App\Models\HeroSectionModel;
use App\Models\ModelHeaderAdmisi;
use App\Models\ModelHeaderFaq;
use App\Models\SocalMediaModel;
use App\Models\MitraModel;
use App\Models\Beasiswa;
use App\Models\NomorTeleponModel;

use Illuminate\Http\Response;

use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
class AdminBeasiswaController extends Controller
{
    public function index()
    {
      $admin = Auth::user();
      $dataInstitusi = data_institusi::where('id', 1)->first();
      $dataSocialMedia = SocalMediaModel::all();
      $dataMitra = MitraModel::all();
      $dataHeroSection = HeroSectionModel::where('id', 1)->first();
      $dataAlamat = AlamatInstitusiModel::all();
      $dataAkreditasiDashboard = AkreditasiSectionModel::where('id', 1)->first();
      $dataNomorTelepon = NomorTeleponModel::all();

        
        $data = [
            'indexActive' => 2,
            'admin' => $admin,
            'dataInstitusi' => $dataInstitusi,
            'socialMedia' => $dataSocialMedia,
            'dataHeroSection' => $dataHeroSection,
            'dataAlamat' => $dataAlamat,
            'dataAkreditasiDashboard' => $dataAkreditasiDashboard,
            'dataMitra' => $dataMitra,
            'dataNomorTelepon' => $dataNomorTelepon,
        ];

        return view('admin-panel.sub_beasiswa_panel.index', $data);
    }

public function store(Request $request)
{
    // Validasi form
    $validator = Validator::make($request->all(), [
        'tambah_judul_beasiswa' => 'required|string|max:255',
        'tambah_deskripsi_beasiswa' => 'required|string',
        'tambah_gambar_beasiswa' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'tambah_file_beasiswa' => 'required|mimes:pdf|max:2048',
    ]);

    // Jika validasi gagal, kembalikan respon dengan pesan kesalahan
    if ($validator->fails()) {
        return redirect()->route('admin.beasiswa.index')
            ->withErrors($validator)
            ->withInput();
    }

    // Upload gambar dan file
    $gambarPath = $request->file('tambah_gambar_beasiswa')->store('public/beasiswa');
    $filePath = $request->file('tambah_file_beasiswa')->store('public/beasiswa');

    // Simpan data beasiswa ke dalam basis data
    Beasiswa::create([
        'judul' => $request->input('tambah_judul_beasiswa'),
        'deskripsi' => $request->input('tambah_deskripsi_beasiswa'),
        'gambar' => $gambarPath,
        'file' => $filePath,
    ]);

    // Redirect ke halaman sebelumnya dengan pesan sukses
    return redirect()->route('admin.beasiswa.index')->with('success', 'Beasiswa berhasil ditambahkan');
}
}
