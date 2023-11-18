<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset("/assets/css/global.css") }}">
    <link rel="stylesheet" href="{{ asset("/assets/css/welcome.css") }}">
</head>
<body>
{{--    navbar start --}}
    <nav class="navbar fixed-top bg-body-tertiary navbar-expand-xl">
        <div class="container-fluid">
{{--            tampilan hp--}}
            <a class="d-flex d-sm-none align-items-center navbar-brand" href="/">
                <img src="{{ asset("/assets/img/Logo Institut Teknologi Del.png") }}" alt="Logo" width="35" height="35" class="d-inline-block align-text-top">
                <div class="ms-3 lh-1">
                    <span class="fs-3"><strong>SPMB IT Del</strong></span>
                </div>
            </a>
{{--            tampilan hp end--}}

{{--            tampilan desktop--}}
            <a class="d-none d-sm-flex align-items-center navbar-brand" href="/">
                <img src="{{ asset("/assets/img/Logo Institut Teknologi Del.png") }}" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
                <div class="ms-2 lh-1">
                    <span class="fs-6"><strong>SPMB Institut Teknologi Del</strong></span>
                    <br>
                    <span class="fs-8"><i>MarTuhan, MarRoha, MarBisuk</i></span>
                </div>
            </a>
{{--            tampilan desktop end--}}

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="mx-auto">
                    <ul class="navbar-nav ms-auto me-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Program
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Admisi</a>
                            <ul class="dropdown-menu">
                                <li><a href="#" class="dropdown-item">Test</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontak</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Prestasi</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Beasiswa</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Akreditasi</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>
                    </ul>
                </div>
                <a class="d-none d-xl-inline">
                    <button class="btn btn-primary">Pengumuman SPMB</button>
                </a>
                <a class="d-xl-none text-primary text-decoration-none">
                    <span><strong>Pengumuman SPMB</strong></span>
                </a>
            </div>

        </div>
    </nav>
{{--    navbar end--}}

    @yield('isi-halaman')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/965a381e3a.js" crossorigin="anonymous"></script>
</body>
</html>
