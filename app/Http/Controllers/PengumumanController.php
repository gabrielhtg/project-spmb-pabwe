<?php

namespace App\Http\Controllers;

use App\Models\data_institusi;
use App\Models\Pengumuman;
use App\models\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PengumumanController extends Controller
{
    public function getviewPengumuman()
    {
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $pengumuman = Pengumuman::orderBy('tanggalPengumuman', 'desc')->get();
        $data = [
            'dataInstitusi' => $dataInstitusi,
            'pengumuman' => $pengumuman,
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
        ]);
    
        // Ambil ekstensi file gambar
        $fileExtension = $request->filePengumuman->extension();

        // Nama file gabungan dengan ekstensi
        $namaFile = $request->judulPengumuman . '.' . $fileExtension;

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

    public function destroy($id)
    {
        $admin = Auth::user();
        $pengumuman = Pengumuman::find($id);

        if ($pengumuman) {
            $pengumuman->delete();
        }
    
        $data = [
            'indexActive' => 2,
            'admin' => $admin,
            'pengumuman' => $pengumuman,
        ];

        return view('admin-panel.sub_admin_panel.pengumumanAddpanel', $data);
    }

}