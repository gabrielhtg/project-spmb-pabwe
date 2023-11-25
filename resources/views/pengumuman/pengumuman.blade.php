@extends('template.app')

@section('isi-halaman')
    <head>
        <link rel="stylesheet" href="{{ asset('/assets/css/pengumuman.css') }}">
    </head>

    <body>
        <section class="container-judul" id="Pengumuman">
            <div class="hero-pengumuman">
                <h1 class="judul-pengumuman">Pengumuman SPMB</h1>
                <p>
                    Halaman website ini adalah tempat resmi untuk mendapatkan informasi terbaru seputar asrama, pengumuman kelulusan
                    ujian masuk, jadwal kegiatan, dan berita penting lainnya. Cari informasi dengan mudah melalui fitur pencarian
                    atau berdasarkan tag yang disediakan.
                </p>
            </div>

            <div class="table-pengumuman">
                <table border="1">
                    <tr>
                        <th style="text-align:center;">No.</th>
                        <th style="text-align:center;">Judul Pengumuman</th>
                        <th style="text-align:center;">Tanggal Pengumuman</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td><textarea rows="1" cols="50" style="width: 100%;"></textarea></td>
                        <td style="text-align:center;"><button class="button-search">Search</button></td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">1.</td>
                        <td><a href="#">Pengumuman hasil seleksi jalur USM 1 Teknik Metalurgi</a></td>
                        <td style="text-align:center;">21 November 2023</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">2.</td>
                        <td><a href="#">Pengumuman Re-entry Mahasiswa Baru angkatan 2023/2024</a></td>
                        <td style="text-align:center;">21 November 2023</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">3.</td>
                        <td><a href="#">Pengumuman hasil seleksi jalur USM 2 Mahasiswa Baru 2023/2024</a></td>
                        <td style="text-align:center;">21 November 2023</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">4.</td>
                        <td><a href="#">Pengumuman hasil seleksi jalur USM 1 Teknik Metalurgi 2023/2024</a></td>
                        <td style="text-align:center;">21 November 2023</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">5.</td>
                        <td><a href="#">Pengumuman hasil seleksi jalur USM 1 Teknik Metalurgi 2023/2024</a></td>
                        <td style="text-align:center;">21 November 2023</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">6.</td>
                        <td><a href="#">Pengumuman hasil seleksi jalur USM 1 Teknik Metalurgi 2023/2024</a></td>
                        <td style="text-align:center;">21 November 2023</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">7.</td>
                        <td><a href="#">Pengumuman hasil seleksi jalur USM 1 Teknik Metalurgi 2023/2024</a></td>
                        <td style="text-align:center;">21 November 2023</td>
                    </tr>
                </table>
            </div>

        </section>


    </body>
@endsection
