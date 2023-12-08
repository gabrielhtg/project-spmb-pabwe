@extends('template.admin-panel-template')

@section('isi-admin-panel')

    <div class="container-fluid p-3">
        <div class="card">
            <div class="card-header bg-primary text-white" style="display: flex; justify-content: space-between; align-items: center;">
                <span class="fs-3">Tambah Data Fasilitas</span>
                <a href="{{ route("fasilitas-admin") }}">
                    <button class="btn btn-outline-light">
                        Kembali
                    </button>
                </a>
            </div>

            <div class="p-3">
            <form method="POST" action="{{ route('post.fasilitas') }}" enctype="multipart/form-data">
                @csrf
                <p class="fw-bold">Tambah Detail Fasilitas</p>

                <div class="mb-3">
                    <label for="selectOption" class="form-label">Pilih Kategori Fasilitas</label>
                    <select class="form-select" id="selectOption" name="kategori">
                        <option value="Asrama">Asrama</option>
                        <option value="Kesehatan & Olahraga">Kesehatan & Olahraga</option>
                        <option value="Area Mahasiswa">Area Mahasiswa</option>
                        <option value="Laboratorium">Laboratorium</option>
                        <option value="Layanan Makanan">Layanan Makanan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="nama_fasilitas" class="form-label">Nama Fasilitas</label>
                    <input type="text" class="form-control" id="nama_fasilitas" name="nama_fasilitas">
                </div>

                <div class="mb-3">
                    <label for="deskripsi_fasilitas" class="form-label">Deskripsi Fasilitas</label>
                    <textarea type="text" class="form-control" id="deskripsi_fasilitas" rows="5" name="deskripsi_fasilitas"></textarea>
                </div>

                <p class="fw-bold">Tambah Gambar Fasilitas</p>

                <div class="mb-3">
                    <label for="nama_file" class="form-label">Nama File</label>
                    <input type="text" class="form-control" id="nama_file" name="nama_file">
                </div>

                <div class="mb-3">
                    <label for="file_gambar" class="form-label">Tambahkan File (JPG, JPEG, PNG)</label>
                    <input type="file" class="form-control" id="file_gambar" name="file_gambar">
                </div>

                <button type="submit" class="btn btn-primary">Tambahkan</button>
            </form>
            </div>
        </div>
    </div>
@endsection

    @section('other-js')
    <script>
        ClassicEditor
            .create( document.querySelector( '#deskripsi_fasilitas' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    @endsection
