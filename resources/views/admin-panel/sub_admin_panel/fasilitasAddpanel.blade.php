<!-- resources/views/tambah-fasilitas.blade.php -->

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

                    <!-- Kategori -->
                    <div class="mb-3">
                        <label for="selectOption" class="form-label">Pilih Kategori Fasilitas<span class="star">*</span></label>
                        <select class="form-select @error('kategori') is-invalid @enderror" id="selectOption" name="kategori">
                            <option value="Asrama">Asrama</option>
                            <option value="Kesehatan & Olahraga">Kesehatan & Olahraga</option>
                            <option value="Area Mahasiswa">Area Mahasiswa</option>
                            <option value="Laboratorium">Laboratorium</option>
                            <option value="Layanan Makanan">Layanan Makanan</option>
                        </select>
                        @error('kategori')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Nama Fasilitas -->
                    <div class="mb-3">
                        <label for="nama_fasilitas" class="form-label">Nama Fasilitas<span class="star">*</span></label>
                        <input type="text" class="form-control @error('nama_fasilitas') is-invalid @enderror" id="nama_fasilitas" name="nama_fasilitas">
                        @error('nama_fasilitas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Deskripsi Fasilitas -->
                    <div class="mb-3">
                        <label for="deskripsi_fasilitas" class="form-label">Deskripsi Fasilitas<span class="star">*</span></label>
                        <textarea type="text" class="form-control @error('deskripsi_fasilitas') is-invalid @enderror" id="deskripsi_fasilitas" rows="5" name="deskripsi_fasilitas"></textarea>
                        @error('deskripsi_fasilitas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Nama File -->
                    <div class="mb-3">
                        <label for="nama_file" class="form-label">Nama File<span class="star">*</span></label>
                        <input type="text" class="form-control @error('nama_file') is-invalid @enderror" id="nama_file" name="nama_file">
                        @error('nama_file')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- File Gambar -->
                    <div class="mb-3">
                        <label for="file_gambar" class="form-label">Tambahkan File (.JPG, .JPEG, .PNG)<span class="star">*</span></label>
                        <input type="file" class="form-control @error('file_gambar') is-invalid @enderror" id="file_gambar" name="file_gambar">
                        <small class="text-muted">*File harus berupa .jpg, .jpeg, atau .png, dan ukurannya tidak boleh lebih dari 2 MB.</small>
                        @error('file_gambar')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
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
