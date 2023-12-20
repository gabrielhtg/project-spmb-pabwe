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
use App\Models\AkreditasiInstitutiModel;
use App\Models\EmailModel;
use App\Models\InfografisModel;
use App\Models\JadwalUjianModel;
use App\Models\NomorTeleponModel;
use App\Models\Lokasi;
use App\Models\JenisTes;
use App\Models\Testimoni;
use App\Models\MbkmModel;

class BeasiswaController extends Controller
{
    public function index()
{
    $admin = Auth::user();
    $dataInstitusi = data_institusi::where('id', 1)->first();
    $dataMitra = MitraModel::all();
    $dataAkreditasiDashboard = AkreditasiSectionModel::where('id', 1)->first();
    $dataHeroSection = HeroSectionModel::where('id', 1)->first();
    $dataSosmed = SocalMediaModel::all();
    $dataAlamat = AlamatInstitusiModel::all();
    $akreditasiDashboard = AkreditasiSectionModel::where('id', 1)->first();
    $dataEmail = EmailModel::all();
    $dataAkreditasiInstitusi = AkreditasiInstitutiModel::all()->sortByDesc('tahun_akreditasi')->first();
    // Ambil data Beasiswa dari tabel
    $beasiswa = Beasiswa::all();
    $faq = Faq::orderBy('created_at', 'desc')->get();
    $dataNomorTelepon = NomorTeleponModel::all();

    // dd($dataNomorTelepon);

    $data = [
        'indexActive' => 8,
        'admin' => $admin,
        'dataAkreditasiDashboard' => $dataAkreditasiDashboard,
        'dataMitra' => $dataMitra,
        'beasiswa' => $beasiswa, // Kirim data Beasiswa ke view
        'dataInstitusi' => $dataInstitusi,
        'dataHeroSection' => $dataHeroSection,
        'dataSosmed' => $dataSosmed,
        'dataAlamat' => $dataAlamat,
        'akreditasiDashboard' => $akreditasiDashboard,
        'dataEmail' => $dataEmail,
        'dataAkreditasiInstitusi' => $dataAkreditasiInstitusi,
        'dataTestimoni' => Testimoni::orderBy('created_at', 'desc')->take(8)->get(),
        'faq' => $faq,
        'dataNomorTelepon' => $dataNomorTelepon,
    ];

    return view('admin-panel.sub_beasiswa_panel.index', $data);
}

public function getviewBeasiswa()
{
    $admin = Auth::user();
    $dataInstitusi = data_institusi::where('id', 1)->first();
    $dataSocialMedia = SocalMediaModel::all();
    $dataMitra = MitraModel::all();
    $dataHeroSection = HeroSectionModel::where('id', 1)->first();
    $dataAlamat = AlamatInstitusiModel::all();
    $dataAkreditasiDashboard = AkreditasiSectionModel::where('id', 1)->first();
    $dataSosmed = SocalMediaModel::all();
    $dataNomorTelepon = NomorTeleponModel::all();
    $dataEmail = EmailModel::all();

    // Ambil data Beasiswa dari tabel
    $beasiswa = Beasiswa::all();

    $data = [
        'indexActive' => 8,
        'admin' => $admin,
        'dataInstitusi' => $dataInstitusi,
        'socialMedia' => $dataSocialMedia,
        'dataHeroSection' => $dataHeroSection,
        'dataAlamat' => $dataAlamat,
        'dataAkreditasiDashboard' => $dataAkreditasiDashboard,
        'dataMitra' => $dataMitra,
        'beasiswa' => $beasiswa, // Kirim data Beasiswa ke view
        'dataSosmed' => $dataSosmed,
        'dataNomorTelepon' => $dataNomorTelepon,
        'dataEmail' => $dataEmail,
    ];

    return view('beasiswa.beasiswa', $data);
    
}
public function store(Request $request)
{
    $request->validate([
        'tambah_judul_beasiswa' => 'required',
        'tambah_deskripsi_beasiswa' => 'required',
        'tambah_gambar_beasiswa' => 'required|image|max:2048', // Max file size in kilobytes (2 MB)
        'tambah_file_beasiswa' => 'required|mimes:pdf|max:2048', // Max file size in kilobytes (2 MB)
    ]);

    $gambarPath = 'assets/img/beasiswa/img';
    $pdfPath = 'assets/img/beasiswa/pdf';

    $gambarNama = time() . '.' . $request->file('tambah_gambar_beasiswa')->extension();
    $request->file('tambah_gambar_beasiswa')->move(public_path($gambarPath), $gambarNama);

    $pdfNama = time() . '.' . $request->file('tambah_file_beasiswa')->extension();
    $request->file('tambah_file_beasiswa')->move(public_path($pdfPath), $pdfNama);

    Beasiswa::create([
        'judul' => $request->input('tambah_judul_beasiswa'),
        'deskripsi' => $request->input('tambah_deskripsi_beasiswa'),
        'gambar' => $gambarPath . '/' . $gambarNama,
        'file' => $pdfPath . '/' . $pdfNama,
        // Tambahkan kolom lain sesuai kebutuhan
    ]);

    return redirect()->route('admin.beasiswa.index')->with('success', 'Beasiswa berhasil ditambahkan');
}

public function update(Request $request, $id)
{
    $request->validate([
        'edit_judul_beasiswa' => 'required',
        'edit_deskripsi_beasiswa' => 'required',
        'edit_gambar_beasiswa' => 'nullable|image|max:2048', // Max file size in kilobytes (2 MB)
        'edit_file_beasiswa' => 'nullable|mimes:pdf|max:2048', // Max file size in kilobytes (2 MB)
    ]);

    $beasiswa = Beasiswa::find($id);

    $gambarPath = 'assets/img/beasiswa/img';
    $pdfPath = 'assets/img/beasiswa/pdf';

    $beasiswa->judul = $request->input('edit_judul_beasiswa');
    $beasiswa->deskripsi = $request->input('edit_deskripsi_beasiswa');

    // Update gambar jika ada yang diunggah
    if ($request->hasFile('edit_gambar_beasiswa')) {
        $gambarNama = time() . '.' . $request->file('edit_gambar_beasiswa')->extension();
        $request->file('edit_gambar_beasiswa')->move(public_path($gambarPath), $gambarNama);
        $beasiswa->gambar = $gambarPath . '/' . $gambarNama;
    }

    // Update file jika ada yang diunggah
    if ($request->hasFile('edit_file_beasiswa')) {
        $pdfNama = time() . '.' . $request->file('edit_file_beasiswa')->extension();
        $request->file('edit_file_beasiswa')->move(public_path($pdfPath), $pdfNama);
        $beasiswa->file = $pdfPath . '/' . $pdfNama;
    }

    // Tambahkan kolom lain sesuai kebutuhan
    $beasiswa->save();

    return redirect()->route('admin.beasiswa.index')->with('success', 'Beasiswa berhasil diperbarui');
}



public function destroy(string $id)
    {
        $beasiswa = Beasiswa::find($id);

        if (!$beasiswa) {
            return redirect()->route('admin.beasiswa.index')->with('success', 'Gagal menghapus beasiswa');
        }

        // Additional logic (e.g., delete related records) if needed

        $beasiswa->delete();

        return redirect()->route('admin.beasiswa.index')->with('success', 'Beasiswa berhasil dihapus');
    }


}