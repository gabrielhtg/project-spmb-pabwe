<?php

namespace App\Http\Controllers;

use App\Models\Header_Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HeaderPrestasiController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'deskripsi' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('prestasi.panel')  // Ganti dengan nama route yang sesuai
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

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judulUpdate' => 'required|string|max:255',
            'fotoUpdate' => 'image|mimes:jpeg,png,jpg|max:2048',
            'deskripsiUpdate' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('prestasi.panel')  // Ganti dengan nama route yang sesuai
                ->withErrors($validator)
                ->withInput();
        }

        $headerPrestasi = Header_Prestasi::find($id);

        if (!$headerPrestasi) {
            return redirect()->route('prestasi.panel')->with('error', 'Header prestasi tidak ditemukan');
        }

        if ($request->hasFile('fotoUpdate')) {
            $photo = $request->file('fotoUpdate');
            $filename = "header_prestasi_" . time() . '.' . $photo->getClientOriginalExtension();
            $directory = public_path('assets/img/prestasi');

            if ($headerPrestasi->foto && file_exists($headerPrestasi->foto)) {
                unlink($headerPrestasi->foto);
            }

            $photo->move($directory, $filename);
            $headerPrestasi->foto = "assets/img/prestasi/" . $filename;
        }

        $headerPrestasi->judul = $request->judulUpdate;
        $headerPrestasi->deskripsi = $request->deskripsiUpdate;
        $headerPrestasi->save();

        return redirect()->route('prestasi.panel')->with('success', 'Header prestasi berhasil diupdate');
    }

    public function destroy($id)
    {
        $headerPrestasi = Header_Prestasi::find($id);

        if (!$headerPrestasi) {
            return redirect()->route('prestasi.panel')->with('error', 'Header prestasi tidak ditemukan');
        }

        if ($headerPrestasi->foto && file_exists($headerPrestasi->foto)) {
            unlink($headerPrestasi->foto);
        }

        $headerPrestasi->delete();

        return redirect()->route('prestasi.panel')->with('success', 'Header prestasi berhasil dihapus');
    }
}
