<?php

namespace App\Http\Controllers;

use App\Models\data_institusi;
use Illuminate\Http\Request;
use App\Models\Faculty;


class FacultyController extends Controller
{

    public function getFakultas(String $id) {
        $dataInstitusi = data_institusi::where('id', 1)->first();

        $faculty = Faculty::where('id', $id)->with('major')->get();

        $data = [
            'dataInstitusi' => $dataInstitusi,
            'faculties' => $faculty,
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
        $request->file('gambar')->storeAs('img/program/faculty/', $gambarPath);


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
        ]);
    
        $faculty = Faculty::find($id);
    
        if (!$faculty) {
            return redirect('admin-panel/program')->with('error', 'Faculty not found!');
        }
    
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
            // $gambarPath = $request->file('gambar')->store('img/program', 'public');
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $gambarPath = $request->nama.'-'.now()->timestamp.'.'.$extension;
            $request->file('gambar')->storeAs('img/program/faculty/', $gambarPath);
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
