<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3 mb-2 align-self-end" data-bs-toggle="modal"
        data-bs-target="#tambah_social_media_section_modal">
    Tambah Social Media
</button>

<!-- Modal -->
<div class="modal fade" id="tambah_social_media_section_modal" tabindex="-1"
     aria-labelledby="tambah_social_media_section_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-semibold">Tambah Social Media</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('addSocialMedia') }}" method="post">
                @csrf
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="input_nama_social_media" class="form-label">Nama Social Media</label>
                        <a tabindex="0" class="border-0 bg-white" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="Max length 50 characters."><i class="bi bi-info-circle"></i></a>
                        <input type="text" class="form-control" id="input_nama_social_media"
                               name="input_nama_social_media" required>
                        @error('input_nama_social_media')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="input_link_social_media" class="form-label">Link Social Media</label>
                        <a tabindex="0" class="border-0 bg-white" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="Max length 150 characters."><i class="bi bi-info-circle"></i></a>
                        <input type="text" class="form-control" id="input_link_social_media"
                               name="input_link_social_media" required>
                        @error('input_link_social_media')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="input_logo_social_media" class="form-label">
                            Logo Social Media
                            <a class="text-decoration-none" href="https://youtu.be/RPesi3LShOE" target="_blank">
                                <i class="bi bi-info-circle"></i>
                            </a>
                            <a href="https://icons.getbootstrap.com/" target="_blank"><i class="bi bi-bootstrap"></i></a>
                        </label>
                        <input type="text" class="form-control" id="input_logo_social_media"
                               name="input_logo_social_media" required>
                        @error('input_logo_social_media')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
