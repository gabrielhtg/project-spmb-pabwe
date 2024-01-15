<?php

namespace App\Http\Controllers;

use App\Models\AlamatInstitusiModel;
use App\Models\EmailModel;
use App\Models\NomorTeleponModel;
use App\Models\Prestasi;
use App\Models\SocalMediaModel;
use Illuminate\Http\Request;
use App\Models\data_institusi;
use Illuminate\Support\Facades\Validator;

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

    public function postAddPrestasi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul-prestasi' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'input_jenis_prestasi' => 'required',
            'deskripsi' => 'required|string',
        ]);

        $photo = $request->file('gambar');

        if ($photo) {
            $filename =  "prestasi" . time() . '.' . $photo->getClientOriginalExtension();

            $directory = public_path('assets/img/prestasi');

            $photo->move($directory, $filename);

            Prestasi::create([
                "jenis_prestasi" => $request->input_jenis_prestasi,
                "photo" => "assets/img/prestasi/" . $filename,
                "deskripsi" => $request->deskripsi,
                "judul_prestasi" => $request->judul,
            ]);

            return redirect()->route("prestasi.panel");
        } else {
            if ($validator->fails()) {
                return redirect()
                    ->route('prestasi.panel')
                    ->withErrors($validator)
                    ->withInput();
            }
        }
    }

    public function postDeletePrestasi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:prestasi',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('prestasi.panel')
                ->withErrors($validator)
                ->withInput();
        }

        $delete = Prestasi::where("id", $request->id)->first();

        if ($delete->photo && file_exists($delete->photo) && $delete) {
            unlink($delete->photo);
            $delete->delete();
        }

        return redirect()->back();
    }

    public function postEditPrestasi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:prestasi',
            'judulUpdate' => 'required|string|max:255',
            'gambarUpdate' => 'image|mimes:jpeg,png,jpg|max:2048',
            'input_jenis_prestasi_update' => 'required',
            'deskripsiUpdate' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('prestasi.panel')
                ->withErrors($validator)
                ->withInput();
        }

        $data = Prestasi::where('id', $request->id)->first();

        if ($data == null) {
            return redirect()->back();
        } else {
            if (!empty($request->gambarUpdate)) {
                $photo = $request->file('gambarUpdate');

                $fileName = "prestasi" . time() . '.' . $photo->getClientOriginalExtension();

                $dir = public_path('assets/img/prestasi');

                $photo->move($dir, $fileName);

                if ($data->photo && file_exists($data->photo)) {
                    unlink($data->photo);
                }

                $data->photo = 'assets/img/prestasi/'.$fileName;
            }

            $data->jenis_prestasi = $request->input_jenis_prestasi_update;
            $data->deskripsi = $request->deskripsiUpdate;
            $data->judul_prestasi = $request->judulUpdate;

            $data->save();

            return redirect()->back();
        }
    }
}
