<?php

namespace App\Http\Controllers;


use App\Models\AkreditasiInstitutiModel;
use App\Models\InfografisModel;
use App\Models\MbkmModel;
use App\Models\ModelHeaderAdmisi;
use App\Models\JalurPendaftaranModel;
use App\Models\Lokasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdmisiController extends Controller
{
    public function setHeader (Request $request) {
        $modelAdmisi = ModelHeaderAdmisi::where('id', 1)->first();

        if ($request->header_admisi) {
            $this->validate($request, [
                'header_admisi' => 'image|mimes:jpeg,png,jpg|max:1024',
            ]);

            $photo = $request->file('header_admisi');

            $filename = 'header_admisi.' . $photo->getClientOriginalExtension();

            // Menentukan direktori tempat penyimpanan file di dalam direktori 'public'
            $directory = public_path('assets/img/admisi/');

            // Menghapus photo lama jika ada
            if ($modelAdmisi->letak_foto && file_exists($modelAdmisi->letak_foto)) {
                unlink($modelAdmisi->letak_foto);
            }

            //Pindahkan file ke direktori yang diinginkan
            $photo->move($directory, $filename);

            $modelAdmisi->letak_foto = 'assets/img/admisi/' . $filename;

            $modelAdmisi->update();

            return redirect()->route('admisi-panel');
        }


        return redirect()->route('admisi-panel');
    }

    public function addMbkmNonKompetisi(Request $request) {
        MbkmModel::create([
            'jenis_kegiatan' => 'Non Kompetisi',
            'jumlah_sks' => $request->jumlah_sks,
            'potongan_spp' => $request->potongan_spp,
            'updated_by' => Auth::user()->username,
            'created_by' => Auth::user()->username,
            'updated_at' => now(),
            'created_at' => now()
        ]);

        return redirect()->route('admisi-panel');
    }

    public function addMbkmKompetisi(Request $request) {
        MbkmModel::create([
            'jenis_kegiatan' => 'Kompetisi',
            'jumlah_sks' => $request->jumlah_sks,
            'potongan_spp' => $request->potongan_spp,
            'updated_by' => Auth::user()->username,
            'created_by' => Auth::user()->username,
            'updated_at' => now(),
            'created_at' => now()
        ]);

        return redirect()->route('admisi-panel');
    }

    public function removeMbkm (Request $request) {
        MbkmModel::where('id', $request->id)->first()->delete();

        return redirect()->route('admisi-panel');
    }

    public function addJalur(Request $request)
    {

        JalurPendaftaranModel::create([
            'jalurPendaftaran' => $request->inputJalurPendaftaran,
            'desk_pers_umum' => $request->input_desk_pers_umum,
            'icon' => $request->input_logo_social_media,
            'created_by' => Auth::user()->username,
            'updated_by' => Auth::user()->username,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect('admisi-panel');
    }

    public function editJalur (Request $request) {
        $jalur = JalurPendaftaranModel::where('id', $request->id)->first();

        $jalur->jalurPendaftaran = $request->inputJalurPendaftaran;
        $jalur->desk_pers_umum = $request->input_desk_pers_umum;

        $jalur->updated_by = Auth::user()->username;

        $jalur->update();

        return redirect()->route('admisi-panel');
    }

    public function removeJalur(Request $request)
    {
        JalurPendaftaranModel::where('id', $request->id)->first()->delete();
    return redirect()->back();
    }

    public function addInfografisPmdk (Request $request) {
//        $request->validate([
//            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:1024',
//            'nomor_urut' => 'required|min:0'
//        ]);
        // Mengambil file yang sudah divalidasi dari request
        $photo = $request->file('gambar');

        // Membuat nama unik untuk file yang diunggah
        $filename = time() . '_infografis.' . $photo->getClientOriginalExtension();

        // Menentukan direktori tempat penyimpanan file di dalam direktori 'public'
        $directory = public_path('assets/img/');

        //Pindahkan file ke direktori yang diinginkan
        $photo->move($directory, $filename);

        InfografisModel::create([
            'gambar' => 'assets/img/' . $filename,
            'jalur' => 'PMDK',
            'nomor_urut' => $request->nomor_urut
        ]);

        return redirect()->route('admisi-panel');
    }

    // KELOMPOK 6
    public function postLokasiTes(Request $request)
    {
        $request->validate([
            'lokasiTes' => 'required',
            'alamatLokasi' => 'required',
        ]);

        $lokasi = new Lokasi;

        $lokasi->lokasiTes = $request->lokasiTes;
        $lokasi->alamatLokasi = $request->alamatLokasi;

        $lokasi->save();

        return redirect()->route('admisi-panel');
    }
}
