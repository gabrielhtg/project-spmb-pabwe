<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_institusi;

class PengumumanController extends Controller
{
    public function getviewPengumuman()
    {
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $data = [
            'dataInstitusi' => $dataInstitusi
        ];
        return view("pengumuman.pengumuman", $data);
    }
}
