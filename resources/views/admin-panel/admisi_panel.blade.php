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
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5 fw-semibold"
                                                        id="tambahInfografisPMDKLabel">Tambah Infografis PMDK</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <form method="post" enctype="multipart/form-data" action="{{ route('addInfografisPmdk') }}" >
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label class="form-label w-100">
                                                                Nomor Urut
                                                                <input class="form-control" type="number"
                                                                       name="nomor_urut">
{{--                                                                @error('nomor_urut')--}}
{{--                                                                <span class="text-danger">{{ $message }}</span>--}}
{{--                                                                @enderror--}}
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
                                                <td>
                                                    <form action="{{ route('removeInfografis') }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" value="{{ $e->id }}" name="id">
                                                        <button class="btn btn-danger">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
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
                                                <form action="{{ route('addInfografisUsm') }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label class="form-label w-100">
                                                                Nomor Urut
                                                                <input class="form-control" min="1" value="1" type="number" name="nomor_urut">
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
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
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
                                        @foreach($dataInfografis[1] as $e)
                                            <tr>
                                                <td>{{ $e->nomor_urut }}</td>
                                                <td>
                                                    <img style="width: 12rem" src="{{ asset($e->gambar) }}" alt="">
                                                </td>
                                                <td>{{ $e->jalur }}</td>
                                                <td>
                                                    <form action="{{ route('removeInfografis') }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" value="{{ $e->id }}" name="id">
                                                        <button class="btn btn-danger">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane fade " id="utbk-tab-pane" role="tabpanel"
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
                                                <form action="{{ route('addInfografisUtbk') }}" method="post" enctype="multipart/form-data">
                                                    @csrf
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
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
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
                                        @foreach($dataInfografis[2] as $e)
                                            <tr>
                                                <td>{{ $e->nomor_urut }}</td>
                                                <td>
                                                    <img style="width: 12rem" src="{{ asset($e->gambar) }}" alt="">
                                                </td>
                                                <td>{{ $e->jalur }}</td>
                                                <td>
                                                    <form action="{{ route('removeInfografis') }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" value="{{ $e->id }}" name="id">
                                                        <button class="btn btn-danger">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
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
{{--                                                <form action="{{ route('editJalur') }}" method="post"--}}
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
{{--                                                </form>--}}
                                            </div>
                                        </div>
                                    </div>

