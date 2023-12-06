<?php

namespace App\Http\Controllers;
use App\Models\Major;

use Illuminate\Http\Request;
use App\Models\data_institusi;

class MajorController extends Controller
{
    public function getProdi () {
        $dataInstitusi = data_institusi::where('id', 1)->first();

        $data = [
            'dataInstitusi' => $dataInstitusi,
        ];

        return view('program.prodi', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kode_fakultas' => 'required',
            'kode_prodi' => 'required',
            'deskripsi' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'prospek' => 'required',
            'gelar' => 'required',
            'biaya' => 'required',
            'lama' => 'required',
            'syarat' => 'required',
            'akreditasi' => 'required',
            'lokasi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', 
        ]);

        $gambarPath = $request->file('gambar')->store('img/program/prodi', 'public');


        // Create a new Faculty instance
        $major = new Major([
            'nama' => $request->input('nama'),
            'kode_fakultas' => $request->input('kode_fakultas'),
            'kode_prodi' => $request->input('kode_prodi'),
            'deskripsi' => $request->input('deskripsi'),
            'visi' => $request->input('visi'),
            'misi' => $request->input('misi'),
            'prospek' => $request->input('prospek'),
            'gelar' => $request->input('gelar'),
            'biaya' => $request->input('biaya'),
            'lama' => $request->input('lama'),
            'syarat' => $request->input('syarat'),
            'akreditasi' => $request->input('akreditasi'),
            'gambar' => $gambarPath, 
        ]);


        $major->save();

        return redirect('admin-panel/program')->with('success', 'Faculty created successfully!');
    }
}
