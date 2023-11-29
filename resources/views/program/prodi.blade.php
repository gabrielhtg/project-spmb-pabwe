@extends('template.app')

@section('isi-halaman')

<section>

    {{-- HERO SECTION --}}
    <section id="hero-section">
        <div id="carouselExampleCaptions" class="carousel slide">
            {{-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div> --}}
            <div class="carousel-inner">
                <div class="carousel-item active bg-dark-subtle">
                    <img src="{{ asset('img/program/carousel-example.jpg')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <div class="card-img-overlay d-flex align-items-center pt-5">
                <div class="d-flex flex-column container pt-5">
                    <h1 class="fw-bold text-light pt-5">S1 Informatika</h1>
                    <p><a href="/fakultas" class="fs-5 text-decoration-none text-light">Fakultas Informatika dan Teknik Elektro</a></p>
                </div>
            </div>
            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> --}}
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

    {{-- OVERVIEW SUBPAGE --}}
    <section id="overview-subpage" class="container">

        <div class="mt-5 mb-3">
            <h1 class="fw-bold">Overview</h1>
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
                        <li class="list-group-item fw-bold list-group-item-secondary">Ketua Program Studi</li>
                        <li class="list-group-item">Arie Satia Dharma, S.T, M.Kom.</li>
                        <li class="list-group-item fw-bold list-group-item-secondary">Akreditasi</li>
                        <li class="list-group-item">Baik (C)</li>
                        <li class="list-group-item fw-bold list-group-item-secondary">Gelar</li>
                        <li class="list-group-item">S.Kom</li>
                        <li class="list-group-item fw-bold list-group-item-secondary">Lama Studi</li>
                        <li class="list-group-item">4 Tahun</li>
                        <li class="list-group-item fw-bold list-group-item-secondary">Biaya Kuliah</li>
                        <li class="list-group-item">Rp. 6.500.000/semester</li>
                        <li class="list-group-item fw-bold list-group-item-secondary">Lokasi</li>
                        <li class="list-group-item">Laguboti, Toba, Sumatera Utara</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- DOSEN SUBPAGE --}}
    <section id="dosen-subpage" class="container d-none">
        <div class="mt-5 mb-3">
            <h1 class="fw-bold">Dosen</h1>
        </div>

        <div class="d-flex gy-4 row justify-content-center text-center">
            
            {{--  --}}
            @for ($i = 0; $i < 8; $i++)
            <div class="col-3">
                <div class="card text-bg-dark" onmouseover="showOverlay({{ $i }})" onmouseout="hideOverlay({{ $i }})">
                    <img src="{{ asset('img/program/dosen-profile-test.jpg') }}" class="card-img" alt="">

                    <div id="backOverlay-{{ $i }}" class="card-img-overlay" style="opacity: 1; transition: opacity 0.2s ease;">
                        <div class="d-flex justify-content-start">
                            <div class=" badge bg-primary text-wrap fw-medium fs-6 small mb-3">
                                <small>Dosen</small>
                            </div>
                        </div>
                        <div class="d-flex card-img-overlay align-items-end">
                            <h5 class="card-title fw-semibold fs-6">Dedi Andre Martua Raja Panggabean</h5>
                        </div>
                    </div>

                    <div id="overlay-{{ $i }}" class="card-img-overlay bg-dark" style="--bs-bg-opacity: .8; opacity: 0; transition: opacity 0.2s ease;">
                        <div class="card-img-overlay d-flex row justify-content-center align-content-center align-items-center">
                            <div class="badge bg-primary text-wrap w-auto fw-medium fs-6 small mb-3">
                                <small>Dosen</small>
                            </div>
                            <h5 class="card-title fw-semibold fs-6">Dedi Andre Martua Raja Panggabean</h5>
                            <p class="card-text fs-6 small">S3 Ternak Lele</p>
                            {{-- <div class="badge rounded-pill bg-light text-wrap w-auto fw-medium fs-6 small mb-3"> --}}
                                <small><small class="text-dark"><a href="https://www.del.ac.id/?page_id=48" class="text-light text-decoration-none fst-italic">See More...</a></small></small>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <script>
                function showOverlay(id) {
                    var overlay = document.getElementById("overlay-" + id);
                    var backOverlay = document.getElementById("backOverlay-" + id);
                    // overlay.classList.remove("d-none");
                    overlay.style.opacity = "1";
                    backOverlay.style.opacity = "0";
                }

                function hideOverlay(id) {
                    var overlay = document.getElementById("overlay-" + id);
                    var backOverlay = document.getElementById("backOverlay-" + id);

                    // overlay.classList.add("d-none");
                    overlay.style.opacity = "0";
                    backOverlay.style.opacity = "1";
                }
            </script>
            @endfor
            
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