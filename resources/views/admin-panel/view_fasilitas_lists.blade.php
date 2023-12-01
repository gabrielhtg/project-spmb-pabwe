@extends('template.admin-panel-template')

@section('isi-admin-panel')

<div class="container-fluid p-3">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <span class="fs-3">Data Fasilitas</span>
        </div>
        <div class="p-3">
            
            <div class="pt-3">
            <table class="table table-striped table-bordered">
                <thead class="text-center">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $counter = 1;
                        $displayedCategories = []; // Variabel untuk melacak kategori yang sudah ditampilkan
                    @endphp

                    @foreach ($fasilitas as $item)
                        @if (!in_array($item->kategori, $displayedCategories))
                            <tr>
                                <th>{{ $counter++ }}</th>
                                <th>{{ $item->kategori }}</th>
                            </tr>
                            @php
                                $displayedCategories[] = $item->kategori; // Tambahkan kategori ke array yang sudah ditampilkan
                            @endphp
                        @endif
                    @endforeach
                </tbody>

            </table>
        </div>
        
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <a href="{{ route('get.add-fasilitas') }}">
                <button class="btn btn-primary">Tambah Fasilitas</button>
            </a>

            <div class="input-group mb-3" style="width: 300px;">
                <input type="text" class="form-control" placeholder="cari fasilitas" aria-label="cari fasilitas" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Cari</button>
                </div>
            </div>
        </div>


            <div class="pt-3">
                <table class="table table-striped table-bordered">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Nama Fasilitas</th>
                        <th scope="col">Deskripsi Gambar</th>
                        <th scope="col">File Gambar</th>
                        <th scope="col">Created by</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($fasilitas))
                            @php
                                $counter = 1;
                            @endphp
                            @foreach ($fasilitas as $item)
                                <tr>
                                <th>{{ $counter++ }}</th>
                                <td>{{ $item->kategori }}</td>
                                <td>{{ $item->nama_fasilitas }}</td>
                                <td>{{ $item->deskripsi_fasilitas}}</td>
                                <td>{{ $item->file_gambar}}</td>
                                <td>{{ $admin->firstname}}</td>
                                <td>{{ date('d F Y - H:i', strtotime($item->created_at)) }}</td>
                                <td>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-warning btn-sm"
                                            onclick="showModalEdit('{{ $item->kategori }}', '{{ $item->nama_fasilitas }}', '{{ $item->deskripsi_fasilitas }}', '{{ $item->nama_file }}', '{{ $item->file_gambar }}')">
                                        Edit
                                    </button>

                                        <form action="{{ route('post.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </div>
                                    </td>
                                </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="8" class="text-center text-muted">Belum ada data tersedia!</td>
                                </tr>
                        @endif
                    </tbody>
                </table>

                <!-- MODAL EDIT FASILITAS -->
                <div class="modal fade" id="editFasilitas" tabindex="-1" aria-labelledby="editFasilitasLabel" aria-hidder="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="model-header">
                                <h5 class="modal-title" id="editFasilitasLabel">Ubah Data Fasilitas</h5>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('post.fasilitas.edit') }}" method="POST">
                                @csrf
                                <input name="id" type="hidden" id="inputEditFasilitas">

                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="inputEditKategori" class="form-label">Pilih Kategori Fasilitas</label>
                                        <select class="form-select" id="inputEditKategori" name="kategori">
                                            <option value="Asrama">Asrama</option>
                                            <option value="Kesehatan & Olahraga">Kesehatan & Olahraga</option>
                                            <option value="Area Mahasiswa">Area Mahasiswa</option>
                                            <option value="Laboratorium">Laboratorium</option>
                                            <option value="Layanan Makanan">Layanan Makanan</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputNamaFasilitas" class="form-label">Nama Fasilitas</label>
                                        <input type="text" class="form-control" id="inputNamaFasilitas" name="nama_fasilitas">
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputDeskripsiFasilitas" class="form-label">Deskripsi Fasilitas</label>
                                        <input type="text" class="form-control" id="inputDeskripsiFasilitas" name="deskripsi_fasilitas">
                                    </div>

                                    <p class="fw-bold">Edit Gambar Fasilitas</p>

                                    <div class="mb-3">
                                        <label for="inputNamaFasilitas" class="form-label">Nama File</label>
                                        <input type="text" class="form-control" id="inputNamaFasilitas" name="nama_file">
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputFileGambar" class="form-label">Tambahkan File (JPG, JPEG, PNG)</label>
                                        <input type="file" class="form-control" id="inputFileGambar" name="file_gambar">
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- TAMBAHKAN JAVASCRIPTNYA DI SINI -->
@section('other-js')
    <script>
        function showModalEdit(kategori, nama_fasilitas, deskripsi_fasilitas, nama_file, file_gambar)
        {
            const modalEditFasilitas = document.getElementById("editFasilitas");
            const inputKategori = document.getElementById("inputEditKategori")
            const inputNamaFasilitas = document.getElementById("inputNamaFasilitas");
            const inputDeskripsiFasilitas = document.getElementById("inputDeskripsiFasilitas");                                          
            const inputNamaFile = document.getElementById("inputNamaFile");
            const inputFileGambar = document.getElementById("inputFileGambar");

            inputKategori.value = kategori;
            inputNamaFasilitas.value = nama_fasilitas;
            inputDeskripsiFasilitas.value = deskripsi_fasilitas;
            inputNamaFile.value = nama_file;
            inputFileGambar.value = '';

            var myModal = new bootstrap.Modal(modalEditFasilitas)
            myModal.show();
        }
    </script>
@endsection