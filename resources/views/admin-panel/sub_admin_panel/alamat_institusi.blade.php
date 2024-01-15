<div id="item-5" class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <span class="fs-5">Alamat Institusi</span>
    </div>
    <div class="card-body d-flex flex-column">
        @include('admin-panel.sub_admin_panel.tambah_alamat_modal')
        <div>
            <table class="align-middle text-center table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i = 1;
                @endphp

                @forelse($dataAlamat as $e)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $e -> nama }}</td>
                        <td>{{ $e -> alamat }}</td>
                        <td style="min-width: 180px; width: 180px">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#info-sosmed{{ $e->id }}" title="info-sosmed">
                                <i class="bi bi-info-circle"></i>
                            </button>

                            <div class="modal fade" id="info-sosmed{{ $e->id }}" tabindex="-1"
                                 aria-labelledby="info-sosmed-label{{ $e->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5 fw-semibold" id="info-sosmed-label{{ $e->id }}">
                                                Info Alamat Institusi</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        @csrf
                                        <div class="modal-body text-start">
                                            <input type="hidden" name="id" value="{{ $e -> id }}">
                                            <div class="mb-3">
                                                <label  class="form-label w-100">
                                                    Nama
                                                    <input type="text" class="form-control"
                                                           value="{{ $e->nama }}" disabled>
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label w-100">
                                                    Alamat
                                                    <input value="{{ $e->alamat }}" class="form-control" disabled>
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label w-100">
                                                    Created By
                                                    <input value="{{ $e->created_by }}" class="form-control" disabled>
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label w-100">
                                                    Updated By
                                                    <input value="{{ $e->updated_by }}" class="form-control" disabled>
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label w-100">
                                                    Created At
                                                    <input value="{{ $e->created_at }}" class="form-control" disabled>
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
                                                    data-bs-dismiss="modal">Cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#edit_alamat_modal{{ $e->id }}" title="gas">
                                <i class="bi bi-pen"></i>
                            </button>

                            <div class="modal fade" id="edit_alamat_modal{{ $e->id }}" tabindex="-1"
                                 aria-labelledby="edit_alamat_label{{ $e->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5 fw-semibold"
                                                id="edit_alamat_modal_label{{ $e->id }}">Edit Alamat</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('editAlamat') }}" method="post">
                                            @csrf
                                            <div class="modal-body text-start">
                                                <input type="hidden" name="id" value="{{ $e -> id }}">
                                                <div class="mb-3">
                                                    <label for="input_edit_nama_alamat{{$e->id}}"
                                                           class="form-label">Nama</label>
                                                    <a tabindex="0" class="border-0 bg-white" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="Max length 50 characters."><i class="bi bi-info-circle"></i></a>
                                                    <input type="text" class="form-control"
                                                           id="input_edit_nama_alamat{{$e->id}}"
                                                           name="input_nama_alamat" value="{{ $e->nama }}" required>
                                                    @error('input_nama_alamat')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_edit_alamat{{$e->id}}"
                                                           class="form-label">Alamat</label>
                                                    <a tabindex="0" class="border-0 bg-white" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="Max length 150 characters."><i class="bi bi-info-circle"></i></a>
                                                    <input type="text" class="form-control"
                                                           id="input_edit_alamat{{$e->id}}" name="input_alamat"
                                                           value="{{ $e->alamat }}" required>
                                                    @error('input_alamat')
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

                            <form action="{{ route('removeAlamat') }}" class="d-inline" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $e -> id }}">
                                <button class="btn btn-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">
                            <span class="fs-2">Tidak ada data!</span>
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
