@extends('template.admin-panel-template')

@section('isi-admin-panel')

<div class="container-fluid p-3">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <span class="fs-3">Data pengumuman</span>
        </div>
        <div class="p-3">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <a href="{{ route('get.add-pengumuman') }}">
                    <button class="btn btn-primary">Tambah pengumuman</button>
                </a>

                <div class="input-group mb-3" style="width: 300px;">
                    <input type="text" class="form-control" placeholder="cari pengumuman" aria-label="cari pengumuman" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">Cari</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="p-3">
            <table class="table table-striped table-bordered text-center align-middle">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tag</th>
                    <th scope="col">Judul Pengumuman</th>
                    <th scope="col">File</th>
                    <th scope="col">Created by</th>
                    <th scope="col">Tanggal Pengumuman</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($pengumuman))
                        @php
                            $counter = 1;
                        @endphp
                        @foreach ($pengumuman as $item)
                            <tr>
                                <td>{{ $counter++ }}</td>
                                <td>{{ $item->kategoriPengumuman }}</td>
                                <td>{{ $item->judulPengumuman }}</td>
                                <td>{{ $item->filePengumuman}}</td>
                                <td>{{ $admin->firstname}}</td>
                                <td>{{  date('d F Y', strtotime($item->tanggalPengumuman)) }}</td>
                                <td style="min-width: 120px; width: 120px">
                                    <div class="d-grid gap-2 d-md-flex align-middle text-center col-md-6">
                                        <button class="btn btn-success"
                                                onclick="showModalEdit({{$item->id}},'{{$item->kategoriPengumuman}}','{{$item->judulPengumuman}}','{{$item->filePengumuman}}','{{$item->tanggalPengumuman}}')">
                                                <i class="bi bi-pen"></i>
                                        </button>
                                        <form action="{{ route('post.destroy.pengumuman',  ['id' => $item->id]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"  class="btn btn-danger"><i class="bi bi-trash"></i></button>
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

            <!-- MODAL EDIT PENGUMUMAN -->
            <div class="modal fade" id="editPengumuman" tabindex="-1" aria-labelledby="editFasilitasLabel" aria-hidder="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editPengumumanLabel">Ubah Data Pengumuman</h5>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action=" {{ route('post.edit.pengumuman') }}"
                                  method="POST">
                                @csrf
                                <input name="id" type="hidden" id="inputEditPengumuman">

                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="inputEditKategori" class="form-label">Pilih Kategori Pengumuman</label>
                                        <select class="form-select" id="inputEditKategori" name="kategoriPengumuman" >
                                            <option value="PMDK">PMDK</option>
                                            <option value="USM 1">USM 1</option>
                                            <option value="USM 2">USM 2</option>
                                            <option value="USM 3">USM 3</option>
                                            <option value="USM 4">USM 4</option>
                                            <option value="UTBK">UTBK</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputjudulPengumuman" class="form-label">Judul Pengumuman</label>
                                        <input type="text" class="form-control" name="judulPengumuman" id="inputjudulPengumuman">
                                    </div>

                                    <div class="fw-bold">Ubah File Pengumuman</div>

                                    <div class="mb-3">
                                        <label for="inputfilePengumuman" class="form-label">File</label>
                                        <input type="file" class="form-control" name="filePengumuman" id="inputfilePengumuman">
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputtanggalPengumuman" class="form-label">Tanggal Pengumuman</label>
                                        <input type="date" class="form-control" name="tanggalPengumuman" id="inputtanggalPengumuman">
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
                <!-- AKHIR MODAL EDIT -->
        </div>
    </div>
</div> 

<script>
    function showModalEdit(id, kategoriPengumuman, judulPengumuman, filePengumuman, tanggalPengumuman)
    {
        const modalEditPengumuman = document.getElementById("editPengumuman");
        const inputId = document.getElementById("inputEditPengumuman");
        const inputKategori = document.getElementById("inputEditKategori")
        const inputJudulPengumuman = document.getElementById("inputjudulPengumuman");
        const inputFilePengumuman = document.getElementById("inputfilePengumuman");                                          
        const inputTanggalPengumuman = document.getElementById("inputtanggalPengumuman");

        inputId.value = id;
        inputKategori.value = kategoriPengumuman;
        inputJudulPengumuman.value = judulPengumuman;
        inputFilePengumuman.value = '';
        inputTanggalPengumuman.value = tanggalPengumuman;

        var myModal = new bootstrap.Modal(modalEditPengumuman)
        myModal.show();
    }
</script>

@endsection