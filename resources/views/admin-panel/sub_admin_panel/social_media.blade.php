<div id="item-3" class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <span class="fs-5">Social Media Institusi</span>
    </div>
    <div class="card-body d-flex flex-column">
        @include('admin-panel.sub_admin_panel.tambah_social_media_hero_section')
        <div class="overflow-x-auto">
            <table
                class="table text-center align-middle table-striped table-bordered overflow-x-auto">
                <thead class="align-middle">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Link</th>
                    <th scope="col">Icon Social Media</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach($socialMedia as $e)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $e->nama }}</td>
                        <td><a href="{{ $e->link }}">Klik Disini</a></td>
                        <td>{{ $e->icon }}</td>
                        <td class="" style="min-width: 180px; width: 180px">
                            <button class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#info-social-media-modal{{ $e->id }}" title="gas">
                                <i class="bi bi-info-circle"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="info-social-media-modal{{ $e->id }}" tabindex="-1"
                                 aria-labelledby="info-social-media-label{{ $e->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5 fw-semibold"
                                                id="info-social-media-label{{ $e->id }}">Edit Social Media</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                            <div class="modal-body text-start">
                                                <input type="hidden" name="id" value="{{ $e -> id }}">
                                                <div class="mb-3">
                                                    <label class="form-label">Nama</label>
                                                    <input type="text" class="form-control" value="{{ $e->nama }}" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Link</label>
                                                    <input type="text" class="form-control" value="{{ $e->link }}" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Icon</label>
                                                    <input type="text" class="form-control" value="{{ $e->icon }}" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Created By</label>
                                                    <input type="text" class="form-control" value="{{ $e->created_by }}" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Updated By</label>
                                                    <input type="text" class="form-control" value="{{ $e->updated_by }}" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Created At</label>
                                                    <input value="{{ date("d-m-Y", strtotime($e->created_at)) }}" class="form-control" disabled>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Updated At</label>
                                                    <input value="{{ date("d-m-Y", strtotime($e->updated_at)) }}" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#edit_social_media_modal{{ $e->id }}" title="gas">
                                <i class="bi bi-pen"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="edit_social_media_modal{{ $e->id }}" tabindex="-1"
                                 aria-labelledby="edit_social_media_label{{ $e->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5 fw-semibold"
                                                id="edit_alamat_modal_label{{ $e->id }}">Edit Social Media</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <form action="{{ url('/api/edit-alamat') }}" method="post">
                                            @csrf
                                            <div class="modal-body text-start">
                                                <input type="hidden" name="id" value="{{ $e -> id }}">
                                                <div class="mb-3">
                                                    <label class="form-label"
                                                           for="input_edit_nama_socialmedia{{$e->id}}">Nama</label>
                                                    <input type="text" class="form-control"
                                                           id="input_edit_nama_socialmedia{{$e->id}}"
                                                           name="input_nama_socialmedia" value="{{ $e->nama }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_edit_link_socialmedia{{$e->id}}"
                                                           class="form-label">Link</label>
                                                    <input type="text" class="form-control"
                                                           id="input_edit_link_socialmedia{{$e->id}}" name="input_link"
                                                           value="{{ $e->link }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_edit_icon_socialmedia{{$e->id}}"
                                                           class="form-label">Icon</label>
                                                    <input type="text" class="form-control"
                                                           id="input_edit_icon_socialmedia{{$e->id}}" name="input_icon"
                                                           value="{{ $e->icon }}">
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

                            <form action="{{ route('removeSocialMedia') }}" class="d-inline" method="post">
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
