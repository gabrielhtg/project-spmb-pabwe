<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPMB IT Del</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/assets/css/kel1.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/kel5.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('/assets/css/admisi.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/fasilitas.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/pengumuman.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 10px;
            /* Adjust this value according to your navbar height */
        }

        /* Your existing styles for the chat form */
        #chat-form {
            display: none;
            /* Add any other styles as needed */
        }

        /* Media query for responsiveness */
        @media only screen and (max-width: 600px) {
            #chat-form {
                display: block;
                /* Add any other styles for smaller screens */
            }
        }
    </style>
</head>

<body>
    {{--    navbar start --}}
    <nav class="navbar fixed-top bg-body-tertiary navbar-expand-xl">
        <div class="container-fluid">
            {{--            tampilan hp --}}
            <a class="d-flex d-sm-none align-items-center navbar-brand" href="/">
                <img src="{{ asset($dataInstitusi->logo_institusi) }}" alt="Logo" width="35" height="35"
                    class="d-inline-block align-text-top">
                <div class="ms-3 lh-1">
                    <span class="fs-3"><strong>SPMB {{ $dataInstitusi->singkatan_nama_institusi }}</strong></span>
                </div>
            </a>
            {{--            tampilan hp end --}}

            {{--            tampilan desktop --}}
            <a class="d-none d-sm-flex align-items-center navbar-brand" href="/">
                <img src="{{ asset($dataInstitusi->logo_institusi) }}" alt="Logo" width="40" height="40"
                    class="d-inline-block align-text-top">
                <div class="ms-2 lh-1">
                    <span class="fs-6"><strong>SPMB {{ $dataInstitusi->nama_institusi }}</strong></span>
                    <br>
                    <span class="fs-8"><i>{{ $dataInstitusi->jargon }}</i></span>
                </div>
            </a>
            {{--            tampilan desktop end --}}

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="mx-auto">
                    <ul class="navbar-nav ms-auto me-3">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('program') }}">
                                Program
                            </a>

                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/admisi">Admisi</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('prestasi.prestasiOverview') }}">Prestasi</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('beasiswa.beasiswa') }}">Beasiswa</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('faq.faq') }}">FAQ</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('fasilitas.fasilitas') }}">Fasilitas</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pengumuman') }}">Pengumuman</a>
                        </li>
                    </ul>
                </div>
                <a class="d-none d-xl-inline" href="http://spmb.app.del.ac.id/">
                    <button class="btn btn-primary">Daftar Sekarang
                    </button>
                </a>
                <a class="d-xl-none text-primary text-decoration-none">
                    <span><strong>Daftar Sekarang</strong></span>
                </a>
            </div>

        </div>
    </nav>
    {{--    navbar end --}}
    <main>
        <main style="margin-top: 80px; padding-bottom: 50px;">
            <!-- Add some margin-top and padding-bottom to provide space for the navbar and footer -->

            @yield('isi-halaman')
            <div id="chat-container" style="position: fixed; bottom: 20px; right: 20px; z-index: 100000;">
                <div id="chat-button"
                    style="width: 100px; height: 105px; border-radius: 0; color: #fff; text-align: center; line-height: 70px; cursor: pointer; position: relative; overflow: hidden; transition: transform 0.5s ease-in-out;"
                    onclick="toggleChatForm()" onmouseover="this.style.transform='scale(1.1)'"
                    onmouseout="this.style.transform='scale(1)'">
                    <img src="{{ asset('/assets/img/icon2.png') }}"
                        style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; transition: transform 0.5s ease-in-out;"
                        class="d-block w-100" alt="gambar-1">
                </div>
                <div id="chat-form"
                    style="display: none; position: fixed; bottom: 20px; right: 80px; z-index: 1000; max-width: 300px; transition: all 0.5s ease-in-out;">
                    <div id="additional-buttons"
                        style="display: flex; justify-content: space-between; margin-top: 10px;">
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
            <script src="{{ asset('/assets/js/chatbot.js') }}"></script>
            <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

        </main>



        {{--    foooter --}}
        <div class="container" style="padding-top: 50px;">
            <hr>

            <footer class="pt-5">
                <div class="d-flex justify-content-evenly flex-wrap gap-3">

                    {{--                tampilan phone --}}

                    <div class="section-footer d-md-none">
                        <h5 class="fw-bold">About Us</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2 text-muted">{{ $dataInstitusi->nama_institusi }}</li>

                            <li class="nav-item mb-2 text-muted">
                                Jl. Sisingamangaraja, Sitoluama Laguboti, Toba Sumatera Utara, Indonesia
                            </li>
                        </ul>
                    </div>

                    <div class="section-footer d-md-none">
                        <h5 class="fw-bold">Contact Us</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2 ">
                                <span class="text-muted">Website : </span>
                                <a href="http://www.del.ac.id">http://www.del.ac.id</a>
                            </li>

                            <li class="nav-item mb-2 ">
                                <span class="text-muted">Email : </span>
                                <a href="mailto:info@del.ac.id">info@del.ac.id</a>
                            </li>

                            <li class="nav-item mb-2 ">
                                <span class="text-muted">Email : </span>
                                <a href="mailto:karir@del.ac.id">karir@del.ac.id</a>
                            </li>
                        </ul>
                    </div>

                    <div class="section-footer d-md-none">
                        <h5 class="fw-bold">Find Us On</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a href="https://www.instagram.com/it.del/?hl=id" class="nav-link p-0 text-muted">
                                    <i class='bx bxl-instagram'></i> Instagram
                                </a>
                            </li>

                            <li class="nav-item mb-2">
                                <a href="https://www.facebook.com/Institut.Teknologi.Del"
                                    class="nav-link p-0 text-muted">
                                    <i class='bx bxl-facebook'></i> Facebook
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="section-footer d-flex justify-content-center mt-3 d-md-none">
                        <div class="d-flex gap-3">
                            <img class="logo-footer-1-kecil" src="{{ asset('/assets/img/logo-yayasan-del.png') }}"
                                alt="Logo Yayasan Del">
                            <img class="logo-footer-2-kecil"
                                src="{{ asset('/assets/img/Logo Institut Teknologi Del.png') }}"
                                alt="Logo Yayasan Del">
                        </div>
                    </div>

                    {{--                tampilan phone end --}}

                    {{--                tampilan desktop --}}

                    <div class="d-none d-md-inline w-25">
                        <h5 class="fw-bold">About Us</h5>
                        <ul class="nav flex-column">
                            @foreach ($dataAlamat as $e)
                                <li class="nav-item mb-2 text-muted fw-semibold">{{ $e->nama }}</li>

                                <li class="nav-item mb-2 text-muted">
                                    {{ $e->alamat }}
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="d-none d-md-inline w-25">
                        <h5 class="fw-bold">Contact Us</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2 ">
                                <span class="text-muted">Website : </span>
                                <a href="http://www.del.ac.id">http://www.del.ac.id</a>
                            </li>

                            @foreach ($dataNomorTelepon as $e)
                                <li class="nav-item mb-2 ">
                                    <span class="text-muted">{{ $e->nama . ' : ' . $e->nomor_telepon }}</span>
                                </li>
                            @endforeach

                            @foreach ($dataEmail as $e)
                                <li class="nav-item mb-2 ">
                                    <span class="text-muted">{{ $e->nama }} :</span>
                                    <a href="mailto:{{ $e->email }}">{{ $e->email }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="d-none d-md-inline">
                        <h5 class="fw-bold">Find Us On</h5>
                        <ul class="nav flex-column">
                            @foreach ($dataSosmed as $sosmed)
                                <li class="nav-item mb-2">
                                    <a href="{{ $sosmed->link }}" class="nav-link p-0">
                                        <span>{!! $sosmed->icon !!}</span> {{ $sosmed->nama }}
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>

                    <div class="d-none d-md-inline d-flex align-items-center">
                        <div class="d-flex gap-3">
                            <img class="logo-footer-1-kecil" src="{{ asset('/assets/img/logo-yayasan-del.png') }}"
                                alt="Logo Yayasan Del">
                            <img class="logo-footer-2-kecil"
                                src="{{ asset('/assets/img/Logo Institut Teknologi Del.png') }}"
                                alt="Logo Yayasan Del">
                        </div>
                    </div>
                    {{--                tampilan desktop end --}}
                </div>

                <hr>
                
                <div class="d-flex justify-content-center">
                    <p>&copy; SPMB Institut Teknologi Del-IF 21</p>
                </div>
            </footer>
        </div>
        {{-- footer end --}}

        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
        </script>
        <script src="https://kit.fontawesome.com/965a381e3a.js" crossorigin="anonymous"></script>
        <script src="{{ asset('/assets/js/kel4.js') }}"></script>
    </main>
</body>

</html>
