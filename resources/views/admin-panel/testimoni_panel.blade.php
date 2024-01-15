@extends('template.admin-panel-template')

@section('isi-admin-panel')

    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <div class="container-fluid p-3">
        <div class="card">
            <div id="item-2" class="card">
                <div class="card-header bg-primary text-white">
                    <span class="fs-5">Testimoni</span>
                </div>
                <div class="card-body d-flex justify-content-center flex-column pt-3 overflow-x-auto w-100">

                    <div class="row">
                        <div class="col">
                            @if ($errors->any())
                                <div class="alert alert-danger  alert-dismissible fade show">
                                    <strong class="alert-heading strong"><i class="fa-solid fa-exclamation-circle"></i>
                                        Terjadi Kesalahan!</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>

                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if(session('success'))
                                <div class="alert alert-success  alert-dismissible fade show">
                                    <strong class="alert-heading strong"><i class="fa-solid fa-check-circle"></i>
                                        Sukses!</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>

                                    {{ session('success') }}
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger alert-dismissible fade show">
                                    <strong class="alert-heading strong"><i class="fa-solid fa-exclamation-circle"></i>
                                        Terjadi Kesalahan!</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>

                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>
                    </div>

                    @include('admin-panel.sub_admin_panel.tambah_testimoni')

                    @include('admin-panel.sub_admin_panel.ubah_testimoni')

                    @include('admin-panel.sub_admin_panel.hapus_testimoni')

                    <table class="table text-center align-middle table-striped table-bordered">
                        <thead class="align-middle">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Angkatan</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Jenis Testimoni</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($dataTestimoni as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_mahasiswa }}</td>
                                <td>{{ $item->prodi }}</td>
                                <td><img src="{{ asset($item->photo) }}" alt="" width="50" height="50"></td>
                                <td>{{ $item->angkatan }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td>
                                    @switch($item->kategori_mahasiswa)
                                        @case('Alumni')
                                            <span class="badge bg-success">{{ $item->kategori_mahasiswa }}</span>
                                            @break
                                        @case('Mahasiswa')
                                            <span class="badge bg-danger">{{ $item->kategori_mahasiswa }}</span>
                                            @break
                                    @endswitch
                                </td>
                                <td style="min-width: 120px; width: 120px">
                                    <button
                                        onclick="showModalUpdate({{$item->id}}, '{{ $item->nama_mahasiswa }}', '{{ $item->prodi }}', '{{ $item->angkatan }}', '{{ $item->deskripsi }}', '{{ $item->kategori_mahasiswa }}')"
                                        class="btn btn-success">
                                        <i class="bi bi-pen"></i>
                                    </button>
                                    <button onclick="showModalDelete({{$item->id}})" class="btn btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center text-muted">Belum ada data tersedia!</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#deskripsi'))
            .then(
                editor => {
                    editor.setData(upDeskripsi);
                }
            )
            .catch(error => {
                console.error(error);
            });

        function showModalUpdate(upId, upNama, upProdi, upAngkatan, upDeskripsi, upJenis) {
            const modalUpdate = document.getElementById("modal-edit");

            const inputId = document.getElementById("inputId");
            const inputNama = document.getElementById("namaUpdate");
            const inputProdi = document.getElementById("prodiUpdate");
            const inputAngkatan = document.getElementById("angkatanUpdate");
            const inputDesc = document.getElementById("deskripsiUpdate");
            const inputJenis = document.getElementById("jenisUpdate");

            inputId.value = upId;
            inputNama.value = upNama;
            inputProdi.value = upProdi;
            inputAngkatan.value = upAngkatan;

            ClassicEditor
                .create(document.querySelector('#deskripsiUpdate'))
                .then(
                    editor => {
                        editor.setData(upDeskripsi);
                    }
                )
                .catch(error => {
                    console.error(error);
                });

            // CKEDITOR.instances['inputDesc'].setData(upDeskripsi);
            inputJenis.value = upJenis;

            var myModal = new bootstrap.Modal(modalUpdate)
            myModal.show()
        }

        function showModalDelete(delId) {
            const modalDelete = document.getElementById("modal-delete");
            const inputId = document.getElementById("inputIdDelete");

            inputId.value = delId;

            var myModal = new bootstrap.Modal(modalDelete)
            myModal.show()
        }
    </script>
@endsection
