<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset("/assets/css/global.css") }}">
    <link rel="stylesheet" href="{{ asset("/assets/css/welcome.css") }}">
</head>
<body>
{{--    navbar start --}}
    <nav class="navbar fixed-top bg-body-tertiary navbar-expand-xl">
        <div class="container-fluid">
{{--            tampilan hp--}}
            <a class="d-flex d-sm-none align-items-center navbar-brand" href="/">
                <img src="{{ asset("/assets/img/Logo Institut Teknologi Del.png") }}" alt="Logo" width="35" height="35" class="d-inline-block align-text-top">
                <div class="ms-3 lh-1">
                    <span class="fs-3"><strong>SPMB IT Del</strong></span>
                </div>
            </a>
{{--            tampilan hp end--}}

{{--            tampilan desktop--}}
            <a class="d-none d-sm-flex align-items-center navbar-brand" href="/">
                <img src="{{ asset("/assets/img/Logo Institut Teknologi Del.png") }}" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
                <div class="ms-2 lh-1">
                    <span class="fs-6"><strong>SPMB Institut Teknologi Del</strong></span>
                    <br>
                    <span class="fs-8"><i>MarTuhan, MarRoha, MarBisuk</i></span>
                </div>
            </a>
{{--            tampilan desktop end--}}

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="mx-auto">
                    <ul class="navbar-nav ms-auto me-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Program
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Admisi</a>
                            <ul class="dropdown-menu">
                                <li><a href="#" class="dropdown-item">Test</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontak</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Prestasi</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Beasiswa</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Akreditasi</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>
                    </ul>
                </div>
                <a class="d-none d-xl-inline">
                    <button class="btn btn-primary">Pengumuman SPMB</button>
                </a>
                <a class="d-xl-none text-primary text-decoration-none">
                    <span><strong>Pengumuman SPMB</strong></span>
                </a>
            </div>

        </div>
    </nav>
{{--    navbar end--}}

    <main class="mx-auto">
        <section id="hero" class="container">
            <div class="px-4 py-5 my-5">
                <h1 class="display-5 fw-bold">Institut Teknologi Del</h1>
                <div class="mt-4">
                    <p class="lead mb-4">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam beatae deserunt dicta distinctio est eveniet id impedit inventore iure maxime necessitatibus obcaecati odit perferendis quaerat, totam vero voluptates? Amet, animi aut autem delectus dolores eos est expedita, incidunt libero minus nulla obcaecati pariatur possimus quia reprehenderit repudiandae ut voluptates?"</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="container">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset("/assets/img/beasiswa-tolikara.jpeg") }}" class="d-block w-100" alt="beasiswa-tolikara">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="ukuran-div-beasiswa p-5">
                                <div class="text-start">
                                    <span class="text-white fs-4"><i>Telah Dibuka</i></span>
                                    <br>
                                    <span class="text-white mt-5 fs-3 ms-4"><strong>Beasiswa Tolikara 1</strong></span>
                                </div>

                                <div class="text-start align-self-end mt-5">
                                    <span>Pendaftaran : </span>
                                    <br>
                                    <span>dd/mm/yyyy s/d dd/yy/mmmm</span>
                                </div>
                            </div>

                            <div class="mb-4 mt-5 text-end">
                                <button class="tombol-kita text-oyen"><strong>Daftar Sekarang</strong></button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset("/assets/img/beasiswa-tolikara.jpeg") }}" class="d-block w-100" alt="beasiswa-tolikara">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="ukuran-div-beasiswa p-5">
                                <div class="text-start">
                                    <span class="text-white fs-4"><i>Telah Dibuka</i></span>
                                    <br>
                                    <span class="text-white mt-5 fs-3 ms-4"><strong>Beasiswa Tolikara 2</strong></span>
                                </div>

                                <div class="text-start align-self-end mt-5">
                                    <span>Pendaftaran : </span>
                                    <br>
                                    <span>dd/mm/yyyy s/d dd/yy/mmmm</span>
                                </div>
                            </div>

                            <div class="mb-4 mt-5 text-end">
                                <button class="btn bg-white text-oyen"><strong>Daftar Sekarang</strong></button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset("/assets/img/beasiswa-tolikara.jpeg") }}" class="d-block w-100" alt="beasiswa-tolikara">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="ukuran-div-beasiswa p-5">
                                <div class="text-start">
                                    <span class="text-white fs-4"><i>Telah Dibuka</i></span>
                                    <br>
                                    <span class="text-white mt-5 fs-3 ms-4"><strong>Beasiswa Tolikara 3</strong></span>
                                </div>

                                <div class="text-start align-self-end mt-5">
                                    <span>Pendaftaran : </span>
                                    <br>
                                    <span>dd/mm/yyyy s/d dd/yy/mmmm</span>
                                </div>
                            </div>

                            <div class="mb-4 mt-5 text-end">
                                <button class="tombol-kita text-oyen"><strong>Daftar Sekarang</strong></button>
                            </div>
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

        <section id="informasi-umum" class="bg-informasi-umum container text-center">
            <div class="p-5">
                <h2><strong>Informasi Umum</strong></h2>

                <div class="d-flex justify-content-center mt-5 flex-wrap gap-5" id="tampilan-data-informasi-umum">
                    <div class="card" style="width: 18rem;">
                        <div class="mt-4">
                            <i class="fa-solid fa-chalkboard-user card-img-top" style="font-size: 50px"></i>
                        </div>
                        <div class="card-body">
                            <span id="jumlah-dosen" class="fs-2 text-primary">9999+</span>
                            <br>
                            <span class="fs-5"><strong>Dosen</strong></span>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <div class="mt-4">
                            <i class="fa-solid fa-child-reaching card-img-top" style="font-size: 50px"></i>
                        </div>
                        <div class="card-body">
                            <span id="jumlah-mahasiswa" class="fs-2 text-primary">9999+</span>
                            <br>
                            <span class="fs-5"><strong>Mahasiswa</strong></span>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                        <div class="mt-4">
                            <i class="fa-solid fa-user-graduate" style="font-size: 50px"></i>
                        </div>
                        <div class="card-body">
                            <span id="jumlah-dosen" class="fs-2 text-primary">9999+</span>
                            <br>
                            <span class="fs-5"><strong>Alumni</strong></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="mitra-kampus">

        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/965a381e3a.js" crossorigin="anonymous"></script>
</body>
</html>
