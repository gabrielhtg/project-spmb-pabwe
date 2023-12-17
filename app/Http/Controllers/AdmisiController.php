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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdmisiController extends Controller
{
    public function setHeader(Request $request)
{
    $modelAdmisi = ModelHeaderAdmisi::where('id', 1)->first();

    if ($request->header_admisi) {
        $this->validate($request, [
            'header_admisi' => 'image|mimes:jpeg,png,jpg|max:1024',
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


public function addMbkmNonKompetisi(Request $request) {
    $validator = Validator::make($request->all(), [
        'jumlah_sks' => 'required', // Sesuaikan aturan validasi sesuai kebutuhan
        'potongan_spp' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect()->route('admisi-panel')->withErrors($validator)->withInput()->with('error', 'Terdapat kesalahan dalam input data.');
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


public function addMbkmKompetisi(Request $request) {
    $validator = Validator::make($request->all(), [
        'jumlah_sks' => 'required', // Sesuaikan aturan validasi sesuai kebutuhan
        'potongan_spp' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect()->route('admisi-panel')->withErrors($validator)->withInput();
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


public function removeMbkm(Request $request) {
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
        'gambar' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        'nomor_urut' => 'required|min:0'
    ]);

    if ($validator->fails()) {
        return redirect()->route('admisi-panel')->withErrors($validator)->withInput();
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
        'gambar' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        'nomor_urut' => 'required|min:0'
    ]);

    if ($validator->fails()) {
        return redirect()->route('admisi-panel')->withErrors($validator)->withInput();
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
        'gambar' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        'nomor_urut' => 'required|min:0'
    ]);

    if ($validator->fails()) {
        return redirect()->route('admisi-panel')->withErrors($validator)->withInput();
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
        return redirect()->route('admisi-panel')->withErrors($validator)->withInput();
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
        return redirect()->route('admisi-panel')->withErrors($validator)->withInput();
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
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
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


    public function removeJalur(Request $request) {
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
    $request->validate([
        'biayaasrama' => 'required',
        'biayamakan' => 'required',
        'biayawisuda' => 'required',
        'biayadeposit' => 'required',
        'biayatingkatakhir' => 'required',
    ]);

    try {
        // Find the existing record or create a new one
        $dataBiaya = BiayaAdminModel::firstOrNew();

        // Update or create a new record based on its existence
        $dataBiaya->update([
            'biayaasrama' => $request->biayaasrama,
            'biayamakan' => $request->biayamakan,
            'biayawisuda' => $request->biayawisuda,
            'biayadeposit' => $request->biayadeposit,
            'biayatingkatakhir' => $request->biayatingkatakhir,
        ]);

        return redirect()->route('admin-panel')->with('success', 'Data biaya berhasil disimpan.');
    } catch (\Exception $e) {
        return redirect()->route('admin-panel')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
}

    public function addJadwalPendaftaran(Request $request)
    {
        $request->validate([
            'jenis_jalur'=>'required',
            'tanggal_pendaftaran'=>'required',
        ],[
            'jenis_jalur.required' => 'Kolom Jalur Pendaftaran harus diisi.',
            'tanggal_pendaftaran.required' => 'Kolom Tanggal Pendaftaran harus diisi.',
        ]);
    
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
        $request->validate([
            'id' => 'required',
            'jenis_jalur' => 'required',
            'tanggal_pendaftaran' => 'required',
        ], [
            'jenis_jalur.required' => 'Kolom Jalur Pendaftaran harus diisi.',
            'tanggal_pendaftaran.required' => 'Kolom Tanggal Pendaftaran harus diisi.',
        ]);
    
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
    $this->validate($request, [
        'program_studi' => 'required|string',
        'deskripsi_persyaratan' => 'required|string',
        'cover' => 'required|image|max:2048',
    ], [
        'program_studi.required' => 'Kolom Program Studi harus diisi.',
        'deskripsi_persyaratan.required' => 'Kolom Deskripsi Persyaratan harus diisi.',
        'cover.required' => 'Harap unggah gambar cover.',
        'cover.image' => 'File harus berupa gambar.',
        'cover.max' => 'Ukuran gambar terlalu besar, maksimal 2MB.'
    ]);

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
    $this->validate($request, [
        'id' => 'required|exists:prodi,id',
        'program_studi' => 'string|nullable',
        'deskripsi_persyaratan' => 'string|nullable',
        'cover' => 'image|max:2048|nullable',
    ]);

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
    $request->validate([
        'jlr_Pen'=>'required',
        'biayaPen'=>'required',
    ],[
        'jlr_Pen.required' => 'Kolom Jalur Pendaftaran harus diisi.',
        'biayaPen.required' => 'Kolom Biaya Pendaftaran harus diisi.',
    ]);

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
    $request->validate([
        'id' => 'required',
        'jlr_Pen' => 'required',
        'biayaPen' => 'required',
    ], [
        'jlr_Pen.required' => 'Kolom Jalur Pendaftaran harus diisi.',
        'biayaPen.required' => 'Kolom Biaya Pendaftaran harus diisi.',
    ]);

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
        'PedomanPendaftaran.mimes' => 'Tipe file harus berupa PDF, DOC, atau DOCX.',
        'PedomanPendaftaran.max' => 'Ukuran file tidak boleh lebih dari 2MB.',
    ]);

    try {
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

        return response()->download($file, 'PedomanPendaftaran.' . $extension, $headers)
            ->with('success', 'Download Pedoman Pendaftaran berhasil.');
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
    $request->validate([
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
    $request->validate([
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

    try {
        BiayaStudi::where('id', $request->id)->update([
            'biaya_spp' => $request->biaya_spp,
            'uang_pengembangan' => $request->uang_pengembangan,
            'uang_pangkal' => $request->uang_pangkal,
            'perlengkapan_mahasiswa' => $request->perlengkapan_mahasiswa,
            'perlengkapan_makan' => $request->perlengkapan_makan,
        ]);
        
        return redirect()->route('admisi-panel')->with('success', 'Data berhasil diperbarui!');
    } catch(\Exception $e) {
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


}
