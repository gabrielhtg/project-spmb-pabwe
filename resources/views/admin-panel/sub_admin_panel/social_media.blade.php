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
                            <button class="btn btn-primary" data-bs-toggle="modal" title="Info Social Media"
                                    data-bs-target="#info-social-media-modal{{ $e->id }}">
                                <i class="bi bi-info-circle"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="info-social-media-modal{{ $e->id }}" tabindex="-1"
                                 aria-labelledby="info-social-media-label{{ $e->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5 fw-semibold"
                                                id="info-social-media-label{{ $e->id }}">Info Social Media</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                            <div class="modal-body text-start">
                                                <input type="hidden" name="id" value="{{ $e -> id }}">
                                                <div class="mb-3">
                                                    <label class="form-label w-100">
                                                        Nama
                                                        <input type="text" class="form-control" value="{{ $e->nama }}" disabled>
                                                    </label>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label w-100">
                                                        Link
                                                        <input type="text" class="form-control" value="{{ $e->link }}" disabled>
                                                    </label>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label w-100">
                                                        Icon
                                                        <input type="text" class="form-control" value="{{ $e->icon }}" disabled>
                                                    </label>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label w-100">
                                                        Created By
                                                        <input type="text" class="form-control" value="{{ $e->created_by }}" disabled>
                                                    </label>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label w-100">
                                                        Updated By
                                                        <input type="text" class="form-control" value="{{ $e->updated_by }}" disabled>
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
                                    data-bs-target="#edit_social_media_modal{{ $e->id }}" title="Edit Social Media">
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
                                        <form action="{{ route('updateSocialMedia') }}" method="post">
                                            @csrf
                                            <div class="modal-body text-start">
                                                <input type="hidden" name="id" value="{{ $e -> id }}">
                                                <div class="mb-3">
                                                    <label class="form-label"
                                                           for="input_edit_nama_socialmedia{{$e->id}}">Nama</label>
                                                    <input type="text" class="form-control"
                                                           id="input_edit_nama_socialmedia{{$e->id}}"
                                                           name="input_nama_socialmedia" value="{{ $e->nama }}" required>
                                                    @error('input_nama_socialmedia')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_edit_link_socialmedia{{$e->id}}"
                                                           class="form-label">Link</label>
                                                    <input type="text" class="form-control"
                                                           id="input_edit_link_socialmedia{{$e->id}}" name="input_link"
                                                           value="{{ $e->link }}" required>
                                                    @error('input_link')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="input_edit_icon_socialmedia{{$e->id}}"
                                                           class="form-label">
                                                        Icon
                                                        <a href="https://youtu.be/RPesi3LShOE" target="_blank"><i class="bi bi-info-circle"></i></a>
                                                        <a href="https://icons.getbootstrap.com/" target="_blank"><i class="bi bi-bootstrap"></i></a>
                                                    </label>
                                                    <input type="text" class="form-control"
                                                           id="input_edit_icon_socialmedia{{$e->id}}" name="input_icon"
                                                           value="{{ $e->icon }}" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel
                                                </button>
                                                <input type="hidden" value="{{ $e->id }}" name="id">
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
                                <button class="btn btn-danger" title="Remove Social Media">
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
