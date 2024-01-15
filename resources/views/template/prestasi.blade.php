@extends('template.app')

<main class="mx-auto">
    <section>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    {{--                    {{dd($headerPrestasi)}}--}}
                    <img src="{{  asset($headerPrestasi['headerPrestasi']['foto'])  }}" class="img-fluid d-block"
                         alt="header-fasilitas" style="width: 100%; height: 80%">
                    <div class="carousel-caption d-none d-md-block text-center" style=""> <!-- Center the text -->
                        <div class="d-flex flex-column text-center h-100 pb-3"> <!-- Center the content vertically -->
                            <h2 class="fw-bold text-uppercase">{{ $headerPrestasi['headerPrestasi']['judul'] }}</h2>
                            <h4 class="fw-italic">{{ $headerPrestasi['headerPrestasi']['deskripsi'] }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container"><ul class="navbar-nav mx-auto">
                <li class="nav-item mx-3 d-flex flex-column align-items-center">
                    <a href="{{ route("prestasi.prestasiOverview") }}"
                       class="nav-link {{ Request::is('prestasi') ? 'active' : '' }}">All</a>
                </li>
                <li class="nav-item mx-3 d-flex flex-column align-items-center">
                    <a href="{{ route("prestasi.prestasiMahasiswa") }}"
                       class="nav-link {{ Request::is('prestasi-mahasiswa') ? 'active' : '' }}">Prestasi Mahasiswa</a>
                </li>
                <li class="nav-item mx-3 d-flex flex-column align-items-center">
                    <a href="{{ route("prestasi.prestasiInstitut") }}"
                       class="nav-link {{ Request::is('prestasi-institut') ? 'active' : '' }}">Prestasi Institut</a>
                </li>
                <li class="nav-item mx-3 d-flex flex-column align-items-center">
                    <a href="{{ route("prestasi.prestasiDosenStaff") }}"
                       class="nav-link {{ Request::is('prestasi-dosen-staff') ? 'active' : '' }}">Prestasi
                        Dosen/Staff</a>
                </li>
            </ul>
        </div>
    </nav>
</main>
