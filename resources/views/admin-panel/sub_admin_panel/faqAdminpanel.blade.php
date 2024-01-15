@extends('template.admin-panel-template')

@section('isi-admin-panel')
    <div class="container-fluid p-3">
        <div class="card">
            <div class="card-header bg-primary text-white"
                style="display: flex; justify-content: space-between; align-items: center;">
                <span class="fs-3">Tambah FAQ</span>
                <a href="{{ route('faq-admin') }}">
                    <button class="btn btn-outline-light">
                        Kembali
                    </button>
                </a>
            </div>

            <div class="p-3">
                <form method="POST" action="{{ route('post.faq') }}" onsubmit="return validateForm()">
                    @csrf
                    <p class="fw-bold">Tambah Detail FAQ</p>

                    <div class="mb-3">
                        <label for="selectOption" class="form-label">Pilih Kategori FAQ</label>
                        <select class="form-select" id="selectOption" name="kategori">
                            <option value="Umum">Umum</option>
                            <option value="Persyaratan Pendaftaran">Persyaratan Pendaftaran</option>
                            <option value="Jalur Seleksi">Jalur Seleksi</option>
                            <option value="Ujian">Ujian</option>
                            <option value="Pengumuman">Pengumuman</option>
                            <option value="Registrasi">Registrasi</option>
                            <option value="Beasiswa">Beasiswa</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="pertanyaan" class="form-label">Pertanyaan</label>
                        <input type="text" class="form-control" id="pertanyaan" name="pertanyaan">
                    </div>

                    <div class="mb-3">
                        <label for="jawaban" class="form-label">Jawaban</label>
                        <input type="text" class="form-control" id="jawaban" name="jawaban">
                    </div>

                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            var kategori = document.getElementById("selectOption").value;
            var pertanyaan = document.getElementById("pertanyaan").value;
            var jawaban = document.getElementById("jawaban").value;

            if (kategori === "" || pertanyaan === "" || jawaban === "") {
                alert("Semua kolom harus diisi!");
                return false;
            }

            return true;
        }
    </script>
@endsection
