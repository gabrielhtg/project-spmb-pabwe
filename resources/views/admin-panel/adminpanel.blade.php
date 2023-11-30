@extends('template.admin-panel-template')

@section('isi-admin-panel')

    <div class="container-fluid p-3">
        <div class="d-flex w-100">
            <div class="w-100">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2 d-flex gap-3 flex-column justify-content-center" tabindex="0">
                    <div id="item-1" class="card">
                        <div class="card-header bg-primary text-white">
                            <span class="fs-5">Data Institut</span>
                        </div>

                        <form>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="input_nama_institusi" class="form-label">Nama Institusi</label>
                                    <input type="text" class="form-control" id="input_nama_institusi" name="input_nama_institusi">
                                </div>
                                <div class="mb-3">
                                    <label for="input_akreditasi_institusi_singkat" class="form-label">Akreditasi Insitusi (Singkat)</label>
                                    <input type="text" class="form-control" id="input_akreditasi_institusi_singkat" name="input_akreditasi_institusi_singkat">
                                </div>
                                <div class="mb-3">
                                    <label for="input_akreditasi_institusi_lengkap" class="form-label">Akreditasi Insitusi (Lengkap)</label>
                                    <input type="text" class="form-control" id="input_akreditasi_institusi_lengkap" name="input_akreditasi_institusi_lengkap">
                                </div>
                                <div class="mb-3">
                                    <label for="input_link_pendaftaran" class="form-label">Jargon Institusi</label>
                                    <input type="text" class="form-control" id="input_link_pendaftaran" name="input_link_pendaftaran">
                                </div>
                                <div class="mb-3">
                                    <label for="input_jumlah_dosen" class="form-label">Jumlah Dosen</label>
                                    <input type="text" class="form-control" id="input_jumlah_dosen" name="input_jumlah_dosen">
                                </div>
                                <div class="mb-3">
                                    <label for="input_jumlah_mahasiswa" class="form-label">Jumlah Mahasiswa</label>
                                    <input type="text" class="form-control" id="input_jumlah_mahasiswa" name="input_jumlah_mahasiswa">
                                </div>
                                <div class="mb-3">
                                    <label for="input_jumlah_alumni" class="form-label">Jumlah Alumni</label>
                                    <input type="text" class="form-control" id="input_jumlah_alumni" name="input_jumlah_alumni">
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Logo Institusi</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                    <div id="item-2" class="card">
                        <div class="card-header bg-primary text-white">
                            <span class="fs-5">Social Media Institusi</span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            @include('admin-panel.sub_admin_panel.tambah_social_media_hero_section')
                            <form action="">
                                <table class="table text-center align-middle table-striped table-bordered">
                                    <thead class="align-middle">
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
                                        <td style="min-width: 120px; width: 120px">
                                            <button class="btn btn-success">
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

                    <div id="item-3" class="card">
                        <div class="card-header bg-primary text-white">
                            <span class="fs-5">Hero Section</span>
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

                            @include('admin-panel.sub_admin_panel.tambah_tombol_hero_section')
                            <form action="">
                                <table class="table table-striped table-bordered">
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
                                        <td style="min-width: 120px; width: 120px">
                                            <button class="btn btn-success">
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
                </div>
            </div>

            <div class="d-none d-md-inline" style="width: 18rem; min-width: 18rem"></div>

            <div class="d-none d-md-inline position-fixed end-0" style="width: 18rem; min-width: 18rem">
                <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-start">
                    <nav class="nav nav-pills flex-column ps-3">
                        <a class="nav-link" href="#item-1">Data Institut</a>
                        <a class="nav-link" href="#item-2">Social Media</a>
                        <a class="nav-link" href="#item-3">Hero Section</a>
                    </nav>
                </nav>
            </div>
        </div>
    </div>
@endsection
