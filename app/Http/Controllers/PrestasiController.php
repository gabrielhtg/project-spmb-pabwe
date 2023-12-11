<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use App\Models\data_institusi;

class PrestasiController extends Controller
{
    private function getDataInstitusi()
    {
        return data_institusi::find(1);
    }

    private function getPrestasiByType($jenisPrestasi, $amount)
    {
        return Prestasi::where('jenis_prestasi', $jenisPrestasi)
            ->orderBy('created_at', 'desc')
            ->paginate($amount);
    }

    private function getViewData($viewName, $jenisPrestasi, $amount)
    {
        $dataInstitusi = $this->getDataInstitusi();
        $data = [
            'dataInstitusi' => $dataInstitusi,
            'dataPrestasi' => $this->getPrestasiByType($jenisPrestasi, $amount),
        ];
        return view("prestasi.$viewName", $data);
    }

    public function getviewPrestasi()
    {
        $data = [
            'dataInstitusi' => $this->getDataInstitusi(),
            'dataPrestasiInstitutOverview' => $this->getPrestasiByType('Institut', 4),
            'dataPrestasiDosenOverview' => $this->getPrestasiByType('Dosen', 4),
            'dataPrestasiMahasiswaOverview' => $this->getPrestasiByType('Mahasiswa', 4),
        ];

        return view("prestasi.prestasiOverview", $data);
    }

    public function getviewPrestasiInstitut()
    {
        return $this->getViewData('prestasiInstitut', 'Institut', 12);
    }

    public function getviewPrestasiDosenStaff()
    {
        return $this->getViewData('prestasiDosenStaff', 'Dosen', 12);
    }

    public function getviewPrestasiMahasiswa()
    {
        return $this->getViewData('prestasiMahasiswa', 'Mahasiswa', 12);
    }
}
