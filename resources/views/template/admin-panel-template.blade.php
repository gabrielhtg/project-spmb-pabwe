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
                            <li><a class="dropdown-item" href="#"> <i class="fa-solid fa-user me-2"></i>Edit Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-arrow-right-from-bracket fa-flip-horizontal me-2"></i> Logout</a></li>
                        </ul>
                    </div>
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
