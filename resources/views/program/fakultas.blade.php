@extends('template.app')

@section('isi-halaman')

<section>

    {{-- HERO SECTION --}}
    <section id="hero-section">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active bg-dark-subtle">
                    <img src="{{ asset('img/program/carousel-example.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Fakultas Informatika dan Teknik Elektro</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/program/carousel-example.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Fakultas Teknologi Industri</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/program/carousel-example.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Fakultas Bioteknologi</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/program/carousel-example.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Fakultas Vokasi</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
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
            <h1 class="fw-bold">Fakultas Informatika dan Teknik Elektro</h1>
        </div>

        <div class="d-flex row">
            <div class="col-8">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quibusdam dolor suscipit corrupti aperiam amet delectus maxime nihil laudantium vero debitis, eos distinctio mollitia blanditiis alias possimus dignissimos tempora cupiditate pariatur consectetur corporis? Adipisci illo at ipsa doloremque, corrupti alias sapiente tempore ea unde libero explicabo quibusdam, delectus voluptatum ullam quo exercitationem cum modi laborum perspiciatis similique inventore, vel porro dolorum! Sint adipisci nostrum quam reiciendis autem, suscipit assumenda, architecto dolorem officiis velit, quaerat tempora voluptatum unde. Animi, obcaecati voluptatibus dolores commodi maiores necessitatibus repellat non quibusdam minima rerum. Quasi tenetur facere aut corporis modi vel labore dolorum architecto dolores.</p>
            
                <h2 class="fw-bold fs-4">Visi</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis illum magnam, praesentium fugit, veniam voluptatibus tenetur impedit cupiditate, iure rerum ipsam tempore? Magnam aut nulla quisquam odit illo illum quos quidem quo. Eaque unde aut expedita ratione quia rerum sed ea nesciunt minima. Tempore, vero quae odio alias dolores aliquid.</p>
                
                <h2 class="fw-bold fs-4">Misi</h2>
                <p>
                    <ol>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, quae ab? Inventore ad labore debitis neque est impedit eum amet?</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, quae ab? Inventore ad labore debitis neque est impedit eum amet?</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, quae ab? Inventore ad labore debitis neque est impedit eum amet?</li>
                    </ol>
                </p>
                
                <h2 class="fw-bold fs-4">Program Studi</h2>
                <div class="d-flex d-flex-row gap-3">
                    <div class="card col-sm-4">
                        <div class="card-body d-flex justify-content-center">
                            <a href="/prodi" class="fw-semibold text-dark text-decoration-none text-center py-5">S1 Informatika</a>           
                        </div>
                    </div>
                    <div class="card col-sm-4">
                        <div class="card-body d-flex justify-content-center">
                            <a href="/prodi" class="fw-semibold text-dark text-decoration-none text-center py-5">S1 Sistem Informasi</a>
                        </div>
                    </div>
                    <div class="card col-sm-4">
                        <div class="card-body d-flex justify-content-center">
                            <a href="/prodi" class="fw-semibold text-dark text-decoration-none text-center py-5">S1 Teknik Elektro</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
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
                        <li class="list-group-item">Laguboti, Toba, Sumatera Utara</li>
                    </ul>
                </div>
            </div>
        </div>

    
    </div>

</section>

@endsection