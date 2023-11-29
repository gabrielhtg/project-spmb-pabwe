<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset("/assets/css/global.css") }}">
    <link rel="stylesheet" href="{{ asset("/assets/css/kel1.css") }}">
    <link rel="stylesheet" href="{{ asset("/assets/css/admin_panel.css") }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset("/assets/css/admisi.css") }}">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>Admin Panel</title>
</head>
<body>
{{--    Disini adalah bagian dari navbar--}}
    <div class="d-flex w-100">

    {{--        Ini adalah sidebar besar mulai--}}
        <div class="d-none ps-3 pe-3 fixed-top bg-sidebar d-flex flex-column align-items-center" id="sidebar_besar" style="width: 18rem; height: 100vh">
            <div class="d-flex justify-content-center align-items-center mb-3 w-100" style="height: 60px; border: 0 solid white;border-bottom-width: 1px;">
                <span class="text-white fw-semibold fs-4" style="font-size: 1rem">SPMB Admin</span>
            </div>

            <div class="d-flex flex-column gap-2 w-100">
                <button class="btn btn-outline-light w-100 ">Dashboard</button>
                <button class="btn bg-white w-100">Akreditasi</button>
                <button class="btn bg-white w-100">Dashboard Panel</button>
            </div>
        </div>
    {{--        ini adalah sidebar besar selesai--}}

        {{--        Ini adalah sidebar kecil mulai--}}
        <div class="bg-sidebar d-flex flex-wrap justify-content-center" id="sidebar_kecil" style="width: 4rem; height: 100vh">
            <div class="d-flex align-items-center" style="height: 56px">
                <span class="text-white fw-semibold" style="font-size: 1rem">SPMB</span>
            </div>
        </div>
        {{--        ini adalah sidebar kecil selesai--}}

        <div class="w-100">
            <nav class="navbar navbar-expand-lg bg-body-tertiary border border-bottom-1">
                <div class="container-fluid">
                    <button id="tombol_sidebar" class="btn border border-1" onclick="tampilkanSidebar()">
{{--                        <i class="fa-solid fa-xmark"></i>--}}
                        <i id="logo_sidebar" class="fa-solid fa-bars"></i>
                    </button>

                    <div class="btn-group">
                        <button type="button" class="border-0 bg-light p-0">
                            <span class="me-3">Haloo Admin!!</span>
                            <img src="{{ asset('assets/img/admin/default.png') }}" alt="foto_profil" style="width: 40px; border-radius: 50%">
                        </button>
                        <button type="button" class="btn ps-1 dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu mt-3 dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>

{{--                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                        <span class="navbar-toggler-icon"></span>--}}
{{--                    </button>--}}
                </div>
            </nav>

            @yield('isi-admin-panel')
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/965a381e3a.js" crossorigin="anonymous"></script>
    <script src="{{ asset("/assets/js/kel4.js") }}"></script>
    <script src="{{ asset("/assets/js/admin-panel.js") }}"></script>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset("/assets/css/global.css") }}">
    <link rel="stylesheet" href="{{ asset("/assets/css/kel1.css") }}">
    <link rel="stylesheet" href="{{ asset("/assets/css/admin_panel.css") }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset("/assets/css/admisi.css") }}">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <title>Admin Panel</title>
</head>
<body>
{{--    Disini adalah bagian dari navbar--}}

    <div class="d-flex w-100">

    {{--        Ini adalah sidebar besar mulai--}}
        <div class="d-none ps-3 pe-3 bg-sidebar d-flex flex-column align-items-center" id="sidebar_besar" style="width: 22rem; height: 100vh">
            <div class="d-flex align-items-center mb-3" style="height: 56px">
                <span class="text-white fw-semibold fs-4" style="font-size: 1rem">SPMB Admin</span>
            </div>

            <div class="d-flex flex-column gap-2 w-100">

            <div class="d-flex flex-column row-gap-3 w-100">

                <a href="{{ route("admin-panel") }}">
                    <button id="btn_dashboard" class="btn_sidebar w-100 btn_sidebar_active text-start">
                        <i class="bi bi-speedometer me-2"></i>
                        Dashboard
                    </button>
                </a>
                <a href="">
                    <button id="btn_akreditasi" class="btn_sidebar w-100 text-start">
                        <span class="me-2">&nbsp;A</span>
                        Akreditasi
                    </button>
                </a>
                <a href="{{ route("spmb-dashboard") }}">
                    <button id="btn_dashboard_panel" class="btn_sidebar w-100 text-start">
                        <i class="bi bi-house me-2"></i>
                        Dashboard Panel
                    </button>
                </a>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <button id="btn_dashboard_panel" class="btn_sidebar w-100">Admisi Panel <i class="right fas fa-angle-left"></i></button>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="bi bi-circle"></i>
                                <p>PMDK </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="bi bi-circle"></i>
                                <p>USM </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="bi bi-circle"></i>
                                <p>UTBK </p>
                            </a>
                        </li>
                    </ul>
                </li>

            </div>
        </div>
        <div id="geser_besar" style="width: 18rem; min-width: 18rem; height: 100vh"></div>

    {{--        ini adalah sidebar besar selesai--}}

        {{--        Ini adalah sidebar kecil mulai--}}
        <div class="bg-sidebar fixed-top d-flex flex-wrap justify-content-center" id="sidebar_kecil" style="width: 4rem; height: 100vh">
            <div class="d-flex align-items-center flex-column" style="height: 56px">
                <div style="margin-top: 60px" class="mb-3">
                </div>

                <div class="d-flex flex-column row-gap-3 w-100">
                    <a href="{{ route("admin-panel") }}">
                        <button id="btn_dashboard" class="btn_sidebar_kecil btn_sidebar_active"><i class="bi bi-speedometer"></i></button>
                    </a>
                    <button id="btn_akreditasi" class="btn_sidebar_kecil">A</button>
                    <a href="{{ route("spmb-dashboard") }}">
                        <button id="btn_dashboard_panel" class="btn_sidebar_kecil"><i class="bi bi-house"></i></button>
                    </a>
                </div>
            </div>
        </div>
        <div id="geser_kecil" style="width: 4rem; height: 100vh"></div>
        {{--        ini adalah sidebar kecil selesai--}}

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
                        <button type="button" style="border-style: none;" class="ps-1 bg-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="me-3">Haloo {{ $admin->firstname }}</span>
                            <img class="border border-1 border-primary" src="{{ asset($admin->profile_pict) }}" alt="foto_profil" style="width: 40px; border-radius: 50%">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu mt-3 dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('edit-profile') }}"> <i class="fa-solid fa-user me-2"></i>Edit Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"><i class="fa-solid fa-arrow-right-from-bracket fa-flip-horizontal me-2"></i> Logout</a></li>
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

        for (let i = 0; i < buttonSidebar.length; i++) {
            buttonSidebar[i].classList.remove("btn_sidebar_active");
            buttonSidebarKecil[i].classList.remove("btn_sidebar_active");
        }

        buttonSidebar[{{ $indexActive }}].classList.add("btn_sidebar_active");
        buttonSidebarKecil[{{ $indexActive }}].classList.add("btn_sidebar_active");
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/965a381e3a.js" crossorigin="anonymous"></script>
    <script src="{{ asset("/assets/js/kel4.js") }}"></script>
    <script src="{{ asset("/assets/js/admin-panel.js") }}"></script>
</body>
</html>