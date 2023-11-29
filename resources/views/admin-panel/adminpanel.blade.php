@extends('template.admin-panel-template')

@section('isi-admin-panel')

    <div class="container-fluid p-3">
        <div class="row">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <span class="fs-3">Data Institusi</span>
                    </div>

                    <form>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="input_alamat">Alamat Institusi</label>
                                <input type="text" class="form-control" id="input_alamat">
                            </div>
                            <div class="mb-3">
                                <label for="input_akreditasi">Akreditasi Institusi</label>
                                <input type="text" class="form-control" id="input_akreditasi">
                            </div>
                            <div class="mb-3">
                                <label for="input_akreditasi">Website Institusi</label>
                                <input type="text" class="form-control" id="input_akreditasi">
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
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <span class="fs-3">Data Kontak Institusi</span>
                    </div>

                    <form>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="input_email_institusi">Email Institusi</label>
                                <input type="text" class="form-control" id="input_email_institusi" name="input_email_institusi">
                            </div>
                            <div class="mb-3">
                                <label for="input_no_telp">Nomor Telepon Institusi</label>
                                <input type="text" class="form-control" id="input_no_telp" name="input_no_telp">
                            </div>
                            <div class="mb-3">
                                <label for="input_ig">Instagram Institusi</label>
                                <input type="text" class="form-control" id="input_ig" name="input_ig">
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
