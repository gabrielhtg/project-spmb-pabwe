@extends('template.app')

@section('isi-halaman')
    <head>
        <link rel="stylesheet" href="{{ asset('/assets/css/pengumuman.css') }}">
    </head>

    <body>
        <section class="container-judul" id="Pengumuman">
        <div class="hero-pengumuman">
            <h1 class="judul-pengumuman">Pengumuman SPMB</h1>
            <p>
                Halaman website ini adalah tempat resmi untuk mendapatkan informasi terbaru seputar asrama, pengumuman kelulusan
                ujian masuk, jadwal kegiatan, dan berita penting lainnya. Cari informasi dengan mudah melalui fitur pencarian
                atau berdasarkan tag yang disediakan.
            </p>
        </div>
        </section>


    </body>
@endsection
