@extends("template.app")

@section("isi-halaman")

    <div class="bg-primary w-100 container">
        <h1 class="pt-6 text-white ms-5 pb-5">Sarjana</h1>
        <div class="pb-1"></div>
    </div>

    <div class="container d-none d-md-flex gap-5 bg-body-tertiary p-3 align-items-center justify-content-center">
        <div class="d-flex w-100">
            <div class="d-flex flex-column w-100 align-items-center">
                <div class="d-flex justify-content-center gap-5 mt-2">
                    <div class="d-flex flex-column justify-content-center gap-1">
                        <button id="btn-persyaratan-khusus" class="border-0 bg-body-tertiary" onclick="tampilkanGarisPersyaratan()">
                            <span class="fw-bold fs-5">Persyaratan Khusus</span>
                        </button>

                        <div id="garis-persyaratan-khusus" class="persyaratan-khusus-line"></div>
                    </div>

                    <div class="d-flex flex-column justify-content-center gap-1">
                        <button id="btn-biaya-studi" class="border-0 bg-body-tertiary" onclick="tampilkanGarisBiaya()">
                            <span class="fw-bold fs-5" href="">Biaya Studi</span>
                        </button>

                        <div id="garis-biaya-studi" class="bg-body-tertiary biaya-studi-line"></div>
                    </div>
                </div>
            </div>

            <div>
                <button class="btn btn-primary ms-auto">Daftar</button>
            </div>
        </div>
    </div>

    <div class="container d-flex d-md-none gap-5 bg-body-tertiary p-3 align-items-center justify-content-center">
        <div class="d-flex w-100">
            <div class="d-flex flex-column w-100 align-items-center">
                <div class="d-flex justify-content-center gap-5 mt-2">
                    <div class="d-flex flex-column align-items-center gap-1">
                        <button id="btn-persyaratan-khusus" class="border-0 bg-body-tertiary" onclick="tampilkanGarisPersyaratan()">
                            <span class="fw-bold fs-7">Persyaratan Khusus</span>
                        </button>

                        <div id="garis-persyaratan-khusus" class="persyaratan-khusus-line-mobile"></div>
                    </div>

                    <div class="d-flex flex-column align-items-center gap-1">
                        <button id="btn-biaya-studi" class="border-0 bg-body-tertiary" onclick="tampilkanGarisBiaya()">
                            <span class="fw-bold fs-7" href="">Biaya Studi</span>
                        </button>

                        <div id="garis-biaya-studi" class="biaya-studi-line-mobile"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section class="container text-center mt-5" id="bagianPersyaratan">
        <h3>Persyaratan Program Studi Tertentu</h3>

        <div class="mt-5 d-flex justify-content-center">
            <div class="container d-flex justify-content-center flex-wrap row-gap-4 column-gap-5" style="width: 720px">
                <button type="button" class="bg-white border-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="border-1 border d-flex  rounded-2" style="width: 18rem">
                        <div class="bg-body-tertiary rounded-start-2" style="width: 6rem"></div>
                        <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2 gap-1">
                            <div class="w-100 d-flex justify-content-start ms-3">
                                <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">
                            </div>

                            <div class="w-100 fw-bold">
                                Informatika
                            </div>

                            <div class="w-100 d-flex justify-content-end">
                                <span class="me-3 fw-bold">+</span>
                            </div>
                        </div>
                    </div>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Informatika</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda beatae cum ea magnam nobis praesentium reiciendis similique voluptatem voluptatibus. Accusantium atque consectetur corporis cum est et facere facilis fuga fugiat hic, id illum in incidunt ipsam, itaque minima minus modi natus quae quasi quia quis reiciendis repudiandae ut vel? Accusantium blanditiis culpa cum distinctio doloribus et fugit impedit incidunt inventore ipsum iste laudantium minima nesciunt nobis odit officiis pariatur perferendis praesentium quas quod recusandae reprehenderit sapiente tenetur voluptatem voluptates, voluptatibus voluptatum. Consectetur exercitationem laudantium molestias saepe. Cum deleniti dolorem, doloremque, eaque facere laborum minus numquam placeat, quae similique tenetur?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                                {{--                                    <button type="button" class="btn btn-primary">Save changes</button>--}}
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button" class="bg-white border-0" data-bs-toggle="modal" data-bs-target="#modalsi">
                    <div class="border-1 border d-flex  rounded-2" style="width: 18rem">
                        <div class="bg-body-tertiary rounded-start-2" style="width: 6rem"></div>
                        <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2 gap-1">
                            <div class="w-100 d-flex justify-content-start ms-3">
                                <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">
                            </div>

                            <div class="w-100 fw-bold">
                                Sistem Informasi
                            </div>

                            <div class="w-100 d-flex justify-content-end">
                                <span class="me-3 fw-bold">+</span>
                            </div>
                        </div>
                    </div>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalsi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Sistem Informasi</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda beatae cum ea magnam nobis praesentium reiciendis similique voluptatem voluptatibus. Accusantium atque consectetur corporis cum est et facere facilis fuga fugiat hic, id illum in incidunt ipsam, itaque minima minus modi natus quae quasi quia quis reiciendis repudiandae ut vel? Accusantium blanditiis culpa cum distinctio doloribus et fugit impedit incidunt inventore ipsum iste laudantium minima nesciunt nobis odit officiis pariatur perferendis praesentium quas quod recusandae reprehenderit sapiente tenetur voluptatem voluptates, voluptatibus voluptatum. Consectetur exercitationem laudantium molestias saepe. Cum deleniti dolorem, doloremque, eaque facere laborum minus numquam placeat, quae similique tenetur?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                                {{--                                    <button type="button" class="btn btn-primary">Save changes</button>--}}
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button" class="bg-white border-0" data-bs-toggle="modal" data-bs-target="#modalTE">
                    <div class="border-1 border d-flex  rounded-2" style="width: 18rem">
                        <div class="bg-body-tertiary rounded-start-2" style="width: 6rem"></div>
                        <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2 gap-1">
                            <div class="w-100 d-flex justify-content-start ms-3">
                                <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">
                            </div>

                            <div class="w-100 fw-bold">
                                Teknik Elektro
                            </div>

                            <div class="w-100 d-flex justify-content-end">
                                <span class="me-3 fw-bold">+</span>
                            </div>
                        </div>
                    </div>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalTE" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Teknik Elektro</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda beatae cum ea magnam nobis praesentium reiciendis similique voluptatem voluptatibus. Accusantium atque consectetur corporis cum est et facere facilis fuga fugiat hic, id illum in incidunt ipsam, itaque minima minus modi natus quae quasi quia quis reiciendis repudiandae ut vel? Accusantium blanditiis culpa cum distinctio doloribus et fugit impedit incidunt inventore ipsum iste laudantium minima nesciunt nobis odit officiis pariatur perferendis praesentium quas quod recusandae reprehenderit sapiente tenetur voluptatem voluptates, voluptatibus voluptatum. Consectetur exercitationem laudantium molestias saepe. Cum deleniti dolorem, doloremque, eaque facere laborum minus numquam placeat, quae similique tenetur?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                                {{--                                    <button type="button" class="btn btn-primary">Save changes</button>--}}
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button" class="bg-white border-0" data-bs-toggle="modal" data-bs-target="#modalMR">
                    <div class="border-1 border d-flex  rounded-2" style="width: 18rem">
                        <div class="bg-body-tertiary rounded-start-2" style="width: 6rem"></div>
                        <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2 gap-1">
                            <div class="w-100 d-flex justify-content-start ms-3">
                                <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">
                            </div>

                            <div class="w-100 fw-bold">
                                Managemen Rekayasa
                            </div>

                            <div class="w-100 d-flex justify-content-end">
                                <span class="me-3 fw-bold">+</span>
                            </div>
                        </div>
                    </div>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalMR" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Managemen Rekayasa</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda beatae cum ea magnam nobis praesentium reiciendis similique voluptatem voluptatibus. Accusantium atque consectetur corporis cum est et facere facilis fuga fugiat hic, id illum in incidunt ipsam, itaque minima minus modi natus quae quasi quia quis reiciendis repudiandae ut vel? Accusantium blanditiis culpa cum distinctio doloribus et fugit impedit incidunt inventore ipsum iste laudantium minima nesciunt nobis odit officiis pariatur perferendis praesentium quas quod recusandae reprehenderit sapiente tenetur voluptatem voluptates, voluptatibus voluptatum. Consectetur exercitationem laudantium molestias saepe. Cum deleniti dolorem, doloremque, eaque facere laborum minus numquam placeat, quae similique tenetur?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                                {{--                                    <button type="button" class="btn btn-primary">Save changes</button>--}}
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button" class="bg-white border-0" data-bs-toggle="modal" data-bs-target="#modalTB">
                    <div class="border-1 border d-flex  rounded-2" style="width: 18rem">
                        <div class="bg-body-tertiary rounded-start-2" style="width: 6rem"></div>
                        <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2 gap-1">
                            <div class="w-100 d-flex justify-content-start ms-3">
                                <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">
                            </div>

                            <div class="w-100 fw-bold">
                                Teknik Bioproses
                            </div>

                            <div class="w-100 d-flex justify-content-end">
                                <span class="me-3 fw-bold">+</span>
                            </div>
                        </div>
                    </div>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalTB" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Teknik Bioproses</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda beatae cum ea magnam nobis praesentium reiciendis similique voluptatem voluptatibus. Accusantium atque consectetur corporis cum est et facere facilis fuga fugiat hic, id illum in incidunt ipsam, itaque minima minus modi natus quae quasi quia quis reiciendis repudiandae ut vel? Accusantium blanditiis culpa cum distinctio doloribus et fugit impedit incidunt inventore ipsum iste laudantium minima nesciunt nobis odit officiis pariatur perferendis praesentium quas quod recusandae reprehenderit sapiente tenetur voluptatem voluptates, voluptatibus voluptatum. Consectetur exercitationem laudantium molestias saepe. Cum deleniti dolorem, doloremque, eaque facere laborum minus numquam placeat, quae similique tenetur?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                                {{--                                    <button type="button" class="btn btn-primary">Save changes</button>--}}
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button" class="bg-white border-0" data-bs-toggle="modal" data-bs-target="#modalTM">
                    <div class="border-1 border d-flex  rounded-2" style="width: 18rem">
                        <div class="bg-body-tertiary rounded-start-2" style="width: 6rem"></div>
                        <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2 gap-1">
                            <div class="w-100 d-flex justify-content-start ms-3">
                                <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">
                            </div>

                            <div class="w-100 fw-bold">
                                Teknik Metalurgi
                            </div>

                            <div class="w-100 d-flex justify-content-end">
                                <span class="me-3 fw-bold">+</span>
                            </div>
                        </div>
                    </div>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalTM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Teknik Metalurgi</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda beatae cum ea magnam nobis praesentium reiciendis similique voluptatem voluptatibus. Accusantium atque consectetur corporis cum est et facere facilis fuga fugiat hic, id illum in incidunt ipsam, itaque minima minus modi natus quae quasi quia quis reiciendis repudiandae ut vel? Accusantium blanditiis culpa cum distinctio doloribus et fugit impedit incidunt inventore ipsum iste laudantium minima nesciunt nobis odit officiis pariatur perferendis praesentium quas quod recusandae reprehenderit sapiente tenetur voluptatem voluptates, voluptatibus voluptatum. Consectetur exercitationem laudantium molestias saepe. Cum deleniti dolorem, doloremque, eaque facere laborum minus numquam placeat, quae similique tenetur?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container text-center mt-5 d-none" id="bagianBiaya">
        <h3>Biaya Studi Program Sarjana</h3>

        <div class="d-flex justify-content-center flex-column pt-5">
            <div class="d-flex align-items-center pb-3">
                <div class="garis-biaya"></div>
                <span class="lh-sm fs-4 ms-3">Biaya Pendidikan Mahasiswa Baru</span>
            </div>

            <table class="table align-middle">
                <thead>
                <tr>
                    <th scope="col" style="background-color: #47A5D4">Fakultas</th>
                    <th scope="col" style="background-color: #47A5D4">Prodi</th>
                    <th scope="col" style="background-color: #47A5D4">Biaya SPP/Sem (Rp)</th>
                    <th scope="col" style="background-color: #47A5D4">Uang Pengembangan</th>
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
                        <td>Sistem <Informasi></Informasi></td>
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
                        <td>Teknik Elektro</td>
                        <td>6.500.000</td>
                        <td>9.500.000 + N x 1.000.000 (min N=1)</td>
                        <td>4.500.000</td>
                        <td>850.000</td>
                        <td>250.000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center flex-column pt-5">
            <div class="d-flex align-items-center pb-3">
                <div class="garis-biaya"></div>
                <span class="lh-sm fs-4 ms-3">Biaya Lainnya</span>
            </div>

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
            <div class="d-flex align-items-center pb-3">
                <div class="garis-biaya"></div>
                <span class="lh-sm fs-4 ms-3">Biaya Pendidikan Khusus Mahasiswa Tingkat Akhir</span>
            </div>

            <p>
                Besaran biaya pendidikan bagi mahasiswa yang tidak mengikuti kegiatan perkuliahan selain tugas akhir di
                suatu semester adalah Rp500.000,- (Lima Ratus Ribu Rupiah).
            </p>
        </div>

        <div class="d-flex justify-content-center flex-column pt-5">
            <div class="d-flex align-items-center pb-3">
                <div class="garis-biaya"></div>
                <span class="lh-sm fs-4 ms-3">Biaya Pendidikan Peserta Merdeka Belajar Kampus Merdeka (MBKM)</span>
            </div>

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
            <div class="d-flex align-items-center pb-3">
                <div class="garis-biaya"></div>
                <button class="btn btn-primary ms-3">Unduh di sini</button>
            </div>
        </div>
    </section>
@endsection

