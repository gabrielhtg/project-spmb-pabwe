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

    private function getPrestasiByType($jenisPrestasi)
    {
        return Prestasi::where('jenis_prestasi', $jenisPrestasi)
            ->orderBy('created_at', 'desc')
            ->paginate(12);
    }

    private function getViewData($viewName, $jenisPrestasi)
    {
        $dataInstitusi = $this->getDataInstitusi();
        $data = [
            'dataInstitusi' => $dataInstitusi,
            'dataPrestasi' => $this->getPrestasiByType($jenisPrestasi),
        ];
        return view("prestasi.$viewName", $data);
    }

    public function getviewPrestasi()
    {
        $data = [
            'dataInstitusi' => $this->getDataInstitusi(),
            'dataPrestasiInstitutOverview' => $this->getPrestasiByType('Institut'),
            'dataPrestasiDosenOverview' => $this->getPrestasiByType('Dosen'),
            'dataPrestasiMahasiswaOverview' => $this->getPrestasiByType('Mahasiswa'),
        ];

        return view("prestasi.prestasiOverview", $data);
    }

    public function getviewPrestasiInstitut()
    {
        return $this->getViewData('prestasiInstitut', 'Institut');
    }

    public function getviewPrestasiDosenStaff()
    {
        return $this->getViewData('prestasiDosenStaff', 'Dosen');
    }

    public function getviewPrestasiMahasiswa()
    {
        return $this->getViewData('prestasiMahasiswa', 'Mahasiswa');
    }
}
