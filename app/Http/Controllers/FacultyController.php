<?php

namespace App\Http\Controllers;

use App\Models\data_institusi;
use Illuminate\Http\Request;
use App\Models\Faculty;


class FacultyController extends Controller
{

    public function getFakultas () {
        $dataInstitusi = data_institusi::where('id', 1)->first();

        $faculty = Faculty::with('major')->get();

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

        $gambarPath = $request->file('gambar')->store('img/program', 'public');


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
