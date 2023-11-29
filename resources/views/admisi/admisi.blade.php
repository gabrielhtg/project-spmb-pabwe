@extends("template.app")

@section("isi-halaman")

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
                             aria-labelledby="profile-tab" tabindex="0">...
                        </div>
                        <div class="tab-pane fade" id="jenis-test-tab-pane" role="tabpanel"
                             aria-labelledby="jenis-test-tab" tabindex="0">...
                        </div>
                        <div class="tab-pane fade" id="lokasi-tab-pane" role="tabpanel" aria-labelledby="lokasi-tab"
                             tabindex="0">...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="jalur-pendaftaran" class="container pt-5">
        <h3 class="pb-3 fw-semibold">Jalur Pendaftaran</h3>

        <ul class="nav nav-fill nav-pills" id="jalur-pendaftaran-Tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pmdk-tab" data-bs-toggle="tab" data-bs-target="#pmdk-tab-pane"
                        type="button" role="tab" aria-controls="utbk-tab-pane" aria-selected="true">
                    PMDK
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="usm-tab" data-bs-toggle="tab" data-bs-target="#usm-tab-pane" type="button"
                        role="tab" aria-controls="usm-tab-pane" aria-selected="false">
                    USM
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="utbk-tab" data-bs-toggle="tab" data-bs-target="#utbk-tab-pane"
                        type="button" role="tab" aria-controls="utbk-tab-pane" aria-selected="false">
                    UTBK
                </button>
            </li>
        </ul>

        <div class="tab-content" id="jenis-pendaftaran-TabContent">
            @include('admisi.sub-admisi.pmdk-tab-pane')
            @include('admisi.sub-admisi.usm-tab-pane')
            @include('admisi.sub-admisi.utbk-tab-pane')
        </div>
    </section>

    <section class="container w-100 pt-5 pb-3">
        <h3 class="fw-semibold pb-3">Program Studi</h3>

        <div class="container d-flex justify-content-center flex-wrap row-gap-4 column-gap-5">
            <div type="button" class="bg-white border-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <div class="border-1 border d-flex rounded-5" style="width: 18rem">
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
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg " >
                    <div class="modal-content"style="width: 800px; height:600px" >
                        <div class="modal-header" style="background-color: rgb(241, 241, 241)">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-weight:900;">Informatika</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex align-items-center text-center" style="padding:0px 80px;">
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
                <div class="border-1 border d-flex  rounded-5" style="width: 18rem">
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
                <div class="modal-dialog modal-dialog-centered modal-lg " >
                    <div class="modal-content"style="width: 800px; height:600px" >
                        <div class="modal-header" style="background-color: rgb(241, 241, 241)">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-weight:900;">Sistem Informasi</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex align-items-center text-center" style="padding:0px 80px;">
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
                <div class="border-1 border d-flex  rounded-5" style="width: 18rem">
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
                <div class="modal-dialog modal-dialog-centered modal-lg " >
                    <div class="modal-content"style="width: 800px; height:600px" >
                        <div class="modal-header" style="background-color: rgb(241, 241, 241)">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-weight:900;">Teknik Elektro</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex align-items-center text-center" style="padding:0px 80px;">
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
                <div class="border-1 border d-flex  rounded-5" style="width: 18rem">
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
                <div class="modal-dialog modal-dialog-centered modal-lg " >
                    <div class="modal-content"style="width: 800px; height:600px" >
                        <div class="modal-header" style="background-color: rgb(241, 241, 241)">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-weight:900;">Managemen Rekayasa</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex align-items-center text-center" style="padding:0px 80px;">
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
                <div class="border-1 border d-flex  rounded-5" style="width: 18rem">
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
                <div class="modal-dialog modal-dialog-centered modal-lg " >
                    <div class="modal-content"style="width: 800px; height:600px" >
                        <div class="modal-header" style="background-color: rgb(241, 241, 241)">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-weight:900;">Teknik Bioproses</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex align-items-center text-center" style="padding:0px 80px;">
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
                <div class="border-1 border d-flex  rounded-5" style="width: 18rem">
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
                <div class="modal-dialog modal-dialog-centered modal-lg " >
                    <div class="modal-content"style="width: 800px; height:600px" >
                        <div class="modal-header" style="background-color: rgb(241, 241, 241)">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-weight:900;">Teknik Metalurgi</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex align-items-center text-center" style="padding:0px 80px;">
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
                <div class="border-1 border d-flex  rounded-5" style="width: 18rem">
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
                <div class="modal-dialog modal-dialog-centered modal-lg " >
                    <div class="modal-content"style="width: 800px; height:600px" >
                        <div class="modal-header" style="background-color: rgb(241, 241, 241)">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-weight:900;">Teknologi Rekayasa Perangkat Lunak</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex align-items-center text-center" style="padding:0px 80px;">
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
                <div class="border-1 border d-flex  rounded-5" style="width: 18rem">
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
                <div class="modal-dialog modal-dialog-centered modal-lg " >
                    <div class="modal-content"style="width: 800px; height:600px" >
                        <div class="modal-header" style="background-color: rgb(241, 241, 241)">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-weight:900;">Teknologi Informasi</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex align-items-center text-center" style="padding:0px 80px;">
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
                <div class="border-1 border d-flex rounded-5" style="width: 18rem">
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
                <div class="modal-dialog modal-dialog-centered modal-lg " >
                    <div class="modal-content"style="width: 800px; height:600px" >
                        <div class="modal-header" style="background-color: rgb(241, 241, 241)">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-weight:900;">Teknologi Komputer</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex align-items-center text-center" style="padding:0px 80px;">
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

    <section class="container text-center mt-5" id="bagianBiaya">
        <h3 class="fw-semibold text-start">Biaya Studi</h3>

        <div class="d-flex justify-content-center flex-column pt-3">

            <table class="table align-middle">
                <thead>
                <tr>
                    <th scope="col" style="background-color: #47A5D4">Fakultas</th>
                    <th scope="col" style="background-color: #47A5D4">Prodi</th>
                    <th scope="col" style="background-color: #47A5D4">Biaya SPP/Sem (Rp)</th>
                    <th scope="col" style="background-color: #47A5D4">Uang Pengembangan (Rp)</th>
                    <th scope="col" style="background-color: #47A5D4">Uang Pangkal (Rp)</th>
                    <th scope="col" style="background-color: #47A5D4">Perlengkapan Mahasiswa (Rp)</th>
                    <th scope="col" style="background-color: #47A5D4">Perlengkapan Makan (Rp)</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td rowspan="4" class="text-center">
                        Fakultas Informatika dan Teknik Elektro
                    </td>
                </tr>

                <tr>
                    <td>Informatika</td>
                    <td>6.500.000</td>
                    <td>9.500.000 + N x 1.000.000 (min N=1)</td>
                    <td>4.500.000</td>
                    <td>850.000</td>
                    <td>250.000</td>
                </tr>

                <tr>
                    <td>Teknik Elektro</td>
                    <td>6.500.000</td>
                    <td>9.500.000 + N x 1.000.000 (min N=1)</td>
                    <td>4.500.000</td>
                    <td>850.000</td>
                    <td>250.000</td>
                </tr>

                <tr>
                    <td>Sistem Informasi</td>
                    <td>6.500.000</td>
                    <td>9.500.000 + N x 1.000.000 (min N=1)</td>
                    <td>4.500.000</td>
                    <td>850.000</td>
                    <td>250.000</td>
                </tr>

                <tr>
                    <td rowspan="3" class="text-center">
                        Fakultas Teknik Industri
                    </td>
                </tr>

                <tr>
                    <td>Managemen Rekayasa</td>
                    <td>6.500.000</td>
                    <td>9.500.000 + N x 1.000.000 (min N=1)</td>
                    <td>4.500.000</td>
                    <td>850.000</td>
                    <td>250.000</td>
                </tr>

                <tr>
                    <td>Teknik Metalurgi</td>
                    <td>6.500.000</td>
                    <td>9.500.000 + N x 1.000.000 (min N=1)</td>
                    <td>4.500.000</td>
                    <td>850.000</td>
                    <td>250.000</td>
                </tr>

                <tr>
                    <td>Fakultas Bioteknologi</td>
                    <td>Teknik Bioproses</td>
                    <td>7.000.000</td>
                    <td>9.500.000 + N x 1.000.000 (min N=1)</td>
                    <td>4.500.000</td>
                    <td>850.000</td>
                    <td>250.000</td>
                </tr>

                <tr>
                    <td rowspan="4" class="text-center">
                        Fakultas Vokasi
                    </td>
                </tr>

                <tr>
                    <td>Teknologi Rekayasa Perangkat Lunak</td>
                    <td>6.500.000</td>
                    <td>9.500.000 + N x 1.000.000 (min N=1)</td>
                    <td>4.500.000</td>
                    <td>850.000</td>
                    <td>250.000</td>
                </tr>

                <tr>
                    <td>Teknologi Informasi</td>
                    <td>5.500.000</td>
                    <td>6.500.000 + N x 1.000.000 (min N=1)</td>
                    <td>4.500.000</td>
                    <td>850.000</td>
                    <td>250.000</td>
                </tr>

                <tr>
                    <td>Teknologi Komputer</td>
                    <td>5.500.000</td>
                    <td>6.500.000 + N x 1.000.000 (min N=1)</td>
                    <td>4.500.000</td>
                    <td>850.000</td>
                    <td>250.000</td>
                </tr>

                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center flex-column pt-5">
            <h3 class="fw-semibold text-start pb-3">Biaya Lainnya</h3>

            <table class="table align-middle">
                <thead>
                <tr>
                    <th scope="col" style="background-color: #47A5D4">Jenis Biaya</th>
                    <th scope="col" style="background-color: #47A5D4">Nominal</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Biaya Asrama dan Kemahasiswaan</td>
                    <td>300.000</td>
                </tr>
                <tr>
                    <td>Biaya Makan/hari (Rp)</td>
                    <td>30.000</td>
                </tr>
                <tr>
                    <td>Biaya Wisuda</td>
                    <td>1.100.000</td>
                </tr>
                <tr>
                    <td>Biaya Deposit Toga (*</td>
                    <td>1000.000</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center flex-column pt-5">
            <h3 class="fw-semibold text-start pb-3">Biaya Pendidikan Khusus Mahasiswa Tingkat Akhir</h3>

            <p>
                Besaran biaya pendidikan bagi mahasiswa yang tidak mengikuti kegiatan perkuliahan selain tugas akhir di
                suatu semester adalah Rp500.000,- (Lima Ratus Ribu Rupiah).
            </p>
        </div>

        <div class="d-flex justify-content-center flex-column pt-5 ">
            <h3 class="fw-semibold text-start pb-3">Biaya Pendidikan Peserta Merdeka Belajar Kampus Merdeka (MBKM)</h3>

            <table class="table align-middle">
                <thead>
                <tr>
                    <th scope="col" style="background-color: #47A5D4">Jenis Kegiatan</th>
                    <th scope="col" style="background-color: #47A5D4">Jumlah SKS Kegiatan</th>
                    <th scope="col" style="background-color: #47A5D4">Potongan SPP</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Kegiatan MBKM Non Kompetisi</td>
                    <td>10</td>
                    <td>10%</td>
                </tr>
                <tr>
                    <td>Kegiatan MBKM Kompetisi</td>
                    <td><20</td>
                    <td>20%</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center flex-column pt-5">
            <div class="d-flex align-items-center pb-3 justify-content-center">
                <button class="btn btn-primary ms-3">Unduh di sini</button>
            </div>
        </div>
    </section>

    <div id="chat-container" style="position: fixed; bottom: 20px; right: 20px; z-index: 1000;">
  <div id="chat-button" style="width: 80px; height: 80px; border-radius: 12px; background-color: #007bff; color: #fff; text-align: center; line-height: 50px; cursor: pointer; position: relative; overflow: hidden;" onclick="toggleChatForm()">
    <img src="{{ asset("/assets/img/icon.jpg") }}" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; transition: transform 0.3s ease-in-out;" class="d-block w-100" alt="gambar-1" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
  </div>
  <div id="chat-form" style="display: none; position: fixed; bottom: 20px; right: 80px; z-index: 1000; max-width: 300px; transition: all 0.3s ease-in-out;">
    <div id="additional-buttons" style="display: flex; justify-content: space-between; margin-top: 10px;">
      <div class="additional-button d-flex justify-content-center align-items-center" style="width: 60px; height: 60px; border-radius: 20%; background-color: rgb(11,94,215); color: #fff; text-align: center; line-height: 40px; cursor: pointer; margin-right: 25px; font-size: 25px;" onclick="openWhatsApp()" onmouseover="this.style.backgroundColor='#0056b3'" onmouseout="this.style.backgroundColor='rgb(11,94,215)'">
        <i class="fab fa-whatsapp"></i>
      </div>
      <div class="additional-button d-flex justify-content-center align-items-center" style="width: 60px; height: 60px; border-radius: 20%; background-color: rgb(11,94,215); color: #fff; text-align: center; line-height: 40px; cursor: pointer; margin-right: 25px; font-size: 25px;" onclick="openTelegram()" onmouseover="this.style.backgroundColor='#0056b3'" onmouseout="this.style.backgroundColor='rgb(11,94,215)'">
        <i class="fab fa-telegram"></i>
      </div>
      <div class="additional-button d-flex justify-content-center align-items-center" style="width: 60px; height: 60px; border-radius: 20%; background-color: rgb(11,94,215); color: #fff; text-align: center; line-height: 40px; cursor: pointer; margin-right: 25px; font-size: 25px;" onclick="openFormQuestion()" onmouseover="this.style.backgroundColor='#0056b3'" onmouseout="this.style.backgroundColor='rgb(11,94,215)'">
        <i class="fa-regular fa-comment-dots"></i>
      </div>
    </div>
  </div>
</div>

<script src="{{ asset("/assets/js/chatbot.js") }}"></script>
@endsection
