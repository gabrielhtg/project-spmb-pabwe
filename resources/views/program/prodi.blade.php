@extends('template.app')

@section('isi-halaman')


    {{-- HERO SECTION --}}
    <div style="margin: -10px;"></div>
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
                    <img src="{{ asset('img/program/major/' . $majors->first()->gambar) }}" class="d-block w-100 img-fluid object-fit-cover" alt="..." style="height:500px;" media="(max-width: 600px) { height: 400px; }">
                </div>
            </div>
            <div class="card-img-overlay d-flex align-items-center pt-5">
                <div class="d-flex flex-column container pt-5 text-white">
                    <h1 class="fw-bold align-items-end text-wrap ">{{ $majors->first()->nama }}</h1>
                    <p class="fs-5 px-md-0 text-truncate ">
                        <a href="/fakultas/{{ $majors->first()->faculty->id }}" class="text-wrap text-decoration-none text-white d-inline-block text-start ">
                            {{ $majors->first()->faculty->nama }}
                        </a>
                    </p>
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
    {{-- End of HERO SECTION --}}

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

        <div class="d-flex flex-column-reverse flex-md-row">
            <div class="col-md-8">
                <!-- Konten Utama -->
                <p>{!! $majors->first()->deskripsi !!}</p>
                
                <h2 class="fw-bold fs-4">Visi</h2>
                <p>{!! $majors->first()->visi !!}</p>
                
                <h2 class="fw-bold fs-4">Misi</h2>
                <p>{!! $majors->first()->misi !!}</p>
                
                <h2 class="fw-bold fs-4">Prospek Kerja</h2>
                <p>{!! $majors->first()->prospek !!}</p>
                
                <h2 class="fw-bold fs-4">Pendaftaran</h2>
                <p>Syarat Pendaftaran:</p>
                <p>{!! $majors->first()->syarat !!}</p>

                <a href="/admisi"><button type="button" class="btn btn-primary gap-3">Halaman Pendaftaran</button></a>
                
            </div>

            <div class="col-md-4 order-md-last mt-4 mt-md-0">
                <!-- Card -->
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item fw-bold list-group-item-secondary">Ketua Program Studi</li>
                        @php
                            $kaprodiFound = false;
                        @endphp

                        @foreach($employees->where('jabatan', 'Kaprodi') as $employee)
                            @if($employee->major->kode_prodi == $majors->first()->kode_prodi)
                                <li class="list-group-item">{{ $employee->first()->nama }}</li>
                                @php
                                    $kaprodiFound = true;
                                @endphp
                            @endif
                        @endforeach

                        @if(!$kaprodiFound)
                            <li class="list-group-item">Tidak ada Kaprodi</li>
                        @endif
                        <li class="list-group-item fw-bold list-group-item-secondary">Akreditasi</li>
                        <li class="list-group-item">{{ $majors->first()->akreditasi }}</li>
                        <li class="list-group-item fw-bold list-group-item-secondary">Gelar</li>
                        <li class="list-group-item">{{ $majors->first()->gelar }}</li>
                        <li class="list-group-item fw-bold list-group-item-secondary">Lama Studi</li>
                        <li class="list-group-item">{{ $majors->first()->lama }}</li>
                        <li class="list-group-item fw-bold list-group-item-secondary">Biaya Kuliah</li>
                        <li class="list-group-item">{{ $majors->first()->biaya }}</li>
                        <li class="list-group-item fw-bold list-group-item-secondary">Lokasi</li>
                        <li class="list-group-item">{{ $majors->first()->lokasi }}</li>
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
        @php
            // Define the custom order of positions
            $positionOrder = [
                'Rektor' => 1,
                'Dekan' => 2,
                'Kaprodi' => 3,
                'Dosen'=> 4,
                'Staff' => 5,
                'Teaching Assistant' => 6,
            ];

            // Sort employees based on custom order
            $sortedEmployees = $employees->where('major.kode_prodi', $majors->first()->kode_prodi)->sortBy(function ($employee) use ($positionOrder) {
                // If the position is not in the defined order, default to a high value
                return $positionOrder[$employee->jabatan] ?? 9999;
            });
        @endphp

        @foreach ($sortedEmployees as $employee)
            <div class="col-md-3 col-12">
                <div class="card text-bg-dark" onmouseover="showOverlay({{ $employee->id }})" onmouseout="hideOverlay({{ $employee->id }})">
                    <img src="{{ asset('img/program/employee/' . $employee->gambar) }}" class="card-img img-fluid" alt="">

                    <div id="backOverlay-{{ $employee->id }}" class="card-img-overlay " style="opacity: 1; transition: opacity 0.2s ease;">
                        <div class="d-flex justify-content-start">
                            <div class="badge bg-primary text-wrap fw-medium fs-6 small mb-3">
                                <small>{{ $employee->jabatan }}</small>
                            </div>
                        </div>
                        <div class="d-flex card-img-overlay align-items-end ">
                            <h5 class="card-title fw-semibold fs-6 ">{{ $employee->nama }}</h5>
                        </div>
                    </div>

                    <div id="overlay-{{ $employee->id }}" class="card-img-overlay bg-dark" style="--bs-bg-opacity: .8; opacity: 0; transition: opacity 0.2s ease;">
                        <div class="card-img-overlay d-flex row justify-content-center align-content-center align-items-center">
                            <div class="badge bg-primary text-wrap w-auto fw-medium fs-6 small mb-3">
                                <small>{{ $employee->jabatan }}</small>
                            </div>
                            <h5 class="card-title fw-semibold fs-6">{{ $employee->nama }}</h5>
                            <p class="card-text fs-6 small">{{ $employee->pendidikan }}</p>
                            <small><small class="text-dark"><a href="https://www.del.ac.id/?page_id=48" class="text-light text-decoration-none fst-italic">See More...</a></small></small>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                function showOverlay(id) {
                    var overlay = document.getElementById("overlay-" + id);
                    var backOverlay = document.getElementById("backOverlay-" + id);
                    overlay.style.opacity = "1";
                    backOverlay.style.opacity = "0";
                }

                function hideOverlay(id) {
                    var overlay = document.getElementById("overlay-" + id);
                    var backOverlay = document.getElementById("backOverlay-" + id);
                    overlay.style.opacity = "0";
                    backOverlay.style.opacity = "1";
                }
            </script>
        @endforeach
    </div>
