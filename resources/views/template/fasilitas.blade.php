@extends('template.app')

<main class="mx-auto">
    <section>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('/assets/img/fasilitas/header-fasilitas.jpg') }}" class="img-fluid d-block w-60" alt="header-fasilitas">
                    <div class="carousel-caption d-none d-md-block text-start"
                         style="text-shadow: 6px 6px 10px rgba(0, 0, 0, 0.5);">
                        <h2>Discover Our Campus Facilities:<br> Elevate Your Campus Experience!</h2>
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
                        <a href="{{ route("fasilitas.asrama") }}" class="nav-link {{ Request::is('fasilitas-Asrama') ? 'active' : '' }}">Asrama</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a href="{{ route("fasilitas.kesehatandanolahraga") }}" class="nav-link {{ Request::is('fasilitas-Kesehatan-dan-Olahraga') ? 'active' : '' }}">Kesehatan & Olahraga</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a href="{{ route("fasilitas.areamahasiswa") }}" class="nav-link {{ Request::is('fasilitas-Area-Mahasiswa') ? 'active' : '' }}">Area Mahasiswa</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a href="{{ route("fasilitas.laboratorium") }}" class="nav-link {{ Request::is('fasilitas-Laboratorium') ? 'active' : '' }}">Laboratorium</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a href="{{ route("fasilitas.layananmakanan") }}" class="nav-link {{ Request::is('fasilitas-Layanan-Makanan') ? 'active' : '' }}">Layanan Makanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>