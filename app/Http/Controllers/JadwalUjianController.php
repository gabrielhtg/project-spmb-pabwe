<?php

namespace App\Http\Controllers;

use App\Models\JadwalUjianModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JadwalUjianController extends Controller
{
    public function addJadwalUjian (Request $request) {
        $username = Auth::user()->username;

        JadwalUjianModel::create([
            'jalur_ujian' => $request->jalur_ujian,
            'tahun_akademik' => $request->tahun_akademik,
            'deskripsi' => $request->deskripsi,
            'created_at' => now(),
            'updated_at' => now(),
            'created_by' => $username,
            'updated_by' => $username,
        ]);

        return redirect()->route('admisi-panel');
    }

    public function removeJadwalUjian (Request $request) {
        JadwalUjianModel::where('id', $request->id)->first()->delete();

        return redirect()->back();
    }

    public function editJadwalUjian (Request $request) {
        $username = Auth::user()->username;

        $dataJadwalUjian = JadwalUjianModel::where('id', $request->id)->first();

        $dataJadwalUjian->jalur_ujian = $request->jalurUjian;
        $dataJadwalUjian->tahun_akademik = $request->tahunAkademik;
        $dataJadwalUjian->deskripsi = $request->deskripsi;
        $dataJadwalUjian->updated_by = $username;
        $dataJadwalUjian->updated_at = now();

        $dataJadwalUjian->update();

        return redirect()->back();
    }
}
