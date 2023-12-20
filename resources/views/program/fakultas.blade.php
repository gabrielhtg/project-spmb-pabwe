@extends('template.app')

@section('isi-halaman')


    {{-- BAGIAN HERO --}}
    <div style="margin: -10px;"></div>
    <section id="hero-section">
        <div id="carouselExampleCaptions" class="carousel slide">
            <!-- Gambar Carousel -->
            <div class="carousel-inner">
                <!-- Item Carousel 1 -->
                @foreach($faculties as $faculty)
                    <div class="carousel-item active bg-dark-subtle">
                        <img src="{{ asset('img/program/faculty/' . $faculty->gambar) }}" class="d-block w-100 img-fluid object-fit-cover" alt="..." style="height:500px; object-position: center;" >
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{$faculty->nama}}</h5>
                        </div>
                    </div>
                @endforeach

                @foreach ($faculties->first()->major as $major)
                    <div class="carousel-item active bg-dark-subtle">
                        <img src="{{ asset('img/program/major/' . $major->gambar) }}" class="d-block w-100 img-fluid object-fit-cover" alt="..." style="height:500px; object-position: center;" >
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{$major->nama}}</h5>
                        </div>
                    </div>
                @endforeach
                
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
                <p>{!! $faculties->first()->deskripsi !!}</p>
            
                <h2 class="fw-bold fs-4">Visi</h2>
                <p>{!! $faculties->first()->visi !!}</p>
                
                <h2 class="fw-bold fs-4">Misi</h2>
                <p>{!! $faculties->first()->misi !!}</p>
                
                <h2 class="fw-bold fs-4">Program Studi</h2>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-0">
                    @foreach ($faculties->first()->major as $major)    
                        {{-- <div class="card text-bg-dark">
                            <img src="{{ asset('img/program/major/' . $major->gambar) }}" class="card-img object-fit-cover" alt="" style="height: 200px; width:500px;">
                            <div class="card-img-overlay">
                                <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                    <a href="{{ route('prodi', $major->id)}}" class="fw-semibold text-bg-dark text-decoration-none text-center py-5">{{ $major->nama }}</a>           
                                </div>
                            </div>
                        </div> --}}

                        <div class="card text-bg-dark m-1">
                            <img src="{{ asset('img/program/major/' . $major->gambar) }}" class="card-img object-fit-cover" alt="" style="height: 200px;">
                            <div class="card-img-overlay">
                                <div class="card-img-overlay d-flex justify-content-center align-items-center">
                                    <a href="{{ route('prodi', $major->id)}}" class="fw-semibold text-light text-decoration-none text-center">{!! $major->nama !!}</a>
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
                        @php $deanFound = false; @endphp
                            @foreach($employees as $employee)
                                @if ($employee->jabatan == "Dekan" AND $employee->major->faculty->id == $faculties->first()->id)
                                    <li class="list-group-item">{{ $employee->nama }}</li>
                                    @php $deanFound = true; @endphp
                                @endif
                            @endforeach

                            @if (!$deanFound)
                                <li class="list-group-item">Dekan tidak ada</li>
                            @endif
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
