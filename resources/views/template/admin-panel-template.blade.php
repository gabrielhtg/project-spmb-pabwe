<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/kel1.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/admin_panel.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('/assets/css/admisi.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <title>Admin Panel</title>
</head>

<body>
    {{--    Disini adalah bagian dari navbar --}}
    <div class="d-flex w-100">

        {{--        Ini adalah sidebar besar mulai --}}
        <div class="d-none ps-3 pe-3 fixed-top bg-sidebar d-flex flex-column align-items-center" id="sidebar_besar"
            style="width: 18rem; height: 300vh">
            <div class="d-flex justify-content-center align-items-center mb-3 w-100"
                style="height: 60px; border: 0 solid white;border-bottom-width: 1px;">
                <span class="text-white fw-semibold fs-4" style="font-size: 1rem">SPMB Admin</span>
            </div>


            <div class="d-flex flex-column row-gap-3 w-100">
                <a href="{{ route('admin-panel') }}">
                    <button id="btn_dashboard" class="btn_sidebar w-100 btn_sidebar_active text-start">
                        <i class="bi bi-speedometer me-2"></i>
                        Dashboard
                    </button>
                </a>
                <a href="{{ route('admisi-panel') }}">
                    <button id="btn_dashboard_panel" class="btn_sidebar w-100 text-start">
                        <i class="fa-regular fa-note-sticky"></i>
                        Admisi
                    </button>
                </a>
                <a href="{{ route('fasilitas-admin') }}">
                    <button id="btn_fasilitas_panel" class="btn_sidebar w-100 text-start">
                        <i class="fas fa-university"></i>
                        Fasilitas
                    </button>
                </a>
                <a href="{{ route('pengumuman-panel') }}">
                    <button id="btn_pengumuman_panel" class="btn_sidebar w-100 text-start">
                        <i class="fas fa-bullhorn"></i>
                        Pengumuman
                    </button>
                </a>

                <a href="{{ route('program-panel') }}">
                    <button id="btn_program" class="btn_sidebar w-100 text-start">
                        <i class="bi bi-book-half me-2"></i>
                        Program
                    </button>
                </a>

                <a href="{{ route('prestasi.panel') }}">
                    <button id="btn_dashboard_panel" class="btn_sidebar w-100 text-start"><i class="fas fa-trophy"></i>
                        Prestasi</button>
                </a>

                <a href="{{ route('testimoni.panel') }}">
                    <button id="btn_dashboard_panel" class="btn_sidebar w-100 text-start"><i
                            class="fas fa-comment-dots"></i>
                        Testimoni</button>
                </a>

                <a href="{{ route('faq-admin') }}">
                    <button id="btn_dashboard" class="btn_sidebar w-100 btn_sidebar_active text-start">
                        <i class="fa-solid fa-question"></i>
                        FAQ
                    </button>
                </a>

                <a href="{{ route('admin.beasiswa.panel') }}">
                    <button id="btn_dashboard" class="btn_sidebar w-100 btn_sidebar_active text-start">
                        <i class="fa-solid fa-user-graduate"></i>
                        Beasiswa
                    </button>
                </a>

                <a href="{{ route('form-panel') }}">
                    <button id="btn_dashboard" class="btn_sidebar w-100 btn_sidebar_active text-start">
                        <i class="fa-brands fa-rocketchat"></i>
                        Form
                    </button>
                </a>

            </div>
        </div>
        <div id="geser_besar" style="width: 18rem; min-width: 18rem; height: 100vh"></div>

        {{--        ini adalah sidebar besar selesai --}}

        {{--        Ini adalah sidebar kecil mulai --}}
        <div class="bg-sidebar fixed-top d-flex flex-wrap justify-content-center" id="sidebar_kecil"
            style="width: 4rem; height: 100%; overflow-y: scroll; margin-top: 0;">
            <div class="d-flex align-items-center flex-column" style="height: 56px">
                <div style="margin-top: 60px" class="mb-3">
                </div>

                <div class="d-flex flex-column row-gap-3 w-100">
                    <a href="{{ route('admin-panel') }}">
                        <button id="btn_dashboard-kecil" class="btn_sidebar_kecil btn_sidebar_active"><i
                                class="bi bi-speedometer"></i> </button>
                    </a>
                    <a href="{{ route('admisi-panel') }}">
                        <button id="btn_dashboard_panel" class="btn_sidebar_kecil"><i
                                class="fa-regular fa-note-sticky"></i></button>
                    </a>
                    <a href="{{ route('fasilitas-admin') }}">
                        <button id="btn_fasilitas_kecil" class="btn_sidebar_kecil"><i
                                class="fas fa-university"></i></button>
                    </a>
                    <a href="{{ route('pengumuman-panel') }}">
                        <button id="btn_pengumuman_kecil" class="btn_sidebar_kecil"><i
                                class="fas fa-bullhorn"></i></button>
                    </a>
                    <a href="{{ route('program-panel') }}">
                        <button id="btn_program" class="btn_sidebar_kecil"><i class="bi bi-book-half"></i></button>
                    </a>

                    <a href="{{ route('prestasi.panel') }}">
                        <button id="btn_dasshboard_panel" class="btn_sidebar_kecil"><i
                                class="fas fa-trophy"></i></button>
                    </a>
                    <a href="{{ route('testimoni.panel') }}">
                        <button id="btn_dashboard_panel" class="btn_sidebar_kecil"><i
                                class="fas fa-comment-dots"></i></button>
                    </a>
                    <a href="{{ route('faq-admin') }}">
                        <button id="btn_dashboard-kecil" class="btn_sidebar_kecil"><i
                                class="fa-solid fa-question"></i></button>
                    </a>
                    <a href="{{ route('admin.beasiswa.panel') }}"><button id="btn_dashboard-kecil"
                            class="btn_sidebar_kecil"><i class="fa-solid fa-user-graduate"></i>
                        </button>
                    </a>
                    <a href="{{ route('form-panel') }}"><button id="btn_dashboard-kecil"
                            class="btn_sidebar_kecil"><i class="fa-brands fa-rocketchat"></i>
                        </button>
                    </a>

                </div>
            </div>
        </div>
        <div id="geser_kecil" style="min-width: 4rem; width: 4rem; height: 100vh"></div>
        {{--        ini adalah sidebar kecil selesai --}}

        <div class="w-100">
            <nav class="navbar shadow-sm fixed-top navbar-expand-lg bg-body-tertiary border border-bottom-1">
                <div class="container-fluid">
                    <button id="tombol_sidebar" class="btn border border-1" onclick="tampilkanSidebar()">
                        <i id="logo_sidebar" class="fa-solid fa-bars"></i>
                    </button>

                    <div class="mx-auto">
                        <a href="{{ route('admin-panel') }}" class="text-decoration-none text-black">
                            <span class="d-none d-sm-block fw-semibold fs-4">SPMB Admin Panel</span>
                            <span class="d-sm-none fw-semibold fs-4">SPMB</span>
                        </a>
                    </div>

                    <div class="btn-group">
                        <button type="button" style="border-style: none;"
                            class="ps-1 bg-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="me-3">Hii {{ $admin->firstname }}!!</span>
                            <img class="border border-1 border-primary"
                                src="{{ $admin->profile_pict ? asset($admin->profile_pict) : asset('assets/img/admin/default.png') }}"
                                alt="foto_profil" style="width: 40px; height: 40px; border-radius: 50%">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu mt-3 dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('edit-profile') }}"><i
                                        class="bi bi-person me-2"></i>Edit Profile</a></li>
                            <li><a class="dropdown-item" href="{{ route('admins') }}"><i
                                        class="bi bi-person-add me-2"></i>Tambah Admin</a></li>
                            <li><a class="dropdown-item" href="{{ route('dashboard') }}" target="_blank"><i
                                        class="bi bi-house me-2"></i>SPMB Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="{{ route('logout') }}"><i
                                        class="bi bi-box-arrow-left me-2"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div style="padding-top: 60px">
                @yield('isi-admin-panel')
            </div>
        </div>
    </div>

    <script>
        const buttonSidebar = document.querySelectorAll(".btn_sidebar");
        const buttonSidebarKecil = document.querySelectorAll(".btn_sidebar_kecil");
        // const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        // const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

        for (let i = 0; i < buttonSidebar.length; i++) {
            buttonSidebar[i].classList.remove("btn_sidebar_active");
            buttonSidebarKecil[i].classList.remove("btn_sidebar_active");
        }

        try {
            buttonSidebar[{{ $indexActive = $indexActive ?? -1 }}].classList.add("btn_sidebar_active");
            buttonSidebarKecil[{{ $indexActive = $indexActive ?? -1 }}].classList.add("btn_sidebar_active");
        } catch (e) {

        }
    </script>

    <script>
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
    </script>

    <script>
        const toastTrigger = document.getElementById('liveToastBtn')
        const toastLiveExample = document.getElementById('liveToast')

        if (toastTrigger) {
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
            toastTrigger.addEventListener('click', () => {
                toastBootstrap.show()
            })
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://kit.fontawesome.com/965a381e3a.js" crossorigin="anonymous"></script>
    <script src="{{ asset('/assets/js/kel4.js') }}"></script>
    <script src="{{ asset('/assets/js/admin-panel.js') }}"></script>
    @yield('other-js')
</body>

</html>
