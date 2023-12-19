@extends('template.app')

@section('isi-halaman')

<!-- <section id="hero" class="container">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/beasiswa/beasiswa-wp.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
</section> -->

<section>
    <div class="masthead" style="background-size: cover; min-height: 75vh; position: relative; color: #ffff; text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2); background-image: url('{{ asset('assets/img/beasiswa/beasiswa-wp.jpg') }}');">
        <div class="color-overlay d-flex justify-content-center align-items-center">
        <link rel="stylesheet" href="{{ asset('assets/css/kel5.css') }}" />
          <h2 class="beasiswa-text" style="height: 90px">Beasiswa</h2>
        </div>
    </div>
</section>

    @foreach($beasiswa as $beasiswas)
    <div class="container mt-3">
        <div class="card mb-3">
            <h5 class="card-header text-center" style="height: 56.7px; width: 100%; display: flex; align-items: center; justify-content: center; background-color: #d9d9d9; color: #0066cc; font-weight: bold;">{{$beasiswas->judul}}</h5>
            <div class="row g-0">
                <div class="col-md-4">
                <img src="{{ asset($beasiswas->gambar) }}" class="img-fluid rounded-start" style="height: 100%; object-fit: cover;" alt="...">

                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="card-text" style="text-align:justify; padding-right:20px"> 
                            <p>{{ $beasiswas->deskripsi }}</p>
                            <a href="{{ asset($beasiswas->file) }}" class="btn btn-primary" style="position: absolute; bottom: 10px; right: 10px;" download>Download PDF</a>
                        </div>
                    </div>
                    <div>
                </div>
            </div>
        </div>
    </div>
    @endforeach



@endsection