</section>


    <!-- KURIKULUM SUBPAGE -->
    <section id="kurikulum-subpage" class="container d-none">
        <div class="mt-5 mb-3">
            <h1 class="fw-bold">Kurikulum</h1>
            
        </div>
        @for ($i = 0; $i < 4; $i++)
        <div class="accordion" id="accordionExample{{ $i }}">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button fs-5 text-light text-decoration-none fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $i }}" aria-expanded="true" aria-controls="collapse{{ $i }}" style="background-color: #0477BF;">
                        Tahun ke-{{ $i + 1 }}
                    </button>
                </h2>
                <div id="collapse{{ $i }}" class="accordion-collapse collapse " data-bs-parent="#accordionExample{{ $i }}">
                    <div class="accordion-body">
                        <div class="row">
                            @for ($j = 1; $j <= 2; $j++)
                            <div class="col-md-6 mb-5">
                                <div class="container px-2 text-center">
                                    <div class="container text-center">
                                        <h2 class="fw-bold fs-5">Semester {{ $i * 2 + $j }}</h2>
                                            <table class="table table-bordered">
                                            <thead class="table-primary">
                                                <tr>
                                                    
                                                    <th scope="col" class="fw-semibold">Kode MK</th>
                                                    <th scope="col" class="fw-semibold">Nama Mata Kuliah</th>
                                                    <th scope="col" class="fw-semibold">SKS</th>
                                                </tr>
                                                </thead>
                                            @foreach($courses as $course)
                                            @if ($course->semester == $i * 2 + $j)
                                                
                                                <tbody>
                                                    
                                                        
                                                        <tr>
                                                            <td>{{ $course->kode_mk }}</td>
                                                            <td>{{ $course->nama }}</td>
                                                            <td>{{ $course->sks }}</td>
                                                        </tr>
                                                        @endif
                                                    @endforeach
                                                    <!-- <tr>
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
                                                    </tr> -->
                                                    <!-- <tr>
                                                        <td colspan="2" class="fw-semibold">Total SKS</td>
                                                        <td>7</td>
                                                    </tr> -->
                                                </tbody>
                                            </table>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                        <div class="container text-center">
                    </div>
                </div>
            </div>
        </div>
        @endfor

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
    
    




@endsection