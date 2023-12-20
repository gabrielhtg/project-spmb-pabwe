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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdmisiController extends Controller
{
    public function setHeader (Request $request) {
        $modelAdmisi = ModelHeaderAdmisi::where('id', 1)->first();

        if ($request->header_admisi) {
            $this->validate($request, [
                'header_admisi' => 'image|mimes:jpeg,png,jpg|max:1024',
            ]);

            $photo = $request->file('header_admisi');

            $filename = 'header_admisi.' . $photo->getClientOriginalExtension();

            // Menentukan direktori tempat penyimpanan file di dalam direktori 'public'
            $directory = public_path('assets/img/admisi/');

            // Menghapus photo lama jika ada
            if ($modelAdmisi->letak_foto && file_exists($modelAdmisi->letak_foto)) {
                unlink($modelAdmisi->letak_foto);
            }

            //Pindahkan file ke direktori yang diinginkan
            $photo->move($directory, $filename);

            $modelAdmisi->letak_foto = 'assets/img/admisi/' . $filename;

            $modelAdmisi->update();

            return redirect()->route('admisi-panel');
        }


        return redirect()->route('admisi-panel');
    }

    public function addMbkmNonKompetisi(Request $request) {
        MbkmModel::create([
            'jenis_kegiatan' => 'Non Kompetisi',
            'jumlah_sks' => $request->jumlah_sks,
            'potongan_spp' => $request->potongan_spp,
            'updated_by' => Auth::user()->username,
            'created_by' => Auth::user()->username,
            'updated_at' => now(),
            'created_at' => now()
        ]);

        return redirect()->route('admisi-panel');
    }

    public function addMbkmKompetisi(Request $request) {
        MbkmModel::create([
            'jenis_kegiatan' => 'Kompetisi',
            'jumlah_sks' => $request->jumlah_sks,
            'potongan_spp' => $request->potongan_spp,
            'updated_by' => Auth::user()->username,
            'created_by' => Auth::user()->username,
            'updated_at' => now(),
            'created_at' => now()
        ]);

        return redirect()->route('admisi-panel');
    }

    public function removeMbkm (Request $request) {
        MbkmModel::where('id', $request->id)->first()->delete();

        return redirect()->route('admisi-panel');
    }

    public function addInfografisPmdk (Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'nomor_urut' => 'required|min:0'
        ]);
//         Mengambil file yang sudah divalidasi dari request
        $photo = $request->file('gambar');

        // Membuat nama unik untuk file yang diunggah
        $filename = time() . '_infografis.' . $photo->getClientOriginalExtension();

        // Menentukan direktori tempat penyimpanan file di dalam direktori 'public'
        $directory = public_path('assets/img/');

        //Pindahkan file ke direktori yang diinginkan
        $photo->move($directory, $filename);

        InfografisModel::create([
            'gambar' => 'assets/img/' . $filename,
            'jalur' => 'PMDK',
            'nomor_urut' => $request->nomor_urut
        ]);

        return redirect()->route('admisi-panel');
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

    public function addInfografisUsm (Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'nomor_urut' => 'required|min:0'
        ]);
//         Mengambil file yang sudah divalidasi dari request
        $photo = $request->file('gambar');

        // Membuat nama unik untuk file yang diunggah
        $filename = time() . '_infografis.' . $photo->getClientOriginalExtension();

        // Menentukan direktori tempat penyimpanan file di dalam direktori 'public'
        $directory = public_path('assets/img/');

        //Pindahkan file ke direktori yang diinginkan
        $photo->move($directory, $filename);

        InfografisModel::create([
            'gambar' => 'assets/img/' . $filename,
            'jalur' => 'USM',
            'nomor_urut' => $request->nomor_urut
        ]);

        return redirect()->route('admisi-panel');
    }

    public function addInfografisUtbk (Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'nomor_urut' => 'required|min:0'
        ]);
