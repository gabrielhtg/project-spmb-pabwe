@extends('template.admin-panel-template')

@section('isi-admin-panel')

    <div class="container-fluid p-3">
        <div class="row row-gap-3">
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
                        <span class="fs-3">Hero Section</span>

                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="mb-3">
                                <label for="input_judul_header" class="form-label">Header Hero</label>
                                <input type="text" class="form-control" id="input_judul_header" name="input_judul_header">
                            </div>
                            <div class="mb-3">
                                <label for="input_deskripsi_header" class="form-label">Example textarea</label>
                                <textarea class="form-control" id="input_deskripsi_header" name="input_deskripsi_header" rows="10"></textarea>
                            </div>
                        </form>


                    </div>


                    <div class="card-body">
                    @include('admin-panel.sub_admin_panel.tambah_tombol_hero_section')
                        <form action="">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Button</th>
                                    <th scope="col">Link Button</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Test</td>
                                    <td>Test</td>
                                    <td>Test</td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
