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
            'kode_fakultas' => 'required|unique:faculties|max:255',
            'nama' => 'required|max:255',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', 
            'lokasi' => 'required|max:255',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        // $gambarPath = $request->file('gambar')->store('img/program', 'public');
        $extension = $request->file('gambar')->getClientOriginalExtension();
        $gambarPath = $request->nama.'-'.now()->timestamp.'.'.$extension;
        $request->file('gambar')->move(public_path('img/program/faculty/'), $gambarPath);

        // Create a new Faculty instance
        $faculty = new Faculty([
            'kode_fakultas' => $request->get('kode_fakultas'),
            'nama' => $request->get('nama'),
            'deskripsi' => $request->get('deskripsi'),
            'gambar' => $gambarPath, 
            'lokasi' => $request->get('lokasi'),
            'visi' => $request->get('visi'),
            'misi' => $request->get('misi'),
        ]);


        $faculty->save();

        return redirect('admin-panel/program')
                        ->with('success', 'Faculty created successfully!');
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
            'kode_fakultas' => 'required|unique:faculties,kode_fakultas,' . $id,
            'nama' => 'required|max:255',
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
            'kode_fakultas' => $request->get('kode_fakultas'),
            'nama' => $request->get('nama'),
            'deskripsi' => $request->get('deskripsi'),
            'lokasi' => $request->get('lokasi'),
            'visi' => $request->get('visi'),
            'misi' => $request->get('misi'),
        ]);
    
        // Update gambar if provided
        if ($request->hasFile('gambar')) {
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
    
        return redirect('admin-panel/program')->with('success', 'Faculty updated successfully!');
    }
    

    public function destroy(string $id)
    {
        $faculty = Faculty::find($id);

        if (!$faculty) {
            return redirect('admin-panel/program')->with('error', 'Faculty not found!');
        }

        // Additional logic (e.g., delete related records) if needed

        $faculty->delete();

        return redirect('admin-panel/program')->with('success', 'Faculty deleted successfully!');
    }

}
