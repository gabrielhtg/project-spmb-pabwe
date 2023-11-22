@extends('template.app')

<main class="mx-auto">
    <section>
        <img src="{{ asset('/assets/img/fasilitas/header-fasilitas.jpeg') }}" class="img-fluid d-block w-100" alt="header-fasilitas">
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