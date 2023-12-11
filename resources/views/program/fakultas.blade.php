@extends('template.app')

@section('isi-halaman')


    {{-- BAGIAN HERO --}}
    <div style="margin: -10px;"></div>
    <section id="hero-section">
        <div id="carouselExampleCaptions" class="carousel slide">
            <!-- Indikator Carousel -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <!-- Gambar Carousel -->
            <div class="carousel-inner">
                <!-- Item Carousel 1 -->
                <div class="carousel-item active bg-dark-subtle">
                    <img src="{{ asset('img/program/carousel-example.jpg')}}" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Fakultas Informatika dan Teknik Elektro</h5>
                        <p>Beberapa konten tempat penahan wadah untuk slide pertama.</p>
                    </div>
                </div>
                <!-- Item Carousel 2 -->
                <div class="carousel-item">
                    <img src="{{ asset('img/program/carousel-example.jpg')}}" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Fakultas Teknologi Industri</h5>
                        <p>Beberapa konten tempat penahan wadah untuk slide kedua.</p>
                    </div>
                </div>
                <!-- Item Carousel 3 -->
                <div class="carousel-item">
                    <img src="{{ asset('img/program/carousel-example.jpg')}}" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Fakultas Bioteknologi</h5>
                        <p>Beberapa konten tempat penahan wadah untuk slide ketiga.</p>
                    </div>
                </div>
                <!-- Item Carousel 4 -->
                <div class="carousel-item">
                    <img src="{{ asset('img/program/carousel-example.jpg')}}" class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Fakultas Vokasi</h5>
                        <p>Beberapa konten tempat penahan wadah untuk slide keempat.</p>
                    </div>
                </div>
            </div>
            <!-- Tombol Navigasi Carousel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Sebelumnya</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Selanjutnya</span>
            </button>
        </div>
    </section>

    <div class="container">

        <div class="mt-5 mb-3">
            <h1 class="fw-bold">{{ $faculties->first()->nama }}</h1>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <p>{{ $faculties->first()->deskripsi }}</p>
            
                <h2 class="fw-bold fs-4">Visi</h2>
                <p>{!! $faculties->first()->visi !!}</p>
                
                <h2 class="fw-bold fs-4">Misi</h2>
                <p>{!! $faculties->first()->misi !!}</p>
                
                <h2 class="fw-bold fs-4">Program Studi</h2>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($faculties->first()->major as $major)    
                        <div class="col">
                            <div class="card">
                                <div class="card-body d-flex justify-content-center">
                                    <a href="{{ route('prodi', $major->id)}}" class="fw-semibold text-dark text-decoration-none text-center py-5">{{ $major->nama }}</a>           
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="card">
                    <div class="card-header fw-bold list-group-item-secondary">
                        Dekan
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Indra Hartanto Tambunan, Ph.D</li>
                    </ul>
                    <div class="card-header fw-bold list-group-item-secondary">
                        Lokasi
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $faculties->first()->lokasi }}</li>
                    </ul>
                </div>
            </div>
        </div>

    
    </div>

    



@endsection
