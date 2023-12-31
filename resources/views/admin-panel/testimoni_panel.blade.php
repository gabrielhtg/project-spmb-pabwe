@extends('template.admin-panel-template')

@section('isi-admin-panel')

    <div class="container-fluid p-3">
        <div class="card">
            <div id="item-2" class="card">
                <div class="card-header bg-primary text-white">
                    <span class="fs-5">Testimoni</span>
                </div>
                <div class="card-body d-flex flex-column">
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
                            <th scope="col">Created at</th>
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
                                <td>{{ $item->created_at }}</td>
                                <td style="min-width: 120px; width: 120px">
                                    <button onclick="showModalUpdate({{$item->id}}, '{{ $item->nama_mahasiswa }}', '{{ $item->prodi }}', '{{ $item->angkatan }}', '{{ $item->deskripsi }}', '{{ $item->kategori_mahasiswa }}')" class="btn btn-success">
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
            inputDesc.value = upDeskripsi;
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
