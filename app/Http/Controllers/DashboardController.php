<?php

namespace App\Http\Controllers;

use App\Models\data_institusi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getDashboard () {
        $dataInstitusi = data_institusi::where('id', 1)->first();

        $data = [
            'dataInstitusi' => $dataInstitusi,
        ];

        return view('dashboard/dashboard', $data);
    }
}
