@extends('template.admin-panel-template')

@section('isi-admin-panel')

    <div class="container-fluid p-3">
        <div class="row row-gap-3">
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <span class="fs-3">Data Pembiayaan MBKM Non-Kompetisi</span>
                    </div>

                    <form>
                        <div class="card-body">
                        <div class="mb-3">
                                <label for="input_jumlah_sks_kegiatan" class="form-label">Jumlah SKS Kegiatan</label>
                                <input type="text" class="form-control" id="input_jumlah_sks_kegiatan" name="input_jumlah_sks_kegiatan">
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

            <div class="col-md-6">
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
        </div>
        <div class = "row row-gap-3">
            <div class="col-md-6">
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
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <span class="fs-3">Data Biaya Umum</span>
                    </div>

                    <form>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="input_jumlah_sks_kegiatan" class="form-label">Biaya Asrama dan Kemahasiswaan (Rp)</label>
                                <input type="text" class="form-control" id="input_jumlah_sks_kegiatan" name="input_jumlah_sks_kegiatan">
                            </div>
                            <div class="mb-3">
                                <label for="input_potongan_spp" class="form-label">Biaya Makan /hari (Rp)</label>
                                <input type="text" class="form-control" id="input_potongan_spp" name="input_potongan_spp">
                            </div>
                            <div class="mb-3">
                                <label for="input_potongan_spp" class="form-label">Biaya Wisuda (Rp)</label>
                                <input type="text" class="form-control" id="input_potongan_spp" name="input_potongan_spp">
                            </div>
                            <div class="mb-3">
                                <label for="input_potongan_spp" class="form-label">Biaya Deposit Toga (Rp)</label>
                                <input type="text" class="form-control" id="input_potongan_spp" name="input_potongan_spp">
                            </div>
                            <div class="mb-3">
                                <label for="input_potongan_spp" class="form-label">Biaya Khusus Mahasiswa Tingkat Akhir (Rp)</label>
                                <input type="text" class="form-control" id="input_potongan_spp" name="input_potongan_spp">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        
    </div>

@endsection
