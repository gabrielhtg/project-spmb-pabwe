<?php

namespace App\Http\Controllers;

use App\Models\DropdownAdmisiModel;
use Illuminate\Http\Request;

class DropdownAdmisiController extends Controller
{
    public function addDropdown(Request $request) {
        // Validasi input
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
            'jalur' => 'required'
        ], [
            'judul.required' => 'Judul harus diisi',
            'judul.max' => 'Judul tidak boleh melebihi 255 karakter',
            'isi.required' => 'Isi harus diisi',
            'jalur.required' => 'Jalur harus diisi'
        ]);
    
        // Membuat DropdownAdmisiModel jika validasi sukses
        try {
            DropdownAdmisiModel::create([
                'judul' => $validatedData['judul'],
                'isi' => $validatedData['isi'],
                'jalur' => $validatedData['jalur']
            ]);
    
            // Jika berhasil, tambahkan pesan sukses ke dalam session
            return redirect()->back()->with('success', 'Data berhasil ditambahkan');
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, kembalikan ke halaman sebelumnya dengan pesan error
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
        }
    }
    

    public function editDropdown(Request $request) {
        // Validasi input
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
        ], [
            'judul.required' => 'Judul harus diisi',
            'judul.max' => 'Judul tidak boleh melebihi 255 karakter',
            'isi.required' => 'Isi harus diisi',
        ]);
    
        try {
            // Ambil data dropdown yang akan diedit
            $dropdown = DropdownAdmisiModel::find($request->id);
    
            if (!$dropdown) {
                return redirect()->back()->with('error', 'Data tidak ditemukan');
            }
    
            // Update data dropdown
            $dropdown->judul = $validatedData['judul'];
            $dropdown->isi = $validatedData['isi'];
            $dropdown->save();
    
            // Jika berhasil, tambahkan pesan sukses ke dalam session
            return redirect()->back()->with('success', 'Data berhasil diperbarui');
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, kembalikan ke halaman sebelumnya dengan pesan error
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
        }
    }
    

    public function deleteDropdown(Request $request) {
        try {
            $dropdown = DropdownAdmisiModel::find($request->id);
    
            if (!$dropdown) {
                return redirect()->back()->with('error', 'Data tidak ditemukan');
            }
    
            $dropdown->delete();
    
            return redirect()->back()->with('success', 'Data berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    
}
