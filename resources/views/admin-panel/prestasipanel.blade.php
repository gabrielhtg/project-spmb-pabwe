@extends('template.admin-panel-template')

@section('isi-admin-panel')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <div class="container-fluid p-3">
        <div class="card">
            <div id="item-2" class="card">
                <div class="card-header bg-primary text-white">
                    <span class="fs-5">Prestasi</span>
                </div>
                <div class="card-body d-flex flex-column">
                    @include('admin-panel.sub_admin_panel.tambah_prestasi')

                    <table id="table-data" class="table text-center align-middle table-striped table-bordered">
                        <thead class="align-middle">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul Prestasi</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Jenis Prestasi</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($dataPrestasi as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->judul_prestasi }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td><img src="{{ asset($item->photo) }}" alt="" width="50" height="50"></td>
                                <td>
                                    @switch($item->jenis_prestasi)
                                        @case('Institut')
                                            <span class="badge bg-success">{{ $item->jenis_prestasi }}</span>
                                            @break
                                        @case('Dosen')
                                            <span class="badge bg-warning">{{ $item->jenis_prestasi }}</span>
                                            @break
                                        @case('Mahasiswa')
                                            <span class="badge bg-danger">{{ $item->jenis_prestasi }}</span>
                                            @break
                                    @endswitch
                                </td>
                                <td>{{ $item->created_at }}</td>
                                <td style="min-width: 120px; width: 120px">
                                    <button onclick="showModalEdit({{ $item->id }}, '{{ addslashes($item->judul_prestasi) }}', '{{ addslashes($item->deskripsi) }}', '{{ $item->jenis_prestasi }}')" class="btn btn-success">
                                        <i class="bi bi-pen"></i>
                                    </button>

                                    <button onclick="showModalDelete({{ $item->id }})" class="btn btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted">Belum ada data tersedia!</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    @include('admin-panel.sub_admin_panel.hapus_prestasi')

    @include('admin-panel.sub_admin_panel.ubah_prestasi')

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script>
        function showModalEdit(idEdit, judul, deskripsi, jenis_prestasi) {
            const modal = document.getElementById("modal-edit");

            const inputId = document.getElementById("inputEdit");
            const inputJudul = document.getElementById("judulUpdate");
            const inputDeskripsi = document.getElementById("deskripsiUpdate");
            const inputJenisPrestasi = document.getElementById("input_jenis_prestasi_update");

            inputId.value = idEdit;
            inputJudul.value = judul;
            inputDeskripsi.value = deskripsi;
            inputJenisPrestasi.value = jenis_prestasi;

            var bsModal = new bootstrap.Modal(modal);
            bsModal.show();
        }

        function showModalDelete(idDelete) {
            const modal = document.getElementById("modal-delete");
            const inputId = document.getElementById("inputDelete");

            inputId.value = idDelete;

            var bsModal = new bootstrap.Modal(modal);
            bsModal.show();
        }

        $(document).ready(function () {
            $('#table-data').DataTable();
        })
    </script>
@endsection