//         Mengambil file yang sudah divalidasi dari request
        $photo = $request->file('gambar');

        // Membuat nama unik untuk file yang diunggah
        $filename = time() . '_infografis.' . $photo->getClientOriginalExtension();

        // Menentukan direktori tempat penyimpanan file di dalam direktori 'public'
        $directory = public_path('assets/img/');

        //Pindahkan file ke direktori yang diinginkan
        $photo->move($directory, $filename);

        InfografisModel::create([
            'gambar' => 'assets/img/' . $filename,
            'jalur' => 'UTBK',
            'nomor_urut' => $request->nomor_urut
        ]);

        return redirect()->route('admisi-panel');
    }

    public function removeInfografis (Request $request) {
        InfografisModel::where('id', $request->id)->delete();

        return redirect()->route('admisi-panel');
    }

    public function addJalur(Request $request)
    {
        $request->validate([
            'jalurPendaftaran'=>'required',
            'desk_pers_umum'=>'required',
        ],[
            'jalurPendaftaran.required' => 'Kolom Jalur Pendaftaran harus diisi.',
            'desk_pers_umum.required' => 'Kolom Deskripsi Persyaratan Umum harus diisi.',
        ]);
        try {
            JalurPendaftaranModel::create([
                'jalurPendaftaran' => $request->jalurPendaftaran,
                'desk_pers_umum' => $request->desk_pers_umum,
                'created_by' => Auth::user()->username,
                'updated_by' => Auth::user()->username,
            ]);
    
            return redirect()->route('admisi-panel');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Semua Kolom Harus diisi.']);
        }
    }


    public function editJalur (Request $request) {

        $request->validate([
            'jalurPendaftaran'=>'required',
            'desk_pers_umum'=>'required',
        ],[
            'jalurPendaftaran.required' => 'Kolom Jalur Pendaftaran harus diisi.',
            'desk_pers_umum.required' => 'Kolom Deskripsi Persyaratan Umum harus diisi.',
        ]);

        
        try{
            JalurPendaftaranModel::where('id', $request->id)->update([
                'jalurPendaftaran' => $request->jalurPendaftaran,
                'desk_pers_umum' => $request->desk_pers_umum,
                'updated_by' => Auth::user()->username
            ]);
               
            return redirect()->route('admisi-panel');
        }

        catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Semua Kolom Harus diisi.']);
        }
    }

    public function removeJalur(Request $request, $jalur_id) {
        try {
            $jalur = JalurPendaftaranModel::find($jalur_id);
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
    $request->validate([
        'biayaasrama' => 'required',
        'biayamakan' => 'required',
        'biayawisuda' => 'required',
        'biayadeposit' => 'required',
        'biayatingkatakhir' => 'required',
    ], [
        'biayaasrama.required' => 'ISI KALIAN INI WOI'
    ]);

    // Find the existing record or create a new one
    $dataBiaya = BiayaAdminModel::first();

    // If a record exists, update it; otherwise, create a new one
    if ($dataBiaya) {
        $dataBiaya->update([
            'biayaasrama' => $request->biayaasrama,
            'biayamakan' => $request->biayamakan,
            'biayawisuda' => $request->biayawisuda,
            'biayadeposit' => $request->biayadeposit,
            'biayatingkatakhir' => $request->biayatingkatakhir,
            'biayaUangPangkal' => $request->biayaUangPangkal,
            'biayaPerlengkapanMahasiswa' => $request->biayaPerlengkapanMahasiswa,
            'biayaPerlengkapanMakan' => $request->biayaPerlengkapanMakan,
        ]);
    } else {
        BiayaAdminModel::create([
            'biayaasrama' => $request->biayaasrama,
            'biayamakan' => $request->biayamakan,
            'biayawisuda' => $request->biayawisuda,
            'biayadeposit' => $request->biayadeposit,
            'biayatingkatakhir' => $request->biayatingkatakhir,
            'biayaUangPangkal' => $request->biayaUangPangkal,
            'biayaPerlengkapanMahasiswa' => $request->biayaPerlengkapanMahasiswa,
            'biayaPerlengkapanMakan' => $request->biayaPerlengkapanMakan,
        ]);
    }

    return redirect()->route('admin-panel');
}


    public function addJadwalPendaftaran(Request $request)
    {
        $request->validate([
            'jenis_jalur'=>'required',
            'tanggal_pendaftaran'=>'required',
        ],[
            'jenis_jalur.required' => 'Kolom Jalur Pendaftaran harus diisi.',
            'tanggal_pendaftaran.required' => 'Kolom Deskripsi Persyaratan Umum harus diisi.',
        ]);
        try {
            JadwalPendaftaranModel::create([
                'jenis_jalur' => $request->jenis_jalur,
                'tanggal_pendaftaran' => $request->tanggal_pendaftaran,
                'created_by' => Auth::user()->username,
                'updated_by' => Auth::user()->username,
            ]);
    
            return redirect()->route('admisi-panel');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Semua Kolom Harus diisi.']);
        }
    }

    public function editJadwalPendaftaran (Request $request) {

        $request->validate([
            'id' => 'required',
            'jenis_jalur'=>'required',
            'tanggal_pendaftaran'=>'required',
        ],[
            'jenis_jalur.required' => 'Kolom Jalur Pendaftaran harus diisi.',
            'tanggal_pendaftaran.required' => 'Kolom Deskripsi Persyaratan Umum harus diisi.',
        ]);

        
        try{
            JadwalPendaftaranModel::where('id', $request->id)->update([
                'jenis_jalur' => $request->jenis_jalur,
                'tanggal_pendaftaran' => $request->tanggal_pendaftaran,
                'updated_by' => Auth::user()->username
            ]);
               
            return redirect()->route('admisi-panel');
        }

        catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Semua Kolom Harus diisi.']);
        }
    }

    public function removeJadwalPendaftaran(Request $request, $jadwalPendaftaran_id) {
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

    public function postAddProdi(Request $request){

        $this->validate($request, [
            'program_studi' => 'required|string',
            'deskripsi_persyaratan' => 'required|string',
            'cover' => 'required|image|max:2048',
        ]);

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

        return redirect()->route("admisi-panel");
    }

    public function postEditProdi(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|exists:prodi,id',
            'program_studi' => 'string|nullable',
            'deskripsi_persyaratan' => 'string|nullable',
            'cover' => 'image|max:2048|nullable',
        ]);

        $auth = Auth::user();

        $prodi = Prodi::where('id', $request->id)->first();

        if (!$prodi) {
           return redirect()->route("admisi-panel");
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

        return redirect()->route("admisi-panel");
    }

    public function deleteprodi($id)
    {
        // Find the record based on the ID
        $prodi = prodi::find($id);

        // Check if the record exists
        if (!$prodi) {
            return redirect()->route('admisi-panel');
        }

        // Delete the record
        $prodi->delete();

        return redirect()->route('admisi-panel');
    }

    
    public function addBiayaPendaftaran(Request $request)
    {
        $request->validate([
            'jlr_Pen'=>'required',
            'biayaPen'=>'required',
        ],[
            'jlr_Pen.required' => 'Kolom Jalur Pendaftaran harus diisi.',
            'biayaPen.required' => 'Kolom Deskripsi Persyaratan Umum harus diisi.',
        ]);
        try {
            BiayaPendaftaranModel::create([
                'jlr_Pen' => $request->jlr_Pen,
                'biayaPen' => $request->biayaPen,
            ]);
    
            return redirect()->route('admisi-panel');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Semua Kolom Harus diisi.']);
        }
    }

    public function editBiayaPendaftaran (Request $request) {

        $request->validate([
            'id' => 'required',
            'jlr_Pen'=>'required',
            'biayaPen'=>'required',
        ],[
            'jlr_Pen.required' => 'Kolom Jalur Pendaftaran harus diisi.',
            'biayaPen.required' => 'Kolom Deskripsi Persyaratan Umum harus diisi.',
        ]);

        
        try{
            BiayaPendaftaranModel::where('id', $request->id)->update([
                'jlr_Pen' => $request->jlr_Pen,
                'biayaPen' => $request->biayaPen,
            ]);
               
            return redirect()->route('admisi-panel');
        }

        catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Semua Kolom Harus diisi.']);
        }
    }

    public function removeBiayaPendaftaran(Request $request, $biayaPendaftaran_id) {
        try {
            $biayaPendaftaran = BiayaPendaftaranModel::find($biayaPendaftaran_id);
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
        $request->validate([
            'PedomanPendaftaran' => 'required|mimes:pdf,doc,docx|max:2048',
        ], [
            'PedomanPendaftaran.required' => 'Harap isi Pedoman Pendaftaran.',
        ]);

        $namaFile = time().'.'.$request->PedomanPendaftaran->extension();

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

        return redirect()->route('admisi-panel');
        // return view('admisi-panel;', compact('pedomanpendaftaran'));
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
        $request->validate([
            'PdfbiayaPendaftaran' => 'required|mimes:pdf,doc,docx|max:2048',
        ], [
            'PdfbiayaPendaftaran.required' => 'Harap isi.',
        ]);

        $namaFile = time().'.'.$request->PdfbiayaPendaftaran->extension();

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

        return redirect()->route('admisi-panel');
        // return view('admisi-panel;', compact('pedomanpendaftaran'));
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

    
}
