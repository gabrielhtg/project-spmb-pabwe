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
                            <td class="text-break" style="max-width: 200px;">
                                {{ \Illuminate\Support\Str::limit($faculty->nama, 10, $end='...') }}
                            </td>
                            <td class="text-center">{{ $faculty->kode_fakultas }}</td>
                            <td class="text-break" style="max-width: 200px;">
                                {{ \Illuminate\Support\Str::limit(strip_tags($faculty->deskripsi), 50, $end='...') }}
                            </td>
                            <td class="text-break" style="max-width: 200px;">
                                {{ \Illuminate\Support\Str::limit($faculty->lokasi, 10, $end='...') }}
                            </td>
                            <td class="text-break" style="max-width: 200px;">
                                {{ \Illuminate\Support\Str::limit(strip_tags($faculty->visi), 50, $end='...') }}
                            </td>
                            <td class="text-break" style="max-width: 200px;">
                                {{ \Illuminate\Support\Str::limit(strip_tags($faculty->misi), 50, $end='...') }}
                            </td>
                            <td class="text-center">
                                <img src="{{ asset('storage/' . $faculty->gambar) }}" alt="Gambar Fakultas" style="max-width: 100px;">
                            </td>
                            <td class="text-center" style="min-width: 120px;">
                                
                                <form action="{{ route('admin.program.faculty.destroy', $faculty->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailFakultas-{{ $faculty->id }}" >
                                        <i class="bi bi-info-circle"></i>
                                    </button>
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
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-bold" id="exampleModalLabel">Edit Fakultas</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card-body">
                                            <!-- Form untuk edit -->
                                            <form class="was-validated" action="{{ route('faculty.update', $faculty->id) }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT') <!-- Gunakan metode PUT untuk update -->
                                                <div class="mb-3">
                                                    <label for="input_nama_fakultas" class="form-label">Nama Fakultas</label>
                                                    <input type="text" class="form-control" id="input_nama_fakultas" name="nama" placeholder="{{ old('nama', $faculty->nama) }}" value="{{ old('nama', $faculty->nama) }}" required>
                                                    <div class="invalid-feedback">
                                                        Nama tidak boleh kosong
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_kode_fakultas" class="form-label">Kode Fakultas</label>
                                                    <input type="text" class="form-control" id="input_kode_fakultas" name="kode_fakultas" placeholder="{{ old('kode_fakultas', $faculty->kode_fakultas) }}" value="{{ old('kode_fakultas', $faculty->kode_fakultas) }}" required>
                                                    <div class="invalid-feedback">
                                                        Kode Fakultas tidak boleh kosong
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_deskripsi_fakultas" class="form-label">Deskripsi</label>
                                                    <textarea class="form-control" id="edit_deskripsi_fakultas_{{ $faculty->id }}" name="deskripsi" placeholder="{{ old('deskripsi', $faculty->deskripsi) }}" required>{{ old('deskripsi', $faculty->deskripsi) }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_lokasi_fakultas" class="form-label">Lokasi</label>
                                                    <input type="text" class="form-control" id="input_lokasi_fakultas_{{ $faculty->id }}" name="lokasi" placeholder="{{ old('lokasi', $faculty->lokasi) }}" value="{{ old('lokasi', $faculty->lokasi) }}" required>
                                                    <div class="invalid-feedback">
                                                        Lokasi tidak boleh kosong
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_visi_fakultas" class="form-label">Visi</label>
                                                    <textarea class="form-control" id="edit_visi_fakultas_{{ $faculty->id }}" name="visi" placeholder="{{ old('visi', $faculty->visi) }}" required>{{ old('visi', $faculty->visi) }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_misi_fakultas" class="form-label">Misi</label>
                                                    <textarea class="form-control" id="edit_misi_fakultas_{{ $faculty->id }}" name="misi" placeholder="{{ old('visi', $faculty->misi) }}" required>{{ old('misi', $faculty->misi) }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_sertifikat_akreditasi" class="form-label">Gambar</label>
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

                        {{-- Detail Fakultas --}}
                        <div class="modal fade" id="detailFakultas-{{ $faculty->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-bold" id="exampleModalLabel">Detail Fakultas</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label for="input_nama_fakultas" class="form-label">Nama Fakultas</label>
                                                <input type="text" class="form-control" id="input_nama_fakultas" name="nama" value="{{ old('nama', $faculty->nama) }}" disabled readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="input_kode_fakultas" class="form-label">Kode Fakultas</label>
                                                <input type="text" class="form-control" id="input_kode_fakultas" name="kode_fakultas" value="{{ old('kode_fakultas', $faculty->kode_fakultas) }}" disabled readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="input_deskripsi_fakultas" class="form-label">Deskripsi</label>
                                                <textarea class="form-control" name="deskripsi" disabled readonly>{{ old('deskripsi', $faculty->deskripsi) }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="input_lokasi_fakultas" class="form-label">Lokasi</label>
                                                <input type="text" class="form-control" id="input_lokasi_fakultas_{{ $faculty->id }}" name="lokasi" value="{{ old('lokasi', $faculty->lokasi) }}" disabled readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="input_visi_fakultas" class="form-label">Visi</label>
                                                <textarea class="form-control"name="visi" disabled readonly>{{ old('visi', $faculty->visi) }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="input_misi_fakultas" class="form-label">Misi</label>
                                                <textarea class="form-control" name="misi" disabled readonly>{{ old('misi', $faculty->misi) }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="input_sertifikat_akreditasi" class="form-label">Gambar</label><br>
                                                <img src="{{ asset('storage/' . $faculty->gambar) }}" alt="Gambar Fakultas" style="max-width: 100px;">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                                            </div>
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
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title fw-bold" id="exampleModalLabel">Tambah Fakultas</span>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form class="was-validated" action="{{ route('faculties.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="input_nama_fakultas" class="form-label">Nama Fakultas</label>
                                <input type="text" class="form-control" id="input_nama_fakultas" name="nama" placeholder="Cth: Fakultas Informatika dan Teknik Elektro" required>
                                {{-- <div class="form-text">Masukkan teks dengan awalan huruf kapital pada setiap kata.</div> --}}
                                <div class="invalid-feedback">
                                    Nama Fakultas tidak boleh kosong
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="input_kode_fakultas" class="form-label">Kode Fakultas</label>
                                <input type="text" class="form-control" id="input_kode_fakultas" name="kode_fakultas" placeholder="Cth: 1, 2, 3..." required>
                                <div class="invalid-feedback">
                                    Kode Fakultas tidak boleh kosong
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="input_deskripsi_fakultas" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi_fakultas" name="deskripsi" placeholder="Tuliskan deskripsi fakultas..." required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="input_lokasi_fakultas" class="form-label">Lokasi</label>
                                <input type="text" class="form-control" id="input_lokasi_fakultas" name="lokasi" placeholder="Cth: Jl.XYZ123, Kota, Provinsi" required>
                                <div class="invalid-feedback">
                                    Lokasi tidak boleh kosong
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="input_visi_fakultas" class="form-label">Visi</label>
                                <textarea class="form-control" id="visi_fakultas" name="visi" placeholder="Tuliskan visi fakultas..." required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="input_misi_fakultas" class="form-label">Misi</label>
                                <textarea class="form-control" id="misi_fakultas" name="misi" placeholder="Tuliskan misi fakultas..." required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="input_gambar_fakultas" class="form-label">Gambar</label>
                                <input class="form-control" type="file" id="input_gambar_fakultas" name="gambar" accept="image/*" multiple required>
                                <div class="invalid-feedback">
                                    Gambar tidak boleh kosong
                                </div>
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

    {{-- Session Flash Message --}}
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <img src="..." class="rounded me-2" alt="...">
            <strong class="me-auto">Bootstrap</strong>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Hello, world! This is a toast message.
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
                <table class="table text-start align-middle table-striped table-bordered">
                    <thead class="align-middle">
                    <tr class="text-center">
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kode Prodi</th>
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
                                <td class="text-break" style="max-width: 200px;">{{ $loop->iteration }}</td>
                                <td style="max-width: 200px;">
                                    {{ $major->nama }}
                                </td>
                                <td class="text-break" style="max-width: 200px;">
                                    {{ \Illuminate\Support\Str::limit($major->kode_prodi, 10, $end='...') }}
                                </td>
                                <td class="text-break" style="max-width: 200px;">
                                    {{ \Illuminate\Support\Str::limit(optional($major->faculty)->nama, 10, $end='...') }}
                                </td>
                                <td class="text-break" style="max-width: 200px;">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($major->deskripsi), 50, $end='...') }}
                                </td>
                                <td class="text-break" style="max-width: 200px;">
                                    {{ \Illuminate\Support\Str::limit($major->gambar, 10, $end='...') }}
                                </td>
                                <td class="text-break" style="max-width: 200px;">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($major->visi), 50, $end='...') }}
                                </td>
                                <td class="text-break" style="max-width: 200px;">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($major->misi), 50, $end='...') }}
                                </td>
                                <td class="text-break" style="max-width: 200px;">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($major->prospek), 50, $end='...') }}
                                </td>
                                <td class="text-break" style="max-width: 200px;">
                                    {{ \Illuminate\Support\Str::limit($major->gelar, 10, $end='...') }}
                                </td>
                                <td class="text-break" style="max-width: 200px;">
                                    {{ \Illuminate\Support\Str::limit($major->lama, 10, $end='...') }}
                                </td>
                                <td class="text-break" style="max-width: 200px;">
                                    {{ \Illuminate\Support\Str::limit($major->biaya, 10, $end='...') }}
                                </td>
                                <td class="text-break" style="max-width: 200px;">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($major->syarat), 50, $end='...') }}
                                </td>
                                <td class="text-break" style="max-width: 200px;">
                                    {{ \Illuminate\Support\Str::limit($major->lokasi, 10, $end='...') }}
                                </td>
                                <td class="text-break" style="max-width: 200px;">
                                    {{ \Illuminate\Support\Str::limit($major->akreditasi, 10, $end='...') }}
                                </td>
                                <td class="text-center" style="min-width: 120px; width: 120px">
                                    <button type="button" class="btn btn-primary my-1" data-bs-toggle="modal" data-bs-target="#detailProdi-{{ $major->id }}" >
                                        <i class="bi bi-info-circle"></i>
                                    </button><br>
                                    <button type="button" class="btn btn-warning my-1" data-bs-toggle="modal" data-bs-target="#popupUpdateProdi-{{ $major->id }}" >
                                        <i class="bi bi-pen"></i>
                                    </button><br>
                                    <button type="submit" class="btn btn-danger my-1" onclick="deleteMajor({{ $major->id }})">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>

                            <!-- Update Prodi -->
                            <div class="modal fade" id="popupUpdateProdi-{{ $major->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fw-bold" id="exampleModalLabel">Edit Prodi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('major.update', $major->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="modal-body">
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <label for="input_misi_fakultas" class="form-label">Kode Prodi</label>
                                                        <input type="text" class="form-control" id="editKodeProdi" name="kode_prodi" value="{{ $major->kode_prodi }}" placeholder="{{ $major->kode_prodi }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_nama_fakultas" class="form-label">Nama Prodi</label>
                                                        <input type="text" class="form-control" id="editNamaProdi" name="nama" value="{{ $major->nama }}" placeholder="{{ $major->nama }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_misi_fakultas" class="form-label">Fakultas</label>
                                                        {{-- <input type="text" class="form-control" id="editKodeFakultas" name="kode_fakultas" value="{{ $major->kode_fakultas }}"> --}}
                                                        <select class="form-select" id="editKodeFakultas" name="kode_fakultas" aria-label="Default select example">
                                                            <option value="{{ ($major->faculty)->id }}">{{ ($major->faculty)->nama }}</option>
                                                            @foreach ($faculties as $faculty)
                                                                @if ($faculty->id != ($major->faculty)->id)
                                                                    <option value="{{ $faculty->id }}">{{ $faculty->nama }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_deskripsi_fakultas" class="form-label">Deskripsi</label>
                                                        <textarea id="editDeskripsiProdi-{{ $major->id }}" class="form-control" name="deskripsi" placeholder="{{ old('deskripsi', $major->deskripsi) }}" required>{{ old('deskripsi', $major->deskripsi) }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_sertifikat_akreditasi" class="form-label">Gambar</label>
                                                        <input class="form-control" type="file" id="editGambarProdi" name="gambar" value="{{ $major->gambar }}" multiple required>
                                                        <img src="{{ asset('storage/' . $major->gambar) }}" alt="Gambar Fakultas" style="max-width: 100px;">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_lokasi_fakultas" class="form-label">Visi</label>
                                                        <textarea id="editVisiProdi-{{ $major->id }}" class="form-control" name="visi" placeholder="{{ old('deskripsi', $major->visi) }}" required>{{ old('deskripsi', $major->visi) }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_visi_fakultas" class="form-label">Misi</label>
                                                        <textarea id="editMisiProdi-{{ $major->id }}" class="form-control" name="misi" placeholder="{{ old('deskripsi', $major->misi) }}" required>{{ old('deskripsi', $major->misi) }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_misi_fakultas" class="form-label">Prospek</label>
                                                        <textarea id="editProspekProdi-{{ $major->id }}" class="form-control" name="prospek" placeholder="{{ old('deskripsi', $major->prospek) }}" required>{{ old('deskripsi', $major->prospek) }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_misi_fakultas" class="form-label">Gelar</label>
                                                        <input type="text" class="form-control" id="editGelarProdi" name="gelar" value="{{ $major->gelar }}" placeholder="{{ $major->gelar }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_misi_fakultas" class="form-label">Lama Studi</label>
                                                        <div class="input-group mb-3">
                                                            <input type="number" class="form-control" id="editLamaProdi" name="lama" step="1" min="1" max="10" value="{{ $major->lama }}" placeholder="{{ $major->lama }}" required>
                                                            <span class="input-group-text">tahun</span>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_misi_fakultas" class="form-label">Biaya</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">Rp.</span>
                                                            <input type="text" class="form-control" id="editBiayaProdi" name="biaya" value="{{ $major->biaya }}" placeholder="{{ $major->biaya }}" required>
                                                            <span class="input-group-text">,-</span>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_misi_fakultas" class="form-label">Syarat Masuk</label>
                                                        <textarea id="editSyaratProdi-{{ $major->id }}" class="form-control" name="syarat" placeholder="{{ old('deskripsi', $major->syarat) }}" required>{{ old('deskripsi', $major->syarat) }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_misi_fakultas" class="form-label">Lokasi</label>
                                                        <input type="text" class="form-control" id="editLokasiProdi" name="lokasi" value="{{ $major->lokasi }}" placeholder="{{ $major->lokasi }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_misi_fakultas" class="form-label">Akreditasi</label>
                                                        {{-- <input type="text" class="form-control" id="editAkreditasiProdi" name="akreditasi" value="{{ $major->akreditasi }}" placeholder="{{ $major->akreditasi }}"> --}}
                                                        <select class="form-select" id="inputAkreditasiProdi" name="akreditasi" aria-label="Default select example">
                                                            <option value="{{ $major->akreditasi }}">{{ $major->akreditasi }}</option>
                                                            <option value="Unggul">Unggul</option>
                                                            <option value="Sangat Baik">Sangat Baik</option>
                                                            <option value="Baik Sekali">Baik</option>
                                                            <option value="Tidak Terakreditasi">Tidak Terakreditasi</option>
                                                        </select>
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

                            <!-- Detail Prodi -->
                            <div class="modal fade" id="detailProdi-{{ $major->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fw-bold" id="exampleModalLabel">Detail Prodi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <label for="input_misi_fakultas" class="form-label">Kode Prodi</label>
                                                    <input type="text" class="form-control" id="editKodeProdi" name="kode_prodi" value="{{ $major->kode_prodi }}" placeholder="{{ $major->kode_prodi }}" disabled readonly>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_nama_fakultas" class="form-label">Nama Prodi</label>
                                                    <input type="text" class="form-control" id="editNamaProdi" name="nama" value="{{ $major->nama }}" placeholder="{{ $major->nama }}" disabled readonly>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_misi_fakultas" class="form-label">Fakultas</label>
                                                    <select class="form-select" id="editKodeFakultas" name="kode_fakultas" aria-label="Default select example" disabled readonly>
                                                        <option value="{{ ($major->faculty)->id }}">{{ ($major->faculty)->nama }}</option>
                                                        @foreach ($faculties as $faculty)
                                                            @if ($faculty->id != ($major->faculty)->id)
                                                                <option value="{{ $faculty->id }}">{{ $faculty->nama }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_deskripsi_fakultas" class="form-label">Deskripsi</label>
                                                    <textarea class="form-control" name="deskripsi" disabled readonly>{{ old('deskripsi', $major->deskripsi) }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_sertifikat_akreditasi" class="form-label">Gambar</label><br>
                                                    <img src="{{ asset('storage/' . $major->gambar) }}" alt="Gambar Fakultas" style="max-width: 100px;">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_lokasi_fakultas" class="form-label">Visi</label>
                                                    <textarea class="form-control" name="visi" disabled readonly>{{ old('deskripsi', $major->visi) }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_visi_fakultas" class="form-label">Misi</label>
                                                    <textarea class="form-control" name="misi" disabled readonly>{{ old('deskripsi', $major->misi) }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_misi_fakultas" class="form-label">Prospek</label>
                                                    <textarea class="form-control" name="prospek" disabled readonly>{{ old('deskripsi', $major->prospek) }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_misi_fakultas" class="form-label">Gelar</label>
                                                    <input type="text" class="form-control" id="editGelarProdi" name="gelar" value="{{ $major->gelar }}" placeholder="{{ $major->gelar }}" disabled readonly>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_misi_fakultas" class="form-label">Lama Studi</label>
                                                    <div class="input-group mb-3">
                                                        <input type="number" class="form-control" id="editLamaProdi" name="lama" step="1" min="1" max="10" value="{{ $major->lama }}" disabled readonly>
                                                        <span class="input-group-text">tahun</span>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_misi_fakultas" class="form-label">Biaya</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text">Rp.</span>
                                                        <input type="text" class="form-control" id="editBiayaProdi" name="biaya" value="{{ $major->biaya }}" disabled readonly>
                                                        <span class="input-group-text">,-</span>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_misi_fakultas" class="form-label">Syarat Masuk</label>
                                                    <textarea class="form-control" name="syarat" disabled readonly>{{ old('deskripsi', $major->syarat) }}</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_misi_fakultas" class="form-label">Lokasi</label>
                                                    <input type="text" class="form-control" id="editLokasiProdi" name="lokasi" value="{{ $major->lokasi }}" placeholder="{{ $major->lokasi }}" disabled readonly>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_misi_fakultas" class="form-label">Akreditasi</label>
                                                    {{-- <input type="text" class="form-control" id="editAkreditasiProdi" name="akreditasi" value="{{ $major->akreditasi }}" placeholder="{{ $major->akreditasi }}"> --}}
                                                    <select class="form-select" id="inputAkreditasiProdi" name="akreditasi" aria-label="Default select example" disabled readonly>
                                                        <option value="{{ $major->akreditasi }}">{{ $major->akreditasi }}</option>
                                                        <option value="Unggul">Unggul</option>
                                                        <option value="Sangat Baik">Sangat Baik</option>
                                                        <option value="Baik Sekali">Baik</option>
                                                        <option value="Tidak Terakreditasi">Tidak Terakreditasi</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                ClassicEditor
                                    .create(document.querySelector('#editDeskripsiProdi-{{ $major->id }}'))
                                    .catch(error => {
                                        console.error(error);
                                    });

                                ClassicEditor
                                    .create(document.querySelector('#editVisiProdi-{{ $major->id }}'))
                                    .catch(error => {
                                        console.error(error);
                                    });

                                ClassicEditor
                                    .create(document.querySelector('#editMisiProdi-{{ $major->id }}'))
                                    .catch(error => {
                                        console.error(error);
                                    });

                                ClassicEditor
                                    .create(document.querySelector('#editSyaratProdi-{{ $major->id }}'))
                                    .catch(error => {
                                        console.error(error);
                                    });

                                ClassicEditor
                                    .create(document.querySelector('#editProspekProdi-{{ $major->id }}'))
                                    .catch(error => {
                                        console.error(error);
                                    });
                            </script>

                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div>

    <!-- Create Prodi -->
    <div class="modal fade" id="myModalProdi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="exampleModalLabel">Tambah Prodi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('major.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="card-body">
                                <div class="mb-3">
                                    <label for="input_misi_fakultas" class="form-label">Kode Prodi</label>
                                    <input type="text" class="form-control" id="inputKodeProdi" name="kode_prodi" placeholder="Cth: ifs, mrs, bps..." required>
                                </div>
                                <div class="mb-3">
                                    <label for="input_nama_fakultas" class="form-label">Nama Prodi</label>
                                    <input type="text" class="form-control" id="inputNamaProdi" name="nama" placeholder="Cth: S1 Informatika" required>
                                </div>
                                <div class="mb-3">
                                    <label for="input_kode_fakultas" class="form-label">Fakultas</label>
                                    {{-- <input type="text" class="form-control" id="inputKodeFakultas" name="kode_fakultas"> --}}
                                    <select class="form-select" id="inputKodeFakultas" name="kode_fakultas" aria-label="Default select example" required>
                                        <option>Pilih Fakultas</option>
                                        @foreach ($faculties as $faculty)
                                            <option value="{{ $faculty->id }}">{{ $faculty->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="input_deskripsi_fakultas" class="form-label">Deskripsi Prodi</label>
                                    <textarea id="deskripsi_prodi" class="form-control" name="deskripsi" placeholder="Tuliskan deskripsi prodi..." required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inp ut_sertifikat_akreditasi" class="form-label">Gambar</label>
                                    <input class="form-control" type="file" id="input_sertifikat_akreditasi" name="gambar">
                                </div>
                                <div class="mb-3">
                                    <label for="input_lokasi_fakultas" class="form-label">Visi</label>
                                    <textarea id="visi_prodi" class="form-control" name="visi" placeholder="Tuliskan visi prodi..." required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="input_visi_fakultas" class="form-label">Misi</label>
                                    <textarea id="misi_prodi" class="form-control" name="misi" placeholder="Tuliskan misi prodi..." required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="input_misi_fakultas" class="form-label">Prospek Kerja</label>
                                    <textarea id="prospek_prodi" class="form-control" name="prospek" placeholder="Tuliskan prospek prodi..." required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="input_misi_fakultas" class="form-label">Gelar</label>
                                    <input type="text" class="form-control" id="inputGelarProdi" name="gelar" placeholder="Cth: S.Kom, S.T..." required>
                                </div>
                                <div class="mb-3">
                                    <label for="input_misi_fakultas" class="form-label">Lama Studi</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" id="inputLamaProdi" name="lama" min="1" max="20" step="1" value="4" placeholder="Cth: 4 tahun" required>
                                        <span class="input-group-text">tahun</span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="input_misi_fakultas" class="form-label">Biaya</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rp.</span>
                                        <input type="text" class="form-control" id="inputBiayaProdi" name="biaya" placeholder="Cth: Rp.6.500.000,-" required>
                                        <span class="input-group-text">,-</span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="input_misi_fakultas" class="form-label">Syarat Masuk</label>
                                    <textarea id="syarat_prodi" class="form-control" name="syarat" placeholder="Tuliskan syarat pendaftaran..." required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="input_misi_fakultas" class="form-label">Lokasi</label>
                                    <input type="text" class="form-control" id="inputLokasiProdi" name="lokasi" placeholder="Cth: Jln. XXX" required>
                                </div>
                                <div class="mb-3">
                                    <label for="input_misi_fakultas" class="form-label">Akreditasi</label>
                                    {{-- <input type="text" class="form-control" id="inputAkreditasiProdi" name="akreditasi"> --}}
                                    <select class="form-select" id="inputAkreditasiProdi" name="akreditasi" aria-label="Default select example" required>
                                        <option>Pilih Akreditasi</option>
                                        <option value="Unggul">Unggul</option>
                                        <option value="Sangat Baik">Sangat Baik</option>
                                        <option value="Baik Sekali">Baik</option>
                                        <option value="Tidak Terakreditasi">Tidak Terakreditasi</option>
                                    </select>
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
            {{-- <form action=""> --}}
                <table class="table text-center align-middle table-striped table-bordered">
                    <thead class="align-middle">
                    <tr>
                        <th scope="col">No</th>
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
                                <td>{{ $loop->iteration }}</td>
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
                                        <button type="submit" class="btn btn-danger" onclick="deleteEmployee({{ $employee->id }})">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            {{-- Update Dosen/Staff --}}
                            <div class="modal fade" id="editDosen-{{ $employee->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fw-bold" id="exampleModalLabel">Edit Dosen/Staff</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('employee.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="modal-body">
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <label for="kode_prodi" class="form-label">Kode Prodi</label>
                                                        {{-- <input type="text" class="form-control" id="kode_prodi" name="kode_prodi" value="{{ optional($employee->major)->kode_prodi }}"> --}}
                                                        <select class="form-select" id="kode_prodi" name="kode_prodi" aria-label="Default select example">
                                                            <option value="{{ ($employee->major)->kode_prodi }}">{{ ($employee->major)->nama }}</option>
                                                            @foreach ($majors as $major)
                                                                @if ($major->kode_prodi != ($employee->major)->kode_prodi)
                                                                    <option value="{{ $major->kode_prodi }}">{{ $major->nama }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nama" class="form-label">Nama</label>
                                                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $employee->nama }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nidn" class="form-label">NIDN</label>
                                                        <input type="text" class="form-control" id="nidn" name="nidn" value="{{ $employee->nidn }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="jabatan" class="form-label">Jabatan</label>
                                                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $employee->jabatan }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="pendidikan" class="form-label">Pendidikan</label>
                                                        <input type="text" class="form-control" id="pendidikan" name="pendidikan" value="{{ $employee->pendidikan }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="gambar" class="form-label">Gambar</label>
                                                        <input type="file" class="form-control" id="gambar" name="gambar" value="{{ $employee->gambar }}">
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
            {{-- </form> --}}
        </div>
    </div>

    <!-- Add Dosen/Staff -->
<div class="modal fade" id="addDosen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="exampleModalLabel">Tambah Dosen/Staff</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="kode_prodi" class="form-label">Prodi</label>
                            <select class="form-select" id="kode_prodi" name="kode_prodi" aria-label="Default select example">
                                <option selected>Pilih Prodi</option>
                                @foreach ($majors as $major)
                                    <option value="{{ $major->kode_prodi }}">{{ $major->nama }}</option>
                                @endforeach
                            </select>
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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>


    

</section>


{{-- KURIKULUM SUBPAGE --}}
<section id="kurikulum-subpage" class="m-3 d-none">

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
            <!-- <form action=""> -->
                <table class="table text-center align-middle table-striped table-bordered">
                    <thead class="align-middle">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Mata Kuliah</th>
                        <th scope="col">Kode Mata Kuliah</th>
                        <th scope="col">Prodi</th>
                        <th scope="col">Jumlah SKS</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($courses as $course)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-break" style="max-width: 200px;">{{ $course->nama }}</td>
                        <td class="text-break" style="max-width: 200px;">{{ $course->kode_mk }}</td>
                        <td class="text-break" style="max-width: 200px;">{{ optional($course->major)->nama }}</td>
                        <td class="text-break" style="max-width: 200px;">{{ $course->sks }}</td>
                        <td class="text-break" style="max-width: 200px;">{{ $course->semester }}</td>
                        <td style="min-width: 120px; width: 120px">
                            <form action="{{ route('admin.program.course.destroy', $course->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editCourse-{{ $course->id }}">
                                            <i class="bi bi-pen"></i>
                                        </button>
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                        </td>
                    </tr>
                    <!-- Modal untuk menambah/mengedit mata kuliah -->
                    <div class="modal fade" id="editCourse-{{ $course->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Mata Kuliah</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('course.update', $course->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="card-body">
                                        <div class="mb-3">
                                                        <label for="kode_prodi" class="form-label">Kode Prodi</label>
                                                        {{-- <input type="text" class="form-control" id="kode_prodi" name="kode_prodi" value="{{ optional($employee->major)->kode_prodi }}"> --}}
                                                        <select class="form-select" id="kode_prodi" name="kode_prodi" aria-label="Default select example">
                                                            <option value="{{ ($employee->major)->kode_prodi }}">{{ ($employee->major)->nama }}</option>
                                                            @foreach ($majors as $major)
                                                                @if ($major->kode_prodi != ($employee->major)->kode_prodi)
                                                                    <option value="{{ $major->kode_prodi }}">{{ $major->nama }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text" class="form-control" id="nama" name="nama" value="{{ $course->nama }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="kode_mk" class="form-label">Kode Mata Kuliah</label>
                                                <input type="text" class="form-control" id="kode_mk" name="kode_mk" value="{{ $course->kode_mk }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="sks" class="form-label">Jumlah SKS</label>
                                                <input type="number" class="form-control" id="sks" name="sks" value="{{ $course->sks }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="semester" class="form-label">Semester</label>
                                                <input type="number" class="form-control" id="semester" name="semester" value="{{ $course->semester }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <form method="dialog">                                      -->
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                        <!-- </form> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </tbody>
                </table>
            <!-- </form> -->
        </div>
    </div>



<!-- Modal -->
<!-- Button untuk membuka modal -->


<!-- Modal -->
<div class="modal fade" id="myModalkur" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Mata Kuliah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form action="{{ route('course.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                        <label for="select_kode_prodi" class="form-label">Prodi</label>
                        <select class="form-select" id="kode_prodi" name="kode_prodi" aria-label="Default select example">
                                <option selected>Pilih Prodi</option>
                                @foreach ($majors as $major)
                                    <option value="{{ $major->kode_prodi }}">{{ $major->nama }}</option>
                                @endforeach
                            </select>        
                        </div>
                        <div class="mb-3">
                            <label for="input_kode_mk" class="form-label">Kode Mata Kuliah</label>
                            <input type="text" class="form-control" id="input_kode_mk" name="kode_mk">
                        </div>
                        <div class="mb-3">
                            <label for="input_nama" class="form-label">Nama Mata Kuliah</label>
                            <input type="text" class="form-control" id="input_nama" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="input_sks" class="form-label">Jumlah SKS</label>
                            <input type="number" class="form-control" id="input_sks" name="sks">
                        </div>
                        <div class="mb-3">
                            <label for="input_semester" class="form-label">Semester</label>
                            <input type="number" class="form-control" id="input_semester" name="semester">
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