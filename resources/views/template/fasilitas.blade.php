@extends('template.app')

@section('isi-halaman')

    <section>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('/assets/img/fasilitas/header-fasilitas.jpg') }}" class="img-fluid d-block w-60" alt="header-fasilitas">
                     <div class="carousel-caption d-none d-md-block text-start">
                        <div class="d-flex flex-column text-start h-100 pb-3">
                             <h2 class=" fw-bold">Discover Our Campus Facilities:<br> Elevate Your Campus Experience!</h2>
                        </div>                            
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="d-flex justify-content-center">
        <ul class="nav nav-underline d-flex gap-5">
            <li class="nav-item">
                <a href="#" id="asrama-hyperlink" class="py-3 nav-link active" aria-current="page" onclick="showAsramaSubPage()">Asrama</a>
            </li>
            <li class="nav-item">
                <a href="#" id="kesehatan-hyperlink" class="py-3 nav-link" onclick="showKesehatanSubPage()">Kesehatan & Olahraga</a>
            </li>
            <li class="nav-item">
                <a href="#" id="areamhs-hyperlink" class="py-3 nav-link" onclick="showAreaSubPage()">Area Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a href="#" id="laboratorium-hyperlink" class="py-3 nav-link" onclick="showLaboratoriumSubPage()">Laboratorium</a>
            </li>
            <li class="nav-item">
                <a href="#" id="layanan-hyperlink" class="py-3 nav-link" onclick="showLayananSubPage()">Layanan Makanan</a>
            </li>
        </ul>
    </div>

    <section id="asrama-subpage" class="container">
        <div class="mt-3 mb-3">
        </div>
            @include('fasilitas.fasilitasAsrama')
    </section>
    
    <section id="kesehatan-subpage" class="container">
        <div class="mt-3 mb-3">
        </div>
            @include('fasilitas.fasilitasKesehatandanOlahraga')
    </section>
    
    <section id="areamhs-subpage" class="container">
        <div class="mt-3 mb-3">
        </div>
            @include('fasilitas.fasilitasAreaMahasiswa')
    </section>
        
    <section id="laboratorium-subpage" class="container">
        <div class="mt-3 mb-3">
        </div>
            @include('fasilitas.fasilitasLaboratorium')
    </section>
    
    <section id="layanan-subpage" class="container">
        <div class="mt-3 mb-3">
        </div>
            @include('fasilitas.fasilitasLayananMakanan')
    </section>
    

    <script>
        var asrama = document.getElementById("asrama-subpage");
        var kesehatan = document.getElementById("kesehatan-subpage");
        var areamhs = document.getElementById("areamhs-subpage");
        var laboratorium = document.getElementById("laboratorium-subpage");
        var layanan = document.getElementById("layanan-subpage");

        var asramaLink = document.getElementById("asrama-hyperlink");
        var kesehatanLink = document.getElementById("kesehatan-hyperlink");
        var areamhsLink = document.getElementById("areamhs-hyperlink");
        var laboratoriumLink = document.getElementById("laboratorium-hyperlink");
        var layananLink = document.getElementById("layanan-hyperlink");

        function showSubPage(subpage, subpageLink) {
            subpage.classList.remove("d-none");
            subpageLink.classList.add("active");

            // Sembunyikan subpage lain
            var allSubpages = [asrama, kesehatan, areamhs, laboratorium, layanan];
            var allLinks = [asramaLink, kesehatanLink, areamhsLink, laboratoriumLink, layananLink];

            for (var i = 0; i < allSubpages.length; i++) {
                if (allSubpages[i] !== subpage) {
                    allSubpages[i].classList.add("d-none");
                    allLinks[i].classList.remove("active");
                }
            }

            // Set atribut aria-current
            subpageLink.setAttribute("aria-current", "page");
        }

        function showAsramaSubPage() {
            showSubPage(asrama, asramaLink);
        }

        function showKesehatanSubPage() {
            showSubPage(kesehatan, kesehatanLink);
        }

        function showAreaSubPage() {
            showSubPage(areamhs, areamhsLink);
        }

        function showLaboratoriumSubPage() {
            showSubPage(laboratorium, laboratoriumLink);
        }

        function showLayananSubPage() {
            showSubPage(layanan, layananLink);
        }
    </script>
@endsection
