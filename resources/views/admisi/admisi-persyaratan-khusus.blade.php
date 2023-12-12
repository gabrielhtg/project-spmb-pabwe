@extends("template.app")

@section("isi-halaman")
<<<<<<< HEAD:resources/views/admisi/admisi.blade.php

    <div class="container">
        <div class="bg-primary w-100">
            <h1 class="pt-6 text-white ms-5 pb-5">Admisi</h1>
        </div>

        <div>
            <div class="d-flex flex-column align-items-center mt-4 justify-content-center">
                <div class="card-admisi shadow-lg p-4 rounded-4">
                    <ul class="nav nav-pills nav-fill" id="tab-tabeltanggalpenting" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="jadwalpendaftaran-tab" data-bs-toggle="tab"
                                    data-bs-target="#jadwalpendaftaran-tab-pane" type="button" role="tab"
                                    aria-controls="home-tab-pane" aria-selected="true">
                                Jadwal Pendaftaran
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="jadwal-ujian-tab" data-bs-toggle="tab"
                                    data-bs-target="#jadwal-ujian-tab-pane" type="button" role="tab"
                                    aria-controls="profile-tab-pane" aria-selected="false">
                                Jadwal Ujian
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="jenis-test-tab" data-bs-toggle="tab"
                                    data-bs-target="#jenis-test-tab-pane" type="button" role="tab"
                                    aria-controls="contact-tab-pane" aria-selected="false">
                                Jenis Test
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="lokasi-tab" data-bs-toggle="tab"
                                    data-bs-target="#lokasi-tab-pane" type="button" role="tab"
                                    aria-controls="disabled-tab-pane" aria-selected="false">
                                Lokasi
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane ps-5 pe-5 fade show active" id="jadwalpendaftaran-tab-pane" role="tabpanel"
                             aria-labelledby="jadwalpendaftaran-tab" tabindex="0">
                            <table class="table mt-5">
                                <tbody>
                                <tr>
                                    <td>PMDK</td>
                                    <td>05 DESEMBER 2022 - 15 JANUARI 2023</td>
                                </tr>
                                <tr>
                                    <td>USM 1</td>
                                    <td>16 JANUARI 2023 - 12 FEBRUARI 2023</td>
                                </tr>
                                <tr>
                                    <td>USM 2</td>
                                    <td>13 FEBRUARI 2023 - 31 MARET 2023</td>
                                </tr>
                                <tr>
                                    <td>USM 3</td>
                                    <td>1 APRIL 2023 - 2 JUNI 2023</td>
                                </tr>
                                <tr>
                                    <td>UTBK</td>
                                    <td>29 MEI 2023 - 9 JULI 2023</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="jadwal-ujian-tab-pane" role="tabpanel"
                             aria-labelledby="profile-tab" tabindex="0">
                             <ul class="nav nav-pills nav-fill" id="tab-tabeltanggalpenting" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="jadwalujianpmdk-tab" data-bs-toggle="tab"
                                        data-bs-target="#jadwalujianpmdk-tab-pane" type="button" role="tab"
                                        aria-controls="home-tab-pane" aria-selected="true">
                                        PMDK
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="jadwalujianusm1-tab" data-bs-toggle="tab"
                                        data-bs-target="#jadwalujianusm1-tab-pane" type="button" role="tab"
                                        aria-controls="profile-tab-pane" aria-selected="false">
                                        USM 1
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="jadwalujianusm2-tab" data-bs-toggle="tab"
                                        data-bs-target="#jadwalujianusm2-tab-pane" type="button" role="tab"
                                        aria-controls="contact-tab-pane" aria-selected="false">
                                        USM 2
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="jadwalujianusm3-tab" data-bs-toggle="tab"
                                        data-bs-target="#jadwalujianusm3-tab-pane" type="button" role="tab"
                                        aria-controls="disabled-tab-pane" aria-selected="false">
                                        USM 3
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="jadwalujianutbk-tab" data-bs-toggle="tab"
                                        data-bs-target="#jadwalujianutbk-tab-pane" type="button" role="tab"
                                        aria-controls="disabled-tab-pane" aria-selected="false">
                                        UTBK
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane ps-5 pe-5 fade show" id="jenis-test-tab-pane" role="tabpanel"
                             aria-labelledby="jenis-test-tab" tabindex="0">
                             <table class="table mt-5">
                                <tbody>
                                <tr>
                                    <td>PMDK</td>
                                    <td>Nilai Rapor + Wawancara + Psikotes</td>
                                </tr>
                                <tr>
                                    <td>USM 1</td>
                                    <td>Tes Akademik + Psikotes</td>
                                </tr>
                                <tr>
                                    <td>USM 2</td>
                                    <td>Tes Akademik + Psikotes</td>
                                </tr>
                                <tr>
                                    <td>USM 3</td>
                                    <td>Tes Akademik + Psikotes</td>
                                </tr>
                                <tr>
                                    <td>UTBK</td>
                                    <td>Nilai UTBK + Psikotes</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane ps-5 pe-5 fade show" id="lokasi-tab-pane" role="tabpanel" aria-labelledby="lokasi-tab"
                             tabindex="0">
                             <table class="table mt-5">
                                <tbody>
                                <tr>
                                    <td>Kampus IT Del</td>
                                    <td>Jl. Sisingmangaraja, Sitoluama Laguboti, Toba Samosir Sumatera Utara</td>
                                </tr>
                                <tr>
                                    <td>Medan</td>
                                    <td>Kampus Universitas HKBP Nommensen (Medan) Jl. Perintis Kemerdekaan No.23, Perintis, Medan</td>
                                </tr>
                                <tr>
                                    <td>Jakarta</td>
                                    <td>Sopo Del Office Towers & Lifestyle Tower A Lt. 9 Jl. Mega Kuningan Barat III Lot 10.1-6 Jakarta Selatan 12950 No. tlp : 021 - 5080 6565</td>
                                </tr>
                                </tbody>
                            </table>
