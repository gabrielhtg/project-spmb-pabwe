@extends('template.app')

@section('isi-halaman')

<section id="hero" class="container">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/beasiswa/beasiswa-wp.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
</section>

<div class="container mt-3">
    <div class="card mb-3">
        <h5 class="card-header text-center" style="height: 56.7px; width: 100%; display: flex; align-items: center; justify-content: center; background-color: #d9d9d9; color: #0066cc; font-weight: bold;">Beasiswa Prestasi Per Semester ( IPS )</h5>
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('assets/img/beasiswa/b1.png') }}" class="img-fluid rounded-start" style="height: 100%; object-fit: cover;" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p class="card-text"> Beasiswa IPS diberikan kepada mahasiswa dalam bentuk potongan SPP dengan aturan sebagai berikut: <br>
                        a. Beasiswa Prestasi Per Semester (IPS) diberikan bagi semua mahasiswa pada tingkat 1, tingkat 2, tingkat 3, dan tingkat 4 kecuali mahasiswa pada semester terakhir masa studinya (semester 6 pada prodi DIII dan semester 8 pada prodi DIV dan S1)<br>
                        b. Mahasiswa penerima Beasiswa Prestasi harus memiliki perilaku terpuji dan dibuktikan dengan Nilai Perilaku minimal AB.
                    </p>

                    <a href="{{ asset('assets/pdf/beasiswa.pdf') }}" class="btn btn-primary" style="position: absolute; bottom: 10px; right: 10px;" download>Download PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="card mb-3">
        <h5 class="card-header text-center" style="height: 56.7px; width: 100%; display: flex; align-items: center; justify-content: center; background-color: #d9d9d9; color: #0066cc; font-weight: bold;">Penghargaan ”Best Performance”</h5>
        <div class="row g-0">
        <div class="col-md-4" style="text-align: center;">
    <img src="{{ asset('assets/img/beasiswa/b2.jpg') }}" class="img-fluid rounded-start" style="height: 100%; object-fit: cover; margin-left: auto;" alt="...">
</div>

            <div class="col-md-8">
                <div class="card-body">
                    <p class="card-text"> a. Penghargaan “Best Performance” adalah penghargaan yang diberikan kepada
                                            mahasiswa dengan kenaikan IPS paling tinggi antara IP semester ganjil dan IP
                                            semester genap pada tiap tahun ajaran<br>
                                            b. Penghargaan “Best Performance” diberikan kepada satu orang mahasiswa pada
                                            setiap angkatan (tingkat).<br>
                                            c. Penghargaan “Best Performance” diberikan pada Semester Ganjil tahun ajaran baru
                                            bagi mahasiswa yang memperoleh anugerah “Best Performance” pada Perayaan
                                            Inaugurasi, Dies Natalis dan Wisuda IT Del.
                    </p>

                    <a href="{{ asset('assets/pdf/beasiswa.pdf') }}" class="btn btn-primary" style="position: absolute; bottom: 10px; right: 10px;" download>Download PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>







<script src="{{ asset("/assets/js/chatbot.js") }}"></script>

@endsection
