@extends('template.admin-panel-template')

@section('isi-admin-panel')

    <div class="container-fluid p-3">
        <div class="row">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <span class="fs-3">Navbar</span>
                    </div>

                    <form>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="input_judul_navbar">Judul Navbar</label>
                                <input type="text" class="form-control" id="input_judul_navbar" name="input_judul_navbar">
                            </div>
                            <div class="mb-3">
                                <label for="input_jargon_navbar">Jargon Navbar</label>
                                <input type="text" class="form-control" id="input_jargon_navbar" name="input_jargon_navbar">
                            </div>
                            <div class="mb-3">
                                <label for="input_link_pendaftaran">Link Pendaftaran</label>
                                <input type="text" class="form-control" id="input_link_pendaftaran" name="input_link_pendaftaran">
                            </div>
                            <div class="">
                                <label for="input_file_akreditasi" class="form-label">Sertifikat Akreditasi Institusi (JPG, JPEG, PNG)</label>
                                <input class="form-control" type="file" id="input_file_akreditasi">
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
                    <div class="card-header">
                        <h3 class="card-title">Different Height</h3>
                    </div>
                    <div class="card-body">
                        <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                        <br>
                        <input class="form-control" type="text" placeholder="Default input">
                        <br>
                        <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
