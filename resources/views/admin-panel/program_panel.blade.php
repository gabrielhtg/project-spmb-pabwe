@extends('template.admin-panel-template')

@section('isi-admin-panel')



  <div class="d-flex justify-content-center">
      <ul class="nav nav-underline d-flex gap-5">
          <li class="nav-item">
              <a href="#" id="fakultas-hyperlink" class="py-3 nav-link active" aria-current="page" onclick="showFakultasSubPage()">Fakultas</a>
          </li>
          <li class="nav-item">
            <a href="#" id="prodi-hyperlink" class="py-3 nav-link" onclick="showProdiSubPage()">Prodi</a>
        </li>
          <li class="nav-item">
              <a href="#" id="dosen-hyperlink" class="py-3 nav-link" onclick="showDosenSubPage()">Dosen/Staff</a>
          </li>
          <li class="nav-item">
              <a href="#" id="kurikulum-hyperlink" class="py-3 nav-link" onclick="showKurikulumSubPage()">Kurikulum</a>
          </li>
      </ul>
  </div>

  {{-- OVERVIEW SUBPAGE --}}
  <section id="fakultas-subpage" class="container">

    <div class="container mt-5 mb-3">
        <h1 class="fw-bold">Panel Fakultas</h1>
    </div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
        Tambah Data Fakultas
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal Tambah Fakultas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="input_nama_fakultas" class="form-label">Nama Fakultas</label>
                                <input type="text" class="form-control" id="input_nama_fakultas" name="input_nama_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_deskripsi_fakultas" class="form-label">Deskripsi Fakultas</label>
                                <input type="text" class="form-control" id="input_deskripsi_fakultas" name="input_deskripsi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_lokasi_fakultas" class="form-label">Lokasi Fakultas</label>
                                <input type="text" class="form-control" id="input_lokasi_fakultas" name="input_lokasi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_visi_fakultas" class="form-label">Visi Fakultas</label>
                                <input type="text" class="form-control" id="input_visi_fakultas" name="input_visi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_misi_fakultas" class="form-label">Misi Fakultas</label>
                                <input type="text" class="form-control" id="input_misi_fakultas" name="input_misi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_sertifikat_akreditasi" class="form-label">Gambar Fakultas</label>
                                <input class="form-control" type="file" id="input_sertifikat_akreditasi" name="input_sertifikat_akreditasi">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan Data</button>
                </div>
            </div>
        </div>
    </div>

    <div id="item-2" class="card">
        <div class="card-header bg-primary text-white">
            <span class="fs-5">Data Fakultas</span>
        </div>
        <div class="card-body d-flex flex-column">
            <form action="">
                <table class="table text-center align-middle table-striped table-bordered">
                    <thead class="align-middle">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Fakultas</th>
                        <th scope="col">Lokasi Fakultas</th>
                        <th scope="col">Visi Fakultas</th>
                        <th scope="col">Misi Fakultas</th>
                        <th scope="col">Gambar Fakultas</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td style="min-width: 120px; width: 120px">
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myEdit">
                                <i class="bi bi-pen"></i>
                            </button>
                            <button class="btn btn-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    <!-- Modal Edit -->
    <div class="modal fade" id="myEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Fakultas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="input_nama_fakultas" class="form-label">Nama Fakultas</label>
                                <input type="text" class="form-control" id="input_nama_fakultas" name="input_nama_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_deskripsi_fakultas" class="form-label">Deskripsi Fakultas</label>
                                <input type="text" class="form-control" id="input_deskripsi_fakultas" name="input_deskripsi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_lokasi_fakultas" class="form-label">Lokasi Fakultas</label>
                                <input type="text" class="form-control" id="input_lokasi_fakultas" name="input_lokasi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_visi_fakultas" class="form-label">Visi Fakultas</label>
                                <input type="text" class="form-control" id="input_visi_fakultas" name="input_visi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_misi_fakultas" class="form-label">Misi Fakultas</label>
                                <input type="text" class="form-control" id="input_misi_fakultas" name="input_misi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_sertifikat_akreditasi" class="form-label">Gambar Fakultas</label>
                                <input class="form-control" type="file" id="input_sertifikat_akreditasi" name="input_sertifikat_akreditasi">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>

  </section>


  {{-- DOSEN SUBPAGE --}}
  <section id="dosen-subpage" class="container d-none">
    <div class="container mt-5 mb-3">
        <h1 class="fw-bold">Panel Dosen/Staff</h1>
    </div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myadddosen">
      Tambahkan
    </button>
    <br>

    <!-- Modal -->
    <div class="modal fade" id="myadddosen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">TambahfDosen Staff</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Dosen/Staff</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <div class="mb-3">
                                <label for="nidn" class="form-label">NIDN</label>
                                <input type="text" class="form-control" id="nidn" name="nidn">
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" class="form-control" id="jabatan" name="jabatan">
                            </div>
                            <div class="mb-3">
                                <label for="pendidikan" class="form-label">Pendidikan</label>
                                <input type="text" class="form-control" id="pendidikan" name="pendidikan">
                            </div>
                            <div class="mb-3">
                                <label for="kode_prodi" class="form-label">Kode Prodi</label>
                                <input type="text" class="form-control" id="kode_prodi" name="kode_prodi">
                            </div>
                            <div class="mb-3">
                                <label for="prodi" class="form-label">Program Studi</label>
                                <input type="number" min="0" class="form-control" id="prodi" name="prodi">
                            </div>
                            <div class="mb-3">
                                <label for="fakultas" class="form-label">Fakultas</label>
                                <input type="number" min="0" class="form-control" id="fakultas" name="fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="number" min="0" class="form-control" id="gambar" name="gambar">
                            </div>


                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Tambahkan</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="my-edit-dosen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Dosen/Staff</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Dosen/Staff</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <div class="mb-3">
                                <label for="nidn" class="form-label">NIDN</label>
                                <input type="text" class="form-control" id="nidn" name="nidn">
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" class="form-control" id="jabatan" name="jabatan">
                            </div>
                            <div class="mb-3">
                                <label for="pendidikan" class="form-label">Pendidikan</label>
                                <input type="text" class="form-control" id="pendidikan" name="pendidikan">
                            </div>
                            <div class="mb-3">
                                <label for="kode_prodi" class="form-label">Kode Prodi</label>
                                <input type="text" class="form-control" id="kode_prodi" name="kode_prodi">
                            </div>
                            <div class="mb-3">
                                <label for="prodi" class="form-label">Program Studi</label>
                                <input type="number" min="0" class="form-control" id="prodi" name="prodi">
                            </div>
                            <div class="mb-3">
                                <label for="fakultas" class="form-label">Fakultas</label>
                                <input type="number" min="0" class="form-control" id="fakultas" name="fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="number" min="0" class="form-control" id="gambar" name="gambar">
                            </div>


                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>
    <div id="item-2" class="card">
        <div class="card-header bg-primary text-white">
            <span class="fs-5">Data Dosen/Staff</span>
        </div>
        <div class="card-body d-flex flex-column">
            <form action="">
                <table class="table text-center align-middle table-striped table-bordered">
                    <thead class="align-middle">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Dosen/Staff</th>
                        <th scope="col">NIDN</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Pendidikan</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Prodi</th>
                        <th scope="col">Fakultas</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td style="min-width: 120px; width: 120px">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#my-edit-dosen">
                            <i class="bi bi-pen"></i>
                          </button>
                            <button class="btn btn-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</section>

