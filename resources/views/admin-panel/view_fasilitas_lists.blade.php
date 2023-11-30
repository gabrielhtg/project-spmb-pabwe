@extends('template.admin-panel-template')

@section('isi-admin-panel')

<div class="container-fluid p-3">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <span class="fs-3">Data Fasilitas</span>
        </div>
        <div class="p-3">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <a href="{{ route('get.add-fasilitas') }}">
                <button class="btn btn-primary">Tambah Fasilitas</button>
            </a>

            <div class="input-group mb-3" style="width: 300px;">
                <input type="text" class="form-control" placeholder="cari fasilitas" aria-label="cari fasilitas" aria-describedby="basic-addon2">
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
                        <th scope="col">Kategori</th>
                        <th scope="col">Nama Fasilitas</th>
                        <th scope="col">Deskripsi Gambar</th>
                        <th scope="col">File Gambar</th>
                        <th scope="col">Created by</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($fasilitas))
                            @php
                                $counter = 1;
                            @endphp
                            @foreach ($fasilitas as $item)
                                <tr>
                                <th>{{ $counter++ }}</th>
                                <td>{{ $item->kategori }}</td>
                                <td>{{ $item->nama_fasilitas }}</td>
                                <td>{{ $item->deskripsi_fasilitas}}</td>
                                <td>{{ $item->file_gambar}}</td>
                                <td>{{ $admin->firstname}}</td>
                                <td>{{ date('d F Y - H:i', strtotime($item->created_at)) }}</td>
                                <td>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button class="btn btn-warning">Edit</button>
                                        <form action="{{ route('post.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </div>
                                    </td>
                                </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="8" class="text-center text-muted">Belum ada data tersedia!</td>
                                </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection