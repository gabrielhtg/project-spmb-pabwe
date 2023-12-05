@extends('template.admin-panel-template')

@section('isi-admin-panel')

    <div class="container-fluid p-3">
        <div class="mt-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <span class="fs-3">Foto Header Admisi</span>
                </div>

                <form method="post" action="{{ route('set-header-admisi') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="p-3">
                        <div class="w-100 border border-1 mb-2 p-3 d-flex justify-content-center rounded-2">
                            <img
                                src="{{ asset($dataHeaderAdmisi->letak_foto ? $dataHeaderAdmisi->letak_foto : 'assets/img/default.jpg') }}"
                                alt="sertifikat akreditasi"
                                style="width: 500px">
                        </div>
                    </div>
                    <div class="card-body">
                        <label for="header-admisi" class="form-label">Image Admisi</label>
                        <input class="form-control" type="file" id="header-admisi" name="header_admisi">
                        @error('header_admisi')
                            <span class="text-danger fs-7">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="mt-3">
            <div class="card card-success">
                <div class="card-header bg-primary text-white">
                    <span class="fs-3">Data Persyaratan Khusus Prodi</span>

                </div>

                <div class="card-body">
                    @include('admin-panel.sub_admisi_panel.add_pers_khusus')
                    <form action="">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Program Studi</th>
                                <th scope="col">Deskripsi Persyaratan</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>
                                    <button type="button" class="btn btn-warning">Ubah</button>
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <div class="card card-success">
                <div class="card-header bg-primary text-white">
                    <span class="fs-3">Data Biaya Pendaftaran</span>

                </div>

                <div class="card-body">
                    @include('admin-panel.sub_admisi_panel.add_biaya_pendaftaran')
                    <form action="">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Jalur Pendaftaran</th>
                                <th scope="col">Biaya (Rp)</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>USM</td>
                                <td>10.000</td>
                                <td>
                                    <button type="button" class="btn btn-warning">Ubah</button>
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <span class="fs-3">Data Pembiayaan MBKM Non-Kompetisi</span>
                </div>

                <form>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="input_jumlah_sks_kegiatan" class="form-label">Jumlah SKS Kegiatan</label>
                            <input type="text" class="form-control" id="input_jumlah_sks_kegiatan"
                                   name="input_jumlah_sks_kegiatan">
                        </div>
                        <div class="mb-3">
                            <label for="input_potongan_spp" class="form-label">Potongan SPP (%)</label>
                            <input type="text" class="form-control" id="input_potongan_spp" name="input_potongan_spp">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="mt-3">
            <div class="card card-success">
                <div class="card-header bg-primary text-white">
                    <span class="fs-3">Data Pembiayaan MBKM Kompetisi</span>

                </div>

                <div class="card-body">
                    @include('admin-panel.sub_admisi_panel.add_mbkm')
                    <form action="">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Jumlah SKS</th>
                                <th scope="col">Potongan SPP (%)</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>
                                    <button type="button" class="btn btn-warning">Ubah</button>
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>


        <div class="mt-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <span class="fs-3">Data Biaya Umum</span>
                </div>

                <form>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="inputbiayaAsrama" class="form-label">Biaya Asrama dan Kemahasiswaan (Rp)</label>
                            <input type="text" class="form-control" id="inputbiayaAsrama" name="inputbiayaAsrama">
                        </div>
                        <div class="mb-3">
                            <label for="inputBiayaMakan" class="form-label">Biaya Makan /hari (Rp)</label>
                            <input type="text" class="form-control" id="inputBiayaMakan" name="inputBiayaMakan">
                        </div>
                        <div class="mb-3">
                            <label for="inputBiayaWisuda" class="form-label">Biaya Wisuda (Rp)</label>
                            <input type="text" class="form-control" id="inputBiayaWisuda" name="inputBiayaWisuda">
                        </div>
                        <div class="mb-3">
                            <label for="inputDepositToga" class="form-label">Biaya Deposit Toga (Rp)</label>
                            <input type="text" class="form-control" id="inputDepositToga" name="inputDepositToga">
                        </div>
                        <div class="mb-3">
                            <label for="inputBiayaTingkatAkhir" class="form-label">Biaya Khusus Mahasiswa Tingkat Akhir
                                (Rp)</label>
                            <input type="text" class="form-control" id="inputBiayaTingkatAkhir"
                                   name="inputBiayaTingkatAkhir">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="mt-3">
            <div class="card card-success">
                <div class="card-header bg-primary text-white">
                    <span class="fs-3">Data Biaya Studi</span>

                </div>

                <div class="card-body">
                    @include('admin-panel.sub_admisi_panel.add_biaya_studi')
                    <form action="">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Program Studi</th>
                                <th scope="col">Biaya SPP (Rp)</th>
                                <th scope="col">Uang Pengembangan (Rp)</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td>
                                    <button type="button" class="btn btn-warning">Ubah</button>
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <span class="fs-3">Data PDF Biaya Studi</span>
                </div>

                <form>
                    <div class="card-body">
                        <label for="inputbiayaAsrama" class="form-label">File Biaya Studi</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
