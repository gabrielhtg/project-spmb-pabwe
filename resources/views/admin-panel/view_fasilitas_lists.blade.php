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
                        <th scope="col">Jumlah Fasilitas</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $counter = 1;
                        $fasilitasByCategory = []; // Variabel untuk menyimpan jumlah fasilitas per kategori
                    @endphp

                    @foreach ($fasilitas as $item)
                        @php
                            // Inisialisasi jumlah fasilitas untuk kategori jika belum ada
                            $fasilitasByCategory[$item->kategori] = $fasilitasByCategory[$item->kategori] ?? 0;
                            // Tambahkan 1 ke jumlah fasilitas untuk kategori tersebut
                            $fasilitasByCategory[$item->kategori]++;
                        @endphp
                    @endforeach

                    @forelse ($fasilitasByCategory as $kategori => $jumlahFasilitas)
                        <tr>
                            <td>{{ $counter++ }}</td>
                            <td>{{ $kategori }}</td>
                            <td>{{ $jumlahFasilitas }}</td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">
                                    <span class="fs-6">Tidak ada data</span>
                                </td>
                            </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
        
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <a href="{{ route('get.add-fasilitas') }}">
                <button class="btn btn-primary">Tambah Fasilitas</button>
            </a>
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
                            @php
                                $counter = 1;
                            @endphp
                            @forelse ($fasilitas as $item)
                                <tr>
                                <th>{{ $counter++ }}</th>
                                <td>{{ $item->kategori }}</td>
                                <td>{{ $item->nama_fasilitas }}</td>
                                <td>{!! $item->deskripsi_fasilitas !!}</td>
                                <td>{{ $item->file_gambar}}</td>
                                <td>{{ $admin->firstname}}</td>
                                <td>{{ date('d F Y - H:i', strtotime($item->created_at)) }}</td>
                                <td style="min-width: 120px; width: 120px">
                                        <button class="btn btn-success"
                                                onclick="showModalEdit({{$item->id}},'{{ $item->kategori }}', '{{ $item->nama_fasilitas }}', '{{ $item->deskripsi_fasilitas }}', '{{ $item->nama_file }}', '{{ $item->file_gambar }}')">
                                            <i class="bi bi-pen"></i>
                                        </button>

                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}"><i class="bi bi-trash"></i></button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus fasilitas!</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah anda yakin ingin menghapus {{ $item->nama_fasilitas }}?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <form action="{{ route('post.destroy', $item->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">
                                            <span class="fs-6">Tidak ada data</span>
                                        </td>
                                    </tr>
                            @endforelse
                    </tbody>
                </table>

                <!-- MODAL EDIT FASILITAS -->
                <div class="modal fade" id="editFasilitas" tabindex="-1" aria-labelledby="editFasilitasLabel" aria-hidder="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editFasilitasLabel">Ubah Data Fasilitas<span class="star">*</span></h5>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('post.fasilitas.edit') }}" method="POST">
                                @csrf
                                <input name="id" type="hidden" id="inputEditFasilitas">

                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="inputEditKategori" class="form-label">Pilih Kategori Fasilitas<span class="star">*</span></label>
                                        <select class="form-select" id="inputEditKategori" name="kategori">
                                            <option value="Asrama">Asrama</option>
                                            <option value="Kesehatan & Olahraga">Kesehatan & Olahraga</option>
                                            <option value="Area Mahasiswa">Area Mahasiswa</option>
                                            <option value="Laboratorium">Laboratorium</option>
                                            <option value="Layanan Makanan">Layanan Makanan</option>
                                        </select> 
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputNamaFasilitas" class="form-label">Nama Fasilitas<span class="star">*</span></label>
                                        <input type="text" class="form-control" id="inputNamaFasilitas" name="nama_fasilitas" data-original-value="">
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputDeskripsiFasilitas" class="form-label">Deskripsi Fasilitas<span class="star">*</span></label>
                                        <textarea class="form-control" id="inputDeskripsiFasilitas" name="deskripsi_fasilitas" rows="5"></textarea>
                                    </div>

                                    <p class="fw-bold">Edit Gambar Fasilitas</p>

                                    <div class="mb-3">
                                        <label for="inputNamaFile" class="form-label">Nama File<span class="star">*</span></label>
                                        <input type="text" class="form-control" id="inputNamaFile" name="nama_file" data-original-value="">
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputFileGambar" class="form-label">Tambahkan File (JPG, JPEG, PNG)<span class="star">*</span></label>
                                        <input type="file" class="form-control" id="inputFileGambar" name="file_gambar" accept="image/jpeg, image/png">
                                        <small class="text-muted">*Format file harus berupa .jpg, .jpeg, atau .png, dan batas maksimal ukuran file adalah 2 MB.</small>
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
</div>
    
@endsection

    @section('other-js')
        <script>
        function showModalEdit(id, kategori, nama_fasilitas, deskripsi_fasilitas, nama_file, file_gambar) {
            const modalEditFasilitas = document.getElementById("editFasilitas");
            const inputId = document.getElementById("inputEditFasilitas");
            const inputKategori = document.getElementById("inputEditKategori");
            const inputNamaFasilitas = document.getElementById("inputNamaFasilitas");
            const inputDeskripsiFasilitas = document.getElementById("inputDeskripsiFasilitas");
            const inputNamaFile = document.getElementById("inputNamaFile");
            const inputFileGambar = document.getElementById("inputFileGambar");
            
            inputKategori.value = kategori;
            inputId.value = id;
            inputNamaFasilitas.value = nama_fasilitas;
            inputDeskripsiFasilitas.value = deskripsi_fasilitas; // Isi nilai "Deskripsi Fasilitas"
            inputNamaFile.value = nama_file;
            inputFileGambar.value = '';

            var myModal = new bootstrap.Modal(modalEditFasilitas);
            myModal.show();
        }
        </script>
        <script>
            $('#editFasilitas').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var id = button.data('id');

                // Ganti URL_API dan NAMA_CONTROLLER dengan URL dan nama controller Laravel yang sesuai
                var url = '/api/fasilitas/' + id; // Misalnya, '/api/fasilitas/1'
    
                // Mengambil data dari server dengan AJAX
                $.get(url, function(data) {
                    // Mengisi nilai input pada modal
                    $('#inputEditFasilitas').val(data.id);
                    $('#inputEditKategori').val(data.kategori);
                    $('#inputNamaFasilitas').val(data.nama_fasilitas).data('original-value', data.nama_fasilitas);
                    $('#inputDeskripsiFasilitas').val(data.deskripsi_fasilitas);
                    $('#inputNamaFile').val(data.nama_file).data('original-value', data.nama_file);
                });
            });
        </script>
        <script>
            ClassicEditor
                .create( document.querySelector( '#inputDeskripsiFasilitas' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
    @endsection

