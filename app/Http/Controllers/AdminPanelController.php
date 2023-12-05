<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\data_institusi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminPanelController extends Controller
{
    public function getAdminPanel () {
        $admin = Auth::user();
        $dataInstitusi = data_institusi::where('id', 1)->first();

        $data = [
            'indexActive' => 0,
            'admin' => $admin,
            'dataInstitusi' => $dataInstitusi
        ];
        return view ('admin-panel.adminpanel', $data);
    }

    public function postAdminPanel (Request $request) {
        $validator = Validator::make($request->all(), [
            'input_nama_institusi' => 'required|exists:data_institusi',
        ]);

        $admin = Auth::user();
        $dataInstitusi = data_institusi::where('id', 1)->first();

        $dataInstitusi->nama_institusi = $request->input_nama_institusi;
        $dataInstitusi->singkatan_nama_institusi = $request->input_singkatan_nama_institusi;
        $dataInstitusi->akreditasi_singkat = $request->input_akreditasi_institusi_singkat;
        $dataInstitusi->akreditasi_lengkap = $request->input_akreditasi_institusi_lengkap;
        $dataInstitusi->jargon = $request->input_jargon_institusi;
        $dataInstitusi->jumlah_dosen = $request->input_jumlah_dosen;
        $dataInstitusi->jumlah_mahasiswa = $request->input_jumlah_mahasiswa;
        $dataInstitusi->jumlah_alumni = $request->input_jumlah_alumni;

//        if ($request->input_logo_institusi) {
//            $dataInstitusi->logo_institusi = $request->input_logo_institusi;
//        }
//
//        if ($request->input_sertifikat_akreditasi) {
//            $dataInstitusi->gambar_sertifikat_akreditasi = $request->input_sertifikat_akreditasi;
//        }

        $dataInstitusi->update();

        $data = [
            'indexActive' => 0,
            'admin' => $admin,
            'dataInstitusi' => $dataInstitusi
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

    public function getEditProfile () {
        return view ('admin-panel.edit_profile');
    }

    public function getAdmisiPanel () {
        $admin = Auth::user();
        $data = [
            'indexActive' => 2,
            'admin' => $admin
        ];
        return view('admin-panel.admisi_panel', $data);
    }

    public function getProgramPanel () {
        $admin = Auth::user();

        $data = [
            'indexActive' => 3,
            'admin' => $admin
        ];
        return view('admin-panel.program_panel', $data);
    }
}
