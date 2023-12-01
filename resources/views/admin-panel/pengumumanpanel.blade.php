@extends('template.admin-panel-template')

@section('isi-admin-panel')

<div class="container-fluid p-3">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <span class="fs-3">Data pengumuman</span>
        </div>
        <div class="p-3">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <a href="{{ route('get.add-pengumuman') }}">
                <button class="btn btn-primary">Tambah pengumuman</button>
            </a>

            <div class="input-group mb-3" style="width: 300px;">
                <input type="text" class="form-control" placeholder="cari pengumuman" aria-label="cari pengumuman" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Cari</button>
                </div>
            </div>
        </div>


        <div class="pt-3">
                <table class="table table-striped table-bordered">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tag</th>
                        <th scope="col">Judul Pengumuman</th>
                        <th scope="col">File</th>
                        <th scope="col">Created by</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
          </div>
    </div>
    


</div> 

@endsection