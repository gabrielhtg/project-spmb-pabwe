<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function getviewPengumuman()
    {
        return view("pengumuman.pengumuman");
    }
}
