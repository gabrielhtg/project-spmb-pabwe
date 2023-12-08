<?php

namespace App\Http\Controllers;
use App\Models\Major;

use Illuminate\Http\Request;
use App\Models\data_institusi;

class MajorController extends Controller
{
    public function getProdi () {
        $dataInstitusi = data_institusi::where('id', 1)->first();

        $major = Major::with('faculty')->get();

        $data = [
            'dataInstitusi' => $dataInstitusi,
            'majors' => $major,
        ];

        return view('program.prodi', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_prodi' => 'required|unique:majors',
            'nama' => 'required',
            'kode_fakultas' => 'required|max:255',
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
        ]);

        $extension = $request->file('gambar')->getClientOriginalExtension();
        $gambarPath = $request->nama.'-'.now()->timestamp.'.'.$extension;
        $request->file('gambar')->storeAs('img/program', $gambarPath);
        // $gambarPath = $request->file('gambar')->store('img/program', 'public');
        

        // Create a new Faculty instance
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


        return redirect('admin-panel/program')->with('success', 'Faculty created successfully!');
    }

    public function update(Request $request, String $id)
    {
        $request->validate([
            'kode_prodi' => 'required|unique:majors',
            'nama' => 'required',
            'kode_fakultas' => 'required|max:255',
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
        ]);

        // dd($request);

        $major = Major::findOrFail($id);

        $extension = $request->file('gambar')->getClientOriginalExtension();
        $gambarPath = $request->nama.'-'.now()->timestamp.'.'.$extension;
        $request->file('gambar')->storeAs('img/program', $gambarPath);

        $updatedMajor = [
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
        ];

        $updatedMajor['gambar'] = $gambarPath;

        $major->update([
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

        return redirect('admin-panel/program')->with('success', 'Major updated successfully!');
    }

    public function destroy(string $id)
    {
        $major = Major::find($id);

        if (!$major) {
            return redirect('admin-panel/program')->with('error', 'Major not found!');
        }

        // Additional logic (e.g., delete related records) if needed

        $major->delete();

        return redirect('admin-panel/program')->with('success', 'Major deleted successfully!');
    }
}
