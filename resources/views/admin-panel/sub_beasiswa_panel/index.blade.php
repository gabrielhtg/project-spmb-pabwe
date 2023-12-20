@extends('template.admin-panel-template')

@section('isi-admin-panel')


    <div class="container-fluid p-3">
        <div class="row row-gap-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <span class="fs-3">Pengelolaan Beasiswa</span>
                    </div>

                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#modalTambahBeasiswa">
                            Tambah Beasiswa
                        </button>
                    </div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Judul Beasiswa</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">File</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($beasiswa as $beasiswas)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $beasiswas->judul }}</td>
                                        <td>{{ $beasiswas->deskripsi }}</td>
                                        <td><img src="{{ asset($beasiswas->gambar) }}" alt="Gambar Beasiswa A"
                                                width="50"></td>
                                        <td><a href="{{ asset($beasiswas->file) }}" download>Download File</a></td>
                                        <td class="text-center" style="min-width: 120px; width: 120px">
                                            <form action="{{ route('admin.beasiswa.destroy', $beasiswas->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#modalEditBeasiswa-{{ $beasiswas->id }}">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="deleteBeasiwas({{ $beasiswas->id }})">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris data beasiswa lainnya sesuai kebutuhan -->
                                    <div class="modal fade" id="modalEditBeasiswa-{{ $beasiswas->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Beasiswa</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Add your form for editing beasiswa here -->
                                                    <form id="formEditBeasiswa-{{ $beasiswas->id }}"
                                                        action="{{ route('admin.beasiswa.update', ['id' => $beasiswas->id]) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="mb-3">
                                                            <label for="edit_judul_beasiswa" class="form-label">Judul
                                                                Beasiswa</label>
                                                            <input type="text" class="form-control"
                                                                id="edit_judul_beasiswa" name="edit_judul_beasiswa"
                                                                value="{{ $beasiswas->judul }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="edit_deskripsi_beasiswa"
                                                                class="form-label">Deskripsi Beasiswa</label>
                                                            <textarea class="form-control" id="edit_deskripsi_beasiswa" name="edit_deskripsi_beasiswa" rows="5">{{ $beasiswas->deskripsi }}</textarea>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="edit_gambar_beasiswa" class="form-label">Gambar
                                                                Beasiswa (Max: 2MB)</label>
                                                            <input type="file" class="form-control"
                                                                id="edit_gambar_beasiswa" name="edit_gambar_beasiswa">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="edit_file_beasiswa" class="form-label">File Beasiswa
                                                                (Max: 2MB)</label>
                                                            <input type="file" class="form-control"
                                                                id="edit_file_beasiswa" name="edit_file_beasiswa">
                                                        </div>
                                                        <!-- Add other fields for editing -->
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary"
                                                            onclick="submitEditForm({{ $beasiswas->id }})">Save
                                                            Changes</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <form id="formDeleteBeasiswa-{{ $beasiswas->id }}"
                                        action="{{ route('admin.beasiswa.destroy', ['id' => $beasiswas->id]) }}"
                                        method="post" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                @endforeach
                                </ tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Adding Beasiswa -->
    <div class="modal fade" id="modalTambahBeasiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Beasiswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Add your form for adding beasiswa here -->
                    <form id="formTambahBeasiswa" action="{{ route('admin.beasiswa.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="tambah_judul_beasiswa" class="form-label">Judul Beasiswa</label>
                            <input type="text" class="form-control" id="tambah_judul_beasiswa"
                                name="tambah_judul_beasiswa">
                        </div>
                        <div class="mb-3">
                            <label for="tambah_deskripsi_beasiswa" class="form-label">Deskripsi Beasiswa</label>
                            <textarea class="form-control" id="tambah_deskripsi_beasiswa" name="tambah_deskripsi_beasiswa" rows="5"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="tambah_gambar_beasiswa" class="form-label">Gambar Beasiswa (Max: 2MB)</label>
                            <input type="file" class="form-control" id="tambah_gambar_beasiswa"
                                name="tambah_gambar_beasiswa">
                        </div>
                        <div class="mb-3">
                            <label for="tambah_file_beasiswa" class="form-label">File Beasiswa (Max: 2MB)</label>
                            <input type="file" class="form-control" id="tambah_file_beasiswa"
                                name="tambah_file_beasiswa">
                        </div>
                        <!-- Add other fields for adding -->
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="submitForm()">Add Beasiswa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.3/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        function submitForm() {
            document.getElementById('formTambahBeasiswa').submit();

        }

        function submitEditForm(id) {
            document.getElementById('formEditBeasiswa-' + id).submit();
        }

        function confirmDelete(id) {
            if (confirm("Apakah Anda yakin ingin menghapus beasiswa ini?")) {
                fetch('{{ route('admin.beasiswa.destroy', ['id' => '_id']) }}'.replace('__id_', id), {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json'
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Show success notification
                            Swal.fire({
                                icon: 'success',
                                title: 'Sukses!',
                                text: data.message,
                            }).then(() => {
                                // Redirect to the same page
                                window.location.href = '{{ route('admin.beasiswa.index') }}';
                            });
                        } else {
                            // Show error notification
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal!',
                                text: data.message,
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            }
        }
    </script>

@endsection
