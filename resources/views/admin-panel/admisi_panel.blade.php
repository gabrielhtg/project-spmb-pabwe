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
                                alt="gambar-header-admisi"
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

                <div class="card-body">
                    <div class="d-flex justify-content-end mb-2">
                        @include('admin-panel.sub_admisi_panel.tambah_mbkm_non_kompetisi')
                    </div>
                    <table class="table table-bordered text-center table-striped align-middle">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Jumlah SKS</th>
                            <th>Potongan SPP</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach($dataNonKompetisi as $e)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $e->jumlah_sks }}</td>
                                <td>{{ $e->potongan_spp }}</td>
                                <td style="width: 180px; max-width: 180px">
                                    <div class="d-flex justify-content-center w-100 gap-2">
                                        <form action="{{ route('removeMbkm') }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $e->id }}">
                                            <button class="btn btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <span class="fs-3">Data Pembiayaan MBKM Kompetisi</span>
                </div>

                <div class="card-body">
                    <div class="d-flex justify-content-end mb-2">
                        @include('admin-panel.sub_admisi_panel.tambah_mbkm_kompetisi')
                    </div>
                    <table class="table table-bordered text-center table-striped align-middle">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Jumlah SKS</th>
                            <th>Potongan SPP</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach($dataKompetisi as $e)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $e->jumlah_sks }}</td>
                                <td>{{ $e->potongan_spp }}</td>
                                <td style="width: 180px; max-width: 180px">
                                    <div class="d-flex justify-content-center w-100 gap-2">
                                        <form action="{{ route('removeMbkm') }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $e->id }}">
                                            <button class="btn btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <span class="fs-3">Manage Infografis</span>
                </div>

                <div class="card-body">
                    <div id="jalur-pendaftaran" class="border border-1 w-100 p-3">
                        <ul class="nav nav-fill nav-pills" id="jalur-pendaftaran-Tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pmdk-tab" data-bs-toggle="tab"
                                        data-bs-target="#pmdk-tab-pane"
                                        type="button" role="tab" aria-controls="pmdk-tab-pane" aria-selected="true">
                                    PMDK
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="usm-tab" data-bs-toggle="tab"
                                        data-bs-target="#usm-tab-pane" type="button"
                                        role="tab" aria-controls="usm-tab-pane" aria-selected="false">
                                    USM
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="utbk-tab" data-bs-toggle="tab"
                                        data-bs-target="#utbk-tab-pane"
                                        type="button" role="tab" aria-controls="utbk-tab-pane" aria-selected="false">
                                    UTBK
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content" id="jenis-pendaftaran-TabContent">
                            <div class="tab-pane fade show active" id="pmdk-tab-pane" role="tabpanel"
                                 aria-labelledby="pmdk-tab"
                                 tabindex="0">
                                <div class="p-3 border border-1 mt-3">
                                    <!-- Button trigger modal -->
                                    <div class="d-flex justify-content-end mb-3">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#tambahInfografisPMDK">
                                            Tambah
                                        </button>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="tambahInfografisPMDK" tabindex="-1"
                                         aria-labelledby="tambahInfografisPMDKLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5 fw-semibold"
                                                        id="tambahInfografisPMDKLabel">Tambah Infografis PMDK</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <form action="{{ url('/api/add-infografis-pmdk') }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label class="form-label w-100">
                                                                Nomor Urut
                                                                <input class="form-control"  type="number"
                                                                       name="nomor_urut">
                                                                @error('nomor_urut')
                                                                <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </label>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label w-100">
                                                                File Gambar
                                                                <input class="form-control" type="file" name="gambar">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close
                                                        </button>
                                                        <button type="submit" class="btn btn-primary">Save changes
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered align-middle text-center">
                                        <thead>
                                        <tr>
                                            <th>No Urut</th>
                                            <th>Gambar</th>
                                            <th>Jalur Masuk</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($dataInfografis[0] as $e)
                                            <tr>
                                                <td>{{ $e->nomor_urut }}</td>
                                                <td>
                                                    <img style="width: 12rem" src="{{ asset($e->gambar) }}" alt="">
                                                </td>
                                                <td>{{ $e->jalur }}</td>
                                                <td></td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="usm-tab-pane" role="tabpanel"
                                 aria-labelledby="usm-tab"
                                 tabindex="0">
                                <div class="p-3 border border-1 mt-3">
                                    <!-- Button trigger modal -->
                                    <div class="d-flex justify-content-end mb-3">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#tambahInfografisUSM">
                                            Tambah
                                        </button>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="tambahInfografisUSM" tabindex="-1"
                                         aria-labelledby="tambahInfografisUSMLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah
                                                        Infografis USM</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="form-label w-100">
                                                            Nomor Urut
                                                            <input class="form-control" type="number" name="nomor_urut">
                                                        </label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label w-100">
                                                            File Gambar
                                                            <input class="form-control" type="file" name="gambar">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered align-middle text-center">
                                        <thead>
                                        <tr>
                                            <th>No Urut</th>
                                            <th>Gambar</th>
                                            <th>Jalur Masuk</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($dataInfografis[1] as $e)
                                            <tr>
                                                <td>{{ $e->nomor_urut }}</td>
                                                <td>
                                                    <img style="width: 12rem" src="{{ asset($e->gambar) }}" alt="">
                                                </td>
                                                <td>{{ $e->jalur }}</td>
                                                <td></td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane fade   " id="utbk-tab-pane" role="tabpanel"
                                 aria-labelledby="utbk-tab"
                                 tabindex="0">
                                <div class="p-3 border border-1 mt-3">
                                    <!-- Button trigger modal -->
                                    <div class="d-flex justify-content-end mb-3">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#tambahInfografisUTBK">
                                            Tambah
                                        </button>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="tambahInfografisUTBK" tabindex="-1"
                                         aria-labelledby="tambahInfografisUTBKLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah
                                                        Infografis UTBK</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="form-label w-100">
                                                            Nomor Urut
                                                            <input class="form-control" type="number" name="nomor_urut">
                                                        </label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label w-100">
                                                            File Gambar
                                                            <input class="form-control" type="file" name="gambar">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered align-middle text-center">
                                        <thead>
                                        <tr>
                                            <th>No Urut</th>
                                            <th>Gambar</th>
                                            <th>Jalur Masuk</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($dataInfografis[2] as $e)
                                            <tr>
                                                <td>{{ $e->nomor_urut }}</td>
                                                <td>
                                                    <img style="width: 12rem" src="{{ asset($e->gambar) }}" alt="">
                                                </td>
                                                <td>{{ $e->jalur }}</td>
                                                <td></td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
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

        <div class="mt-3">
            <div class="card card-success">
                <div class="card-header bg-primary text-white">
                    <span class="fs-3">Jalur Pendaftaran</span>

                </div>

                <div class="card-body">
                    @include('admin-panel.sub_admisi_panel.add_persyaratan_umum')
                    <form action="">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Jalur Pendaftaran</th>
                                <th scope="col">Deskripsi Persyaratan Umum</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i = 1;
                            @endphp
                            {{--                            @foreach($jalur as $e)--}}
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$e->jalurPendaftaran}}</td>
                                <td>{{$e->desk_pers_umum}}t</td>
                                <td>
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#edit_persum_modal{{ $e->id }}"
                                            title="Edit Persyaratan Umum"><i class="bi bi-pen"></i></button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="edit_persum_modal{{ $e->id }}" tabindex="-1"
                                         aria-labelledby="edit_persum_modal_label{{ $e->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5 fw-semibold"
                                                        id="edit_persum_modal_label{{ $e->id }}">Edit Social Media</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('editJalur') }}" method="post"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body text-start">
                                                        <input type="hidden" name="id" value="{{ $e -> id }}">
                                                        <div class="mb-3">
                                                            <label class="form-label"
                                                                   for="input_edit_JalurPendaftaran{{$e->id}}">Jalur
                                                                Pendaftaran</label>
                                                            <input type="text" class="form-control"
                                                                   id="input_edit_JalurPendaftaran{{$e->id}}"
                                                                   name="input_Jalur"
                                                                   value="{{ $e->jalurPendaftaran }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="input_edit_deskUmum{{$e->id}}"
                                                                   class="form-label">Link</label>
                                                            <input type="text" class="form-control"
                                                                   id="input_edit_deskUmum{{$e->id}}"
                                                                   name="input_deskUmum"
                                                                   value="{{ $e->desk_pers_umum }}">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancel
                                                        </button>
                                                        <input type="hidden" value="{{ $e->id }}" name="id">
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <form action="{{ route('removeJalur') }}" class="d-inline" method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{ $e->id }}">
                                        <button class="btn btn-danger" title="Remove Jalur Pendaftaran">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            {{--                            @endforeach--}}
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>

        <!-- KELOMPOK 6 -->
        <div class="mt-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <span class="fs-3">Data Jenis Tes</span>
                </div>

                <div class="card-body">
                    @include('admin-panel.sub_admisi_panel.add_jenis_test')
                    <table class="table table-bordered text-center table-striped align-middle pt-3">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Gelombang</th>
                            <th>Jenis Test</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <span class="fs-3">Data Lokasi Tes</span>
                </div>

                <div class="card-body">
                    @include('admin-panel.sub_admisi_panel.add_lokasi')
                    <table class="table table-bordered text-center table-striped align-middle pt-3">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Lokasi</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php
                                $counter=1;
                            @endphp
                            @foreach($lokasi as $item)
                            <tr>
                                <td>{{ $counter++}}</td>
                                <td>{{ $item->lokasiTes }}</td>
                                <td>{{ $item->alamatLokasi}}</td>
                                <td>
                                    <button type="button" class="btn btn-warning"><i class="bi bi-pen"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
