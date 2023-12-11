<?php

namespace App\Http\Controllers;

use App\Models\AlamatInstitusiModel;
use App\Models\EmailModel;
use App\Models\NomorTeleponModel;
use App\Models\Prestasi;
use App\Models\SocalMediaModel;
use Illuminate\Http\Request;
use App\Models\data_institusi;

class PrestasiController extends Controller
{
    private function getPrestasiByType($jenisPrestasi, $amount)
    {
        return Prestasi::where('jenis_prestasi', $jenisPrestasi)
            ->orderBy('created_at', 'desc')
            ->paginate($amount);
    }

    public function getviewPrestasi()
    {
        $dataInstitusi = data_institusi::where('id', 1)->first();

        $data = [
            'dataInstitusi'=> $dataInstitusi,
            'dataAlamat' => AlamatInstitusiModel::all(),
            'dataNomorTelepon' => NomorTeleponModel::all(),
            'dataEmail' => EmailModel::all(),
            'dataSosmed' => SocalMediaModel::all(),

            'dataPrestasiInstitutOverview' => $this->getPrestasiByType('Institut', 4),
            'dataPrestasiDosenOverview' => $this->getPrestasiByType('Dosen', 4),
            'dataPrestasiMahasiswaOverview' => $this->getPrestasiByType('Mahasiswa', 4),
        ];
        return view("prestasi.prestasiOverview", $data);
    }

    public function getviewPrestasiInstitut()
    {
        $dataInstitusi = data_institusi::where('id', 1)->first();

        $data = [
            'dataInstitusi'=> $dataInstitusi,
            'dataAlamat' => AlamatInstitusiModel::all(),
            'dataNomorTelepon' => NomorTeleponModel::all(),
            'dataEmail' => EmailModel::all(),
            'dataSosmed' => SocalMediaModel::all(),
            'dataPrestasi' => $this->getPrestasiByType('Institut', 12)
        ];

        return view("prestasi.prestasiInstitut", $data);
    }

    public function getviewPrestasiDosenStaff()
    {
        $dataInstitusi = data_institusi::where('id', 1)->first();

        $data = [
            'dataInstitusi'=> $dataInstitusi,
            'dataAlamat' => AlamatInstitusiModel::all(),
            'dataNomorTelepon' => NomorTeleponModel::all(),
            'dataEmail' => EmailModel::all(),
            'dataSosmed' => SocalMediaModel::all(),
            'dataPrestasi' => $this->getPrestasiByType('Dosen', 12)
        ];
        return view("prestasi.prestasiDosenStaff", $data);
    }

    public function getviewPrestasiMahasiswa()
    {
        $dataInstitusi = data_institusi::where('id', 1)->first();

        $data = [
            'dataInstitusi'=> $dataInstitusi,
            'dataAlamat' => AlamatInstitusiModel::all(),
            'dataNomorTelepon' => NomorTeleponModel::all(),
            'dataEmail' => EmailModel::all(),
            'dataSosmed' => SocalMediaModel::all(),

            'dataPrestasi' => $this->getPrestasiByType('Mahasiswa', 12)
        ];

        return view("prestasi.prestasiMahasiswa", $data);
    }
}
