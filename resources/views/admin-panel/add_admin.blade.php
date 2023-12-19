@extends('template.admin-panel-template')

@section('isi-admin-panel')
{{--    <div class="toast-container position-fixed bottom-0 end-0 p-3">--}}
{{--        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">--}}
{{--            <div class="toast-header bg-success text-white">--}}
{{--                <i class="bi bi-check2-circle me-2"></i>--}}
{{--                <strong class="me-auto">Bootstrap</strong>--}}
{{--                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>--}}
{{--            </div>--}}
{{--            <div class="toast-body">--}}
{{--                Hello, world! This is a toast message.--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <section id="tambah-admin" class="container-fluid p-3">

        <!-- Button trigger modal -->
        <div class="d-flex justify-content-end w-100 mb-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Admin</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                        <div class="modal-body">
                            <form id="myForm" action="{{ route('add-admin') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $admin->id }}">
                                <label class="form-label w-100 mb-3 ">
                                    Username
                                    <input type="text" class="form-control" name="username" required>
                                    @error('username')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </label>
                                <label class="form-label w-100 mb-3 ">
                                    Password
                                    <input type="password" class="form-control" name="password" required>
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </label>
                                <label class="form-label w-100 mb-3 ">
                                    Firstname
                                    <input type="text" class="form-control" name="firstname" required>
                                    @error('firstname')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </label>
                                <label class="form-label w-100 mb-3 ">
                                    Lastname
                                    <input type="text" class="form-control" name="lastname" required>
                                    @error('lastname')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </label>
                                <label class="form-label w-100">
                                    Foto Profil
                                    <input type="file" class="form-control" name="profile_pict">
                                    @error('profile_pict')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </label>
                            </form>
                         </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" form="myForm" class="btn btn-primary">Save changes</button>
                        </div>
                </div>
            </div>
        </div>

        <table class="table table-bordered table-striped align-middle text-center">
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
                    <td>{{ $e->created_at }}</td>
                    <td style="min-width: 120px; width: 120px">
                        <div class="d-flex justify-content-center gap-2">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#info-admin{{ $e->id }}">
                                <i class="bi bi-info-circle"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="info-admin{{ $e->id }}" tabindex="-1" aria-labelledby="info-admin-label{{ $e->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
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

                            @if($admin->master_admin === 1)
                                <form action="{{ route('remove-admin') }}" class="d-inline" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $e -> id }}">
                                    <button class="btn btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            @endif
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>

{{--    <script>--}}
{{--        const toastLiveExample = document.getElementById('liveToast')--}}
{{--        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)--}}
{{--        toastBootstrap.show()--}}
{{--    </script>--}}
@endsection

