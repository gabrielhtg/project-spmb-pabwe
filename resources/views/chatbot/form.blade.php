@extends('template.app')

@section('isi-halaman')
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
    @endsection
