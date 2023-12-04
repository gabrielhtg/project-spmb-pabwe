@extends('template.admin-panel-template')

@section('isi-admin-panel')

    <div class="container-fluid p-3">  


                <div class="mt-3">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <span class="fs-3">Foto Header Admisi</span>
                        </div>

                        <form>
                            <div class="card-body">
                            <label for="inputbiayaAsrama" class="form-label">Image Admisi</label>
                            <input class="form-control" type="file" id="formFile">
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
                                    <label for="inputBiayaTingkatAkhir" class="form-label">Biaya Khusus Mahasiswa Tingkat Akhir (Rp)</label>
                                    <input type="text" class="form-control" id="inputBiayaTingkatAkhir" name="inputBiayaTingkatAkhir">
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

                <div class="mt-3">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <span class="fs-3">Data PMDK</span>
                        </div>

                        <form>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="inputbiayaAsrama" class="form-label">Image infografis Alur pendaftran PDMK</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="mb-3">
                                    <label for="inputBiayaMakan" class="form-label">Image infografis Daftar Ulang</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="mb-3">
                                    <label for="inputBiayaWisuda" class="form-label">Image infografis perbedaan Alur Pendaftaran</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="mb-3">
                                    <label for="inputDepositToga" class="form-label">PDF pedoman pendaftran</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="mb-3">
                                    <label for="inputDepositToga" class="form-label">PDF pedoman Upload Dokumen</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="mb-3">
                                    <label for="inputdeskPersKhusus" class="form-label">Deskripsi Persyaratan Umum Jalur PMDK</label>
                                    <textarea class="form-control" id="inputdeskPersKhusus" name="inputdeskPersKhusus" rows="4"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputdeskPersKhusus" class="form-label">Deskripsi Hal yang harus diperhatikan peserta ketika Tes Wawancara Daring</label>
                                    <textarea class="form-control" id="inputdeskPersKhusus" name="inputdeskPersKhusus" rows="4"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputdeskPersKhusus" class="form-label">Deskripsi Aturan Pelaksanaan Tes Wawancara Daring</label>
                                    <textarea class="form-control" id="inputdeskPersKhusus" name="inputdeskPersKhusus" rows="4"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputdeskPersKhusus" class="form-label">Deskripsi Hal yang harus diperhatikan peserta ketika Tes Psikotes Onsite</label>
                                    <textarea class="form-control" id="inputdeskPersKhusus" name="inputdeskPersKhusus" rows="4"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputdeskPersKhusus" class="form-label">Deskripsi Hal-hal yang harus diperhatikan peserta saat melakukan Daftar Ulang Onsite</label>
                                    <textarea class="form-control" id="inputdeskPersKhusus" name="inputdeskPersKhusus" rows="4"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputdeskPersKhusus" class="form-label">Deskripsi Daftar Sekolah Penerimaan jalur PMDK</label>
                                    <textarea class="form-control" id="inputdeskPersKhusus" name="inputdeskPersKhusus" rows="4"></textarea>
                                </div>
                                
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <span class="fs-3">Data USM</span>
                        </div>

                        <form>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="inputbiayaAsrama" class="form-label">Image infografis Alur pendaftran USM</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="mb-3">
                                    <label for="inputBiayaMakan" class="form-label">Image infografis Daftar Ulang</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="mb-3">
                                    <label for="inputBiayaWisuda" class="form-label">Image infografis perbedaan Alur Pendaftaran</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="mb-3">
                                    <label for="inputDepositToga" class="form-label">PDF pedoman pendaftran</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="mb-3">
                                    <label for="inputDepositToga" class="form-label">PDF pedoman Upload Dokumen</label>
                                </div>
                                <div class="mb-3">
                                    <label for="inputdeskPersKhusus" class="form-label">Deskripsi Persyaratan Umum Jalur USM</label>
                                    <textarea class="form-control" id="inputdeskPersKhusus" name="inputdeskPersKhusus" rows="4"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputdeskPersKhusus" class="form-label">Deskripsi Hal yang harus diperhatikan peserta ketika Tes Akademik Daring</label>
                                    <textarea class="form-control" id="inputdeskPersKhusus" name="inputdeskPersKhusus" rows="4"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputdeskPersKhusus" class="form-label">Deskripsi Aturan Pelaksanaan Tes Akademik Daring</label>
                                    <textarea class="form-control" id="inputdeskPersKhusus" name="inputdeskPersKhusus" rows="4"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputdeskPersKhusus" class="form-label">Deskripsi Hal yang harus diperhatikan peserta sebelum Tes Psikotes Onsite</label>
                                    <textarea class="form-control" id="inputdeskPersKhusus" name="inputdeskPersKhusus" rows="4"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputdeskPersKhusus" class="form-label">Deskripsi Hal yang harus diperhatikan peserta saat Tes Psikotes Onsite</label>
                                    <textarea class="form-control" id="inputdeskPersKhusus" name="inputdeskPersKhusus" rows="4"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputdeskPersKhusus" class="form-label">Deskripsi Hal yang harus dipersiapkan peserta sebelum Daftar Ulang secara Daring</label>
                                    <textarea class="form-control" id="inputdeskPersKhusus" name="inputdeskPersKhusus" rows="4"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputdeskPersKhusus" class="form-label">Hal yang harus diperhatikan peserta saat melakukan Daftar Ulang Daring</label>
                                    <textarea class="form-control" id="inputdeskPersKhusus" name="inputdeskPersKhusus" rows="4"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputdeskPersKhusus" class="form-label">Lokasi Ujian</label>
                                    <textarea class="form-control" id="inputdeskPersKhusus" name="inputdeskPersKhusus" rows="4"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputdeskPersKhusus" class="form-label">Prosedur Pelaksanaan Tes Akademik</label>
                                    <textarea class="form-control" id="inputdeskPersKhusus" name="inputdeskPersKhusus" rows="4"></textarea>
                                </div>
                                
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <span class="fs-3">Data USM</span>
                        </div>

                        <form>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="inputbiayaAsrama" class="form-label">Image infografis Alur pendaftran USM</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="mb-3">
                                    <label for="inputBiayaMakan" class="form-label">Image infografis Daftar Ulang</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="mb-3">
                                    <label for="inputBiayaWisuda" class="form-label">Image infografis perbedaan Alur Pendaftaran</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="mb-3">
                                    <label for="inputDepositToga" class="form-label">PDF pedoman pendaftran</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="mb-3">
                                    <label for="inputDepositToga" class="form-label">PDF pedoman Upload Dokumen</label>
                                </div>
                                <div class="mb-3">
                                    <label for="inputdeskPersKhusus" class="form-label">Deskripsi Persyaratan Umum Jalur UTBK</label>
                                    <textarea class="form-control" id="inputdeskPersKhusus" name="inputdeskPersKhusus" rows="4"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputdeskPersKhusus" class="form-label">Deskripsi Hal yang harus diperhatikan peserta sebelum melakukan Tes Psikotes Onsite</label>
                                    <textarea class="form-control" id="inputdeskPersKhusus" name="inputdeskPersKhusus" rows="4"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputdeskPersKhusus" class="form-label">Deskripsi Hal yang harus diperhatikan peserta saat melakukan Tes Psikotes Onsite</label>
                                    <textarea class="form-control" id="inputdeskPersKhusus" name="inputdeskPersKhusus" rows="4"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputdeskPersKhusus" class="form-label">Deskripsi Hal yang harus dipersiapkan peserta sebelum melakukan Daftar Ulang Daring</label>
                                    <textarea class="form-control" id="inputdeskPersKhusus" name="inputdeskPersKhusus" rows="4"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputdeskPersKhusus" class="form-label">Hal yang harus diperhatikan peserta saat melakukan Daftar Ulang Daring</label>
                                    <textarea class="form-control" id="inputdeskPersKhusus" name="inputdeskPersKhusus" rows="4"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputdeskPersKhusus" class="form-label">Lokasi Ujian</label>
                                    <textarea class="form-control" id="inputdeskPersKhusus" name="inputdeskPersKhusus" rows="4"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputprosedur" class="form-label">Prosedur Pelaksanaan Tes Akademik</label>
                                    <textarea class="form-control" id="inputprosedur" name="inputprosedur" rows="4"></textarea>
                                </div>
                                
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
    </div>

@endsection