=======
    <section>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset($dataHeaderAdmisi->letak_foto ?  : 'assets/img/default.jpg') }}"
                         class="img-fluid d-block w-100" alt="header-fasilitas">
                    <div class="carousel-caption d-none d-md-block text-center"> <!-- Center the text -->
                        <div class="d-flex flex-column text-center h-100 pb-3"> <!-- Center the content vertically -->
                            <h2 class="fw-bold text-uppercase">ADMISI</h2>
>>>>>>> dev:resources/views/admisi/admisi-persyaratan-khusus.blade.php
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item mx-3 d-flex flex-column align-items-center">
                    <a href="{{ route('admisi') }}" class="nav-link">Tanggal Penting</a>
                </li>
                <li class="nav-item mx-3">
                    <a href="{{ route('jalur-pendaftaran') }}" class="nav-link">Jalur Pendaftaran</a>
                </li>
                <li class="nav-item mx-3">
                    <a href="{{ route('biaya-studi') }}" class="nav-link">Biaya Studi</a>
                </li>
                <li class="nav-item mx-3">
                    <a href="{{ route('persyaratan-khusus') }}" class="nav-link">Persyaratan Khusus</a>
                    <div style="width: 180px; height: 1px; background-color: black"></div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="container w-100 pt-5 pb-3">
        <div class="container d-flex justify-content-center flex-wrap row-gap-4 column-gap-5">
            <div type="button" class="bg-white border-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <div class="border-1 border d-flex rounded-5" style="width: 18rem; height: 7rem">
                    <div class="bg-body-tertiary rounded-start-5" style="width: 6rem"></div>
                    <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2 gap-1">
                        <div class="w-100 d-flex justify-content-start ms-3">
                            <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">
                        </div>

                        <div class="w-100 fw-bold text-center">
                            Informatika
                        </div>

                        <div class="w-100 d-flex justify-content-end">
                            <span class="me-3 fw-bold">+</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg ">
                    <div class="modal-content" style="width: 800px; height:600px">
                        <div class="modal-header" style="background-color: rgb(241, 241, 241)">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-weight:900;">
                                Informatika</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex align-items-center text-center" style="padding:0 80px;">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda beatae cum ea magnam
                            nobis praesentium reiciendis similique voluptatem voluptatibus. Accusantium atque
                            consectetur corporis cum est et facere facilis fuga fugiat hic, id illum in incidunt ipsam,
                            itaque minima minus modi natus quae quasi quia quis reiciendis repudiandae ut vel?
                            Accusantium blanditiis culpa cum distinctio doloribus et fugit impedit incidunt inventore
                            ipsum iste laudantium minima nesciunt nobis odit officiis pariatur perferendis praesentium
                            quas quod recusandae reprehenderit sapiente tenetur voluptatem voluptates, voluptatibus
                            voluptatum. Consectetur exercitationem laudantium molestias saepe. Cum deleniti dolorem,
                            doloremque, eaque facere laborum minus numquam placeat, quae similique tenetur?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                            {{--                                    <button type="button" class="btn btn-primary">Save changes</button>--}}
                        </div>
                    </div>
                </div>
            </div>

            <div type="button" class="bg-white border-0" data-bs-toggle="modal" data-bs-target="#modalsi">
                <div class="border-1 border d-flex rounded-5" style="width: 18rem; height: 7rem">
                    <div class="bg-body-tertiary rounded-start-5" style="width: 6rem"></div>
                    <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2 gap-1">
                        <div class="w-100 d-flex justify-content-start ms-3">
                            <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">
                        </div>

                        <div class="w-100 fw-bold text-center">
                            Sistem Informasi
                        </div>

                        <div class="w-100 d-flex justify-content-end">
                            <span class="me-3 fw-bold">+</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalsi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg ">
                    <div class="modal-content" style="width: 800px; height:600px">
                        <div class="modal-header" style="background-color: rgb(241, 241, 241)">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-weight:900;">Sistem
                                Informasi</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex align-items-center text-center" style="padding:0 80px;">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda beatae cum ea magnam
                            nobis praesentium reiciendis similique voluptatem voluptatibus. Accusantium atque
                            consectetur corporis cum est et facere facilis fuga fugiat hic, id illum in incidunt ipsam,
                            itaque minima minus modi natus quae quasi quia quis reiciendis repudiandae ut vel?
                            Accusantium blanditiis culpa cum distinctio doloribus et fugit impedit incidunt inventore
                            ipsum iste laudantium minima nesciunt nobis odit officiis pariatur perferendis praesentium
                            quas quod recusandae reprehenderit sapiente tenetur voluptatem voluptates, voluptatibus
                            voluptatum. Consectetur exercitationem laudantium molestias saepe. Cum deleniti dolorem,
                            doloremque, eaque facere laborum minus numquam placeat, quae similique tenetur?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                            {{--                                    <button type="button" class="btn btn-primary">Save changes</button>--}}
                        </div>
                    </div>
                </div>
            </div>

            <div type="button" class="bg-white border-0" data-bs-toggle="modal" data-bs-target="#modalTE">
                <div class="border-1 border d-flex rounded-5" style="width: 18rem; height: 7rem">
                    <div class="bg-body-tertiary rounded-start-5" style="width: 6rem"></div>
                    <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2 gap-1">
                        <div class="w-100 d-flex justify-content-start ms-3">
                            <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">
                        </div>

                        <div class="w-100 fw-bold text-center">
                            Teknik Elektro
                        </div>

                        <div class="w-100 d-flex justify-content-end">
                            <span class="me-3 fw-bold">+</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalTE" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg ">
                    <div class="modal-content" style="width: 800px; height:600px">
                        <div class="modal-header" style="background-color: rgb(241, 241, 241)">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-weight:900;">Teknik
                                Elektro</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex align-items-center text-center" style="padding:0 80px;">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda beatae cum ea magnam
                            nobis praesentium reiciendis similique voluptatem voluptatibus. Accusantium atque
                            consectetur corporis cum est et facere facilis fuga fugiat hic, id illum in incidunt ipsam,
                            itaque minima minus modi natus quae quasi quia quis reiciendis repudiandae ut vel?
                            Accusantium blanditiis culpa cum distinctio doloribus et fugit impedit incidunt inventore
                            ipsum iste laudantium minima nesciunt nobis odit officiis pariatur perferendis praesentium
                            quas quod recusandae reprehenderit sapiente tenetur voluptatem voluptates, voluptatibus
                            voluptatum. Consectetur exercitationem laudantium molestias saepe. Cum deleniti dolorem,
                            doloremque, eaque facere laborum minus numquam placeat, quae similique tenetur?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                            {{--                                    <button type="button" class="btn btn-primary">Save changes</button>--}}
                        </div>
                    </div>
                </div>
            </div>

            <div type="button" class="bg-white border-0" data-bs-toggle="modal" data-bs-target="#modalMR">
                <div class="border-1 border d-flex rounded-5" style="width: 18rem; height: 7rem">
                    <div class="bg-body-tertiary rounded-start-5" style="width: 6rem"></div>
                    <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2 gap-1">
                        <div class="w-100 d-flex justify-content-start ms-3">
                            <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">
                        </div>

                        <div class="w-100 fw-bold text-center">
                            Managemen Rekayasa
                        </div>

                        <div class="w-100 d-flex justify-content-end">
                            <span class="me-3 fw-bold">+</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalMR" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg ">
                    <div class="modal-content" style="width: 800px; height:600px">
                        <div class="modal-header" style="background-color: rgb(241, 241, 241)">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-weight:900;">Managemen
                                Rekayasa</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex align-items-center text-center" style="padding:0 80px;">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda beatae cum ea magnam
                            nobis praesentium reiciendis similique voluptatem voluptatibus. Accusantium atque
                            consectetur corporis cum est et facere facilis fuga fugiat hic, id illum in incidunt ipsam,
                            itaque minima minus modi natus quae quasi quia quis reiciendis repudiandae ut vel?
                            Accusantium blanditiis culpa cum distinctio doloribus et fugit impedit incidunt inventore
                            ipsum iste laudantium minima nesciunt nobis odit officiis pariatur perferendis praesentium
                            quas quod recusandae reprehenderit sapiente tenetur voluptatem voluptates, voluptatibus
                            voluptatum. Consectetur exercitationem laudantium molestias saepe. Cum deleniti dolorem,
                            doloremque, eaque facere laborum minus numquam placeat, quae similique tenetur?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                            {{--                                    <button type="button" class="btn btn-primary">Save changes</button>--}}
                        </div>
                    </div>
                </div>
            </div>

            <div type="button" class="bg-white border-0" data-bs-toggle="modal" data-bs-target="#modalTB">
                <div class="border-1 border d-flex rounded-5" style="width: 18rem; height: 7rem">
                    <div class="bg-body-tertiary rounded-start-5" style="width: 6rem"></div>
                    <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2 gap-1">
                        <div class="w-100 d-flex justify-content-start ms-3">
                            <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">
                        </div>

                        <div class="w-100 fw-bold text-center">
                            Teknik Bioproses
                        </div>

                        <div class="w-100 d-flex justify-content-end">
                            <span class="me-3 fw-bold">+</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalTB" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg ">
                    <div class="modal-content" style="width: 800px; height:600px">
                        <div class="modal-header" style="background-color: rgb(241, 241, 241)">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-weight:900;">Teknik
                                Bioproses</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex align-items-center text-center" style="padding:0 80px;">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda beatae cum ea magnam
                            nobis praesentium reiciendis similique voluptatem voluptatibus. Accusantium atque
                            consectetur corporis cum est et facere facilis fuga fugiat hic, id illum in incidunt ipsam,
                            itaque minima minus modi natus quae quasi quia quis reiciendis repudiandae ut vel?
                            Accusantium blanditiis culpa cum distinctio doloribus et fugit impedit incidunt inventore
                            ipsum iste laudantium minima nesciunt nobis odit officiis pariatur perferendis praesentium
                            quas quod recusandae reprehenderit sapiente tenetur voluptatem voluptates, voluptatibus
                            voluptatum. Consectetur exercitationem laudantium molestias saepe. Cum deleniti dolorem,
                            doloremque, eaque facere laborum minus numquam placeat, quae similique tenetur?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                            {{--                                    <button type="button" class="btn btn-primary">Save changes</button>--}}
                        </div>
                    </div>
                </div>
            </div>

            <div type="button" class="bg-white border-0" data-bs-toggle="modal" data-bs-target="#modalTM">
                <div class="border-1 border d-flex rounded-5" style="width: 18rem; height: 7rem">
                    <div class="bg-body-tertiary rounded-start-5" style="width: 6rem"></div>
                    <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2 gap-1">
                        <div class="w-100 d-flex justify-content-start ms-3">
                            <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">
                        </div>

                        <div class="w-100 fw-bold text-center">
                            Teknik Metalurgi
                        </div>

                        <div class="w-100 d-flex justify-content-end">
                            <span class="me-3 fw-bold">+</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalTM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg ">
                    <div class="modal-content" style="width: 800px; height:600px">
                        <div class="modal-header" style="background-color: rgb(241, 241, 241)">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-weight:900;">Teknik
                                Metalurgi</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex align-items-center text-center" style="padding:0 80px;">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda beatae cum ea magnam
                            nobis praesentium reiciendis similique voluptatem voluptatibus. Accusantium atque
                            consectetur corporis cum est et facere facilis fuga fugiat hic, id illum in incidunt ipsam,
                            itaque minima minus modi natus quae quasi quia quis reiciendis repudiandae ut vel?
                            Accusantium blanditiis culpa cum distinctio doloribus et fugit impedit incidunt inventore
                            ipsum iste laudantium minima nesciunt nobis odit officiis pariatur perferendis praesentium
                            quas quod recusandae reprehenderit sapiente tenetur voluptatem voluptates, voluptatibus
                            voluptatum. Consectetur exercitationem laudantium molestias saepe. Cum deleniti dolorem,
                            doloremque, eaque facere laborum minus numquam placeat, quae similique tenetur?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                        </div>
                    </div>
                </div>
            </div>

            <div type="button" class="bg-white border-0" data-bs-toggle="modal" data-bs-target="#modalTM">
                <div class="border-1 border d-flex rounded-5" style="width: 18rem; height: 7rem">
                    <div class="bg-body-tertiary rounded-start-5" style="width: 6rem"></div>
                    <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2 gap-1">
                        <div class="w-100 d-flex justify-content-start ms-3">
                            <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">
                        </div>

                        <div class="w-100 fw-bold text-center">
                            Teknologi Rekayasa Perangkat Lunak
                        </div>

                        <div class="w-100 d-flex justify-content-end">
                            <span class="me-3 fw-bold">+</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalTM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg ">
                    <div class="modal-content" style="width: 800px; height:600px">
                        <div class="modal-header" style="background-color: rgb(241, 241, 241)">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-weight:900;">Teknologi
                                Rekayasa Perangkat Lunak</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex align-items-center text-center" style="padding:0 80px;">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda beatae cum ea magnam
                            nobis praesentium reiciendis similique voluptatem voluptatibus. Accusantium atque
                            consectetur corporis cum est et facere facilis fuga fugiat hic, id illum in incidunt ipsam,
                            itaque minima minus modi natus quae quasi quia quis reiciendis repudiandae ut vel?
                            Accusantium blanditiis culpa cum distinctio doloribus et fugit impedit incidunt inventore
                            ipsum iste laudantium minima nesciunt nobis odit officiis pariatur perferendis praesentium
                            quas quod recusandae reprehenderit sapiente tenetur voluptatem voluptates, voluptatibus
                            voluptatum. Consectetur exercitationem laudantium molestias saepe. Cum deleniti dolorem,
                            doloremque, eaque facere laborum minus numquam placeat, quae similique tenetur?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                        </div>
                    </div>
                </div>
            </div>

            <div type="button" class="bg-white border-0" data-bs-toggle="modal" data-bs-target="#modalTM">
                <div class="border-1 border d-flex rounded-5" style="width: 18rem; height: 7rem">
                    <div class="bg-body-tertiary rounded-start-5" style="width: 6rem"></div>
                    <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2 gap-1">
                        <div class="w-100 d-flex justify-content-start ms-3">
                            <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">
                        </div>

                        <div class="w-100 fw-bold text-center">
                            Teknologi Informasi
                        </div>

                        <div class="w-100 d-flex justify-content-end">
                            <span class="me-3 fw-bold">+</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalTM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg ">
                    <div class="modal-content" style="width: 800px; height:600px">
                        <div class="modal-header" style="background-color: rgb(241, 241, 241)">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-weight:900;">Teknologi
                                Informasi</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex align-items-center text-center" style="padding:0 80px;">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda beatae cum ea magnam
                            nobis praesentium reiciendis similique voluptatem voluptatibus. Accusantium atque
                            consectetur corporis cum est et facere facilis fuga fugiat hic, id illum in incidunt ipsam,
                            itaque minima minus modi natus quae quasi quia quis reiciendis repudiandae ut vel?
                            Accusantium blanditiis culpa cum distinctio doloribus et fugit impedit incidunt inventore
                            ipsum iste laudantium minima nesciunt nobis odit officiis pariatur perferendis praesentium
                            quas quod recusandae reprehenderit sapiente tenetur voluptatem voluptates, voluptatibus
                            voluptatum. Consectetur exercitationem laudantium molestias saepe. Cum deleniti dolorem,
                            doloremque, eaque facere laborum minus numquam placeat, quae similique tenetur?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                        </div>
                    </div>
                </div>
            </div>

            <div type="button" class="bg-white border-0" data-bs-toggle="modal" data-bs-target="#modalTM">
                <div class="border-1 border d-flex rounded-5" style="width: 18rem; height: 7rem">
                    <div class="bg-body-tertiary rounded-start-5" style="width: 6rem"></div>
                    <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2 gap-1">
                        <div class="w-100 d-flex justify-content-start ms-3">
                            <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">
                        </div>

                        <div class="w-100 fw-bold text-center">
                            Teknologi Komputer
                        </div>

                        <div class="w-100 d-flex justify-content-end">
                            <span class="me-3 fw-bold">+</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalTM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg ">
                    <div class="modal-content" style="width: 800px; height:600px">
                        <div class="modal-header" style="background-color: rgb(241, 241, 241)">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-weight:900;">Teknologi
                                Komputer</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex align-items-center text-center" style="padding:0 80px;">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda beatae cum ea magnam
                            nobis praesentium reiciendis similique voluptatem voluptatibus. Accusantium atque
                            consectetur corporis cum est et facere facilis fuga fugiat hic, id illum in incidunt ipsam,
                            itaque minima minus modi natus quae quasi quia quis reiciendis repudiandae ut vel?
                            Accusantium blanditiis culpa cum distinctio doloribus et fugit impedit incidunt inventore
                            ipsum iste laudantium minima nesciunt nobis odit officiis pariatur perferendis praesentium
                            quas quod recusandae reprehenderit sapiente tenetur voluptatem voluptates, voluptatibus
                            voluptatum. Consectetur exercitationem laudantium molestias saepe. Cum deleniti dolorem,
                            doloremque, eaque facere laborum minus numquam placeat, quae similique tenetur?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="chat-container" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
        <div id="chat-button"
             style="width: 100px; height: 105px; border-radius: 0; color: #fff; text-align: center; line-height: 70px; cursor: pointer; position: relative; overflow: hidden; transition: transform 0.5s ease-in-out;"
             onclick="toggleChatForm()" onmouseover="this.style.transform='scale(1.1)'"
             onmouseout="this.style.transform='scale(1)'">
            <img src="{{ asset("/assets/img/icon2.png") }}"
                 style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; transition: transform 0.5s ease-in-out;"
                 class="d-block w-100" alt="gambar-1">
        </div>
        <div id="chat-form"
             style="display: none; position: fixed; bottom: 20px; right: 80px; z-index: 1000; max-width: 300px; transition: all 0.5s ease-in-out;">
            <div id="additional-buttons" style="display: flex; justify-content: space-between; margin-top: 10px;">
                <div class="additional-button d-flex justify-content-center align-items-center"
                     style="width: 70px; height: 65px; border-radius: 50%; background-color: rgb(11,94,215); color: #fff; text-align: center; line-height: 50px; cursor: pointer; margin-right: 25px; font-size: 25px;"
                     onclick="openWhatsApp()" onmouseover="this.style.backgroundColor='#0056b3'"
                     onmouseout="this.style.backgroundColor='rgb(11,94,215)'">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <div class="additional-button d-flex justify-content-center align-items-center"
                     style="width: 70px; height: 65px; border-radius: 50%; background-color: rgb(11,94,215); color: #fff; text-align: center; line-height: 50px; cursor: pointer; margin-right: 25px; font-size: 25px;"
                     onclick="openTelegram()" onmouseover="this.style.backgroundColor='#0056b3'"
                     onmouseout="this.style.backgroundColor='rgb(11,94,215)'">
                    <i class="fab fa-telegram"></i>
                </div>
                <div class="additional-button d-flex justify-content-center align-items-center"
                     style="width: 70px; height: 65px; border-radius: 50%; background-color: rgb(11,94,215); color: #fff; text-align: center; line-height: 50px; cursor: pointer; margin-right: 55px; font-size: 25px;"
                     onclick="openFormQuestion()" onmouseover="this.style.backgroundColor='#0056b3'"
                     onmouseout="this.style.backgroundColor='rgb(11,94,215)'">
                    <i class="fa-regular fa-comment-dots"></i>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset("/assets/js/chatbot.js") }}"></script>
@endsection
