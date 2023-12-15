<?php

namespace App\Http\Controllers;

use App\Models\DropdownAdmisiModel;
use Illuminate\Http\Request;

class DropdownAdmisiController extends Controller
{
    public function addDropdown (Request $request) {
        DropdownAdmisiModel::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'jalur' => $request->jalur
        ]);

        return redirect()->back();
    }

    public function editDropdown (Request $request) {
        $dropdown = DropdownAdmisiModel::where('id', $request->id)->first();

        $dropdown->judul = $request->judul;
        $dropdown->isi = $request->isi;

        $dropdown->update();

        return redirect()->back();
    }
}
