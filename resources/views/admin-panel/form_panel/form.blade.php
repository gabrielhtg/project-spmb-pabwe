<!-- resources/views/admin/admin-panel-form.blade.php -->

@extends('template.admin-panel-template')

@section('isi-admin-panel')
    <style>
        .custom-container {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            background-color: rgb(13, 110, 253);
            color: white;
        }

        .table-container {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
        }
    </style>

    <div class="container-fluid table-container" style="padding: 10px;">
        <div class="container-fluid custom-container">
            <h2>Form</h2>
        </div>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No WhatsApp</th>
                    <th scope="col">Pesan</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($forms as $form)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $form->nama }}</td>
                        <td>{{ $form->nomor }}</td>
                        <td>{{ $form->pesan }}</td>
                        <td>
                            <a href="https://wa.me/{{ $form->nomor }}" target="_blank" class="btn btn-primary">
                                Jawab Pesan
                            </a>
                        </td>
                        <td data-id="{{ $form->id }}" data-read="unread" class="check-status">
                            <i class="fas fa-check-circle text-muted"></i>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-zZ3GNrD5dW1kRAB8fI3s19aRlWpTbN4dj/kWu0Ie6C5jkgWo/jAwUZf9pC+I5oM2" crossorigin="anonymous">
    </script>
    <script>
        function redirectToWhatsApp(nomor) {
            // Format nomor telepon sesuai aturan WhatsApp
            var formattedNomor = nomor.replace(/[^0-9]/g, ''); // Hapus karakter non-angka

            // Redirect ke URL WhatsApp dengan nomor telepon yang diformat
            window.location.href = 'https://wa.me/' + formattedNomor;
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Ambil semua elemen dengan kelas check-status
            var statusElements = document.querySelectorAll('.check-status');

            // Tambahkan event listener untuk setiap elemen
            statusElements.forEach(function(element) {
                element.addEventListener('click', function() {
                    // Ubah status ceklis saat diklik
                    toggleCheckStatus(element);
                });

                // Inisialisasi status ceklis dari sessionStorage
                var messageId = element.getAttribute('data-id');
                var storedStatus = sessionStorage.getItem('messageStatus_' + messageId);
                if (storedStatus) {
                    element.setAttribute('data-read', storedStatus);
                    updateCheckIcon(element, storedStatus);
                }
            });

            // Fungsi untuk mengubah status ceklis
            function toggleCheckStatus(element) {
                var messageId = element.getAttribute('data-id');
                var status = element.getAttribute('data-read') === 'read' ? 'unread' : 'read';
                element.setAttribute('data-read', status);
                updateCheckIcon(element, status);

                // Simpan status ceklis ke sessionStorage
                sessionStorage.setItem('messageStatus_' + messageId, status);
            }

            // Fungsi untuk memperbarui ikon ceklis
            function updateCheckIcon(element, status) {
                if (status === 'read') {
                    element.innerHTML = '<i class="fas fa-check-circle text-success"></i>';
                } else {
                    element.innerHTML = '<i class="fas fa-check-circle text-muted"></i>';
                }
            }
        });
    </script>
@endsection
