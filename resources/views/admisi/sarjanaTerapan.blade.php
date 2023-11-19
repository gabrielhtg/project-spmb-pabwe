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

{{--            <div>--}}
{{--                <button class="btn btn-primary ms-auto">Daftar</button>--}}
{{--            </div>--}}
        </div>
    </div>

{{--    <div class="container mt-5">--}}
{{--        <ul class="nav nav-tabs" id="myTab" role="tablist">--}}
{{--            <li class="nav-item" role="presentation">--}}
{{--                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Persyaratan Khusus</button>--}}
{{--            </li>--}}
{{--            <li class="nav-item" role="presentation">--}}
{{--                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Biaya Studi</button>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--        <div class="tab-content" id="myTabContent">--}}
{{--            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">--}}
{{--                <section class="container text-center mt-5">--}}
{{--                    <h3>Persyaratan Program Studi Tertentu</h3>--}}

{{--                    <div class="mt-5 d-flex justify-content-center">--}}
{{--                        <div class="container d-flex justify-content-center flex-wrap row-gap-4 column-gap-5" style="width: 720px">--}}
{{--                            <div class="border-1 border d-flex rounded-2" style="width: 16rem">--}}
{{--                                <div class="bg-body-tertiary rounded-start-2" style="width: 6rem"></div>--}}
{{--                                <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2">--}}
{{--                                    <div class="w-100 d-flex justify-content-start ms-3">--}}
{{--                                        <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">--}}
{{--                                    </div>--}}

{{--                                    <div class="w-100">--}}
{{--                                        Informatika--}}
{{--                                    </div>--}}

{{--                                    <div class="w-100 d-flex justify-content-end">--}}
{{--                                        <span class="text-muted me-3">+</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="border-1 border d-flex rounded-2" style="width: 16rem">--}}
{{--                                <div class="bg-body-tertiary rounded-start-2" style="width: 6rem"></div>--}}
{{--                                <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2">--}}
{{--                                    <div class="w-100 d-flex justify-content-start ms-3">--}}
{{--                                        <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">--}}
{{--                                    </div>--}}

{{--                                    <div class="w-100">--}}
{{--                                        Informatika--}}
{{--                                    </div>--}}

{{--                                    <div class="w-100 d-flex justify-content-end">--}}
{{--                                        <span class="text-muted me-3">+</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="border-1 border d-flex rounded-2" style="width: 16rem">--}}
{{--                                <div class="bg-body-tertiary rounded-start-2" style="width: 6rem"></div>--}}
{{--                                <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2">--}}
{{--                                    <div class="w-100 d-flex justify-content-start ms-3">--}}
{{--                                        <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">--}}
{{--                                    </div>--}}

{{--                                    <div class="w-100">--}}
{{--                                        Informatika--}}
{{--                                    </div>--}}

{{--                                    <div class="w-100 d-flex justify-content-end">--}}
{{--                                        <span class="text-muted me-3">+</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="border-1 border d-flex rounded-2" style="width: 16rem">--}}
{{--                                <div class="bg-body-tertiary rounded-start-2" style="width: 6rem"></div>--}}
{{--                                <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2">--}}
{{--                                    <div class="w-100 d-flex justify-content-start ms-3">--}}
{{--                                        <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">--}}
{{--                                    </div>--}}

{{--                                    <div class="w-100">--}}
{{--                                        Informatika--}}
{{--                                    </div>--}}

{{--                                    <div class="w-100 d-flex justify-content-end">--}}
{{--                                        <span class="text-muted me-3">+</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="border-1 border d-flex rounded-2" style="width: 16rem">--}}
{{--                                <div class="bg-body-tertiary rounded-start-2" style="width: 6rem"></div>--}}
{{--                                <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2">--}}
{{--                                    <div class="w-100 d-flex justify-content-start ms-3">--}}
{{--                                        <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">--}}
{{--                                    </div>--}}

{{--                                    <div class="w-100">--}}
{{--                                        Informatika--}}
{{--                                    </div>--}}

{{--                                    <div class="w-100 d-flex justify-content-end">--}}
{{--                                        <span class="text-muted me-3">+</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="border-1 border d-flex rounded-2" style="width: 16rem">--}}
{{--                                <div class="bg-body-tertiary rounded-start-2" style="width: 6rem"></div>--}}
{{--                                <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2">--}}
{{--                                    <div class="w-100 d-flex justify-content-start ms-3">--}}
{{--                                        <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">--}}
{{--                                    </div>--}}

{{--                                    <div class="w-100">--}}
{{--                                        Informatika--}}
{{--                                    </div>--}}

{{--                                    <div class="w-100 d-flex justify-content-end">--}}
{{--                                        <span class="text-muted me-3">+</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </section>--}}
{{--            </div>--}}
{{--            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>--}}
{{--        </div>--}}

        <section class="container text-center mt-5" style="height: 500px">
            <h3>Persyaratan Program Studi Tertentu</h3>

            <div class="mt-5 d-flex justify-content-center">
                <div class="container d-flex justify-content-center flex-wrap row-gap-4 column-gap-5" style="width: 720px; padding-top: 100px">


                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="border-1 border d-flex  rounded-2" style="width: 18rem">
                            <div class="bg-body-tertiary rounded-start-2" style="width: 6rem"></div>
                            <div class="d-flex justify-content-center align-items-center w-100 flex-wrap pt-2 pb-2">
                                <div class="w-100 d-flex justify-content-start ms-3">
                                    <img src="{{ asset("/assets/img/three-dot.jpeg") }}" alt="three-dot" style="width: 6px">
                                </div>

                                <div class="w-100 fw-bold">
                                    Teknologi Rekayasa Perangkat Lunak
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
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Teknologi Rekayasa Perangkat Lunak</h1>
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
                </div>
            </div>

        </section>
    </div>



@endsection

