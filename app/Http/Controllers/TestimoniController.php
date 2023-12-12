<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function postAddTestimoni(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
            'angkatan' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'jenis' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $photo = $request->file('gambar');

        if ($photo)
        {
            $filename =  "testimoni" . time() . '.' . $photo->getClientOriginalExtension();

            $directory = public_path('assets/img/testimoni');

            $photo->move($directory, $filename);

            Testimoni::create([
               "nama_mahasiswa" => $request->nama,
               "photo"  => "assets/img/testimoni/" . $filename,
               "prodi" => $request->prodi,
               "angkatan" => $request->angkatan,
               "deskripsi" => $request->deskripsi,
               "kategori_mahasiswa" => $request->jenis,
            ]);

            return redirect()->route("testimoni.panel");
        } else {
            if ($validator->fails()) {
                return redirect()
                    ->route('testimoni.panel')
                    ->withErrors($validator)
                    ->withInput();
            }
        }
    }
}
