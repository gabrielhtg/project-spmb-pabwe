<?php

namespace App\Http\Controllers;

use App\Models\data_institusi;
use App\Models\HeroSectionModel;
use App\Models\SocalMediaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminPanelController extends Controller
{
    public function getAdminPanel()
    {
        $admin = Auth::user();
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $dataSocialMedia = SocalMediaModel::all();
        $dataHeroSection = HeroSectionModel::where('id', 1)->first();

        $data = [
            'indexActive' => 0,
            'admin' => $admin,
            'dataInstitusi' => $dataInstitusi,
            'socialMedia' => $dataSocialMedia,
            'dataHeroSection' => $dataHeroSection
        ];

        return view('admin-panel.adminpanel', $data);
    }

    public function ubahDataInstitut(Request $request)
    {
        $dataInstitusi = data_institusi::where('id', 1)->first();

        if ($request->input_logo_institusi) {
            $request->validate([
                'input_logo_institusi' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            ]);

            // Mengambil file yang sudah divalidasi dari request
            $photo = $request->file('input_logo_institusi');

            // Membuat nama unik untuk file yang diunggah
            $filename = time() . '_logo_institusi.' . $photo->getClientOriginalExtension();

            // Menentukan direktori tempat penyimpanan file di dalam direktori 'public'
            $directory = public_path('assets/img/dashboard/');

            //Pindahkan file ke direktori yang diinginkan
            $photo->move($directory, $filename);

            // Menghapus photo lama jika ada
            if ($dataInstitusi->logo_institusi && file_exists($dataInstitusi->logo_institusi)) {
                unlink($dataInstitusi->logo_institusi);
            }

            $dataInstitusi->logo_institusi = 'assets/img/dashboard/' . $filename;
        }

        $dataInstitusi->nama_institusi = $request->input_nama_institusi;
        $dataInstitusi->singkatan_nama_institusi = $request->input_singkatan_nama_institusi;
        $dataInstitusi->akreditasi_singkat = $request->input_akreditasi_institusi_singkat;
        $dataInstitusi->akreditasi_lengkap = $request->input_akreditasi_institusi_lengkap;
        $dataInstitusi->jargon = $request->input_jargon_institusi;
        $dataInstitusi->jumlah_dosen = $request->input_jumlah_dosen;
        $dataInstitusi->jumlah_mahasiswa = $request->input_jumlah_mahasiswa;
        $dataInstitusi->jumlah_alumni = $request->input_jumlah_alumni;

//
//        if ($request->input_sertifikat_akreditasi) {
//            $dataInstitusi->gambar_sertifikat_akreditasi = $request->input_sertifikat_akreditasi;
//        }

        $dataInstitusi->update();

        return redirect()->route('admin-panel');
    }

    public function getEditProfile()
    {
        $admin = Auth::user();

        $data = [
            'admin' => $admin,
        ];

        return view('admin-panel.edit_profile', $data);
    }

    public function addSocialMedia(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'input_nama_institusi' => 'required|exists:data_institusi',
        ]);

        SocalMediaModel::create([
            'nama' => $request->input_nama_social_media,
            'link' => $request->input_link_social_media,
            'icon' => $request->input_logo_social_media
        ]);
        return redirect('admin-panel');
    }

    public function removeSocialMedia(Request $request)
    {
        SocalMediaModel::where('id', $request->id)->first()->delete();
    return redirect()->back();
    }

    public function updateHeroSection(Request $request)
    {
        $dataHero = HeroSectionModel::where('id', 1)->first();

        $dataHero->header = $request->input_judul_header;
        $dataHero->paragraph = $request->input_deskripsi_header;

        if ($request->input_bg_hero) {
            $request->validate([
                'input_bg_hero' => 'image|mimes:jpeg,png,jpg|max:1024',
            ]);

            // Mengambil file yang sudah divalidasi dari request
            $photo = $request->file('input_bg_hero');

            // Membuat nama unik untuk file yang diunggah
            $filename = time() . '_hero.' . $photo->getClientOriginalExtension();

            // Menentukan direktori tempat penyimpanan file di dalam direktori 'public'
            $directory = public_path('assets/img/dashboard/');

            //Pindahkan file ke direktori yang diinginkan
            $photo->move($directory, $filename);

            // Menghapus photo lama jika ada
            if ($dataHero->bg_image && file_exists($dataHero->bg_image)) {
                unlink($dataHero->bg_image);
            }

            $dataHero->bg_image = 'assets/img/dashboard/' . $filename;
        }

        $dataHero->update();

        return redirect()->back();

    }

    public function getAddAdminView() {
        $admin = Auth::user();

        $data = [
            'admin' => $admin,
        ];

        return view('admin-panel.add_admin', $data);
    }
}
