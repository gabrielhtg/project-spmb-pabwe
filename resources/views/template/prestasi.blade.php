@extends('template.app')

<main class="mx-auto">
    <section>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('/assets/img/prestasi/prestasi-header.jpg') }}" class="img-fluid d-block w-60"
                         alt="header-fasilitas">
                    <div class="carousel-caption d-none d-md-block text-center"> <!-- Center the text -->
                        <div class="d-flex flex-column text-center h-100 pb-3"> <!-- Center the content vertically -->
                            <h2 class="fw-bold text-uppercase">OUR ACHIEVEMENT</h2>
                            <h4 class="fw-italic">"If you can dream it, you can do it."</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-3">
                        <a href="{{ route("prestasi.prestasiOverview") }}"
                           class="nav-link {{ Request::is('prestasi') ? 'active' : '' }}">All</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a href="{{ route("prestasi.prestasiMahasiswa") }}"
                           class="nav-link {{ Request::is('prestasi-mahasiswa') ? 'active' : '' }}">Prestasi
                            Mahasiswa</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a href="{{ route("prestasi.prestasiInstitut") }}"
                           class="nav-link {{ Request::is('prestasi-institut') ? 'active' : '' }}">Prestasi Institut</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a href="{{ route("prestasi.prestasiDosenStaff") }}"
                           class="nav-link {{ Request::is('prestasi-dosen-staff') ? 'active' : '' }}">Prestasi Dosen/Staff</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
