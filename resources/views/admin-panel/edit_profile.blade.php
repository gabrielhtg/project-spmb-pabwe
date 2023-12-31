@extends('template.admin-panel-template')

@section('isi-admin-panel')

    <section class="p-3">
        <div class="w-100 d-flex justify-content-center mt-5">
            <img class="border border-primary border-2"
                 src="{{ $admin->profile_pict ? asset($admin->profile_pict) : asset("assets/img/admin/default.png") }}"
                 style="border-radius: 50%; width: 150px; height: 150px;" alt="foto-profil">
        </div>

        <div class="d-flex justify-content-center mt-5">
            <table class="table" style="max-width: 600px">
                <tbody>
                <tr>
                    <td class="fw-semibold" style="max-width: 200px; width: 150px;">ID</td>
                    <td>: <span class="ms-3">{{ $admin->id }}</span></td>
                </tr>
                <tr>
                    <td class="fw-semibold">Nama Depan</td>
                    <td>: <span class="ms-3">{{ $admin->firstname }}</span></td>
                </tr>
                <tr>
                    <td class="fw-semibold">Nama Belakang</td>
                    <td>: <span class="ms-3">{{ $admin->lastname }}</span></td>
                </tr>
                <tr>
                    <td class="fw-semibold">Bergabung</td>
                    <td>: <span class="ms-3">{{ date("d-m-Y", strtotime($admin->created_at)) }}</span></td>
                </tr>
                </tbody>
            </table>
        </div>

        @if(Session::get('error'))
            <div class="w-100 d-flex justify-content-center">
                <div class="alert alert-danger" role="alert" style="width: 18rem">
                    {{ Session::get('error') }}
                </div>
            </div>
        @endif

        @if(Session::get('success'))
            <div class="w-100 d-flex justify-content-center">
                <div class="alert alert-success" role="alert" style="width: 18rem">
                    {{ Session::get('success') }}
                </div>
            </div>
        @endif

        <div class="d-flex justify-content-center gap-3 mt-4">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                Edit Profile
            </button>

            <!-- Modal -->
            <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 fw-semibold"> Edit Admin</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <form action="{{ route('edit-admin') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body text-start">
                                <div class="mb-3">
                                    <label class="form-label w-100">
                                        Username
                                        <input type="text" class="form-control"
                                               value="{{ $admin->username }}" name="username" required>
                                        @error('username')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label w-100">
                                        Firstname
                                        <input type="text" class="form-control"
                                               value="{{ $admin->firstname }}" name="firstname" required>
                                        @error('firstname')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label w-100">
                                        Lastname
                                        <input type="text" class="form-control"
                                               value="{{ $admin->lastname }}" name="lastname" required>
                                        @error('lastname')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label w-100">
                                        Foto Profil
                                        <input type="file" class="form-control" name="profile_pict">
                                        @error('profile_pict')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <input type="hidden" name="id" value="{{ $admin->id }}">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="edit-profile-modal" tabindex="-1" aria-labelledby="editProfileLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="editProfileLabel">Edit Profil</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                    data-bs-target="#ubah-password-modal">
                Ubah Password
            </button>

            <div class="modal fade" id="ubah-password-modal" tabindex="-1" aria-labelledby="ubahPasswordLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="ubahPasswordLabel">Ubah Password</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route("changeAdminPassword") }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $admin->id }}">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label w-100">
                                        Password lama
                                        <input type="password" class="form-control" name="oldPassword" required>
                                    </label>
                                    @error('oldPassword')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="mb-3">
                                    <label class="form-label w-100">
                                        Password Baru
                                        <input type="password" class="form-control" name="newPassword" required>
                                    </label>
                                    @error('newPassword')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <label class="form-label w-100">
                                        Masukkan lagi Password Baru
                                        <input type="password" class="form-control" name="newRePassword" required>
                                    </label>
                                    @error('newRePassword')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>

{{--            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"--}}
{{--                    data-bs-target="#hapus-profile-modal">--}}
{{--                Hapus Profil--}}
{{--            </button>--}}

{{--            <div class="modal fade" id="hapus-profile-modal" tabindex="-1" aria-labelledby="hapusProfileLabel"--}}
{{--                 aria-hidden="true">--}}
{{--                <div class="modal-dialog modal-dialog-centered">--}}
{{--                    <div class="modal-content">--}}
{{--                        <div class="modal-header">--}}
{{--                            <h1 class="modal-title fs-5" id="hapusProfileLabel">Hapus Profil</h1>--}}
{{--                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                        </div>--}}
{{--                        <form action="{{ route('remove-self') }}" method="post">--}}
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}
{{--                            <div class="modal-body">--}}
{{--                                <label for="input-password-hapus-profil">Apakah kamu yakin untuk menghapus akunmu? <br> <br> Kalau ya,--}}
{{--                                    masukkan passwordmu disini untuk--}}
{{--                                    mengonfirmasi ini adalah kamu. <br> <br></label>--}}
{{--                                <input class="form-control" id="input-password-hapus-profil" type="password"--}}
{{--                                       name="verifikasi_password" placeholder="Password Kamu">--}}
{{--                            </div>--}}
{{--                            <div class="modal-footer">--}}
{{--                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
{{--                                <button type="submit" class="btn btn-primary">Save changes</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>
@endsection

