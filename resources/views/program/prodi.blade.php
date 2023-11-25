@extends('template.app')

@section('isi-halaman')

<main class="pt-5 mt-5">

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
                        <h5>S1 Informatika</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/program/carousel-example.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    <h5>S1 Informatika</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/program/carousel-example.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    <h5>S1 Informatika</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/program/carousel-example.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    <h5>S1 Informatika</h5>
                        <p>Some representative placeholder content for the first slide.</p>
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

    <div class="d-flex justify-content-center">
        <ul class="nav nav-underline">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Overview</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Dosen/Staff</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Kurikulum</a>
            </li>
        </ul>
    </div>

    <div class="container">

        <div class="mt-5 mb-3">
            <h1 class="fw-bold">S1 Informatika</h1>
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
                
                <h2 class="fw-bold fs-4">Prospek Kerja</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius dolore velit doloremque, temporibus debitis saepe autem cum ipsa expedita, dicta doloribus reprehenderit laudantium et nihil, voluptas quos est quia quaerat commodi tempora nobis sequi nulla necessitatibus? Alias suscipit eum perferendis voluptate, voluptatum labore, facilis at eveniet neque reprehenderit assumenda obcaecati! Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor minima quo exercitationem omnis optio debitis ut ipsa dolores deleniti nesciunt.</p>
                
                <h2 class="fw-bold fs-4">Pendaftaran</h2>
                <p>Syarat Pendaftaran:</p>
                <ol>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi eum magnam nisi veniam delectus sunt voluptas dignissimos eligendi libero maxime?</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi eum magnam nisi veniam delectus sunt voluptas dignissimos eligendi libero maxime?</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi eum magnam nisi veniam delectus sunt voluptas dignissimos eligendi libero maxime?</li>
                </ol>

                <button type="button" class="btn btn-primary gap-3">Halaman Pendaftaran</button>

            </div>

            <div class="col-4">
                <div class="card">
                    <div class="">
                        <div class="card-header fw-bold">
                          Ketua Prodi
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Arie Satia Dharma, S.T, M.Kom.</li>
                        </ul>
                    </div>
                    <div class="">
                        <div class="card-header fw-bold">
                            Akreditasi
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">C</li>
                        </ul>
                    </div>
                    <div class="">
                        <div class="card-header fw-bold">
                            Gelar
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">S.Kom</li>
                        </ul>
                    </div>
                    <div class="">
                        <div class="card-header fw-bold">
                            Lama Studi
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">$ Tahun</li>
                        </ul>
                    </div>
                    <div class="">
                        <div class="card-header fw-bold">
                            Biaya Kuliah
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Rp.6.500.000/Semester</li>
                        </ul>
                    </div>
                    <div class="">
                        <div class="card-header fw-bold">
                            Lokasi
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Sitoluama, kecamatan Laguboti, Kabupaten Toba, Sumatera Utara</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="mt-5 mb-3">
            <h1 class="fw-bold">Dosen</h1>
        </div>

        <div class="container px-4 text-center">
            <div class="row gx-5">
                <div class="col-md-3">
                    <div class="p-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('img/program/carousel-example.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Dedi Andre Martua Raja Panggabean, S.Kom, M.InfoTech</h5>
                                <p class="card-text">S3 Ternak Lele</p>
                                <div class="role-text fw-bold fs-5">Role</div>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('img/program/carousel-example.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Dedi Andre Martua Raja Panggabean, S.Kom, M.InfoTech</h5>
                                <p class="card-text">S3 Ternak Lele</p>
                                <div class="role-text fw-bold fs-5">Role</div>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('img/program/carousel-example.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Dedi Andre Martua Raja Panggabean, S.Kom, M.InfoTech</h5>
                                <p class="card-text">S3 Ternak Lele</p>
                                <div class="role-text fw-bold fs-5">Role</div>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('img/program/carousel-example.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Dedi Andre Martua Raja Panggabean, S.Kom, M.InfoTech</h5>
                                <p class="card-text">S3 Ternak Lele</p>
                                <div class="role-text fw-bold fs-5">Role</div>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('img/program/carousel-example.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Dedi Andre Martua Raja Panggabean, S.Kom, M.InfoTech</h5>
                                <p class="card-text">S3 Ternak Lele</p>
                                <div class="role-text fw-bold fs-5">Role</div>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('img/program/carousel-example.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Dedi Andre Martua Raja Panggabean, S.Kom, M.InfoTech</h5>
                                <p class="card-text">S3 Ternak Lele</p>
                                <div class="role-text fw-bold fs-5">Role</div>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('img/program/carousel-example.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Dedi Andre Martua Raja Panggabean, S.Kom, M.InfoTech</h5>
                                <p class="card-text">S3 Ternak Lele</p>
                                <div class="role-text fw-bold fs-5">Role</div>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('img/program/carousel-example.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Dedi Andre Martua Raja Panggabean, S.Kom, M.InfoTech</h5>
                                <p class="card-text">S3 Ternak Lele</p>
                                <div class="role-text fw-bold fs-5">Role</div>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('img/program/carousel-example.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Dedi Andre Martua Raja Panggabean, S.Kom, M.InfoTech</h5>
                                <p class="card-text">S3 Ternak Lele</p>
                                <div class="role-text fw-bold fs-5">Role</div>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('img/program/carousel-example.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Dedi Andre Martua Raja Panggabean, S.Kom, M.InfoTech</h5>
                                <p class="card-text">S3 Ternak Lele</p>
                                <div class="role-text fw-bold fs-5">Role</div>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('img/program/carousel-example.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Dedi Andre Martua Raja Panggabean, S.Kom, M.InfoTech</h5>
                                <p class="card-text">S3 Ternak Lele</p>
                                <div class="role-text fw-bold fs-5">Role</div>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('img/program/carousel-example.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Dedi Andre Martua Raja Panggabean, S.Kom, M.InfoTech</h5>
                                <p class="card-text">S3 Ternak Lele</p>
                                <div class="role-text fw-bold fs-5">Role</div>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>


                

            </div>
        </div>
    </div>


    
    


</main>

@endsection