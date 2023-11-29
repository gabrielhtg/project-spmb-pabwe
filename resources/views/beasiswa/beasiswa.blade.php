@extends('template.app')

@section('isi-halaman')

<section id="hero" class="container">
    <title>Daftar Beasiswa</title>
    <link rel="stylesheet" href="{{ asset('assets/css/beasiswa.css') }}" />
    <img src="{{ asset('/assets/img/beasiswa/beasiswa-wp.jpg') }}" class="d-block w-100 blur-image" alt="gambar-1">
    <div class="carousel-caption d-none d-md-block">
        <div class="d-flex flex-column justify-content-center h-100 text-start margin-hero-title">
            <h1 class="display-5 fw-bold">Beasiswa IT Del</h1>
        </div>
    </div>
</section>

<div class="beasiswa-container">
    @foreach($beasiswa as $beasiswaItem)
        <div class="beasiswa-card">
            <!-- Header di atas -->
            <div class="beasiswa-header">
                <h3>{{ $beasiswaItem['title'] }}</h3>
            </div>

            <!-- Konten flex untuk gambar dan deskripsi -->
            <div class="beasiswa-content">
                <!-- Gambar di sebelah kiri -->
                <div class="beasiswa-image">
                    <img src="{{ asset($beasiswaItem['image_url']) }}" class="d-block w-100" alt="Beasiswa Image">
                </div>

                <!-- Deskripsi dan Tombol Download PDF di sebelah kanan -->
                <div class="beasiswa-details">
                    <p>{{ $beasiswaItem['description'] }}</p>
                    <a href="{{ $beasiswaItem['pdf_url'] }}" class="btn btn-primary" download>Download PDF</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
