@extends('template.app')

@section('isi-halaman')
    <section class="container-judul" id="Pengumuman">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('/assets/img/pengumuman/hero-pengumuman.jpg') }}" class="img-fluid d-block w-100"
                        alt="header-fasilitas">
                    <div class="carousel-caption d-none d-md-block text-start">
                        <div class="d-flex flex-column pb-5 text-center h-100">
                            <h1 class="display-5 fw-bold" style="color:#0477BF">Pengumuman SPMB</h1>
                            <p>
                                Cari informasi terbaru seputar asrama, pengumuman kelulusan ujian masuk, jadwal kegiatan,
                                dan berita penting lainnya melalui fitur pencarian atau berdasarkan tag yang disediakan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-5">
            <div class="table-pengumuman">
                <table border="1">
                    <tr>
                        <th style="text-align:center;">No.</th>
                        <th style="text-align:center;">Tags</th>
                        <th style="text-align:center;">Judul Pengumuman</th>
                        <th style="text-align:center;">Tanggal Pengumuman</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input rows="1" cols="50" placeholder="cari di sini" style="width: 100%;"></input>
                        </td>
                        <td style="text-align:center;"><button class="button-search">Cari</button></td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">1.</td>
                        <td style="text-align:center;"><button type="button" class="btn btn-light" disabled>USM 1</button>
                        </td>
                        <td><a href="#">Pengumuman hasil seleksi jalur USM 1 Teknik Metalurgi</a></td>
                        <td style="text-align:center;">21 November 2023</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">2.</td>
                        <td style="text-align:center;"><button type="button" class="btn btn-light" disabled>USM
                                2</button></td>
                        <td><a href="#">Pengumuman Re-entry Mahasiswa Baru angkatan 2023/2024</a></td>
                        <td style="text-align:center;">21 November 2023</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">3.</td>
                        <td style="text-align:center;"><button type="button" class="btn btn-light" disabled>PMDK</button>
                        </td>
                        <td><a href="#">Pengumuman hasil seleksi jalur USM 2 Mahasiswa Baru 2023/2024</a></td>
                        <td style="text-align:center;">21 November 2023</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">4.</td>
                        <td style="text-align:center;"><button type="button" class="btn btn-light" disabled>USM
                                3</button></td>
                        <td><a href="#">Pengumuman hasil seleksi jalur USM 1 Teknik Metalurgi 2023/2024</a></td>
                        <td style="text-align:center;">21 November 2023</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">5.</td>
                        <td style="text-align:center;"><button type="button" class="btn btn-light" disabled>USM
                                4</button></td>
                        <td><a href="#">Pengumuman hasil seleksi jalur USM 1 Teknik Metalurgi 2023/2024</a></td>
                        <td style="text-align:center;">21 November 2023</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">6.</td>
                        <td style="text-align:center;"><button type="button" class="btn btn-light" disabled>Asrama</button>
                        </td>
                        <td><a href="#">Pengumuman hasil seleksi jalur USM 1 Teknik Metalurgi 2023/2024</a></td>
                        <td style="text-align:center;">21 November 2023</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">7.</td>
                        <td style="text-align:center;"><button type="button" class="btn btn-light"
                                disabled>Administrasi</button></td>
                        <td><a href="#">Pengumuman hasil seleksi jalur USM 1 Teknik Metalurgi 2023/2024</a></td>
                        <td style="text-align:center;">21 November 2023</td>
                    </tr>
                </table>
            </div>
            <div class="pt-3">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container justify-content-center">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item" aria-current="page">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

    </section>
@endsection
