<?php

namespace App\Http\Controllers;
use App\Models\Major;
use App\Models\data_institusi;
use App\Models\HeroSectionModel;
use App\Models\SocalMediaModel;
use App\Models\AlamatInstitusiModel;
use App\Models\AkreditasiInstitutiModel;
use App\Models\AkreditasiSectionModel;
use App\Models\NomorTeleponModel;
use App\Models\EmailModel;
use App\Models\Employee;
use App\Models\Course;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function getProdi(String $id) {
        $dataInstitusi = data_institusi::where('id', 1)->first();

        $major = Major::where('id', $id)->with(['faculty', 'employee'])->get();
        $employees = Employee::with('major')->get();
        $courses = Course::with('major')->get();
        $dataHeroSection = HeroSectionModel::where('id', 1)->first();
        $dataSosmed = SocalMediaModel::all();
        $dataAlamat = AlamatInstitusiModel::all();
        $akreditasiDashboard = AkreditasiSectionModel::where('id', 1)->first();
        $dataNomorTelepon = NomorTeleponModel::all();
        $dataEmail = EmailModel::all();
        $dataAkreditasiInstitusi = AkreditasiInstitutiModel::all()->sortByDesc('tahun_akreditasi')->first();
        

        $data = [
            'dataInstitusi' => $dataInstitusi,
            'majors' => $major,
            'employees' => $employees,
            'courses' => $courses,
            'dataHeroSection' => $dataHeroSection,
            'dataSosmed' => $dataSosmed,
            'dataAlamat' => $dataAlamat,
            'akreditasiDashboard' => $akreditasiDashboard,
            'dataNomorTelepon' => $dataNomorTelepon,
            'dataEmail' => $dataEmail,
            'dataAkreditasiInstitusi' => $dataAkreditasiInstitusi,
            
        ];

        return view('program.prodi', $data);
    }

    public function store(Request $request)
{
    $request->validate([
        'kode_prodi' => 'required|unique:majors',
        'nama' => 'required|max:255|unique:majors',
        'kode_fakultas' => 'required',
        'deskripsi' => 'required',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', 
        'misi' => 'required',
        'visi' => 'required',
        'prospek' => 'required',
        'gelar' => 'required',
        'lama' => 'required',
        'biaya' => 'required',
        'syarat' => 'required',
        'lokasi' => 'required',
        'akreditasi' => 'required',
    ],[
        'kode_prodi.unique'=>'Kode Prodi Sudah Ada',
        'nama.required'=>'Nama Prodi tidak boleh kosong',
        'nama.unique'=>'Nama Prodi tidak boleh sama',
        'deskripsi.required' => 'Deskripsi tidak boleh kosong',
        'gambar.required' => 'Gambar tidak boleh kosong',
        'visi.required' => 'Visi tidak boleh kosong',
        'misi.required' => 'Misi tidak boleh kosong',
        'prospek.required' => 'Prospek tidak boleh kosong',
        'gelar.required' => 'Gelar tidak boleh kosong',
        'lama.required' => 'Lama tidak boleh kosong',
        'biaya.required' => 'Biaya tidak boleh kosong',
        'syarat.required' => 'Syarat tidak boleh kosong',
        'lokasi.required' => 'Lokasi tidak boleh kosong',
        'akreditasi.required' => 'Akreditasi tidak boleh kosong',

    ]);

    $extension = $request->file('gambar')->getClientOriginalExtension();
    $gambarPath = $request->nama.'-'.now()->timestamp.'.'.$extension;
    $request->file('gambar')->move(public_path('img/program/major/'), $gambarPath);

    // Create a new Major instance
    $major = new Major([
        'kode_prodi' => $request->get('kode_prodi'),
        'nama' => $request->get('nama'),
        'kode_fakultas' => $request->get('kode_fakultas'),
        'deskripsi' => $request->get('deskripsi'),
        'gambar' => $gambarPath, 
        'misi' => $request->get('misi'),
        'visi' => $request->get('visi'),
        'prospek' => $request->get('prospek'),
        'gelar' => $request->get('gelar'),
        'lama' => $request->get('lama'),
        'biaya' => $request->get('biaya'),
        'syarat' => $request->get('syarat'),
        'lokasi' => $request->get('lokasi'),
        'akreditasi' => $request->get('akreditasi'),
    ]);

    $major->save();

    return redirect('admin-panel/program')->with('success', 'Program Studi berhasil ditambahkan!');
}
public function update(Request $request, String $id)
{
    $request->validate([
        'kode_prodi' => 'required|unique:majors,kode_prodi,' . $id,
        'nama' => 'required',
        'kode_fakultas' => 'required',
        'deskripsi' => 'required',
        'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'misi' => 'required',
        'visi' => 'required',
        'prospek' => 'required',
        'gelar' => 'required',
        'lama' => 'required',
        'biaya' => 'required',
        'syarat' => 'required',
        'lokasi' => 'required',
        'akreditasi' => 'required',
    ], [
        'kode_prodi.required' => 'Kode Prodi wajib diisi.',
        'kode_prodi.unique' => 'Kode Prodi sudah digunakan.',
        'nama.required' => 'Nama wajib diisi.',
        'kode_fakultas.required' => 'Kode Fakultas wajib diisi.',
        'deskripsi.required' => 'Deskripsi wajib diisi.',
        'gambar.image' => 'File harus berupa gambar.',
        'gambar.mimes' => 'Format gambar tidak valid. Gunakan format jpeg, png, jpg, atau gif.',
        'gambar.max' => 'Ukuran gambar tidak boleh lebih dari 2 MB.',
        'misi.required' => 'Misi wajib diisi.',
        'visi.required' => 'Visi wajib diisi.',
        'prospek.required' => 'Prospek wajib diisi.',
        'gelar.required' => 'Gelar wajib diisi.',
        'lama.required' => 'Lama studi wajib diisi.',
        'biaya.required' => 'Biaya studi wajib diisi.',
        'syarat.required' => 'Syarat pendaftaran wajib diisi.',
        'lokasi.required' => 'Lokasi kampus wajib diisi.',
        'akreditasi.required' => 'Akreditasi wajib diisi.',
    ]);

    $major = Major::findOrFail($id);

    if (!$major) {
        return redirect('admin-panel/program')->with('error', 'Program Studi tidak ditemukan!');
    }

    try {
        // Hapus gambar lama jika ada
        if ($major->gambar && $request->hasFile('gambar')) {
            $gambarPath = public_path('img/program/major/') . $major->gambar;
            if (file_exists($gambarPath)) {
                unlink($gambarPath);
            }
        }

        if ($request->hasFile('gambar')) {
            // Simpan gambar baru
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $gambarPath = $request->nama . '-' . now()->timestamp . '.' . $extension;
            $request->file('gambar')->move(public_path('img/program/major/'), $gambarPath);
        }

        // Update data jurusan
        $major->update([
            'kode_prodi' => $request->get('kode_prodi'),
            'nama' => $request->get('nama'),
            'kode_fakultas' => $request->get('kode_fakultas'),
            'deskripsi' => $request->get('deskripsi'),
            'misi' => $request->get('misi'),
            'visi' => $request->get('visi'),
            'prospek' => $request->get('prospek'),
            'gelar' => $request->get('gelar'),
            'lama' => $request->get('lama'),
            'biaya' => $request->get('biaya'),
            'syarat' => $request->get('syarat'),
            'lokasi' => $request->get('lokasi'),
            'akreditasi' => $request->get('akreditasi'),
            'gambar' => $request->hasFile('gambar') ? $gambarPath : $major->gambar,
        ]);

        return redirect('admin-panel/program')->with('success', 'Program Studi berhasil diperbaharui!');
    } catch (\Exception $e) {
        return redirect('admin-panel/program')->with('error', 'Error updating major: ' . $e->getMessage());
    }
}


    public function destroy(string $id)
    {
        $major = Major::find($id);

        if (!$major) {
            return redirect('admin-panel/program')->with('error', 'Major not found!');
        }

        
        $major->delete();

        return redirect('admin-panel/program')->with('success', 'Program Studi berhasil dihapus!');
    }
}
