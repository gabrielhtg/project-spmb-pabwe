@extends('template.admin-panel-template')

@section('isi-admin-panel')

    <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-danger text-white">
                <span class="me-2"><i class="bi bi-exclamation-triangle"></i></span>
                <strong class="me-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
    </div>

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

        <div class="d-flex justify-content-center gap-3 mt-4">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editProfileModal">
                Edit Profile
            </button>

            <!-- Modal -->
            <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
                <div class="modal-dialog">
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
                                               value="{{ $admin->username }}" name="username">
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label w-100">
                                        Firstname
                                        <input type="text" class="form-control"
                                               value="{{ $admin->firstname }}" name="firstname">
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label w-100">
                                        Lastname
                                        <input type="text" class="form-control"
                                               value="{{ $admin->lastname }}" name="lastname">
                                    </label>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label w-100">
                                        Foto Profil
                                        <input type="file" class="form-control" name="profile_pict">
                                    </label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
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
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label w-100">
                                        Password lama
                                        <input type="password" class="form-control" name="oldPassword">
                                    </label>
                                    @error('oldPassword')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="mb-3">
                                    <label class="form-label w-100">
                                        Password Baru
                                        <input type="password" class="form-control" name="newPassword">
                                    </label>
                                    @error('newPassword')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <label class="form-label w-100">
                                        Masukkan lagi Password Baru
                                        <input type="password" class="form-control" name="newRePassword">
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

            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                    data-bs-target="#hapus-profile-modal">
                Hapus Profil
            </button>

            <div class="modal fade" id="hapus-profile-modal" tabindex="-1" aria-labelledby="hapusProfileLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="hapusProfileLabel">Hapus Profil</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('remove-self') }}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body">
                                <label for="input-password-hapus-profil">Apakah kamu yakin untuk menghapus akunmu? <br> <br> Kalau ya,
                                    masukkan passwordmu disini untuk
                                    mengonfirmasi ini adalah kamu. <br> <br></label>
                                <input type="hidden" name="id" value="{{ $admin->id }}">
                                <input class="form-control" id="input-password-hapus-profil" type="password"
                                       name="verifikasi_password" placeholder="Password Kamu">
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
    </section>
@endsection