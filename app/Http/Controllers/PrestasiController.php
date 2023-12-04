<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use App\Models\data_institusi;

class PrestasiController extends Controller
{
    private function getPrestasiOverview($jenisPrestasi)
    {
        return Prestasi::where('jenis_prestasi', $jenisPrestasi)
            ->orderBy('created_at', 'desc')
            ->limit(4)
            ->get();
    }

    public function getviewPrestasi()
    {
        $dataInstitusi = data_institusi::where('id', 1)->first();

        $data = [
            'dataInstitusi'=> $dataInstitusi,
            'dataPrestasiInstitutOverview' => $this->getPrestasiOverview('Institut'),
            'dataPrestasiDosenOverview' => $this->getPrestasiOverview('Dosen'),
            'dataPrestasiMahasiswaOverview' => $this->getPrestasiOverview('Mahasiswa')
        ];
        return view("prestasi.prestasiOverview", $data);
    }

    public function getviewPrestasiInstitut()
    {
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $data = ['dataInstitusi'=> $dataInstitusi];
        return view("prestasi.prestasiInstitut", $data);
    }

    public function getviewPrestasiDosenStaff()
    {
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $data = ['dataInstitusi'=> $dataInstitusi];
        return view("prestasi.prestasiDosenStaff", $data);
    }

    public function getviewPrestasiMahasiswa()
    {
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $data = ['dataInstitusi'=> $dataInstitusi];
        return view("prestasi.prestasiMahasiswa", $data);
    }
}
