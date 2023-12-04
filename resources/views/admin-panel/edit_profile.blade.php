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

        <div class="d-flex justify-content-center gap-3 mt-4">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                    data-bs-target="#edit-profile-modal">
                Edit Profil
            </button>

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
                        <div class="modal-body">
                            <label for="input-password-hapus-profil">Apakah kamu yakin untuk menghapus akunmu? Kalau ya,
                                masukkan passwordmu disini untuk
                                mengonfirmasi ini adalah kamu.</label>
                            <input class="form-control" id="input-password-hapus-profil" type="text"
                                   name="verifikasi-password" placeholder="Password Kamu">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

