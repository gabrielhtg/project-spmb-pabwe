@extends('template.admin-panel-template')

@section('isi-admin-panel')

    <div class="container-fluid p-3">
        <div class="row row-gap-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <span class="fs-3">Navbar</span>
                    </div>

                    <form>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="input_judul_navbar" class="form-label">Judul Navbar</label>
                                <input type="text" class="form-control" id="input_judul_navbar" name="input_judul_navbar">
                            </div>
                            <div class="mb-3">
                                <label for="input_jargon_navbar" class="form-label">Jargon Navbar</label>
                                <input type="text" class="form-control" id="input_jargon_navbar" name="input_jargon_navbar">
                            </div>
                            <div class="mb-3">
                                <label for="input_link_pendaftaran" class="form-label">Link Pendaftaran</label>
                                <input type="text" class="form-control" id="input_link_pendaftaran" name="input_link_pendaftaran">
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
