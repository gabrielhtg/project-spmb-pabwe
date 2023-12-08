<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use App\Models\AkreditasiInstitutiModel;
use App\Models\AkreditasiSectionModel;
use App\Models\AlamatInstitusiModel;
use App\Models\data_institusi;
use App\Models\EmailModel;
use App\Models\HeroSectionModel;
use App\Models\InfografisModel;
use App\Models\MbkmModel;
use App\Models\ModelHeaderAdmisi;
use App\Models\NomorTeleponModel;
use App\Models\SocalMediaModel;
use App\Models\JalurPendaftaranModel;
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
        $dataAlamat = AlamatInstitusiModel::all();
        $dataAkreditasiDashboard = AkreditasiSectionModel::where('id', 1)->first();
        $dataNomorTelepon = NomorTeleponModel::all();
        $dataEmail = EmailModel::all();
        $dataAkreditasiInstitusi = AkreditasiInstitutiModel::all()->sortByDesc('tahun_akreditasi');

        $data = [
            'indexActive' => 0,
            'admin' => $admin,
            'dataInstitusi' => $dataInstitusi,
            'socialMedia' => $dataSocialMedia,
            'dataHeroSection' => $dataHeroSection,
            'dataAlamat' => $dataAlamat,
            'dataAkreditasiDashboard' => $dataAkreditasiDashboard,
            'dataNomorTelepon' => $dataNomorTelepon,
            'dataEmail' => $dataEmail,
            'dataAkreditasiInstitusi' => $dataAkreditasiInstitusi
        ];

        return view('admin-panel.adminpanel', $data);
    }

    public function ubahDataInstitut(Request $request)
    {
        $dataInstitusi = data_institusi::where('id', 1)->first();

        if ($request->input_logo_institusi) {
            $request->validate([
                'input_logo_institusi' => 'required|image|mimes:jpeg,png,jpg|max:1024',
                'nama_institusi' => 'required|max:30|string',
                'input_singkatan_nama_institusi' => 'required|max:10|string',
                'input_jargon_institusi' => 'required|string|max:50',
                'input_jumlah_dosen' => 'required',
                'input_jumlah_mahasiswa' => 'required',
                'input_jumlah_alumni' => 'required'
            ]);
        }

        else {
            $request->validate([
                'nama_institusi' => 'required|max:30|string',
                'input_singkatan_nama_institusi' => 'required|max:10|string',
                'input_jargon_institusi' => 'required|string|max:50',
                'input_jumlah_dosen' => 'required',
                'input_jumlah_mahasiswa' => 'required',
                'input_jumlah_alumni' => 'required'
            ]);
        }

        if ($request->input_logo_institusi) {
            $photo = $request->file('input_logo_institusi');

            $filename = 'logo_institusi.' . $photo->getClientOriginalExtension();

            $directory = public_path('assets/img/dashboard/');

            $photo->move($directory, $filename);

            if ($dataInstitusi->logo_institusi && file_exists($dataInstitusi->logo_institusi)) {
                unlink($dataInstitusi->logo_institusi);
            }

            $dataInstitusi->logo_institusi = 'assets/img/dashboard/' . $filename;
        }



        $dataInstitusi->nama_institusi = $request->nama_institusi;
        $dataInstitusi->singkatan_nama_institusi = $request->input_singkatan_nama_institusi;
        $dataInstitusi->akreditasi = $request->input_akreditasi;
        $dataInstitusi->jargon = $request->input_jargon_institusi;
        $dataInstitusi->jumlah_dosen = $request->input_jumlah_dosen;
        $dataInstitusi->jumlah_mahasiswa = $request->input_jumlah_mahasiswa;
        $dataInstitusi->jumlah_alumni = $request->input_jumlah_alumni;


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
            'icon' => $request->input_logo_social_media,
            'created_by' => Auth::user()->username,
            'updated_by' => Auth::user()->username,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect('admin-panel');
    }

    public function updateSocialMedia (Request $request) {
        $socialMedia = SocalMediaModel::where('id', $request->id)->first();

        $socialMedia->nama = $request->input_nama_socialmedia;
        $socialMedia->link = $request->input_link;
        $socialMedia->icon = $request->input_icon;

        $socialMedia->updated_by = Auth::user()->username;

        $socialMedia->update();

        return redirect()->route('admin-panel');
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
        $admins = AdminModel::all();

        $data = [
            'admin' => $admin,
            'admins' => $admins,
        ];

        return view('admin-panel.add_admin', $data);
    }

    public function addAlamat (Request $request) {
        AlamatInstitusiModel::create([
            'nama' => $request->input_nama_alamat,
            'alamat' => $request->input_alamat,
            'created_by' => Auth::user()->username
        ]);

        return redirect()->route('admin-panel');
    }

    public function editAlamat (Request $request) {
        $username = Auth::user()->username;
        $alamat = AlamatInstitusiModel::where('id', $request->id)->first();

        $alamat-> nama = $request->input_nama_alamat;
        $alamat-> alamat = $request->input_alamat;
        $alamat->updated_at = now();
        $alamat->updated_by = $username;

        dump([
            $alamat-> nama,
            $alamat-> alamat,
            $alamat->updated_at,
            $alamat->updated_by,
        ]);

        $alamat->update();

        return redirect(null, 200)->back();
    }

    public function removeAlamat(Request $request)
    {
        AlamatInstitusiModel::where('id', $request->id)->first()->delete();
        return redirect()->back();
    }

    public function getAdmisiPanel () {
        $admin = Auth::user();
        $dataHeaderAdmisi = ModelHeaderAdmisi::where('id', 1)->first();
        $dataNonKompetisi  = MbkmModel::where('jenis_kegiatan', 'Non Kompetisi')->get();
        $dataKompetisi =  MbkmModel::where('jenis_kegiatan', 'Kompetisi')->get();
        $dataInfografis = InfografisModel::all();
        $jalurMasuk = [];

        foreach ($dataInfografis as $e) {
            if (!in_array($e->jalur, $jalurMasuk)) {
                $jalurMasuk[] = $e->jalur;
            }
        }

        $dataInfografisJalurMasuk = [];

        foreach ($jalurMasuk as $e) {
            $dataInfografisJalurMasuk[] = InfografisModel::where('jalur', $e)->get();
        }

        $data = [
            'indexActive' => 1,
            'admin' => $admin,
            'dataHeaderAdmisi' => $dataHeaderAdmisi,
            'dataNonKompetisi' => $dataNonKompetisi,
            'dataKompetisi'=>$dataKompetisi,
            'dataInfografis' => $dataInfografisJalurMasuk
        ];
        return view('admin-panel.admisi_panel', $data);
    }

    public function addAkreditasiInstitusi (Request $request) {
        if ($request->sertifikat_akreditasi) {
            $request->validate([
                'akreditasi' => 'required',
                'lembaga_akreditasi' => 'required|string',
                'sertifikat_akreditasi' => 'required|image|mimes:jpeg,png,jpg|max:1024',
                'tahun_akreditasi' => 'required',
            ]);

            // Mengambil file yang sudah divalidasi dari request
            $photo = $request->file('sertifikat_akreditasi');

            // Membuat nama unik untuk file yang diunggah
            $filename = time() . '_sertifikat_institusi.' . $photo->getClientOriginalExtension();

            // Menentukan direktori tempat penyimpanan file di dalam direktori 'public'
            $directory = public_path('assets/img/dashboard/');

            //Pindahkan file ke direktori yang diinginkan
            $photo->move($directory, $filename);

            AkreditasiInstitutiModel::create([
                'akreditasi' => $request->akreditasi,
                'lembaga_akreditasi' => $request->lembaga_akreditasi,
                'sertifikat_akreditasi' => 'assets/img/dashboard/' . $filename,
                'tahun_akreditasi' => $request->tahun_akreditasi,
            ]);
        }

        return redirect()->route('admin-panel');
    }
}
