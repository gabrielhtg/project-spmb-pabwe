<?php

namespace App\Http\Controllers;

use App\Models\AkreditasiInstitutiModel;
use App\Models\AkreditasiSectionModel;
use App\Models\AlamatInstitusiModel;
use App\Models\data_institusi;
use App\Models\EmailModel;
use App\Models\HeroSectionModel;
use App\Models\InfografisModel;
use App\Models\JadwalPendaftaranModel;
use App\Models\JadwalUjianModel;
use App\Models\MbkmModel;
use App\Models\ModelHeaderAdmisi;
use App\Models\NomorTeleponModel;
use App\Models\PdfBiayaModel;
use App\Models\SocalMediaModel;
use App\Models\Lokasi;
use App\Models\prodi;
use App\Models\JenisTes;
use App\Models\BiayaAdminModel;
use App\Models\BiayaPendaftaranModel;
use App\Models\PedomanPendaftaranModel;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use App\Models\MitraModel;

class DashboardController extends Controller
{
    public function getDashboard () {
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $dataHeroSection = HeroSectionModel::where('id', 1)->first();
        $dataSosmed = SocalMediaModel::all();
        $dataAlamat = AlamatInstitusiModel::all();
        $akreditasiDashboard = AkreditasiSectionModel::where('id', 1)->first();
        $dataNomorTelepon = NomorTeleponModel::all();
        $dataEmail = EmailModel::all();
        $dataMitra = MitraModel::all();
        $dataAkreditasiInstitusi = AkreditasiInstitutiModel::all()->sortByDesc('tahun_akreditasi')->first();

        $data = [
            'dataInstitusi' => $dataInstitusi,
            'dataHeroSection' => $dataHeroSection,
            'dataSosmed' => $dataSosmed,
            'dataAlamat' => $dataAlamat,
            'akreditasiDashboard' => $akreditasiDashboard,
            'dataNomorTelepon' => $dataNomorTelepon,
            'dataEmail' => $dataEmail,
            'dataAkreditasiInstitusi' => $dataAkreditasiInstitusi,
            'dataTestimoni' => Testimoni::orderBy('created_at', 'desc')->take(8)->get(),
            'dataMitra' => $dataMitra,
        ];

        return view('dashboard/dashboard', $data);
    }

    public function getAdmisi () {
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $dataAlamat = AlamatInstitusiModel::all();
        $dataSosmed = SocalMediaModel::all();
        $dataHeaderAdmisi = ModelHeaderAdmisi::where('id', 1)->first();
        $dataNomorTelepon = NomorTeleponModel::all();
        $dataEmail = EmailModel::all();
        $lokasi = Lokasi::orderBy('lokasiTes', 'asc')->get();
        $jenis = JenisTes::orderBy('gelombang', 'asc')->get();
        $dataJadwalUjian = JadwalUjianModel::all();
        $jadwalPendaftaran = JadwalPendaftaranModel::all();


        $data = [
            'dataInstitusi' => $dataInstitusi,
            'dataSosmed' => $dataSosmed,
            'dataAlamat' => $dataAlamat,
            'dataHeaderAdmisi' => $dataHeaderAdmisi,
            'dataNomorTelepon' => $dataNomorTelepon,
            'dataEmail' => $dataEmail,
            'lokasi' => $lokasi,
            'jenis' => $jenis,
            'dataJadwalUjian' => $dataJadwalUjian,
            'jadwalPendaftaran' =>$jadwalPendaftaran,
        ];

        return view('admisi.admisi-tanggal-penting', $data);
    }

    public function getJalurPendaftaran () {
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $dataAlamat = AlamatInstitusiModel::all();
        $dataSosmed = SocalMediaModel::all();
        $dataHeaderAdmisi = ModelHeaderAdmisi::where('id', 1)->first();
        $dataNomorTelepon = NomorTeleponModel::all();
        $dataEmail = EmailModel::all();
        $pedomanpendaftaran = PedomanPendaftaranModel::all();
        $jalurMasuk = [];

        foreach (InfografisModel::all() as $e) {
            if (!in_array($e->jalur, $jalurMasuk)) {
                $jalurMasuk[] = $e->jalur;
            }
        }

        $dataInfografisJalurMasuk = [];

        foreach ($jalurMasuk as $e) {
            $dataInfografisJalurMasuk[] = InfografisModel::where('jalur', $e)->get();
        }



        $data = [
            'dataInstitusi' => $dataInstitusi,
            'dataSosmed' => $dataSosmed,
            'dataAlamat' => $dataAlamat,
            'dataHeaderAdmisi' => $dataHeaderAdmisi,
            'dataNomorTelepon' => $dataNomorTelepon,
            'dataEmail' => $dataEmail,
            'dataInfografis' => $dataInfografisJalurMasuk,
            'pedomanpendaftaran' => $pedomanpendaftaran,
        ];

        return view('admisi.admisi-jalur-pendaftaran', $data);
    }

    public function getBiayaStudi () {
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $dataAlamat = AlamatInstitusiModel::all();
        $dataSosmed = SocalMediaModel::all();
        $dataHeaderAdmisi = ModelHeaderAdmisi::where('id', 1)->first();
        $dataNomorTelepon = NomorTeleponModel::all();
        $dataEmail = EmailModel::all();
        $dataNonKompetisi  = MbkmModel::where('jenis_kegiatan', 'Non Kompetisi')->get();
        $dataKompetisi =  MbkmModel::where('jenis_kegiatan', 'Kompetisi')->get();
        $dataBiaya = BiayaAdminModel::all();
        $biayaPen = BiayaPendaftaranModel::all();
        $PdfbiayaPendaftaran = PdfBiayaModel::all();

        $data = [
            'dataInstitusi' => $dataInstitusi,
            'dataSosmed' => $dataSosmed,
            'dataAlamat' => $dataAlamat,
            'dataHeaderAdmisi' => $dataHeaderAdmisi,
            'dataNomorTelepon' => $dataNomorTelepon,
            'dataEmail' => $dataEmail,
            'dataNonKompetisi' => $dataNonKompetisi,
            'dataKompetisi'=>$dataKompetisi,
            'dataBiaya' => $dataBiaya,
            'biayaPen'=> $biayaPen,
            'PdfbiayaPendaftaran'=>$PdfbiayaPendaftaran
        ];

        return view('admisi.admisi-biaya-studi', $data);
    }

    public function getPersyaratanKhusus () {
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $dataAlamat = AlamatInstitusiModel::all();
        $dataSosmed = SocalMediaModel::all();
        $dataHeaderAdmisi = ModelHeaderAdmisi::where('id', 1)->first();
        $dataNomorTelepon = NomorTeleponModel::all();
        $dataEmail = EmailModel::all();
        $prodis = Prodi::orderBy("created_at", "desc")->get();


        $data = [
            'dataInstitusi' => $dataInstitusi,
            'dataSosmed' => $dataSosmed,
            'dataAlamat' => $dataAlamat,
            'dataHeaderAdmisi' => $dataHeaderAdmisi,
            'dataNomorTelepon' => $dataNomorTelepon,
            'dataEmail' => $dataEmail,
            'prodis' => $prodis
        ];

        return view('admisi.admisi-persyaratan-khusus', $data);
    }

}
