<?php

namespace App\Http\Controllers;

use App\Models\ModelHeaderAdmisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdmisiController extends Controller
{
    public function setHeader (Request $request) {
        $modelAdmisi = ModelHeaderAdmisi::where('id', 1)->first();

        if ($request->header_admisi) {
            $this->validate($request, [
                'header_admisi' => 'image|mimes:jpeg,png,jpg|max:1024',
            ]);

            $photo = $request->file('header_admisi');

            $filename = 'header_admisi.' . $photo->getClientOriginalExtension();

            // Menentukan direktori tempat penyimpanan file di dalam direktori 'public'
            $directory = public_path('assets/img/admisi/');

            // Menghapus photo lama jika ada
            if ($modelAdmisi->letak_foto && file_exists($modelAdmisi->letak_foto)) {
                unlink($modelAdmisi->letak_foto);
            }

            //Pindahkan file ke direktori yang diinginkan
            $photo->move($directory, $filename);

            $modelAdmisi->letak_foto = 'assets/img/admisi/' . $filename;

            $modelAdmisi->update();

            return redirect()->route('admisi-panel');
        }


        return redirect()->route('admisi-panel');
    }
}