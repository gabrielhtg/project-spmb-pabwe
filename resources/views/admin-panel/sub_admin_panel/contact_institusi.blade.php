<div id="item-6" class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <span class="fs-5">Contact Institusi</span>
    </div>
    <div class="card-body d-flex flex-column">
        @include('admin-panel.sub_admin_panel.tambah_phone_number_modal')
        <div>
            <table class="align-middle text-center table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach($dataNomorTelepon as $e)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $e -> nama }}</td>
                        <td>{{ $e -> nomor_telepon }}</td>
                        <td style="min-width: 180px; width: 180px">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#info-no{{ $e->id }}">
                                <i class="bi bi-info-circle"></i>
                            </button>

                            <div class="modal fade" id="info-no{{ $e->id }}" tabindex="-1"
                                 aria-labelledby="info-no-label{{ $e->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5 fw-semibold" id="info-sosmed-label{{ $e->id }}">
                                                Info Nomor Telepon
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-start">
                                            <input type="hidden" name="id" value="{{ $e -> id }}">
                                            <div class="mb-3">
                                                <label class="form-label w-100">
                                                    Nama
                                                    <input type="text" class="form-control" value="{{$e->nama}}" disabled>
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label w-100">
                                                    Nomor Telepon
                                                    <input type="text" class="form-control" value="{{$e->nomor_telepon}}" disabled>
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label w-100">
                                                    Created By
                                                    <input type="text" class="form-control" value="{{$e->created_by}}" disabled>
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label w-100">
                                                    Updated By
                                                    <input type="text" class="form-control" value="{{$e->updated_by}}" disabled>
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label w-100">
                                                    Created At
                                                    <input type="text" class="form-control" value="{{$e->created_at}}" disabled>
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label w-100">
                                                    Updated At
                                                    <input value="{{ date("d-m-Y", strtotime($e->updated_at)) }}" class="form-control" disabled>
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
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#editNomorTelepon{{ $e->id }}" title="gas">
                                <i class="bi bi-pen"></i>
                            </button>

                            <div class="modal fade" id="editNomorTelepon{{ $e->id }}" tabindex="-1"
                                 aria-labelledby="editNomorTeleponLabel{{ $e->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5 fw-semibold">
                                                Edit Nomor Telepon
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('editNomorTelepon') }}" method="post">
                                            @csrf
                                            <div class="modal-body text-start">
                                                <input type="hidden" name="id" value="{{ $e -> id }}">
                                                <div class="mb-3">
                                                    <label class="form-label">
                                                        Nama
                                                    </label>
                                                    <a tabindex="0" class="border-0 bg-white" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="Max length 20 characters."><i class="bi bi-info-circle"></i></a>
                                                    <input type="text" class="form-control"
                                                           id="editNamaNomorTelepon{{$e->id}}"
                                                           name="nama" value="{{ $e->nama }}" required>
                                                    @error('nama')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">
                                                        Nomor Telepon
                                                    </label>
                                                    <a tabindex="0" class="border-0 bg-white" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="Max length 15 characters."><i class="bi bi-info-circle"></i></a>
                                                    <input type="text" class="form-control"
                                                           id="editNomorTelepon{{$e->id}}" name="nomor_telepon"
                                                           value="{{ $e->nomor_telepon }}" required>
                                                    @error('nomor_telepon')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel
                                                </button>
                                                <input type="hidden" name="id" value="{{ $e -> id }}">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <form action="{{ route('removeNomorTelepon') }}" class="d-inline" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $e -> id }}">
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <hr>

        @include('admin-panel.sub_admin_panel.tambah_email_modal')
        <div>
            <table class="align-middle text-center table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach($dataEmail as $e)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $e -> nama }}</td>
                        <td>{{ $e -> email }}</td>
                        <td style="min-width: 180px; width: 180px">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#info-email{{ $e->id }}">
                                <i class="bi bi-info-circle"></i>
                            </button>

                            <div class="modal fade" id="info-email{{ $e->id }}" tabindex="-1"
                                 aria-labelledby="info-email-label{{ $e->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5 fw-semibold" id="info-sosmed-label{{ $e->id }}">
                                                Info Email</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-start">
                                            <input type="hidden" name="id" value="{{ $e -> id }}">
                                            <div class="mb-3">
                                                <label class="form-label w-100">
                                                    Nama
                                                    <input type="text" class="form-control" value="{{$e->nama}}" disabled>
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label w-100">
                                                    Email
                                                    <input type="text" class="form-control" value="{{$e->email}}" disabled>
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label w-100">
                                                    Created By
                                                    <input type="text" class="form-control" value="{{$e->created_by}}" disabled>
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label w-100">
                                                    Updated By
                                                    <input type="text" class="form-control" value="{{$e->updated_by}}" disabled>
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label w-100">
                                                    Created At
                                                    <input type="text" class="form-control" value="{{$e->created_at}}" disabled>
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label w-100">
                                                    Updated At
                                                    <input value="{{ $e->updated_at }}" class="form-control" disabled>
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
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#edit-email{{ $e->id }}" title="Edit Email">
                                <i class="bi bi-pen"></i>
                            </button>

                            <div class="modal fade" id="edit-email{{ $e->id }}" tabindex="-1"
                                 aria-labelledby="edit-email-label{{ $e->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5 fw-semibold"
                                                id="edit_alamat_modal_label{{ $e->id }}">Edit Email</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('editEmail') }}" method="post">
                                            @csrf
                                            <div class="modal-body text-start">
                                                <input type="hidden" name="id" value="{{ $e -> id }}">
                                                <div class="mb-3">
                                                    <label class="form-label">
                                                        Nama
                                                    </label>
                                                    <a tabindex="0" class="border-0 bg-white" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="Max length 20 characters."><i class="bi bi-info-circle"></i></a>
                                                    <input type="text" class="form-control" name="inputNamaEmail" value="{{ $e->nama }}">
                                                    @error('inputNamaEmail')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">
                                                        Email
                                                    </label>
                                                    <a tabindex="0" class="border-0 bg-white" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="Max length 50 characters."><i class="bi bi-info-circle"></i></a>
                                                    <input type="email" class="form-control" name="email"
                                                           value="{{ $e->email }}">
                                                    @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <form action="{{ route('removeEmail') }}" class="d-inline" method="post">
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
        </div>
    </div>
</div>
