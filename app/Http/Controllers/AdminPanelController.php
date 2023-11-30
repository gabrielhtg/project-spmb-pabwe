<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPanelController extends Controller
{
    public function getAdminPanel () {
        $admin = Auth::user();

        $data = [
            'indexActive' => 0,
            'admin' => $admin,
        ];
        return view ('admin-panel.adminpanel', $data);
    }

    public function getDashboardPanel () {
        $admin = Auth::user();
        $data = [
            'indexActive' => 2,
            'admin' => $admin
        ];
        return view('admin-panel.dashboard_panel', $data);
    }

    public function getFasilitasAdmin()
    {
        $admin = Auth::user();
        $fasilitas = Fasilitas::orderBy('created_at', 'desc')->get();
        $data = [
            'indexActive' => 2,
            'admin' => $admin,
            'fasilitas' => $fasilitas,
        ];
        return view('admin-panel.view_fasilitas_lists', $data);
    }

    public function getAddFasilitas()
    {
        $admin = Auth::user();
        $data = [
            'indexActive' => 2,
            'admin' => $admin
        ];
        return view('admin-panel.sub_admin_panel.fasilitasAddpanel', $data);
    }

    public function postFasilitas(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'nama_fasilitas' => 'required',
            'deskripsi_fasilitas' => 'required',
            'nama_file' => 'required',
            'file_gambar' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);
    
        // Ambil ekstensi file gambar
    $fileExtension = $request->file_gambar->extension();

    // Nama file gabungan dengan ekstensi
    $namaGambar = $request->nama_file . '.' . $fileExtension;

    // Pindahkan file gambar ke direktori yang ditentukan
    $request->file_gambar->move(public_path('assets/img/fasilitas'), $namaGambar);

    // Buat instance Fasilitas
    $fasilitas = new Fasilitas;

    // Set nilai atribut fasilitas
    $fasilitas->kategori = $request->kategori;
    $fasilitas->nama_fasilitas = $request->nama_fasilitas;
    $fasilitas->deskripsi_fasilitas = $request->deskripsi_fasilitas;
    $fasilitas->nama_file = $request->nama_file;
    $fasilitas->file_gambar = $namaGambar;

    // Simpan data ke database
    $fasilitas->save();

    // Redirect atau berikan respons sesuai kebutuhan
    return redirect()->route('fasilitas-admin');
    }

    public function destroy($id)
    {
        $admin = Auth::user();
        $fasilitas = Fasilitas::find($id);

        if ($fasilitas) {
            $fasilitas->delete();
        }
    
        $data = [
            'indexActive' => 2,
            'admin' => $admin,
            'fasilitas' => $fasilitas,
        ];

        return view('admin-panel.sub_admin_panel.fasilitasAddpanel', $data);
    }


    public function getEditProfile () {
        return view ('admin-panel.edit_profile');

    }

    public function getFasilitasPanel()
    {
        $admin = Auth::user();
        $data = [
            'indexActive' => 2,
            'admin' => $admin
        ];
        return view('admin-panel.fasilitaspanel', $data);
    }

    public function getPengumumanPanel()
    {
        $admin = Auth::user();
        $data = [
            'indexActive' => 2,
            'admin' => $admin
        ];
        return view('admin-panel.pengumumanpanel', $data);
    }
}