{{-- Kurikulum --}}
  <section id="kurikulum-subpage" class="container d-none">
    <div class="container mt-5 mb-3">
        <h1 class="fw-bold">Kurikulum Panel</h1>
    </div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModalkur">
        Tambah Data Kurikulum
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModalkur" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal Tambah Data Kurikulum </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="input_nama_mata kuliah" class="form-label">Nama Mata Kuliah</label>
                                <input type="text" class="form-control" id="input_nama_mata kuliah" name="input_nama_mata kuliah">
                            </div>
                            <div class="mb-3">
                                <label for="input_kode_matakuliah" class="form-label">Kode Mata Kuliah</label>
                                <input type="text" class="form-control" id="input_kode_matakuliah" name="input_kode_matakuliah">
                            </div>
                            <div class="mb-3">
                                <label for="select_kode_prodi" class="form-label">Kode Prodi</label>
                                <select class="form-select" id="select_kode_prodi" name="select_kode_prodi">
                                    <option value="pilihan1">Pilihan 1</option>
                                    <option value="pilihan2">Pilihan 2</option>
                                    <option value="pilihan3">Pilihan 3</option>
                                    <option value="pilihan4">Pilihan 4</option>
                                    <option value="pilihan5">Pilihan 5</option>
                                    <option value="pilihan6">Pilihan 6</option>
                                    <option value="pilihan7">Pilihan 7</option>
                                    <option value="pilihan8">Pilihan 8</option>
                                    <option value="pilihan9">Pilihan 9</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>
                            <!-- Text field for "Lainnya" option -->
                            <div class="mb-3" id="input_kode_prodi_lainnya" style="display: none;">
                                <label for="input_kode_prodi_lainnya" class="form-label">Kode Prodi (Lainnya)</label>
                                <input type="text" class="form-control" id="input_kode_prodi_lainnya" name="input_kode_prodi_lainnya">
                            </div>
                            <div class="mb-3">
                                <label for="input_visi_fakultas" class="form-label">Semester</label>
                                <input type="text" class="form-control" id="input_visi_fakultas" name="input_visi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_misi_fakultas" class="form-label">Jumlah SKS</label>
                                <input type="text" class="form-control" id="input_misi_fakultas" name="input_misi_fakultas">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan Data</button>
                </div>
            </div>
        </div>
    </div>

    <div id="item-2" class="card">
        <div class="card-header bg-primary text-white">
            <span class="fs-5">Data Fakultas</span>
        </div>
        <div class="card-body d-flex flex-column">
            <form action="">
                <table class="table text-center align-middle table-striped table-bordered">
                    <thead class="align-middle">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Mata Kuliah</th>
                        <th scope="col">Kode Mata Kuliah</th>
                        <th scope="col">Kode Prodi</th>
                        <th scope="col">Jumlah SKS</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td style="min-width: 120px; width: 120px">
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myEditKurikulum">
                                <i class="bi bi-pen"></i>
                            </button>
                            <button class="btn btn-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    <!-- Modal Edit -->
    <div class="modal fade" id="myEditKurikulum" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Fakultas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="input_nama_mata kuliah" class="form-label">Nama Mata Kuliah</label>
                                <input type="text" class="form-control" id="input_nama_mata kuliah" name="input_nama_mata kuliah">
                            </div>
                            <div class="mb-3">
                                <label for="input_kode_matakuliah" class="form-label">Kode Mata Kuliah</label>
                                <input type="text" class="form-control" id="input_kode_matakuliah" name="input_kode_matakuliah">
                            </div>
                            <div class="mb-3">
                                <label for="select_kode_prodi" class="form-label">Kode Prodi</label>
                                <select class="form-select" id="select_kode_prodi" name="select_kode_prodi">
                                    <option value="pilihan1">Pilihan 1</option>
                                    <option value="pilihan2">Pilihan 2</option>
                                    <option value="pilihan3">Pilihan 3</option>
                                    <option value="pilihan4">Pilihan 4</option>
                                    <option value="pilihan5">Pilihan 5</option>
                                    <option value="pilihan6">Pilihan 6</option>
                                    <option value="pilihan7">Pilihan 7</option>
                                    <option value="pilihan8">Pilihan 8</option>
                                    <option value="pilihan9">Pilihan 9</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>
                            <!-- Text field for "Lainnya" option -->
                            <div class="mb-3" id="input_kode_prodi_lainnya" style="display: none;">
                                <label for="input_kode_prodi_lainnya" class="form-label">Kode Prodi (Lainnya)</label>
                                <input type="text" class="form-control" id="input_kode_prodi_lainnya" name="input_kode_prodi_lainnya">
                            </div>
                            <div class="mb-3">
                                <label for="input_visi_fakultas" class="form-label">Semester</label>
                                <input type="text" class="form-control" id="input_visi_fakultas" name="input_visi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_misi_fakultas" class="form-label">Jumlah SKS</label>
                                <input type="text" class="form-control" id="input_misi_fakultas" name="input_misi_fakultas">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>



  </section >

  <section id="prodi-subpage" class="container d-none">

    <div class="container mt-5 mb-3">
        <h1 class="fw-bold">Panel Prodi</h1>
    </div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModalProdi">
        Tambah Data Prodi
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModalProdi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal Tambah Prodi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="input_nama_fakultas" class="form-label">Nama Prodi</label>
                                <input type="text" class="form-control" id="input_nama_fakultas" name="input_nama_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_deskripsi_fakultas" class="form-label">Deskripsi Prodi</label>
                                <input type="text" class="form-control" id="input_deskripsi_fakultas" name="input_deskripsi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_lokasi_fakultas" class="form-label">Visi</label>
                                <input type="text" class="form-control" id="input_lokasi_fakultas" name="input_lokasi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_visi_fakultas" class="form-label">Misi</label>
                                <input type="text" class="form-control" id="input_visi_fakultas" name="input_visi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_misi_fakultas" class="form-label">Prospek</label>
                                <input type="text" class="form-control" id="input_misi_fakultas" name="input_misi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_misi_fakultas" class="form-label">Gelar</label>
                                <input type="text" class="form-control" id="input_misi_fakultas" name="input_misi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_misi_fakultas" class="form-label">Lama Studi</label>
                                <input type="text" class="form-control" id="input_misi_fakultas" name="input_misi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_misi_fakultas" class="form-label">Kode Fakultas</label>
                                <input type="text" class="form-control" id="input_misi_fakultas" name="input_misi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_misi_fakultas" class="form-label">Kode Fakultas</label>
                                <input type="text" class="form-control" id="input_misi_fakultas" name="input_misi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_sertifikat_akreditasi" class="form-label">Gambar Prodi</label>
                                <input class="form-control" type="file" id="input_sertifikat_akreditasi" name="input_sertifikat_akreditasi">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan Data</button>
                </div>
            </div>
        </div>
    </div>

    <div id="item-2" class="card">
        <div class="card-header bg-primary text-white">
            <span class="fs-5">Data Prodi</span>
        </div>
        <div class="card-body d-flex flex-column">
            <form action="">
                <table class="table text-center align-middle table-striped table-bordered">
                    <thead class="align-middle">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Visi</th>
                        <th scope="col">Misi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Prospek</th>
                        <th scope="col">Gelar</th>
                        <th scope="col">Prospek</th>
                        <th scope="col">Lama</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Anni</td>
                        <td style="min-width: 120px; width: 120px">
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myEditprodi">
                                <i class="bi bi-pen"></i>
                            </button>
                            <button class="btn btn-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    <!-- Modal Edit -->
    <div class="modal fade" id="myEditprodi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Fakultas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="input_nama_fakultas" class="form-label">Nama Prodi</label>
                                <input type="text" class="form-control" id="input_nama_fakultas" name="input_nama_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_deskripsi_fakultas" class="form-label">Deskripsi Prodi</label>
                                <input type="text" class="form-control" id="input_deskripsi_fakultas" name="input_deskripsi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_lokasi_fakultas" class="form-label">Visi</label>
                                <input type="text" class="form-control" id="input_lokasi_fakultas" name="input_lokasi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_visi_fakultas" class="form-label">Misi</label>
                                <input type="text" class="form-control" id="input_visi_fakultas" name="input_visi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_misi_fakultas" class="form-label">Prospek</label>
                                <input type="text" class="form-control" id="input_misi_fakultas" name="input_misi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_misi_fakultas" class="form-label">Gelar</label>
                                <input type="text" class="form-control" id="input_misi_fakultas" name="input_misi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_misi_fakultas" class="form-label">Lama Studi</label>
                                <input type="text" class="form-control" id="input_misi_fakultas" name="input_misi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_misi_fakultas" class="form-label">Kode Fakultas</label>
                                <input type="text" class="form-control" id="input_misi_fakultas" name="input_misi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_misi_fakultas" class="form-label">Kode Fakultas</label>
                                <input type="text" class="form-control" id="input_misi_fakultas" name="input_misi_fakultas">
                            </div>
                            <div class="mb-3">
                                <label for="input_sertifikat_akreditasi" class="form-label">Gambar Prodi</label>
                                <input class="form-control" type="file" id="input_sertifikat_akreditasi" name="input_sertifikat_akreditasi">
                            </div> 
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>

  </section>



  <script>
      var overview = document.getElementById("fakultas-subpage");
      var dosen = document.getElementById("dosen-subpage");
      var kurikulum = document.getElementById("kurikulum-subpage");
      var prodi = document.getElementById("prodi-subpage");

      var overviewLink = document.getElementById("fakultas-hyperlink");
      var dosenLink = document.getElementById("dosen-hyperlink");
      var kurikulumLink = document.getElementById("kurikulum-hyperlink");
      var prodiLink = document.getElementById("prodi-hyperlink");

      function showFakultasSubPage() {
          overview.classList.remove("d-none");
          overviewLink.classList.add("active");
          dosen.classList.add("d-none");
          dosenLink.classList.remove("active");
          kurikulum.classList.add("d-none");
          kurikulumLink.classList.remove("active");
          prodi.classList.add("d-none");
          prodiLink.classList.remove("active");

          overview.setAttribute("aria-current", "page");
      };

      function showDosenSubPage() {
          overview.classList.add("d-none");
          overviewLink.classList.remove("active");
          dosen.classList.remove("d-none");
          dosenLink.classList.add("active");
          kurikulum.classList.add("d-none");
          kurikulumLink.classList.remove("active");
          prodi.classList.add("d-none");
          prodiLink.classList.remove("active");

          dosen.setAttribute("aria-current", "page");
      };

      function showKurikulumSubPage() {
          overview.classList.add("d-none");
          overviewLink.classList.remove("active");
          dosen.classList.add("d-none");
          dosenLink.classList.remove("active");
          kurikulum.classList.remove("d-none");
          kurikulumLink.classList.add("active");
          prodi.classList.add("d-none");
          prodiLink.classList.remove("active");


          kurikulum.setAttribute("aria-current", "page");
      };

      function showProdiSubPage(){
            prodi.classList.remove("d-none");
            prodiLink.classList.add("active");
            overview.classList.add("d-none");
            overviewLink.classList.remove("active");
            dosen.classList.add("d-none");
            dosenLink.classList.remove("active");
            kurikulum.classList.add("d-none");
            kurikulumLink.classList.remove("active");

            prodi.setAttribute("aria-current", "page");
      };



  </script>


@endsection