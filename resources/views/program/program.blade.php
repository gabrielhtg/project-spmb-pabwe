@extends('template.app')

@section('isi-halaman')


    {{-- HERO SECTION --}}
    <div style="margin: -10px;"></div>
    <section id="hero-section">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-inner">
                    @foreach($faculties as $index => $faculty)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }} bg-dark-subtle">
                            <img src="{{ asset('img/program/faculty/' . $faculty->gambar) }}" class="d-block w-100 img-fluid object-fit-cover" alt="..." style="height:500px; object-position: center;" media="(max-width: 600px) { height: 400px; }">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{ $faculty->nama }}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>
                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    
    <div class="container">

        <div class="mt-5 mb-3">
            <h1 class="fw-bold">Daftar Fakultas</h1>
        </div>

        <p>
            Institut Teknologi Del memiliki beberapa Fakultas diantaranya adalah sebagai berikut:
        </p>

        <div class="d-flex flex-column row-gap-3">

            {{-- <div class="card text-bg-dark">
                <img src="{{ asset('img/program/home/fite-button.jpg') }}" class="card-img object-fit-cover" alt="" style="height: 200px;">
                <div class="card-img-overlay">
                    <div class="card-img-overlay d-flex justify-content-center align-items-center">
                        <a href="{{ route('fakultas')}}" class="fs-5 text-light text-decoration-none fw-semibold text-center">Fakultas Informatika dan Teknik Elektro</a>
                    </div>
                    
                </div>
            </div> --}}
            {{-- <div class="card text-bg-dark">
                <img src="{{ asset('img/program/home/fti-button.jpg') }}" class="card-img object-fit-cover" alt="" style="height: 200px;">
                <div class="card-img-overlay">
                    <div class="card-img-overlay d-flex justify-content-center align-items-center">
                        <a href="{{ route('fakultas')}}" class="fs-5 text-light text-decoration-none fw-semibold text-center">Fakultas Teknologi Industri</a>
                    </div>
                    
                </div>
            </div>
            <div class="card text-bg-dark">
                <img src="{{ asset('img/program/home/fb-button.jpg') }}" class="card-img object-fit-cover" alt="" style="height: 200px;">
                <div class="card-img-overlay">
                    <div class="card-img-overlay d-flex justify-content-center align-items-center">
                        <a href="{{ route('fakultas')}}" class="fs-5 text-light text-decoration-none fw-semibold text-center">Fakultas Bioteknologi</a>
                    </div>
                    
                </div>
            </div>
            <div class="card text-bg-dark">
                <img src="{{ asset('img/program/home/fv-button.jpg') }}" class="card-img object-fit-cover" alt="" style="height: 200px;">
                <div class="card-img-overlay">
                    <div class="card-img-overlay d-flex justify-content-center align-items-center">
                        <a href="{{ route('fakultas')}}" class="fs-5 text-light text-decoration-none fw-semibold text-center">Fakultas Vokasi</a>
                    </div>
                    
                </div>
            </div> --}}

            @foreach ($faculties as $faculty)
                <div class="card text-bg-dark">
                    <img src="{{ asset('img/program/faculty/' . $faculty->gambar) }}" class="card-img object-fit-cover" alt="" style="height: 200px;">
                    <div class="card-img-overlay">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <a href="{{ route('fakultas', $faculty->id)}}" class="fs-5 text-light text-decoration-none fw-semibold text-center">{!! $faculty->nama !!}</a>
                        </div>
                        
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection