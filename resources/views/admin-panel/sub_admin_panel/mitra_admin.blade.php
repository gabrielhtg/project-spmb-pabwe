<div id="item-7" class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <span class="fs-5">Tambah Mitra</span>
    </div>
    <div class="card-body d-flex flex-column">
        @include('admin-panel.sub_admin_panel.tambah_mitra_modal')
        <div>
            <table class="align-middle text-center table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Logo Mitra</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($dataMitra as $e)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $e->nama }}</td>
                            <td><img src="{{ asset($e->logo) }}" alt="logo" style="width: 5rem"></td>
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
                                                <h1 class="modal-title fs-5 fw-semibold"
                                                    id="info-sosmed-label{{ $e->id }}">
                                                    Mitra</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            @csrf
                                            <div class="modal-body text-start">
                                                <input type="hidden" name="id" value="{{ $e->id }}">
                                                <div class="mb-3">
                                                    <label for="input_edit_nama_mitra{{ $e->id }}"
                                                        class="form-label">Nama</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $e->nama }}" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Logo Mitra</label>
                                                    <input value="{{ $e->logo }}" class="form-control" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Created By</label>
                                                    <input value="{{ $e->created_by }}" class="form-control" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Updated By</label>
                                                    <input value="{{ $e->updated_by }}" class="form-control" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Created At</label>
                                                    <input value="{{ date('d-m-Y', strtotime($e->created_at)) }}"
                                                        class="form-control" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Updated At</label>
                                                    <input value="{{ date('d-m-Y', strtotime($e->updated_at)) }}"
                                                        class="form-control" disabled>
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
                                    data-bs-target="#edit_mitra_modal{{ $e->id }}" title="gas">
                                    <i class="bi bi-pen"></i>
                                </button>

                                <div class="modal fade" id="edit_mitra_modal{{ $e->id }}" tabindex="-1"
                                    aria-labelledby="edit_mitra_label{{ $e->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 fw-semibold"
                                                    id="edit_mitra_modal_label{{ $e->id }}">Edit Mitra</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="{{ url('/api/edit-mitra') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body text-start">
                                                    <input type="hidden" name="id" value="{{ $e->id }}">
                                                    <div class="mb-3">
                                                        <label for="input_edit_nama_mitra{{ $e->id }}"
                                                            class="form-label">Nama</label>
                                                        <input type="text" class="form-control"
                                                            id="input_edit_nama_mitra{{ $e->id }}"
                                                            name="input_nama_mitra" value="{{ $e->nama }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="input_edit_logo{{ $e->id }}"
                                                            class="form-label">Logo Mitra</label>
                                                        <input type="file" class="form-control"
                                                            id="input_edit_logo{{ $e->id }}" name="input_logo"
                                                            value="{{ $e->logo }}">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <form action="{{ route('removeMitra') }}" class="d-inline" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $e->id }}">
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
