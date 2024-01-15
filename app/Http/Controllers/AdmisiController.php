<?php

namespace App\Http\Controllers;


use App\Models\AkreditasiInstitutiModel;
use App\Models\InfografisModel;
use App\Models\MbkmModel;
use App\Models\ModelHeaderAdmisi;
use App\Models\JalurPendaftaranModel;
use App\Models\BiayaAdminModel;
use App\Models\JadwalPendaftaranModel;
use App\Models\Lokasi;
use App\Models\prodi;
use App\Models\BiayaPendaftaranModel;
use App\Models\JenisTes;
use App\Models\PedomanPendaftaranModel;
use App\Models\PdfBiayaModel;
use App\Models\BiayaStudi;
use App\Models\JadwalUjianModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdmisiController extends Controller
{

    public function addJadwalUjian(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'jalur_ujian' => 'required',
            'tahun_akademik' => 'required',
            'deskripsi' => 'required',
        ], [
            'jalur_ujian.required' => 'Jalur ujian harus diisi',
            'tahun_akademik.required' => 'Tahun akademik harus diisi',
            'deskripsi.required' => 'Deskripsi harus diisi',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admisi-panel')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $validator->errors()->first());
        }

        try {
            // Dapatkan username dari pengguna yang sedang login
            $username = Auth::user()->username;

            // Buat JadwalUjianModel jika validasi sukses
            JadwalUjianModel::create([
                'jalur_ujian' => $request->jalur_ujian,
                'tahun_akademik' => $request->tahun_akademik,
                'deskripsi' => $request->deskripsi,
                'created_at' => now(),
                'updated_at' => now(),
                'created_by' => $username,
                'updated_by' => $username,
            ]);

            // Jika berhasil, tambahkan pesan sukses ke dalam session
            return redirect()->route('admisi-panel')->with('success', 'Jadwal ujian berhasil ditambahkan');
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, kembalikan ke halaman sebelumnya dengan pesan error
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
        }
    }



    public function removeJadwalUjian(Request $request)
    {
        try {
            $jadwalUjian = JadwalUjianModel::find($request->id);

            if (!$jadwalUjian) {
                return redirect()->back()->with('error', 'Data tidak ditemukan');
            }

            $jadwalUjian->delete();

            return redirect()->back()->with('success', 'Data jadwal ujian berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function editJadwalUjian(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'jalurUjian' => 'required',
            'tahunAkademik' => 'required',
            'deskripsi' => 'required',
        ], [
            'jalurUjian.required' => 'Jalur ujian harus diisi',
            'tahunAkademik.required' => 'Tahun akademik harus diisi',
            'deskripsi.required' => 'Deskripsi harus diisi',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admisi-panel')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $validator->errors()->first());
        }

        try {
            $username = Auth::user()->username;

            $dataJadwalUjian = JadwalUjianModel::find($request->id);

            if (!$dataJadwalUjian) {
                return redirect()->back()->with('error', 'Data tidak ditemukan');
            }

            // Update data jika validasi sukses
            $dataJadwalUjian->jalur_ujian = $request->jalurUjian;
            $dataJadwalUjian->tahun_akademik = $request->tahunAkademik;
            $dataJadwalUjian->deskripsi = $request->deskripsi;
            $dataJadwalUjian->updated_by = $username;
            $dataJadwalUjian->updated_at = now();
            $dataJadwalUjian->save();

            // Jika berhasil, tambahkan pesan sukses ke dalam session
            return redirect()->back()->with('success', 'Data jadwal ujian berhasil diperbarui');
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, kembalikan ke halaman sebelumnya dengan pesan error
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
        }
    }

    public function setHeader(Request $request)
    {
        $modelAdmisi = ModelHeaderAdmisi::where('id', 1)->first();

        if ($request->header_admisi) {
            $this->validate($request, [
                'header_admisi' => 'image|mimes:jpeg,png,jpg|max:2048',
            ], [
                'header_admisi.image' => 'File harus berupa gambar.',
                'header_admisi.mimes' => 'File harus memiliki format jpeg, png, atau jpg.',
                'header_admisi.max' => 'Ukuran file tidak boleh melebihi 1 MB.',
            ]);

            if ($request->file('header_admisi')->isValid()) {
                $photo = $request->file('header_admisi');

                $filename = 'header_admisi.' . $photo->getClientOriginalExtension();

                $directory = public_path('assets/img/admisi/');

                if ($modelAdmisi->letak_foto && file_exists($modelAdmisi->letak_foto)) {
                    unlink($modelAdmisi->letak_foto);
                }

                $photo->move($directory, $filename);

                $modelAdmisi->letak_foto = 'assets/img/admisi/' . $filename;

                $modelAdmisi->update();

                return redirect()->route('admisi-panel')->with('success', 'Header Admisi berhasil diupdate.');
            } else {
                return redirect()->route('admisi-panel')->with('error', 'Error saat mengunggah file gambar.');
            }
        }

        return redirect()->route('admisi-panel');
    }


    public function addMbkmNonKompetisi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jumlah_sks' => 'required', // Sesuaikan aturan validasi sesuai kebutuhan
            'potongan_spp' => 'required',
        ], [
            'jumlah_sks.required' => 'Jumlah SKS harus diisi.',
            'potongan_spp.required' => 'Potongan SPP harus diisi.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admisi-panel')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $validator->errors()->first());
        }

        // Jika validasi berhasil, buat entri baru
        MbkmModel::create([
            'jenis_kegiatan' => 'Non Kompetisi',
            'jumlah_sks' => $request->jumlah_sks,
            'potongan_spp' => $request->potongan_spp,
            'updated_by' => Auth::user()->username,
            'created_by' => Auth::user()->username,
            'updated_at' => now(),
            'created_at' => now()
        ]);

        // Pesan sukses jika berhasil menambahkan entri
        return redirect()->route('admisi-panel')->with('success', 'Data Non Kompetisi berhasil ditambahkan.');
    }

    public function updateMbkmNonKompetisi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jumlah_sks' => 'required', // Sesuaikan aturan validasi sesuai kebutuhan
            'potongan_spp' => 'required',
        ], [
            'jumlah_sks.required' => 'Jumlah SKS harus diisi.',
            'potongan_spp.required' => 'Potongan SPP harus diisi.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admisi-panel')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $validator->errors()->first());
        }

        try {
            $mbkmData = MbkmModel::find($request->id);

            if (!$mbkmData) {
                return redirect()->back()->with('error', 'Data tidak ditemukan');
            }

            $mbkmData->jenis_kegiatan = 'Non Kompetisi';
            $mbkmData->jumlah_sks = $request->jumlah_sks;
            $mbkmData->potongan_spp = $request->potongan_spp;
            $mbkmData->updated_by = Auth::user()->username;
            $mbkmData->updated_at = now();

            $mbkmData->save();

            return redirect()->route('admisi-panel')->with('success', 'Data Non Kompetisi berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
        }
    }



    public function addMbkmKompetisi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jumlah_sks' => 'required', // Sesuaikan aturan validasi sesuai kebutuhan
            'potongan_spp' => 'required',
        ], [
            'jumlah_sks.required' => 'Jumlah SKS harus diisi.',
            'potongan_spp.required' => 'Potongan SPP harus diisi.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admisi-panel')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $validator->errors()->first());
        }

        // Jika validasi berhasil, buat entri baru
        MbkmModel::create([
            'jenis_kegiatan' => 'Kompetisi',
            'jumlah_sks' => $request->jumlah_sks,
            'potongan_spp' => $request->potongan_spp,
            'updated_by' => Auth::user()->username,
            'created_by' => Auth::user()->username,
            'updated_at' => now(),
            'created_at' => now()
        ]);

        // Pesan sukses jika berhasil menambahkan entri
        return redirect()->route('admisi-panel')->with('success', 'Data Kompetisi berhasil ditambahkan.');
    }

    public function updateMbkmKompetisi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jumlah_sks' => 'required', // Sesuaikan aturan validasi sesuai kebutuhan
            'potongan_spp' => 'required',
        ], [
            'jumlah_sks.required' => 'Jumlah SKS harus diisi.',
            'potongan_spp.required' => 'Potongan SPP harus diisi.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admisi-panel')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $validator->errors()->first());
        }

        try {
            $mbkmData = MbkmModel::find($request->id);

            if (!$mbkmData) {
                return redirect()->back()->with('error', 'Data tidak ditemukan');
            }

            $mbkmData->jenis_kegiatan = 'Kompetisi';
            $mbkmData->jumlah_sks = $request->jumlah_sks;
            $mbkmData->potongan_spp = $request->potongan_spp;
            $mbkmData->updated_by = Auth::user()->username;
            $mbkmData->updated_at = now();

            $mbkmData->save();

            return redirect()->route('admisi-panel')->with('success', 'Data Kompetisi berhasil diperbarui.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
        }
    }


    public function removeMbkm(Request $request)
    {
        $mbkm = MbkmModel::find($request->id);

        if (!$mbkm) {
            return redirect()->route('admisi-panel')->with('error', 'Data tidak ditemukan.');
        }

        $mbkm->delete();

        // Pesan sukses jika data berhasil dihapus
        return redirect()->route('admisi-panel')->with('success', 'Data berhasil dihapus.');
    }


    public function addInfografisPmdk(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'nomor_urut' => 'required|min:0'
        ], [
            'gambar.required' => 'Jumlah SKS harus diisi.',
            'gambar.image' => 'gambar harus dalam jpeg, png, dan jpg dengan ukuran maks 2MB.',
            'nomor_urut.required' => 'Nomor Urut harus diisi.',
            'gambar.max' => 'Gambar tidak boleh lebih dari 2MB'
        ]);

        if ($validator->fails()) {
            return redirect()->route('admisi-panel')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $validator->errors()->first());
        }

        if ($request->hasFile('gambar')) {
            $photo = $request->file('gambar');
            $filename = time() . '_infografis.' . $photo->getClientOriginalExtension();
            $directory = public_path('assets/img/');

            $photo->move($directory, $filename);

            InfografisModel::create([
                'gambar' => 'assets/img/' . $filename,
                'jalur' => 'PMDK',
                'nomor_urut' => $request->nomor_urut
            ]);

            return redirect()->route('admisi-panel')->with('success', 'Infografis berhasil ditambahkan.');
        }

        return redirect()->route('admisi-panel')->with('error', 'Gagal menambahkan infografis.');
    }

    public function addInfografisJPS(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'nomor_urut' => 'required|min:0'
        ], [
            'gambar.required' => 'Jumlah SKS harus diisi.',
            'gambar.image' => 'gambar harus dalam jpeg, png, dan jpg dengan ukuran maks 2MB.',
            'nomor_urut.required' => 'Nomor Urut harus diisi.',
            'gambar.max' => 'Gambar tidak boleh lebih dari 2MB'
        ]);

        if ($validator->fails()) {
            return redirect()->route('admisi-panel')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $validator->errors()->first());
        }

        if ($request->hasFile('gambar')) {
            $photo = $request->file('gambar');
            $filename = time() . '_infografis.' . $photo->getClientOriginalExtension();
            $directory = public_path('assets/img/');

            $photo->move($directory, $filename);

            InfografisModel::create([
                'gambar' => 'assets/img/' . $filename,
                'jalur' => 'JPS',
                'nomor_urut' => $request->nomor_urut
            ]);

            return redirect()->route('admisi-panel')->with('success', 'Infografis berhasil ditambahkan.');
        }

        return redirect()->route('admisi-panel')->with('error', 'Gagal menambahkan infografis.');
    }


    // KELOMPOK 6
    public function postLokasiTes(Request $request)
    {
        $request->validate([
            'lokasiTes' => 'required',
            'alamatLokasi' => 'required',
        ]);

        $lokasi = new Lokasi;

        $lokasi->lokasiTes = $request->lokasiTes;
        $lokasi->alamatLokasi = $request->alamatLokasi;

        $lokasi->save();

        return redirect()->route('admisi-panel');
    }

    public function postJenisTes(Request $request)
    {
        $request->validate([
            'gelombang' => 'required',
            'jenisUjian' => 'required',
        ]);

        $jenis = new JenisTes;

        $jenis->gelombang = $request->gelombang;
        $jenis->jenisUjian = $request->jenisUjian;

        $jenis->save();
        return redirect()->route('admisi-panel');
    }

    public function addInfografisUsm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'nomor_urut' => 'required|min:0'
        ], [
            'gambar.required' => 'Jumlah SKS harus diisi.',
            'gambar.image' => 'gambar harus dalam jpeg, png, dan jpg dengan ukuran maks 1MB.',
            'nomor_urut.required' => 'Nomor Urut harus diisi.Mulai dari 0',
            'gambar.max' => 'Gambar tidak boleh lebih dari 1MB'
        ]);

        if ($validator->fails()) {
            return redirect()->route('admisi-panel')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $validator->errors()->first());
        }

        if ($request->hasFile('gambar')) {
            $photo = $request->file('gambar');
            $filename = time() . '_infografis.' . $photo->getClientOriginalExtension();
            $directory = public_path('assets/img/');

            $photo->move($directory, $filename);

            InfografisModel::create([
                'gambar' => 'assets/img/' . $filename,
                'jalur' => 'USM',
                'nomor_urut' => $request->nomor_urut
            ]);

            return redirect()->route('admisi-panel')->with('success', 'Infografis USM berhasil ditambahkan.');
        }

        return redirect()->route('admisi-panel')->with('error', 'Gagal menambahkan infografis USM.');
    }


    public function addInfografisUtbk(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'nomor_urut' => 'required|min:0'
        ], [
            'gambar.required' => 'Jumlah SKS harus diisi.',
            'gambar.image' => 'gambar harus dalam jpeg, png, dan jpg dengan ukuran maks 2MB.',
            'gambar.max' => 'Gambar tidak boleh lebih dari 2MB',
            'nomor_urut.required' => 'Nomor Urut harus diisi.Mulai dari 0',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admisi-panel')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $validator->errors()->first());
        }

        if ($request->hasFile('gambar')) {
            $photo = $request->file('gambar');
            $filename = time() . '_infografis.' . $photo->getClientOriginalExtension();
            $directory = public_path('assets/img/');

            $photo->move($directory, $filename);

            InfografisModel::create([
                'gambar' => 'assets/img/' . $filename,
                'jalur' => 'UTBK',
                'nomor_urut' => $request->nomor_urut
            ]);

            return redirect()->route('admisi-panel')->with('success', 'Infografis UTBK berhasil ditambahkan.');
        }

        return redirect()->route('admisi-panel')->with('error', 'Gagal menambahkan infografis UTBK.');
    }


    public function removeInfografis(Request $request)
    {
        $infografis = InfografisModel::find($request->id);

        if (!$infografis) {
            return redirect()->route('admisi-panel')->with('error', 'Data infografis tidak ditemukan.');
        }

        $infografis->delete();

        return redirect()->route('admisi-panel')->with('success', 'Data infografis berhasil dihapus.');
    }

    public function addJalur(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jalurPendaftaran' => 'required',
            'desk_pers_umum' => 'required',
        ], [
            'jalurPendaftaran.required' => 'Kolom Jalur Pendaftaran harus diisi.',
            'desk_pers_umum.required' => 'Kolom Deskripsi Persyaratan Umum harus diisi.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admisi-panel')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $validator->errors()->first());
        }

        try {
            JalurPendaftaranModel::create([
                'jalurPendaftaran' => $request->jalurPendaftaran,
                'desk_pers_umum' => $request->desk_pers_umum,
                'created_by' => Auth::user()->username,
                'updated_by' => Auth::user()->username,
            ]);

            return redirect()->route('admisi-panel')->with('success', 'Jalur Pendaftaran berhasil ditambahkan.');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Terjadi kesalahan saat menambahkan jalur pendaftaran.']);
        }
    }



    public function editJalur(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jalurPendaftaran' => 'required',
            'desk_pers_umum' => 'required',
        ], [
            'jalurPendaftaran.required' => 'Kolom Jalur Pendaftaran harus diisi.',
            'desk_pers_umum.required' => 'Kolom Deskripsi Persyaratan Umum harus diisi.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admisi-panel')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $validator->errors()->first());
        }

        try {
            $jalur = JalurPendaftaranModel::find($request->id);

            if (!$jalur) {
                return redirect()->route('admisi-panel')->with('error', 'Data Jalur Pendaftaran tidak ditemukan.');
            }

            $jalur->update([
                'jalurPendaftaran' => $request->jalurPendaftaran,
                'desk_pers_umum' => $request->desk_pers_umum,
                'updated_by' => Auth::user()->username
            ]);

            return redirect()->route('admisi-panel')->with('success', 'Jalur Pendaftaran berhasil diubah.');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Terjadi kesalahan saat mengubah jalur pendaftaran.']);
        }
    }


    public function addInfografis(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'nomor_urut' => 'required|min:0',
            'jalur' => 'required' // Sesuaikan dengan aturan validasi yang diperlukan
        ], [
            'gambar.required' => 'Jumlah SKS harus diisi.',
            'gambar.image' => 'gambar harus dalam jpeg, png, dan jpg dengan ukuran maks 1MB.',
            'nomor_urut.required' => 'Nomor Urut harus diisi.',
            'gambar.max' => 'Gambar tidak boleh lebih dari 1MB',
            'jalur.required' => 'Jalur pendaftaran harus diisi',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admisi-panel')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $validator->errors()->first());
        }

        try {
            $photo = $request->file('gambar');
            $filename = time() . '_infografis.' . $photo->getClientOriginalExtension();
            $directory = public_path('assets/img/');
            $photo->move($directory, $filename);

            InfografisModel::create([
                'gambar' => 'assets/img/' . $filename,
                'nomor_urut' => $request->nomor_urut,
                'jalur' => $request->jalur
            ]);

            return redirect()->back()->with('success', 'Infografis berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menambahkan infografis.');
        }
    }


    public function removeJalur(Request $request)
    {
        try {
            $jalur = JalurPendaftaranModel::where('id', $request->id)->first();
            if ($jalur) {
                $jalur->delete();
                return redirect()->route('admisi-panel')->with('success', 'Data berhasil dihapus.');
            } else {
                return redirect()->route('admisi-panel')->with('error', 'Data tidak ditemukan.');
            }
        } catch (\Exception $e) {
            return redirect()->route('admisi-panel')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function setbiayaadmin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'biayaasrama' => 'required',
            'biayamakan' => 'required',
            'biayawisuda' => 'required',
            'biayadeposit' => 'required',
            'biayatingkatakhir' => 'required',
        ], [
            'biayaasrama.required' => 'Biaya Asrama Harus diisi',
            'biayamakan.required' => 'Biaya Makan Harus diisi',
            'biayawisuda.required' => 'Biaya Wisuda Harus diisi',
            'biayadeposit.required' => 'Biaya Deposti Toga Harus diisi',
            'biayatingkatakhir.required' => 'Biaya Tingkat Akhir Harus diisi',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admisi-panel')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $validator->errors()->first());
        }

        try {
            $dataBiaya = BiayaAdminModel::first();

            // If a record exists, update it; otherwise, create a new one
            if ($dataBiaya) {
                $dataBiaya->update([
                    'biayaasrama' => $request->biayaasrama,
                    'biayamakan' => $request->biayamakan,
                    'biayawisuda' => $request->biayawisuda,
                    'biayadeposit' => $request->biayadeposit,
                    'biayatingkatakhir' => $request->biayatingkatakhir,
                ]);
            } else {
                BiayaAdminModel::create([
                    'biayaasrama' => $request->biayaasrama,
                    'biayamakan' => $request->biayamakan,
                    'biayawisuda' => $request->biayawisuda,
                    'biayadeposit' => $request->biayadeposit,
                    'biayatingkatakhir' => $request->biayatingkatakhir,
                ]);
            }

            return redirect()->route('admisi-panel')->with('success', 'Data biaya berhasil disimpan.');;
        } catch (\Exception $e) {
            return redirect()->route('admisi-panel')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    public function addJadwalPendaftaran(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jenis_jalur' => 'required',
            'tanggal_pendaftaran' => 'required',
        ], [
            'jenis_jalur.required' => 'Kolom Jalur Pendaftaran harus diisi.',
            'tanggal_pendaftaran.required' => 'Kolom Tanggal Pendaftaran harus diisi.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admisi-panel')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $validator->errors()->first());
        }

        try {
            JadwalPendaftaranModel::create([
                'jenis_jalur' => $request->jenis_jalur,
                'tanggal_pendaftaran' => $request->tanggal_pendaftaran,
                'created_by' => Auth::user()->username,
                'updated_by' => Auth::user()->username,
            ]);

            return redirect()->route('admisi-panel')->with('success', 'Jadwal pendaftaran berhasil ditambahkan.');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Terjadi kesalahan: Semua kolom harus diisi.']);
        }
    }

    public function editJadwalPendaftaran(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jenis_jalur' => 'required',
            'tanggal_pendaftaran' => 'required',
        ], [
            'jenis_jalur.required' => 'Kolom Jalur Pendaftaran harus diisi.',
            'tanggal_pendaftaran.required' => 'Kolom Tanggal Pendaftaran harus diisi.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admisi-panel')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $validator->errors()->first());
        }

        try {
            $jadwal = JadwalPendaftaranModel::find($request->id);

            if (!$jadwal) {
                return redirect()->route('admisi-panel')->with('error', 'Data Jadwal Pendaftaran tidak ditemukan.');
            }

            $jadwal->update([
                'jenis_jalur' => $request->jenis_jalur,
                'tanggal_pendaftaran' => $request->tanggal_pendaftaran,
                'updated_by' => Auth::user()->username
            ]);

            return redirect()->route('admisi-panel')->with('success', 'Jadwal Pendaftaran berhasil diubah.');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Terjadi kesalahan saat mengubah jadwal pendaftaran.']);
        }
    }


    public function removeJadwalPendaftaran(Request $request, $jadwalPendaftaran_id)
    {
        try {
            $jadwalPendaftaran = JadwalPendaftaranModel::find($jadwalPendaftaran_id);
            if ($jadwalPendaftaran) {
                $jadwalPendaftaran->delete();
                return redirect()->route('admisi-panel')->with('success', 'Data berhasil dihapus.');
            } else {
                return redirect()->route('admisi-panel')->with('error', 'Data tidak ditemukan.');
            }
        } catch (\Exception $e) {
            return redirect()->route('admisi-panel')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }


    public function postAddProdi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'program_studi' => 'required|string',
            'deskripsi_persyaratan' => 'required|string',
            'cover' => 'required|image|mimes:jpeg,jpg|max:2048',
        ], [
            'program_studi.required' => 'Kolom Program Studi harus diisi.',
            'deskripsi_persyaratan.required' => 'Kolom Deskripsi Persyaratan harus diisi.',
            'cover.required' => 'Harap unggah gambar cover.',
            'cover.image' => 'File harus berupa gambar.',
            'cover.max' => 'Ukuran gambar terlalu besar, maksimal 2MB.'
        ]);

        if ($validator->fails()) {
            return redirect()->route('admisi-panel')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $validator->errors()->first());
        }

        try {
            $auth = Auth::user();
            $photo = $request->file('cover');
            $filename = $auth->id . "_" . time() . '.' . $photo->getClientOriginalExtension();
            $directory = public_path('assets/img/');
            $photo->move($directory, $filename);
            $cover = "assets/img/" . $filename;

            prodi::create([
                "program_studi" => $request->program_studi,
                "deskripsi_persyaratan" => $request->deskripsi_persyaratan,
                "cover" => $cover
            ]);

            return redirect()->route("admisi-panel")->with('success', 'Data program studi berhasil ditambahkan.');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }


    public function postEditProdi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'program_studi' => 'required|string',
            'deskripsi_persyaratan' => 'required|string',
            'cover' => 'required|image|mimes:jpeg,jpg|max:2048',
        ], [
            'program_studi.required' => 'Kolom Program Studi harus diisi.',
            'deskripsi_persyaratan.required' => 'Kolom Deskripsi Persyaratan harus diisi.',
            'cover.required' => 'Harap unggah gambar cover.',
            'cover.image' => 'File harus berupa gambar.',
            'cover.max' => 'Ukuran gambar terlalu besar, maksimal 2MB.'
        ]);

        if ($validator->fails()) {
            return redirect()->route('admisi-panel')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $validator->errors()->first());
        }

        try {
            $auth = Auth::user();
            $prodi = Prodi::where('id', $request->id)->first();

            if (!$prodi) {
                return redirect()->route("admisi-panel")->with('error', 'Data tidak ditemukan.');
            }

            $file_cover = $request->file('cover');

            if ($file_cover) {
                $filename = $auth->id . "_" . time() . '.' . $file_cover->getClientOriginalExtension();
                $directory = public_path('assets/img/');
                $file_cover->move($directory, $filename);

                if ($prodi->cover && file_exists($prodi->cover)) {
                    unlink($prodi->cover);
                }

                $prodi->cover = "assets/img/" . $filename;
            }

            $prodi->program_studi = $request->program_studi;
            $prodi->deskripsi_persyaratan = $request->deskripsi_persyaratan;
            $prodi->save();

            return redirect()->route("admisi-panel")->with('success', 'Data program studi berhasil diubah.');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }


    public function deleteprodi($id)
    {
        try {
            // Find the record based on the ID
            $prodi = prodi::find($id);

            // Check if the record exists
            if (!$prodi) {
                return redirect()->route('admisi-panel')->with('error', 'Data tidak ditemukan.');
            }

            // Delete the record
            $prodi->delete();

            return redirect()->route('admisi-panel')->with('success', 'Data berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admisi-panel')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }



    public function addBiayaPendaftaran(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jlr_Pen' => 'required',
            'biayaPen' => 'required',
        ], [
            'jlr_Pen.required' => 'Kolom Jalur Pendaftaran harus diisi.',
            'biayaPen.required' => 'Kolom Biaya Pendaftaran harus diisi.',
        ]);
        if ($validator->fails()) {
            return redirect()->route('admisi-panel')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $validator->errors()->first());
        }

        try {
            BiayaPendaftaranModel::create([
                'jlr_Pen' => $request->jlr_Pen,
                'biayaPen' => $request->biayaPen,
            ]);

            return redirect()->route('admisi-panel')->with('success', 'Biaya Pendaftaran berhasil ditambahkan.');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }


    public function editBiayaPendaftaran(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'jlr_Pen' => 'required',
            'biayaPen' => 'required',
        ], [
            'jlr_Pen.required' => 'Kolom Jalur Pendaftaran harus diisi.',
            'biayaPen.required' => 'Kolom Biaya Pendaftaran harus diisi.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admisi-panel')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $validator->errors()->first());
        }

        try {
            $biayaPendaftaran = BiayaPendaftaranModel::find($request->id);

            if (!$biayaPendaftaran) {
                return redirect()->route('admisi-panel')->with('error', 'Data tidak ditemukan.');
            }

            $biayaPendaftaran->update([
                'jlr_Pen' => $request->jlr_Pen,
                'biayaPen' => $request->biayaPen,
            ]);

            return redirect()->route('admisi-panel')->with('success', 'Data biaya pendaftaran berhasil diubah.');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }


    public function removeBiayaPendaftaran(Request $request,)
    {
        try {
            $biayaPendaftaran = BiayaPendaftaranModel::find($request->id);
            if ($biayaPendaftaran) {
                $biayaPendaftaran->delete();
                return redirect()->route('admisi-panel')->with('success', 'Data berhasil dihapus.');
            } else {
                return redirect()->route('admisi-panel')->with('error', 'Data tidak ditemukan.');
            }
        } catch (\Exception $e) {
            return redirect()->route('admisi-panel')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }


    public function addPedomanPendaftaran(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'PedomanPendaftaran' => 'required|mimes:pdf,doc,docx|max:2048',
        ], [
            'PedomanPendaftaran.required' => 'Harap isi Pedoman Pendaftaran.',
            'PedomanPendaftaran.mimes' => 'Tipe file harus berupa PDF, DOC, atau DOCX.',
            'PedomanPendaftaran.max' => 'Ukuran file tidak boleh lebih dari 2MB.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admisi-panel')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $validator->errors()->first());
        }
        try {
            $namaFile = time() . '.' . $request->PedomanPendaftaran->extension();

            $request->PedomanPendaftaran->move(public_path('dokumenkel4'), $namaFile);

            $pedomanpendaftaran = PedomanPendaftaranModel::first();

            if ($pedomanpendaftaran) {
                // Jika sudah ada dokumen sebelumnya, gantilah dokumen tersebut
                unlink(public_path($pedomanpendaftaran->PedomanPendaftaran));
                $pedomanpendaftaran->update([
                    'PedomanPendaftaran' => 'dokumenkel4/' . $namaFile,
                ]);
            } else {
                // Jika belum ada dokumen, buat dokumen baru
                $pedomanpendaftaran = PedomanPendaftaranModel::create([
                    'PedomanPendaftaran' => 'dokumenkel4/' . $namaFile,
                ]);
            }

            return redirect()->route('admisi-panel')->with('success', 'Pedoman Pendaftaran berhasil ditambahkan.');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }


    public function downloadPedoman()
    {
        $pedomanpendaftaran = PedomanPendaftaranModel::first();

        if ($pedomanpendaftaran) {
            $file = public_path($pedomanpendaftaran->PedomanPendaftaran);

            // Mendapatkan ekstensi file
            $extension = pathinfo($file, PATHINFO_EXTENSION);

            // Membuat response dengan file yang akan didownload
            $headers = [
                'Content-Type' => 'application/' . $extension,
            ];

            return response()->download($file, 'PedomanPendaftaran.' . $extension, $headers);
        } else {
            // Handle jika tidak ada file
            return redirect()->route('admisi-panel')->with('error', 'Dokumen tidak ditemukan.');
        }
    }


    public function addPdfbiaya(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'PdfbiayaPendaftaran' => 'required|mimes:pdf,doc,docx|max:2048',
        ], [
            'PdfbiayaPendaftaran.required' => 'Harap isi Dokumen Biaya Pendaftaran.',
            'PdfbiayaPendaftaran.mimes' => 'Tipe file harus berupa PDF, DOC, atau DOCX.',
            'PdfbiayaPendaftaran.max' => 'Ukuran file tidak boleh lebih dari 2MB.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admisi-panel')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $validator->errors()->first());
        }

        try {
            $namaFile = time() . '.' . $request->PdfbiayaPendaftaran->extension();

            $request->PdfbiayaPendaftaran->move(public_path('dokumentkel4'), $namaFile);

            $PdfbiayaPendaftaran = PdfBiayaModel::first();

            if ($PdfbiayaPendaftaran) {
                // Jika sudah ada dokumen sebelumnya, gantilah dokumen tersebut
                unlink(public_path($PdfbiayaPendaftaran->PdfbiayaPendaftaran));
                $PdfbiayaPendaftaran->update([
                    'PdfbiayaPendaftaran' => 'dokumentkel4/' . $namaFile,
                ]);
            } else {
                // Jika belum ada dokumen, buat dokumen baru
                $PdfbiayaPendaftaran = PdfBiayaModel::create([
                    'PdfbiayaPendaftaran' => 'dokumentkel4/' . $namaFile,
                ]);
            }

            return redirect()->route('admisi-panel')->with('success', 'File biaya pendaftaran berhasil diunggah.');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Terjadi kesalahan saat mengunggah file.']);
        }
    }


    public function downloadPdfBiaya()
    {
        $PdfbiayaPendaftaran = PdfBiayaModel::first();

        if ($PdfbiayaPendaftaran) {
            $file = public_path($PdfbiayaPendaftaran->PdfbiayaPendaftaran);

            // Mendapatkan ekstensi file
            $extension = pathinfo($file, PATHINFO_EXTENSION);

            // Membuat response dengan file yang akan didownload
            $headers = [
                'Content-Type' => 'application/' . $extension,
            ];

            return response()->download($file, 'PdfbiayaPendaftaran.' . $extension, $headers);
        } else {
            // Handle jika tidak ada file
            return redirect()->route('admisi-panel')->with('error', 'Dokumen tidak ditemukan.');
        }
    }



    public function addBiayaStudi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fakultas' => 'required|string',
            'pro_stud' => 'nullable|string',
            'biaya_spp' => 'required|numeric',
            'uang_pengembangan' => 'required|numeric',
            'uang_pangkal' => 'required|numeric',
            'perlengkapan_mahasiswa' => 'required|numeric',
            'perlengkapan_makan' => 'required|numeric',
        ], [
            'fakultas.required' => 'Kolom Fakultas harus diisi.',
            'pro_stud.string' => 'Format Program Studi salah.',
            'biaya_spp.required' => 'Kolom Biaya SPP harus diisi.',
            'biaya_spp.numeric' => 'Kolom Biaya SPP harus berupa angka.',
            'uang_pengembangan.required' => 'Kolom Uang Pengembangan harus diisi.',
            'uang_pengembangan.numeric' => 'Kolom Uang Pengembangan harus berupa angka.',
            'uang_pangkal.required' => 'Kolom Uang Pangkal harus diisi.',
            'uang_pangkal.numeric' => 'Kolom Uang Pangkal harus berupa angka.',
            'perlengkapan_mahasiswa.required' => 'Kolom Perlengkapan Mahasiswa harus diisi.',
            'perlengkapan_mahasiswa.numeric' => 'Kolom Perlengkapan Mahasiswa harus berupa angka.',
            'perlengkapan_makan.required' => 'Kolom Perlengkapan Makan harus diisi.',
            'perlengkapan_makan.numeric' => 'Kolom Perlengkapan Makan harus berupa angka.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admisi-panel')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $validator->errors()->first());
        }

        try {
            BiayaStudi::create([
                'fakultas' => $request->fakultas,
                'pro_stud' => $request->pro_stud,
                'biaya_spp' => $request->biaya_spp,
                'uang_pengembangan' => $request->uang_pengembangan,
                'uang_pangkal' => $request->uang_pangkal,
                'perlengkapan_mahasiswa' => $request->perlengkapan_mahasiswa,
                'perlengkapan_makan' => $request->perlengkapan_makan,
            ]);

            return redirect()->route('admisi-panel')->with('success', 'Data berhasil ditambahkan.');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Terjadi kesalahan saat menambah data.']);
        }
    }


    public function editBiayaStudi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'fakultas' => 'required',
            'pro_stud' => 'required',
            'biaya_spp' => 'required',
            'uang_pengembangan' => 'required',
            'uang_pangkal' => 'required',
            'perlengkapan_mahasiswa' => 'required',
            'perlengkapan_makan' => 'required',
        ], [
            'id.required' => 'Kolom ID dibutuhkan.',
            'fakultas.required' => 'Kolom Fakultas harus diisi.',
            'pro_stud.required' => 'Kolom Program Studi harus diisi.',
            'biaya_spp.required' => 'Kolom Biaya SPP harus diisi.',
            'uang_pengembangan.required' => 'Kolom Uang Pengembangan harus diisi.',
            'uang_pangkal.required' => 'Kolom Uang Pangkal harus diisi.',
            'perlengkapan_mahasiswa.required' => 'Kolom Perlengkapan Mahasiswa harus diisi.',
            'perlengkapan_makan.required' => 'Kolom Perlengkapan Makan harus diisi.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admisi-panel')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $validator->errors()->first());
        }

        try {
            BiayaStudi::where('id', $request->id)->update([
                'biaya_spp' => $request->biaya_spp,
                'uang_pengembangan' => $request->uang_pengembangan,
                'uang_pangkal' => $request->uang_pangkal,
                'perlengkapan_mahasiswa' => $request->perlengkapan_mahasiswa,
                'perlengkapan_makan' => $request->perlengkapan_makan,
            ]);

            return redirect()->route('admisi-panel')->with('success', 'Data berhasil diperbarui!');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Terjadi kesalahan saat memperbarui data.']);
        }
    }



    public function removeBiayaStudi(Request $request)
    {
        try {
            $biayaStudi = BiayaStudi::find($request->id);

            if (!$biayaStudi) {
                return redirect()->route('admisi-panel')->with('error', 'Data tidak ditemukan.');
            }

            $biayaStudi->delete();
            return redirect()->route('admisi-panel')->with('success', 'Data berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admisi-panel')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function editInfografis(Request $request)
    {
        // Validation
        $this->validate($request, [
            'id' => 'required|exists:infografis_admisi,id',
            'nomor_urut' => 'required|integer',
            'gambar' => 'image|max:2048|nullable',
        ]);

        try {
            $auth = Auth::user();
            $infografis = InfografisModel::findOrFail($request->id);

            if (!$infografis) {
                return redirect()->route("admisi-panel")->with('error', 'Data tidak ditemukan.');
            }

            $file_gambar = $request->file('gambar');

            if ($file_gambar) {
                $filename = $auth->id . "_" . time() . '.' . $file_gambar->getClientOriginalExtension();
                $directory = public_path('assets/img/');
                $file_gambar->move($directory, $filename);

                if ($infografis->gambar && file_exists($infografis->gambar)) {
                    unlink($infografis->gambar);
                }

                $infografis->gambar = "assets/img/" . $filename;
            }

            $infografis->nomor_urut = $request->nomor_urut;
            $infografis->save();

            return redirect()->route("admisi-panel")->with('success', 'Data berhasil diubah.');
        } catch (\Exception $e) {
            // Handle any exceptions, log or redirect with an error message
            return redirect()->route("admisi-panel")->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
