<?php

namespace App\Http\Controllers;

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
use App\Models\data_institusi;
use App\Models\Pengumuman;
use App\models\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class PengumumanController extends Controller
{
    public function getviewPengumuman(Request $request)
    {
        // Ambil query pencarian
        $keywords = $request->query("keywords") ?? null;
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $dataAlamat = AlamatInstitusiModel::all();
        $dataSosmed = SocalMediaModel::all();
        $dataHeaderAdmisi = ModelHeaderAdmisi::where('id', 1)->first();
        $dataNomorTelepon = NomorTeleponModel::all();
        $dataEmail = EmailModel::all();

        // Mulai query dari model Pengumuman
        $query = Pengumuman::orderBy('tanggalPengumuman', 'desc');

        // Jika terdapat keyword pencarian, tambahkan kondisi WHERE
        if ($keywords !== null) {
            $query->where("judulPengumuman", "LIKE", "%$keywords%")
                  ->orWhere("kategoriPengumuman", "LIKE", "%$keywords%");
        } 

        // Eksekusi query dan terapkan paginasi
        $pengumuman = $query->paginate(10);

        $data = [
            'dataInstitusi' => $dataInstitusi,
            'dataSosmed' => $dataSosmed,
            'dataAlamat' => $dataAlamat,
            'dataHeaderAdmisi' => $dataHeaderAdmisi,
            'dataNomorTelepon' => $dataNomorTelepon,
            'dataEmail' => $dataEmail,
            'pengumuman' => $pengumuman,
            'noSearchResults' => $pengumuman->isEmpty(),
        ];

        return view("pengumuman.pengumuman", $data);
    }


    public function postPengumuman(Request $request)
    {
        $request->validate([
            'kategoriPengumuman' => 'required',
            'judulPengumuman' => 'required',
            'filePengumuman' => 'required|mimes:pdf|max:2048',
            'tanggalPengumuman' => 'required',
        ], [
            'required' => 'Kolom :attribute wajib diisi.',
            'filePengumuman.required' => 'File pengumuman wajib diunggah.',
            'filePengumuman.mimes' => 'File pengumuman harus dalam format PDF.',
            'filePengumuman.max' => 'Ukuran file tidak boleh lebih dari 2 MB.',
        ]);
    
        // Ambil ekstensi file gambar
        $fileExtension = $request->filePengumuman->extension();

        // Ubah karakter selain huruf, angka, dan underscore dalam judulPengumuman menjadi _
        $judulPengumumanTanpaSpasi = preg_replace('/[^\w]/', '_', $request->judulPengumuman);
        
        // Nama file gabungan dengan ekstensi
        $namaFile = $judulPengumumanTanpaSpasi . '.' . $fileExtension;

        // Pindahkan file gambar ke direktori yang ditentukan
        $request->filePengumuman->move(public_path('assets/file_Pengumuman'), $namaFile);

        // Buat instance Fasilitas
        $pengumuman = new Pengumuman;

        // Set nilai atribut fasilitas
        $pengumuman->kategoriPengumuman = $request->kategoriPengumuman;
        $pengumuman->judulPengumuman = $request->judulPengumuman;
        $pengumuman->filePengumuman = $namaFile;
        $pengumuman->tanggalPengumuman = $request->tanggalPengumuman;

        // Simpan data ke database
        $pengumuman->save();

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->route('pengumuman-panel');
    }

    public function getPengumumanPanel()
    {
        $admin = Auth::user();
        $pengumuman = Pengumuman::orderBy('created_at', 'desc')->get();
        $data = [
            'indexActive' => 2,
            'admin' => $admin,
            'pengumuman' => $pengumuman,
        ];
        return view('admin-panel.pengumumanpanel', $data);
    }

    public function destroy($id)
    {
        $admin = Auth::user();
        $pengumuman = Pengumuman::find($id);

        if ($pengumuman) {
            $pengumuman->delete();
        }

        // Redirect back to the pengumuman panel with updated data
        return $this->getPengumumanPanel();
    }

}