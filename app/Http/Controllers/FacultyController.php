<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\Employee;
use App\Models\data_institusi;
use App\Models\HeroSectionModel;
use App\Models\SocalMediaModel;
use App\Models\AlamatInstitusiModel;
use App\Models\AkreditasiInstitutiModel;
use App\Models\AkreditasiSectionModel;
use App\Models\NomorTeleponModel;
use App\Models\EmailModel;
use Illuminate\Support\Facades\DB;

use Illuminate\Validation\ValidationException;

        

class FacultyController extends Controller
{

    public function getFakultas(String $id) {
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $faculty = Faculty::where('id', $id)->with('major')->get();
        $employees = Employee::with('major')->get();
        $dataHeroSection = HeroSectionModel::where('id', 1)->first();
        $dataSosmed = SocalMediaModel::all();
        $dataAlamat = AlamatInstitusiModel::all();
        $akreditasiDashboard = AkreditasiSectionModel::where('id', 1)->first();
        $dataNomorTelepon = NomorTeleponModel::all();
        $dataEmail = EmailModel::all();
        $dataAkreditasiInstitusi = AkreditasiInstitutiModel::all()->sortByDesc('tahun_akreditasi')->first();

        $data = [
            'dataInstitusi' => $dataInstitusi,
            'faculties' => $faculty,
            'dataHeroSection' => $dataHeroSection,
            'dataSosmed' => $dataSosmed,
            'dataAlamat' => $dataAlamat,
            'akreditasiDashboard' => $akreditasiDashboard,
            'dataNomorTelepon' => $dataNomorTelepon,
            'dataEmail' => $dataEmail,
            'dataAkreditasiInstitusi' => $dataAkreditasiInstitusi,
            'employees' => $employees,
        ];

        return view('program.fakultas', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255|unique:faculties',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'lokasi' => 'required|max:255',
            'visi' => 'required',
            'misi' => 'required',
        ], [
            'nama.required' => 'Nama Fakultas tidak boleh kosong',
            'nama.unique' => 'Nama Fakultas sudah ada',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'gambar.required' => 'Gambar tidak boleh kosong',
            'gambar.image' => 'File harus berupa gambar',
            'gambar.mimes' => 'Format gambar harus jpeg, png, jpg, atau gif',
            'gambar.max' => 'Ukuran gambar tidak boleh lebih dari 5 MB',
            'lokasi.required' => 'Lokasi tidak boleh kosong',
            'visi.required' => 'Visi tidak boleh kosong',
            'misi.required' => 'Misi tidak boleh kosong',
        ]);

        $extension = $request->file('gambar')->getClientOriginalExtension();
        $gambarPath = $request->nama.'-'.now()->timestamp.'.'.$extension;
        $request->file('gambar')->move(public_path('img/program/faculty/'), $gambarPath);

        $faculty = new Faculty([
            'nama' => $request->get('nama'),
            'deskripsi' => $request->get('deskripsi'),
            'gambar' => $gambarPath,
            'lokasi' => $request->get('lokasi'),
            'visi' => $request->get('visi'),
            'misi' => $request->get('misi'),
        ]);

        $faculty->save();

        return redirect('admin-panel/program')->with('success', 'Fakultas berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $faculty = Faculty::find($id);

        if (!$faculty) {
            return redirect('admin-panel/program')->with('error', 'Faculty not found!');
        }

        $data = [
            'faculty' => $faculty,
        ];

        return view('program.editfakultas', $data);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            // 'kode_fakultas' => 'required|unique:faculties,kode_fakultas,' . $id,
            'nama' => 'required|max:255|unique:faculties,nama,' . $id,
            'deskripsi' => 'required',
            'lokasi' => 'required|max:255',
            'visi' => 'required',
            'misi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $faculty = Faculty::find($id);
    
        if (!$faculty) {
            return redirect('admin-panel/program')->with('error', 'Faculty not found!');
        }
    
        // Simpan nama gambar lama
        $oldGambar = $faculty->gambar;
    
        // Update faculty data
        $faculty->update([
            // 'kode_fakultas' => $request->get('kode_fakultas'),
            'nama' => $request->get('nama'),
            'deskripsi' => $request->get('deskripsi'),
            'lokasi' => $request->get('lokasi'),
            'visi' => $request->get('visi'),
            'misi' => $request->get('misi'),
        ],[
            // 'kode_fakultas.required' => 'Kode Fakultas tidak boleh kosong',
            'kode_fakultas.unique' => 'Kode Fakultas sudah ada',
            'nama.required' => 'Nama Fakultas tidak boleh kosong',
            'nama.unique' => 'Nama Fakultas sudah ada',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'gambar.required' => 'Gambar tidak boleh kosong',
            'gambar.image' => 'File harus berupa gambar',
            'gambar.mimes' => 'Format gambar harus jpeg, png, jpg, atau gif',
            'gambar.max' => 'Ukuran gambar tidak boleh lebih dari 5 MB',
            'lokasi.required' => 'Lokasi tidak boleh kosong',
            'visi.required' => 'Visi tidak boleh kosong',
            'misi.required' => 'Misi tidak boleh kosong',
        ]);
    
        // Update gambar if provided
        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
    
            // Hapus gambar lama jika ada
            if ($oldGambar) {
                $gambarPath = public_path('img/program/faculty/') . $oldGambar;
                if (file_exists($gambarPath)) {
                    unlink($gambarPath);
                }
            }
    
            // Unggah dan simpan gambar baru
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $gambarPath = $request->nama.'-'.now()->timestamp.'.'.$extension;
            $request->file('gambar')->move(public_path('img/program/faculty/'), $gambarPath);
            $faculty->update(['gambar' => $gambarPath]);
        }
    
        return redirect('admin-panel/program')->with('success', 'Fakultas berhasil diperbaharui!');
    }
    
    public function destroy(string $id)
    {
        $faculty = Faculty::find($id);

        if (!$faculty) {
            return redirect('admin-panel/program')->with('error', 'Faculty not found!');
        }

        // Check if the faculty is used as a foreign key in the 'majors' table
        $isUsedAsForeignKey = DB::table('majors')->where('kode_fakultas', $faculty->kode_fakultas)->exists();

        if ($isUsedAsForeignKey) {
            return redirect('admin-panel/program')->withErrors(['Kode Fakultas' => 'Kode Fakultas dipakai sebagai foreign key. Tidak dapat menghapus fakultas ini.']);
        }

        // Additional logic (e.g., delete related records) if needed

        // Simpan nama gambar sebelum dihapus
        $gambarPath = public_path('img/program/faculty/') . $faculty->gambar;

        // Hapus fakultas
        $faculty->delete();

        // Hapus gambar dari direktori jika ada
        if (file_exists($gambarPath)) {
            unlink($gambarPath);
        }

        return redirect('admin-panel/program')->with('success', 'Fakultas berhasil dihapus!');
    }


}
