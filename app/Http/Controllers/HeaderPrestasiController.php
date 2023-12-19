<?php

namespace App\Http\Controllers;

use App\Models\Header_Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HeaderPrestasiController extends Controller
{
    public function store(Request $request)
    {
        $headerPrestasi = Header_Prestasi::first();

        if ($headerPrestasi) {

            $validator = Validator::make($request->all(), [
                'judul' => 'required|string|max:255',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'deskripsi' => 'required|string',
            ], [
                'judul.required' => 'Judul harus diisi',
                'judul.string' => 'Judul harus berupa teks',
                'judul.max' => 'Judul maksimal 255 karakter',
                'foto.image' => 'Foto harus berupa gambar',
                'foto.mimes' => 'Format foto harus jpeg, png, atau jpg',
                'foto.max' => 'Ukuran foto maksimal 2048 KB',
                'deskripsi.required' => 'Deskripsi harus diisi',
                'deskripsi.string' => 'Deskripsi harus berupa teks',
            ]);

            if ($validator->fails()) {
                return redirect()
                    ->route('prestasi.panel')
                    ->withErrors($validator)
                    ->withInput();
            }

            $photo = $request->file('foto');
            $directory = public_path('assets/img/prestasi');
            $filename = str_replace('assets/img/prestasi/', '', $headerPrestasi->foto);

            if ($photo) {
                $photo->move($directory, $filename);
            }

            $headerPrestasi->judul = $request->judul;
            $headerPrestasi->foto = "assets/img/prestasi/" . $filename;
            $headerPrestasi->deskripsi = $request->deskripsi;
            $headerPrestasi->save();

            return redirect()->route('prestasi.panel')->with('success', 'Header prestasi berhasil diubah');
        } else {
            $validator = Validator::make($request->all(), [
                'judul' => 'required|string|max:255',
                'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'deskripsi' => 'required|string',
            ]);

            if ($validator->fails()) {

                return redirect()
                    ->route('prestasi.panel')
                    ->withErrors($validator)
                    ->withInput();
            }

            $photo = $request->file('foto');
            $filename = "header_prestasi_" . time() . '.' . $photo->getClientOriginalExtension();
            $directory = public_path('assets/img/prestasi');
            $photo->move($directory, $filename);

            Header_Prestasi::create([
                'judul' => $request->judul,
                'foto' => "assets/img/prestasi/" . $filename,
                'deskripsi' => $request->deskripsi,
            ]);

            return redirect()->route('prestasi.panel')->with('success', 'Header prestasi berhasil ditambahkan');
        }
    }
}
