<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPMB IT Del</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/kel1.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/kel5.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('/assets/css/admisi.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/fasilitas.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/pengumuman.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Program
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/admisi">Admisi</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontak</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Prestasi</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('beasiswa.beasiswa') }}">Beasiswa</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Akreditasi</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('faq.faq') }}">FAQ</a>
                        </li>

                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ Route('fasilitas.asrama') }}">Fasilitas</a>
                        </li> --}}
                    </ul>
                </div>
                <a class="d-none d-xl-inline" href="{{ route('pengumuman') }}">
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
        <link rel="stylesheet" href="{{ asset('/assets/css/form.css') }}">

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="form-container p-4">
                    <form action="{{ route('submitForm') }}" method="post">
                        @csrf
                        <div id="successAlertPlaceholder" class="alert alert-success" style="display:none;">
                            Succes. Silahkan menunggu jawaban pertanyaan anda pada WhatsApp
                        </div>
                        <div id="errorAlertPlaceholder" class="alert alert-danger" style="display:none;">
                            Gagal
                        </div>
                        <h2>Masih bingung?</h2>
                        <h5>Kami akan mengirimkan jawaban ke WhatsApp Anda</h5>
                        <br>
                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-right">Nama</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="nama" name="nama"
                                    placeholder="Masukkan nama Anda">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nomor" class="col-md-4 col-form-label text-md-right">Nomor WhatsApp</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="nomor" name="nomor"
                                    placeholder="Contoh 6281366254012" oninput="validateNumber(this)">
                                <div id="errorAlertNomor" class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pesan" class="col-md-4 col-form-label text-right">Pesan</label>
                            <div class="col-md-8">
                                <textarea class="form-control" id="pesan" name="pesan" rows="3" placeholder="Masukkan pesan Anda"></textarea>
                            </div>
                        </div>
                        <br>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary"
                                    onclick="return validateForm()">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </main>

    {{--    foooter --}}
    <div class="container">
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
                            <a href="https://www.facebook.com/Institut.Teknologi.Del" class="nav-link p-0 text-muted">
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
                            src="{{ asset('/assets/img/Logo Institut Teknologi Del.png') }}" alt="Logo Yayasan Del">
                    </div>
                </div>

                {{--                tampilan phone end --}}

                {{--                tampilan desktop --}}

                <div class="d-none d-md-inline w-25">
                    <h5 class="fw-bold">About Us</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2 text-muted">Institut Teknologi Del</li>

                        <li class="nav-item mb-2 text-muted">
                            Jl. Sisingamangaraja, Sitoluama Laguboti, Toba Sumatera Utara, Indonesia
                        </li>
                    </ul>
                </div>

                <div class="d-none d-md-inline w-25">
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
                            src="{{ asset('/assets/img/Logo Institut Teknologi Del.png') }}" alt="Logo Yayasan Del">
                    </div>
                </div>
                {{--                tampilan desktop end --}}
            </div>

            <hr>

            <div class="d-flex justify-content-center">
                <p>&copy; Made with ❤ by Informatika 21 - BANDAR</p>
            </div>
        </footer>
    </div>
    {{-- footer end --}}

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/965a381e3a.js" crossorigin="anonymous"></script>
    <script src="{{ asset('/assets/js/kel4.js') }}"></script>
    <script>
        // JavaScript function to show a success alert
        function showSuccessAlert(message, displayDurationInSeconds) {
            var successAlert = document.getElementById("successAlertPlaceholder");
            successAlert.innerHTML = message;
            successAlert.style.display = 'block';

            // Set a timeout to hide the success alert after a specified duration
            setTimeout(function() {
                successAlert.style.display = 'none';
            }, displayDurationInSeconds * 1000); // Convert seconds to milliseconds
        }

        // JavaScript function to show an error alert
        function showErrorAlert(message) {
            var errorAlert = document.getElementById("errorAlertPlaceholder");
            errorAlert.innerHTML = message;
            errorAlert.style.display = 'block';
            setTimeout(function() {
                errorAlert.style.display = 'none';
            }, 5000); // Display for 5 seconds
        }

        // JavaScript function to hide alerts
        function hideAlerts() {
            var successAlert = document.getElementById("successAlertPlaceholder");
            var errorAlert = document.getElementById("errorAlertPlaceholder");

            successAlert.style.display = 'none';
            errorAlert.style.display = 'none';
        }

        // JavaScript function for numeric input validation
        function validateNumber(input) {
            var inputValue = input.value;

            if (!/^\d+$/.test(inputValue)) {
                showErrorAlert('Masukkan angka.');
                input.classList.add('is-invalid');
            } else {
                hideAlerts();
                input.classList.remove('is-invalid');
            }
        }

        // JavaScript function to validate the form
        function validateForm() {
            // Check if any of the input fields is empty
            var namaInput = document.getElementById("nama");
            var nomorInput = document.getElementById("nomor");
            var pesanInput = document.getElementById("pesan");

            if (!namaInput.value || !nomorInput.value || !pesanInput.value) {
                showErrorAlert('Harap mengisi semua form.');
                if (!namaInput.value) namaInput.classList.add('is-invalid');
                if (!nomorInput.value) nomorInput.classList.add('is-invalid');
                if (!pesanInput.value) pesanInput.classList.add('is-invalid');
                return false;
            } else {
                // Clear any existing alerts and validation styling
                hideAlerts();
                namaInput.classList.remove('is-invalid');
                nomorInput.classList.remove('is-invalid');
                pesanInput.classList.remove('is-invalid');

                // Add your additional form validation logic here if needed

                // Show the success alert for 10 seconds
                showSuccessAlert('Pesan berhasil dikirim! Silahkan menunggu jawaban pertanyaan anda pada WhatsApp', 60);
                return true;
            }
        }

        // Hide the success alert on page reload
        window.onload = function() {
            hideAlerts();
        };
    </script>


</body>

</html>
