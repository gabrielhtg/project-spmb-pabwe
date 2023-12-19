<?php

namespace App\Http\Controllers;

use App\Models\JadwalUjianModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JadwalUjianController extends Controller
{
    public function addJadwalUjian(Request $request) {
        // Validasi input
        $validatedData = $request->validate([
            'jalur_ujian' => 'required',
            'tahun_akademik' => 'required',
            'deskripsi' => 'required',
        ], [
            'jalur_ujian.required' => 'Jalur ujian harus diisi',
            'tahun_akademik.required' => 'Tahun akademik harus diisi',
            'deskripsi.required' => 'Deskripsi harus diisi',
        ]);
    
        try {
            // Dapatkan username dari pengguna yang sedang login
            $username = Auth::user()->username;
    
            // Buat JadwalUjianModel jika validasi sukses
            JadwalUjianModel::create([
                'jalur_ujian' => $validatedData['jalur_ujian'],
                'tahun_akademik' => $validatedData['tahun_akademik'],
                'deskripsi' => $validatedData['deskripsi'],
                'created_at' => now(),
                'updated_at' => now(),
                'created_by' => $username,
                'updated_by' => $username,
            ]);
    
            // Jika berhasil, tambahkan pesan sukses ke dalam session
            return redirect()->route('admisi-panel')->with('success', 'Jadwal ujian berhasil ditambahkan');
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, kembalikan ke halaman sebelumnya dengan pesan error
            return redirect()->back()->withErrors('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
        }
    }
    

    public function removeJadwalUjian(Request $request) {
        try {
            $jadwalUjian = JadwalUjianModel::find($request->id);
    
            if (!$jadwalUjian) {
                return redirect()->back()->with('error', 'Data tidak ditemukan');
            }
    
            $jadwalUjian->delete();
    
            return redirect()->back()->with('success', 'Data jadwal ujian berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    
    public function editJadwalUjian(Request $request) {
        // Validasi input
        $validatedData = $request->validate([
            'jalurUjian' => 'required',
            'tahunAkademik' => 'required',
            'deskripsi' => 'required',
        ], [
            'jalurUjian.required' => 'Jalur ujian harus diisi',
            'tahunAkademik.required' => 'Tahun akademik harus diisi',
            'deskripsi.required' => 'Deskripsi harus diisi',
        ]);
    
        try {
            $username = Auth::user()->username;
    
            $dataJadwalUjian = JadwalUjianModel::find($request->id);
    
            if (!$dataJadwalUjian) {
                return redirect()->back()->with('error', 'Data tidak ditemukan');
            }
    
            // Update data jika validasi sukses
            $dataJadwalUjian->jalur_ujian = $validatedData['jalurUjian'];
            $dataJadwalUjian->tahun_akademik = $validatedData['tahunAkademik'];
            $dataJadwalUjian->deskripsi = $validatedData['deskripsi'];
            $dataJadwalUjian->updated_by = $username;
            $dataJadwalUjian->updated_at = now();
            $dataJadwalUjian->save();
    
            // Jika berhasil, tambahkan pesan sukses ke dalam session
            return redirect()->back()->with('success', 'Data jadwal ujian berhasil diperbarui');
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, kembalikan ke halaman sebelumnya dengan pesan error
            return redirect()->back()->withErrors('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
        }
    }
    
}
