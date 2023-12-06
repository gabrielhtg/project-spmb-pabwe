@extends('template.admin-panel-template')

@section('isi-admin-panel')
    <section id="tambah-admin" class="container-fluid p-3">

        <div class="d-flex justify-content-end mb-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#tambah-admin-modal" title="tambah-admin">
                <span><i class="bi bi-plus-circle me-1"></i></span> Tambah Admin
            </button>

            <div class="modal fade" id="tambah-admin-modal" tabindex="-1"
                 aria-labelledby="tambah-admin-label" aria-hidden="true">
                <div class="modal-dialog modal modal-dialog-scrollable modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 fw-semibold" id="tambah-admin-label">
                                Tambah Admin
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <form action="{{ route('add-admin') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body text-start">
                                    <label class="form-label w-100 mb-3 ">
                                        Username
                                        <input type="text" class="form-control" name="username">
                                    </label>
                                    <label class="form-label w-100 mb-3 ">
                                        Password
                                        <input type="password" class="form-control" name="password">
                                    </label>
                                    <label class="form-label w-100 mb-3 ">
                                        Firstname
                                        <input type="text" class="form-control" name="firstname">
                                    </label>
                                    <label class="form-label w-100 mb-3 ">
                                        Lastname
                                        <input type="text" class="form-control" name="lastname">
                                    </label>
                                    <label class="form-label w-100">
                                        Foto Profil
                                        <input type="file" class="form-control" name="profile_pict">
                                    </label>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @php
                $i = 1;
            @endphp
            @foreach($admins as $e)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $e->firstname . " " . $e->lastname }}</td>
                    <td>{{ $e->username }}</td>
                    <td>{{ date("d-m-Y", strtotime($e->created_at)) }}</td>
                    <td style="min-width: 180px; width: 180px">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#info-admin{{ $e->id }}" title="info-admin">
                            <i class="bi bi-info-circle"></i>
                        </button>

                        <div class="modal fade" id="info-admin{{ $e->id }}" tabindex="-1"
                             aria-labelledby="info-admin-label{{ $e->id }}" aria-hidden="true">
                            <div class="modal-dialog modal modal-dialog-scrollable modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 fw-semibold" id="info-sosmed-label{{ $e->id }}">
                                            {{ 'Informasi ' . $e->firstname }}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-start">
                                        <div class="w-100 d-flex justify-content-center">
                                            <img class="border border-primary border-2"
                                                 src="{{ $e->profile_pict ? asset($e->profile_pict) : asset("assets/img/admin/default.png") }}"
                                                 style="border-radius: 50%; width: 150px; height: 150px;"
                                                 alt="foto-profil">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label w-100">
                                                Username
                                                <input type="text" class="form-control"
                                                       value="{{ $e->username }}" disabled>
                                            </label>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label w-100">
                                                Firstname
                                                <input type="text" class="form-control"
                                                       value="{{ $e->firstname }}" disabled>
                                            </label>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label w-100">
                                                Lastname
                                                <input type="text" class="form-control" disabled
                                                       value="{{ $e->lastname }}">
                                            </label>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label w-100">
                                                Created By
                                                <input type="text" class="form-control" disabled
                                                       value="{{ $e->created_by }}">
                                            </label>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label w-100">
                                                Created At
                                                <input type="text" class="form-control" disabled
                                                       value="{{ $e->created_at }}">
                                            </label>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label w-100">
                                                Updated At
                                                <input type="text" class="form-control" disabled
                                                       value="{{ $e->updated_at }}">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form action="{{ route('remove-admin') }}" class="d-inline" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" value="{{ $e -> id }}">
                            <button class="btn btn-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection

