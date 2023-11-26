@extends('template.app')

@section('isi-halaman')

<main class="pt-5 mt-3">

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
        <ul class="nav nav-underline d-flex gap-5">
            <li class="nav-item">
                <a href="#" id="overview-hyperlink" class="py-3 nav-link active" aria-current="page" onclick="showOverviewSubPage()">Overview</a>
            </li>
            <li class="nav-item">
                <a href="#" id="dosen-hyperlink" class="py-3 nav-link" onclick="showDosenSubPage()">Dosen/Staff</a>
            </li>
            <li class="nav-item">
                <a href="#" id="kurikulum-hyperlink" class="py-3 nav-link" onclick="showKurikulumSubPage()">Kurikulum</a>
            </li>
        </ul>
    </div>

    <section id="overview-subpage" class="container">
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
                <div class="card"">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item fw-bold">Ketua Program Studi</li>
                        <li class="list-group-item">Arie Satia Dharma, S.T, M.Kom.</li>
                        <li class="list-group-item fw-bold">Akreditasi</li>
                        <li class="list-group-item">Baik (C)</li>
                        <li class="list-group-item fw-bold">Gelar</li>
                        <li class="list-group-item">S.Kom</li>
                        <li class="list-group-item fw-bold">Lama Studi</li>
                        <li class="list-group-item">4 Tahun</li>
                        <li class="list-group-item fw-bold">Biaya Kuliah</li>
                        <li class="list-group-item">Rp. 6.500.000/semester</li>
                        <li class="list-group-item fw-bold">Lokasi</li>
                        <li class="list-group-item">Laguboti, Toba, Sumatera Utara</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="dosen-subpage" class="container d-none">
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
    </section>

    <section id="kurikulum-subpage" class="container d-none">
        <div class="mt-5 mb-3">
            <h1 class="fw-bold">Kurikulum</h1>
            
        </div>
        <div class="row">
            @for ($i = 0; $i < 8; $i++)  
                <div class="col-md-6 mb-5">
                    <div class="container px-2 text-center">
                        <div class="container text-center">
                            <h2 class="fw-bold fs-5">Semester {{ $i + 1 }}</h2>
                            <table class="table">
                                <thead>
                                <tr>
                                    
                                    <th scope="col" class="fw-semibold">Kode MK</th>
                                    <th scope="col" class="fw-semibold">Nama Mata Kuliah</th>
                                    <th scope="col" class="fw-semibold">SKS</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>11S3109 </td>
                                        <td>Pengembangan Aplikasi Berbasis Web</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>10S3109</td>
                                        <td>Kecerdasan Buatan</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>11S3109 </td>
                                        <td>Pengembangan Aplikasi Berbasis Web</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>10S3109</td>
                                        <td>Kecerdasan Buatan</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>11S3109 </td>
                                        <td>Pengembangan Aplikasi Berbasis Web</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>10S3109</td>
                                        <td>Kecerdasan Buatan</td>
                                        <td>3</td>
                                    </tr>
                                <tr>
                                    <td colspan="2" class="fw-semibold">Total SKS</td>
                                    <td>7</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>  
                    </div>
                </div>
            @endfor

        </div>

    </section>

    <script>
        var overview = document.getElementById("overview-subpage");
        var dosen = document.getElementById("dosen-subpage");
        var kurikulum = document.getElementById("kurikulum-subpage");
        
        var overviewLink = document.getElementById("overview-hyperlink");
        var dosenLink = document.getElementById("dosen-hyperlink");
        var kurikulumLink = document.getElementById("kurikulum-hyperlink");
        
        function showOverviewSubPage() {
            overview.classList.remove("d-none");
            overviewLink.classList.add("active");
            dosen.classList.add("d-none");
            dosenLink.classList.remove("active");
            kurikulum.classList.add("d-none");
            kurikulumLink.classList.remove("active");

            overview.setAttribute("aria-current", "page");
        };

        function showDosenSubPage() {
            overview.classList.add("d-none");
            overviewLink.classList.remove("active");
            dosen.classList.remove("d-none");
            dosenLink.classList.add("active");
            kurikulum.classList.add("d-none");
            kurikulumLink.classList.remove("active");
            
            dosen.setAttribute("aria-current", "page");
        };

        function showKurikulumSubPage() {
            overview.classList.add("d-none");
            overviewLink.classList.remove("active");
            dosen.classList.add("d-none");
            dosenLink.classList.remove("active");
            kurikulum.classList.remove("d-none");
            kurikulumLink.classList.add("active");

            kurikulum.setAttribute("aria-current", "page");
        };

    </script>
    
    


</main>

@endsection