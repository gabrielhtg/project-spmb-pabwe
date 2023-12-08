@extends('template.admin-panel-template')

@section('isi-admin-panel')
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

<section id="program-pagination">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a href="#" id="fakultas-hyperlink" class="py-3 nav-link active" aria-current="page" onclick="showFakultasSubPage()">Fakultas</a>
        </li>
        <li class="nav-item">
            <a href="#" id="prodi-hyperlink" class="py-3 nav-link" onclick="showProdiSubPage()">Prodi</a>
        </li>
        <li class="nav-item">
            <a href="#" id="dosen-hyperlink" class="py-3 nav-link" onclick="showDosenSubPage()">Dosen/Staff</a>
        </li>
        <li class="nav-item">
            <a href="#" id="kurikulum-hyperlink" class="py-3 nav-link" onclick="showKurikulumSubPage()">Kurikulum</a>
        </li>
    </ul>
</section>

{{-- FAKULTAS SUBPAGE --}}
<section id="fakultas-subpage" class="m-3">

    {{-- Button Tambah Fakultas --}}
    <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#myModal">
        Tambah Fakultas
    </button>

    {{-- Read Fakultas --}}
    <div id="item-2" class="card">
        <div class="card-header bg-primary text-white">
            <span>Data Fakultas</span>
        </div>
        <div class="card-body d-flex flex-column">
            <table class="table text-start align-middle table-striped table-bordered">
                <thead class="align-middle">
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Visi</th>
                        <th scope="col">Misi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($faculties as $faculty)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $faculty->nama }}</td>
                            <td class="text-center">{{ $faculty->kode_fakultas }}</td>
                            <td>{{ $faculty->deskripsi }}</td>
                            <td>{{ $faculty->lokasi }}</td>
                            <td>{{ $faculty->visi }}</td>
                            <td>{{ $faculty->misi }}</td>
                            <td class="text-center">
                                <img src="{{ asset('storage/' . $faculty->gambar) }}" alt="Gambar Fakultas" style="max-width: 100px;">
                            </td>
                            <td class="text-center" style="min-width: 120px; width: 120px">
                                
                                <form action="{{ route('admin.program.faculty.destroy', $faculty->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModaleditfakultas-{{ $faculty->id }}" >
                                    <i class="bi bi-pen"></i>
                                </button>
                                    <button type="submit" class="btn btn-danger" onclick="deleteFaculty({{ $faculty->id }})">
                                                    <i class="bi bi-trash"></i>
                                </button>
                                </form>
                            </td>
                        </tr>

                        {{-- Edit Fakultas --}}
                        <div class="modal fade" id="myModaleditfakultas-{{ $faculty->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Fakultas</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card-body">
                                            <!-- Form untuk edit -->
                                            <form action="{{ route('faculty.update', $faculty->id) }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT') <!-- Gunakan metode PUT untuk update -->
                                                <div class="mb-3">
                                                    <label for="input_nama_fakultas" class="form-label">Nama Fakultas</label>
                                                    <input type="text" class="form-control" id="input_nama_fakultas" name="nama" value="{{ old('nama', $faculty->nama) }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_kode_fakultas" class="form-label">Kode Fakultas</label>
                                                    <input type="text" class="form-control" id="input_kode_fakultas" name="kode_fakultas" value="{{ old('kode_fakultas', $faculty->kode_fakultas) }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_deskripsi_fakultas" class="form-label">Deskripsi Fakultas</label>
                                                    <textarea class="form-control" id="edit_deskripsi_fakultas_{{ $faculty->id }}" name="deskripsi">{{ old('deskripsi', $faculty->deskripsi) }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_lokasi_fakultas" class="form-label">Lokasi Fakultas</label>
                                                    <input type="text" class="form-control" id="input_lokasi_fakultas_{{ $faculty->id }}" name="lokasi" value="{{ old('lokasi', $faculty->lokasi) }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_visi_fakultas" class="form-label">Visi Fakultas</label>
                                                    <textarea class="form-control" id="edit_visi_fakultas_{{ $faculty->id }}" name="visi">{{ old('visi', $faculty->visi) }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_misi_fakultas" class="form-label">Misi Fakultas</label>
                                                    <textarea class="form-control" id="edit_misi_fakultas_{{ $faculty->id }}" name="misi">{{ old('misi', $faculty->misi) }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_sertifikat_akreditasi" class="form-label">Gambar Fakultas</label>
                                                    <input class="form-control" type="file" id="input_sertifikat_akreditasi" name="gambar" multiple >
                                                    <img src="{{ asset('storage/' . $faculty->gambar) }}" alt="Gambar Fakultas" style="max-width: 100px;">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Create Fakultas -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title" id="exampleModalLabel">Tambah Fakultas</span>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="{{ route('faculties.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="input_nama_fakultas" class="form-label">Nama Fakultas</label>
                                <input type="text" class="form-control" id="input_nama_fakultas" name="nama">
                            </div>
                            <div class="mb-3">
                                <label for="input_kode_fakultas" class="form-label">Kode Fakultas</label>
                                <input type="text" class="form-control" id="input_kode_fakultas" name="kode_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_deskripsi_fakultas" class="form-label">Deskripsi Fakultas</label>
                                <textarea class="form-control" id="deskripsi_fakultas" name="deskripsi"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="input_lokasi_fakultas" class="form-label">Lokasi Fakultas</label>
                                <input type="text" class="form-control" id="input_lokasi_fakultas" name="lokasi">
                            </div>
                            <div class="mb-3">
                                <label for="input_visi_fakultas" class="form-label">Visi Fakultas</label>
                                <textarea class="form-control" id="visi_fakultas" name="visi"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="input_misi_fakultas" class="form-label">Misi Fakultas</label>
                                <textarea class="form-control" id="misi_fakultas" name="misi"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="input_gambar_fakultas" class="form-label">Gambar Fakultas</label>
                                <input class="form-control" type="file" id="input_gambar_fakultas" name="gambar" accept="image/*" multiple>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Fakultas -->
    <div class="modal fade" id="myModaleditfakultas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Fakultas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="input_nama_fakultas" class="form-label">Nama Fakultas</label>
                                <input type="text" class="form-control" id="input_nama_fakultas" name="input_nama_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_nama_fakultas" class="form-label">Kode Fakultas</label>
                                <input type="text" class="form-control" id="input_nama_fakultas" name="input_nama_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_deskripsi_fakultas" class="form-label">Deskripsi Fakultas</label>
                                <div id="edit_deskripsi_fakultas"></div>

                            </div>
                            <div class="mb-3">
                                <label for="input_lokasi_fakultas" class="form-label">Lokasi Fakultas</label>
                                <input type="text" class="form-control" id="input_lokasi_fakultas" name="input_lokasi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_visi_fakultas" class="form-label">Visi Fakultas</label>
                                <div id="edit_visi_fakultas"></div>
                            </div>
                            <div class="mb-3">
                                <label for="input_misi_fakultas" class="form-label">Misi Fakultas</label>
                                <div id="edit_misi_fakultas"></div>
                            </div>
                            <div class="mb-3">
                                <label for="input_sertifikat_akreditasi" class="form-label">Gambar Fakultas</label>
                                <input class="form-control" type="file" id="input_sertifikat_akreditasi" name="input_sertifikat_akreditasi" multiple>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>

</section>

{{-- PRODI SECTION --}}
<section id="prodi-subpage" class="m-3 d-none">

    {{-- Button Add Prodi --}}
    <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#myModalProdi">
        Tambah Data Prodi
    </button>

    {{-- Read Prodi --}}
    <div id="item-2" class="card">
        <div class="card-header bg-primary text-white">
            <span>Data Prodi</span>
        </div>
        <div class="card-body d-flex flex-column">
            <form action="">
                <table class="table text-center align-middle table-striped table-bordered">
                    <thead class="align-middle">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Prodi</th>
                        <th scope="col">Fakultas</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Visi</th>
                        <th scope="col">Misi</th>
                        <th scope="col">Prospek</th>
                        <th scope="col">Gelar</th>
                        <th scope="col">Lama</th>
                        <th scope="col">Biaya</th>
                        <th scope="col">Syarat</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Akreditasi</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($majors as $major)
                            <tr>
                                <td>{{ $major->id }}</td>
                                <td>{{ $major->nama }}</td>
                                <td>{{ $major->kode_prodi }}</td>
                                <td>{{ optional($major->faculty)->nama }}</td>
                                <td>{{ $major->deskripsi }}</td>
                                <td>{{ $major->gambar }}</td>
                                <td>{{ $major->visi }}</td>
                                <td>{{ $major->misi }}</td>
                                <td>{{ $major->prospek }}</td>
                                <td>{{ $major->gelar }}</td>
                                <td>{{ $major->lama }}</td>
                                <td>{{ $major->biaya }}</td>
                                <td>{{ $major->syarat }}</td>
                                <td>{{ $major->lokasi }}</td>
                                <td>{{ $major->akreditasi }}</td>
                                <td style="min-width: 120px; width: 120px">
                                    <form action="{{ route('admin.program.major.destroy', $major->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#popupUpdateProdi-{{ $major->id }}" >
                                            <i class="bi bi-pen"></i>
                                        </button>
                                        <button type="submit" class="btn btn-danger" onclick="deleteMajor({{ $major->id }})">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <!-- Update Prodi -->
                            <div class="modal fade" id="popupUpdateProdi-{{ $major->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Prodi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('major.update', $major->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="modal-body">
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <label for="input_misi_fakultas" class="form-label">Kode Prodi</label>
                                                        <input type="text" class="form-control" id="editKodeProdi" name="kode_prodi" value="{{ $major->kode_prodi }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_nama_fakultas" class="form-label">Nama Prodi</label>
                                                        <input type="text" class="form-control" id="editNamaProdi" name="nama" value="{{ $major->nama }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_misi_fakultas" class="form-label">Kode Fakultas</label>
                                                        <input type="text" class="form-control" id="editKodeFakultas" name="kode_fakultas" value="{{ $major->kode_fakultas }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_deskripsi_fakultas" class="form-label">Deskripsi Prodi</label>
                                                        <textarea id="edit_deskripsi_prodi" class="form-control" name="deskripsi"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_sertifikat_akreditasi" class="form-label">Gambar Prodi</label>
                                                        <input class="form-control" type="file" id="editGambarProdi" name="gambar" value="{{ $major->gambar }}" multiple>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_lokasi_fakultas" class="form-label">Visi</label>
                                                        <textarea id="edit_visi_prodi" class="form-control" name="visi"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_visi_fakultas" class="form-label">Misi</label>
                                                        <textarea id="edit_misi_prodi" class="form-control" name="misi"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_misi_fakultas" class="form-label">Prospek</label>
                                                        <textarea id="edit_prospek_prodi" class="form-control" name="prospek"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_misi_fakultas" class="form-label">Gelar</label>
                                                        <input type="text" class="form-control" id="editGelarProdi" name="gelar" value="{{ $major->gelar }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_misi_fakultas" class="form-label">Lama Studi</label>
                                                        <input type="text" class="form-control" id="editLamaProdi" name="lama" value="{{ $major->lama }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_misi_fakultas" class="form-label">Biaya</label>
                                                        <input type="text" class="form-control" id="editBiayaProdi" name="biaya" value="{{ $major->biaya }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_misi_fakultas" class="form-label">Syarat Masuk Prodi</label>
                                                        <textarea id="edit_syarat_prodi" class="form-control" name="syarat"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_misi_fakultas" class="form-label">Lokasi</label>
                                                        <input type="text" class="form-control" id="editLokasiProdi" name="lokasi" value="{{ $major->lokasi }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_misi_fakultas" class="form-label">Akreditasi</label>
                                                        <input type="text" class="form-control" id="editAkreditasiProdi" name="akreditasi" value="{{ $major->akreditasi }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <form method="dialog">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </form>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div>

    <!-- Create Prodi -->
    <div class="modal fade" id="myModalProdi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal Tambah Prodi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('major.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="card-body">
                                <div class="mb-3">
                                    <label for="input_misi_fakultas" class="form-label">Kode Prodi</label>
                                    <input type="text" class="form-control" id="inputKodeProdi" name="kode_prodi">
                                </div>
                                <div class="mb-3">
                                    <label for="input_nama_fakultas" class="form-label">Nama Prodi</label>
                                    <input type="text" class="form-control" id="inputNamaProdi" name="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="input_kode_fakultas" class="form-label">Kode Fakultas</label>
                                    <input type="text" class="form-control" id="inputKodeFakultas" name="kode_fakultas">
                                </div>
                                <div class="mb-3">
                                    <label for="input_deskripsi_fakultas" class="form-label">Deskripsi Prodi</label>
                                    <textarea id="deskripsi_prodi" class="form-control" name="deskripsi"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inp ut_sertifikat_akreditasi" class="form-label">Gambar Prodi</label>
                                    <input class="form-control" type="file" id="input_sertifikat_akreditasi" name="gambar">
                                </div>
                                <div class="mb-3">
                                    <label for="input_lokasi_fakultas" class="form-label">Visi</label>
                                    <textarea id="visi_prodi" class="form-control" name="visi"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="input_visi_fakultas" class="form-label">Misi</label>
                                    <textarea id="misi_prodi" class="form-control" name="misi"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="input_misi_fakultas" class="form-label">Prospek</label>
                                    <textarea id="prospek_prodi" class="form-control" name="prospek"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="input_misi_fakultas" class="form-label">Gelar</label>
                                    <input type="text" class="form-control" id="inputGelarProdi" name="gelar">
                                </div>
                                <div class="mb-3">
                                    <label for="input_misi_fakultas" class="form-label">Lama Studi</label>
                                    <input type="text" class="form-control" id="inputLamaProdi" name="lama">
                                </div>
                                <div class="mb-3">
                                    <label for="input_misi_fakultas" class="form-label">Biaya</label>
                                    <input type="text" class="form-control" id="inputBiayaProdi" name="biaya">
                                </div>
                                <div class="mb-3">
                                    <label for="input_misi_fakultas" class="form-label">Syarat Masuk Prodi</label>
                                    <textarea id="syarat_prodi" class="form-control" name="syarat"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="input_misi_fakultas" class="form-label">Lokasi</label>
                                    <input type="text" class="form-control" id="inputLokasiProdi" name="lokasi">
                                </div>
                                <div class="mb-3">
                                    <label for="input_misi_fakultas" class="form-label">Akreditasi</label>
                                    <input type="text" class="form-control" id="inputAkreditasiProdi" name="akreditasi">
                                </div>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <form method="dialog">
                            <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </div>

    

</section>

{{-- DOSEN SUBPAGE --}}
<section id="dosen-subpage" class="m-3 d-none">

    {{-- Button Add Dosen/Staff --}}
    <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#addDosen">
        Tambah Dosen/Staff
    </button>

    {{-- Read Dosen/Staff --}}
    <div id="item-2" class="card">
        <div class="card-header bg-primary text-white">
            <span>Data Dosen/Staff</span>
        </div>
        <div class="card-body d-flex flex-column">
            <form action="">
                <table class="table text-center align-middle table-striped table-bordered">
                    <thead class="align-middle">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Prodi</th>
                        <th scope="col">NIDN</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Pendidikan</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee) 
                            <tr>
                                <td>{{ $employee->id }}</td>
                                <td>{{ $employee->nama }}</td>
                                <td>{{ optional($employee->major)->nama }}</td>
                                <td>{{ $employee->nidn }}</td>
                                <td>{{ $employee->jabatan }}</td>
                                <td>{{ $employee->pendidikan }}</td>
                                <td>{{ $employee->gambar }}</td>
                                <td style="min-width: 120px; width: 120px">
                                    <form action="{{ route('admin.program.employee.destroy', $employee->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editDosen-{{ $employee->id }}">
                                            <i class="bi bi-pen"></i>
                                        </button>
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            {{-- Update Dosen/Staff --}}
                            <div class="modal fade" id="editDosen-{{ $employee->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Dosen/Staff</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('employee.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="modal-body">
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <label for="kode_prodi" class="form-label">Kode Prodi</label>
                                                        <input type="text" class="form-control" id="kode_prodi" name="kode_prodi">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nama" class="form-label">Nama</label>
                                                        <input type="text" class="form-control" id="nama" name="nama">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nidn" class="form-label">NIDN</label>
                                                        <input type="text" class="form-control" id="nidn" name="nidn">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="jabatan" class="form-label">Jabatan</label>
                                                        <input type="text" class="form-control" id="jabatan" name="jabatan">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="pendidikan" class="form-label">Pendidikan</label>
                                                        <input type="text" class="form-control" id="pendidikan" name="pendidikan">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="gambar" class="form-label">Gambar</label>
                                                        <input type="file" class="form-control" id="gambar" name="gambar">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <form method="dialog">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                                </form>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div>

    <!-- Add Dosen/Staff -->
    <div class="modal fade" id="addDosen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">TambahfDosen Staff</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="kode_prodi" class="form-label">Kode Prodi</label>
                                <input type="text" class="form-control" id="kode_prodi" name="kode_prodi">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <div class="mb-3">
                                <label for="nidn" class="form-label">NIDN</label>
                                <input type="text" class="form-control" id="nidn" name="nidn">
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" class="form-control" id="jabatan" name="jabatan">
                            </div>
                            <div class="mb-3">
                                <label for="pendidikan" class="form-label">Pendidikan</label>
                                <input type="text" class="form-control" id="pendidikan" name="pendidikan">
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="gambar" name="gambar">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <form method="dialog">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </div>

    

</section>


{{-- KURIKULUM SUBPAGE --}}
<section id="kurikulum-subpage" class="m-5 d-none">

    {{-- Button Add MK --}}
    <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#myModalkur">
        Tambah Matkul
    </button>

    {{-- Read MK --}}
    <div id="item-2" class="card">
        <div class="card-header bg-primary text-white">
            <span>Data Kurikulum</span>
        </div>
        <div class="card-body d-flex flex-column">
            <form action="">
                <table class="table text-center align-middle table-striped table-bordered">
                    <thead class="align-middle">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Mata Kuliah</th>
                        <th scope="col">Kode Mata Kuliah</th>
                        <th scope="col">Kode Prodi</th>
                        <th scope="col">Jumlah SKS</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td style="min-width: 120px; width: 120px">
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myEditKurikulum">
                                <i class="bi bi-pen"></i>
                            </button>
                            <button class="btn btn-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>

    <!-- Create MK -->
    <div class="modal fade" id="myModalkur" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Mata Kuliah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="input_nama_mata kuliah" class="form-label">Nama Mata Kuliah</label>
                                <input type="text" class="form-control" id="input_nama_mata kuliah" name="input_nama_mata kuliah">
                            </div>
                            <div class="mb-3">
                                <label for="input_kode_matakuliah" class="form-label">Kode Mata Kuliah</label>
                                <input type="text" class="form-control" id="input_kode_matakuliah" name="input_kode_matakuliah">
                            </div>
                            <div class="mb-3">
                                <label for="select_kode_prodi" class="form-label">Kode Prodi</label>
                                <select class="form-select" id="select_kode_prodi" name="select_kode_prodi">
                                    <option value="pilihan1">Pilihan 1</option>
                                    <option value="pilihan2">Pilihan 2</option>
                                    <option value="pilihan3">Pilihan 3</option>
                                    <option value="pilihan4">Pilihan 4</option>
                                    <option value="pilihan5">Pilihan 5</option>
                                    <option value="pilihan6">Pilihan 6</option>
                                    <option value="pilihan7">Pilihan 7</option>
                                    <option value="pilihan8">Pilihan 8</option>
                                    <option value="pilihan9">Pilihan 9</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>
                            <!-- Text field for "Lainnya" option -->
                            <div class="mb-3" id="input_kode_prodi_lainnya" style="display: none;">
                                <label for="input_kode_prodi_lainnya" class="form-label">Kode Prodi (Lainnya)</label>
                                <input type="text" class="form-control" id="input_kode_prodi_lainnya" name="input_kode_prodi_lainnya">
                            </div>
                            <div class="mb-3">
                                <label for="input_visi_fakultas" class="form-label">Semester</label>
                                <input type="text" class="form-control" id="input_visi_fakultas" name="input_visi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_misi_fakultas" class="form-label">Jumlah SKS</label>
                                <input type="text" class="form-control" id="input_misi_fakultas" name="input_misi_fakultas">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan Data</button>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Update MK -->
    <div class="modal fade" id="myEditKurikulum" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Fakultas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="input_nama_mata kuliah" class="form-label">Nama Mata Kuliah</label>
                                <input type="text" class="form-control" id="input_nama_mata kuliah" name="input_nama_mata kuliah">
                            </div>
                            <div class="mb-3">
                                <label for="input_kode_matakuliah" class="form-label">Kode Mata Kuliah</label>
                                <input type="text" class="form-control" id="input_kode_matakuliah" name="input_kode_matakuliah">
                            </div>
                            <div class="mb-3">
                                <label for="select_kode_prodi" class="form-label">Kode Prodi</label>
                                <select class="form-select" id="select_kode_prodi" name="select_kode_prodi">
                                    <option value="pilihan1">Pilihan 1</option>
                                    <option value="pilihan2">Pilihan 2</option>
                                    <option value="pilihan3">Pilihan 3</option>
                                    <option value="pilihan4">Pilihan 4</option>
                                    <option value="pilihan5">Pilihan 5</option>
                                    <option value="pilihan6">Pilihan 6</option>
                                    <option value="pilihan7">Pilihan 7</option>
                                    <option value="pilihan8">Pilihan 8</option>
                                    <option value="pilihan9">Pilihan 9</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>
                            <!-- Text field for "Lainnya" option -->
                            <div class="mb-3" id="input_kode_prodi_lainnya" style="display: none;">
                                <label for="input_kode_prodi_lainnya" class="form-label">Kode Prodi (Lainnya)</label>
                                <input type="text" class="form-control" id="input_kode_prodi_lainnya" name="input_kode_prodi_lainnya">
                            </div>
                            <div class="mb-3">
                                <label for="input_visi_fakultas" class="form-label">Semester</label>
                                <input type="text" class="form-control" id="input_visi_fakultas" name="input_visi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_misi_fakultas" class="form-label">Jumlah SKS</label>
                                <input type="text" class="form-control" id="input_misi_fakultas" name="input_misi_fakultas">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>

</section >

{{-- SUBPAGE SCRIPT --}}
<script>
    var overview = document.getElementById("fakultas-subpage");
    var dosen = document.getElementById("dosen-subpage");
    var kurikulum = document.getElementById("kurikulum-subpage");
    var prodi = document.getElementById("prodi-subpage");

    var overviewLink = document.getElementById("fakultas-hyperlink");
    var dosenLink = document.getElementById("dosen-hyperlink");
    var kurikulumLink = document.getElementById("kurikulum-hyperlink");
    var prodiLink = document.getElementById("prodi-hyperlink");

    function showFakultasSubPage() {
        overview.classList.remove("d-none");
        overviewLink.classList.add("active");
        dosen.classList.add("d-none");
        dosenLink.classList.remove("active");
        kurikulum.classList.add("d-none");
        kurikulumLink.classList.remove("active");
        prodi.classList.add("d-none");
        prodiLink.classList.remove("active");

        overview.setAttribute("aria-current", "page");
    };

    function showDosenSubPage() {
        overview.classList.add("d-none");
        overviewLink.classList.remove("active");
        dosen.classList.remove("d-none");
        dosenLink.classList.add("active");
        kurikulum.classList.add("d-none");
        kurikulumLink.classList.remove("active");
        prodi.classList.add("d-none");
        prodiLink.classList.remove("active");

        dosen.setAttribute("aria-current", "page");
    };

    function showKurikulumSubPage() {
        overview.classList.add("d-none");
        overviewLink.classList.remove("active");
        dosen.classList.add("d-none");
        dosenLink.classList.remove("active");
        kurikulum.classList.remove("d-none");
        kurikulumLink.classList.add("active");
        prodi.classList.add("d-none");
        prodiLink.classList.remove("active");


        kurikulum.setAttribute("aria-current", "page");
    };

    function showProdiSubPage(){
        prodi.classList.remove("d-none");
        prodiLink.classList.add("active");
        overview.classList.add("d-none");
        overviewLink.classList.remove("active");
        dosen.classList.add("d-none");
        dosenLink.classList.remove("active");
        kurikulum.classList.add("d-none");
        kurikulumLink.classList.remove("active");

        prodi.setAttribute("aria-current", "page");
    };

    // TEXT EDITOR
    ClassicEditor
        .create( document.querySelector( '#deskripsi_fakultas' ) )
        .catch( error => {
            console.error( error );
        } );

        
    ClassicEditor
        
        .create( document.querySelector( '#visi_fakultas' ) )

        .catch( error => {
            console.error( error );
        } );

        
    ClassicEditor
        .create( document.querySelector( '#misi_fakultas' ) )
        .catch( error => {
            console.error( error );
        } );

    
        ClassicEditor
        .create( document.querySelector( '#edit_deskripsi_fakultas' ) )
        .catch( error => {
            console.error( error );
        } );

        
    ClassicEditor
        
        .create( document.querySelector( '#edit_visi_fakultas' ) )

        .catch( error => {
            console.error( error );
        } );

        
    ClassicEditor
        .create( document.querySelector( '#edit_misi_fakultas' ) )
        .catch( error => {
            console.error( error );
        } );



        ClassicEditor
        .create( document.querySelector( '#deskripsi_prodi' ) )
        .catch( error => {
            console.error( error );
        } );

        
    ClassicEditor
        
        .create( document.querySelector( '#visi_prodi' ) )

        .catch( error => {
            console.error( error );
        } );

        
    ClassicEditor
        .create( document.querySelector( '#misi_prodi' ) )
        .catch( error => {
            console.error( error );
        } );
    
        ClassicEditor
        .create( document.querySelector( '#prospek_prodi' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '#syarat_prodi' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '#edit_deskripsi_prodi' ) )
        .catch( error => {
            console.error( error );
        } );

        
    ClassicEditor
        
        .create( document.querySelector( '#edit_visi_prodi' ) )

        .catch( error => {
            console.error( error );
        } );

        
    ClassicEditor
        .create( document.querySelector( '#edit_misi_prodi' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '#edit_syarat_prodi' ) )
        .catch( error => {
            console.error( error );
        } );
    
        ClassicEditor
        .create( document.querySelector( '#edit_prospek_prodi' ) )
        .catch( error => {
            console.error( error );
        } );

        
        @foreach($faculties as $faculty)
            ClassicEditor
                .create(document.querySelector('#edit_deskripsi_fakultas_{{ $faculty->id }}'))
                .catch(error => {
                    console.error(error);
                });

            ClassicEditor
                .create(document.querySelector('#edit_visi_fakultas_{{ $faculty->id }}'))
                .catch(error => {
                    console.error(error);
                });

            ClassicEditor
                .create(document.querySelector('#edit_misi_fakultas_{{ $faculty->id }}'))
                .catch(error => {
                    console.error(error);
                });
        @endforeach

</script>


@endsection