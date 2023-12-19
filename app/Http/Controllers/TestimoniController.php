<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestimoniController extends Controller
{
    public function postAddTestimoni(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|alpha|max:255',
            'prodi' => 'required|string|max:255',
            'angkatan' => 'required|numeric|digits:4',
            'deskripsi' => 'required|string',
            'jenis' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('testimoni.panel')
                ->withErrors($validator)
                ->withInput();
        }

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

            return redirect()->route("testimoni.panel")->with("success", "Testimoni berhasil ditambahkan");
        } else {
            if ($validator->fails()) {
                return redirect()
                    ->route('testimoni.panel')
                    ->withErrors($validator)
                    ->withInput();
            }
        }
    }

    public function postDeletePanel(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:testimoni',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('testimoni.panel')
                ->withErrors($validator)
                ->withInput();
        }

        $delete = Testimoni::where("id", $request->id)->first();

        if ($delete->photo && file_exists($delete->photo) && $delete) {
            unlink($delete->photo);
            $delete->delete();
        }

        return redirect()->back()->with('success', 'Testimoni berhasil di hapus');
    }

    public function postEditTestimoni(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:testimoni',
            'namaUpdate' => 'required|alpha|max:255',
            'prodiUpdate' => 'required|string|max:255',
            'angkatanUpdate' => 'required|numeric|digits:4',
            'deskripsiUpdate' => 'required|string',
            'jenisUpdate' => 'required',
            'gambarUpdate' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('testimoni.panel')
                ->withErrors($validator)
                ->withInput();
        }

        $data = Testimoni::where('id', $request->id)->first();

        if ($data == null) {
            return redirect()->back()->with('error', 'Testimoni tidak ditemukan');
        } else {
            if ($request->hasFile('gambarUpdate')) {
                $photo = $request->file('gambarUpdate');

                $fileName = "testimoni" . time() . '.' . $photo->getClientOriginalExtension();

                $dir = public_path('assets/img/testimoni');

                $photo->move($dir, $fileName);

                if ($data->photo && file_exists($data->photo)) {
                    unlink($data->photo);
                }

                $data->photo = 'assets/img/testimoni/'.$fileName;
            }

            $data->nama_mahasiswa = $request->namaUpdate;
            $data->prodi = $request->prodiUpdate;
            $data->angkatan = $request->angkatanUpdate;
            $data->deskripsi = $request->deskripsiUpdate;
            $data->kategori_mahasiswa = $request->jenisUpdate;

            $data->save();

            return redirect()->back()->with('success', 'Testimoni berhasil di ubah');
        }
    }
}