{{--                                    <form action="{{ route('removeJalur') }}" class="d-inline" method="post"--}}
                                          enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{ $e->id }}">
                                        <button class="btn btn-danger" title="Remove Jalur Pendaftaran">
                                            <i class="bi bi-trash"></i>
                                        </button>
{{--                                    </form>--}}
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
                            @php
                                $counter = 1;
                            @endphp
                            @foreach($jenis as $item)
                            <tr>
                                <td>{{ $counter++}}</td>
                                <td>{{ $item->gelombang}}</td>
                                <td>{{ $item->jenisUjian}}</td>
                                <td style="min-width: 120px; width: 120px">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                    <button class="btn btn-warning"
                                    onclick="showModalEditJenis({{$item->id}}, '{{ $item->gelombang }}', '{{ $item->jenisUjian}}')">
                                    <i class="bi bi-pen"></i></button>
                                    <form action="{{ route('post.destroy.jenis', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
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
                                <td style="min-width: 120px; width: 120px">
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                                        <button class="btn btn-warning"
                                                onclick="showModalEditLokasi({{$item->id}}, '{{ $item->lokasiTes }}', '{{ $item->alamatLokasi}}')">
                                            <i class="bi bi-pen"></i>
                                        </button>
                                        <form action="{{ route('post.destroy.lokasi', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- MODAL EDIT Lokasi -->
                    <div class="modal fade" id="editLokasi" tabindex="-1" aria-labelledby="editLokasiLabel">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editLokasiLabel">Ubah Data Lokasi</h5>
                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('post.lokasi.edit') }}" method="POST">
                                    @csrf
                                    <input name="id" type="hidden" id="inputEditLokasi">

                                    <div class="modal-body">

                                        <div class="mb-3">
                                            <label for="inputLokasi" class="form-label">Nama Lokasi</label>
                                            <input type="text" class="form-control" id="inputLokasi" name="lokasiTes">
                                        </div>

                                        <div class="mb-3">
                                            <label for="inputAlamatLokasi" class="form-label">Alamat Lokasi</label>
                                            <input type="text" class="form-control" id="inputAlamatLokasi" name="alamatLokasi">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- AKHIR MODAL EDIT -->

                    <!-- MODAL EDIT JENIS -->
                    <div class="modal fade" id="editJenis" tabindex="-1" aria-labelledby="editJenisLabel">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editJenisLabel">Ubah Data Jenis Tes</h5>
                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('post.jenis.edit') }}" method="POST">
                                    @csrf
                                    <input name="id" type="hidden" id="inputEditJenis">

                                    <div class="modal-body">

                                        <div class="mb-3">
                                            <label for="inputEditGelombang" class="form-label">Gelombang</label>
                                            <select class="form-select" id="inputEditGelombang" name="gelombang">
                                                <option value="PMDK">PMDK</option>
                                                <option value="USM 1">USM 1</option>
                                                <option value="USM 2">USM 2</option>
                                                <option value="USM 3">USM 3</option>
                                                <option value="USM 4">USM 4</option>
                                                <option value="UTBK">UTBK</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="jenisUjian" class="form-label">Jenis Tes</label>
                                            <input type="text" class="form-control" id="jenisUjian" name="jenisUjian">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- AKHIR MODAL EDIT -->

                </div>
            </div>
        </div>

        <div class="mt-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <span class="fs-3">Jadwal Ujian</span>
                </div>

                <div class="card-body">
                    <div class="d-flex justify-content-end mb-3">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahJenisTest">
                            Tambah
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="tambahJenisTest" tabindex="-1" aria-labelledby="tambahJenisTestLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Tambah Jenis Test</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('addJadwalUjian') }}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <label class="form-label w-100">
                                                Jalur Ujian
                                                <input type="text" class="form-control" name="jalur_ujian">
                                            </label>
                                            <label class="form-label w-100">
                                                Tahun Akademik
                                                <input type="text" class="form-control" name="tahun_akademik">
                                            </label>
                                            <label class="form-label w-100">
                                                Deskripsi
                                                <textarea id="summernote" class="form-control" rows="6" name="deskripsi"></textarea>
                                            </label>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table table-striped table-bordered align-middle text-center">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Jalur Ujian</th>
                            <th>Tahun Akademik</th>
                            <th>Deskripsi Jalur Ujian</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @forelse($dataJadwalUjian as $e)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $e->jalur_ujian }}</td>
                                <td>{{ $e->tahun_akademik }}</td>
                                <td>
                                    <div class="text-start">
                                        {!! $e->deskripsi !!}
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center gap-1">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editJadwalUjianModal">
                                            <i class="bi bi-pen"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="editJadwalUjianModal" tabindex="-1" aria-labelledby="editJadwalUjianModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Jadwal Ujian</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="{{ route('editJadwalUjian') }}" method="post">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <label class="form-label w-100 text-start mb-3">
                                                                Jalur Masuk
                                                                <input type="text" name="jalurUjian" class="form-control" value="{{ $e->jalur_ujian }}">
                                                            </label>

                                                            <label class="form-label w-100 text-start mb-3">
                                                                Tahun Akademik
                                                                <input type="text" name="tahunAkademik" class="form-control" value="{{ $e->tahun_akademik }}">
                                                            </label>

                                                            <label class="form-label w-100 text-start mb-3">
                                                                Deskripsi
                                                                <textarea name="deskripsi" id="summernoteEditJadwalUjian"> {{ $e->deskripsi }} </textarea>
                                                            </label>
                                                            <input type="hidden" name="id" value="{{ $e->id }}">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="{{ route('removeJadwalUjian') }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $e->id }}">
                                            <button type="submit" class="btn btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">
                                    <span class="fs-2">Tidak ada data</span>
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showModalEditLokasi(id, lokasiTes, alamatLokasi)
        {
            const modalEditLokasi = document.getElementById("editLokasi");
            const inputId = document.getElementById("inputEditLokasi");
            const inputLokasi = document.getElementById("inputLokasi");
            const inputAlamat = document.getElementById("inputAlamatLokasi");

            inputId.value = id;
            inputLokasi.value = lokasiTes;
            inputAlamat.value = alamatLokasi;

            const myModal = new bootstrap.Modal(modalEditLokasi)
            myModal.show();
        }

        function showModalEditJenis(id, gelombang, jenisUjian) {
            const modalEditJenis = document.getElementById("editJenis");
            const inputId = document.getElementById("inputEditJenis");
            const inputGelombang = document.getElementById("inputEditGelombang");  // Match the case here
            const inputJenis = document.getElementById("jenisUjian");  // Match the case here

            inputId.value = id;
            inputGelombang.value = gelombang;
            inputJenis.value = jenisUjian;

            const myModal = new bootstrap.Modal(modalEditJenis);
            myModal.show();
        }

    </script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                maxHeight: 250,
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#summernoteEditJadwalUjian').summernote({
                maxHeight: 250,
            });
        });
    </script>
@endsection
