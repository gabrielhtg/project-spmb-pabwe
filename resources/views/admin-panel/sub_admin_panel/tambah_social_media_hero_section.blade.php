<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3 mb-2 align-self-end" data-bs-toggle="modal"
        data-bs-target="#tambah_social_media_section_modal">
    Tambah Social Media (Max 5)
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
                        <input type="text" class="form-control" id="input_nama_social_media"
                               name="input_nama_social_media">
                    </div>
                    <div class="mb-3">
                        <label for="input_link_social_media" class="form-label">Link Social Media</label>
                        <input type="text" class="form-control" id="input_link_social_media"
                               name="input_link_social_media">
                    </div>
                    <div class="mb-3">
                        <label for="input_logo_social_media" class="form-label">
                            Logo Social Media
                            <a class="text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="right"
                               data-bs-title="Tutorial Penggunaan">
                                <i class="bi bi-info-circle"></i>
                            </a>
                        </label>
                        <input type="text" class="form-control" id="input_logo_social_media"
                               name="input_logo_social_media">
                        {{--                        <span style="font-size: 0.8rem">Cari <a href="https://icons.getbootstrap.com/">disini</a>. Kemudian paste icon fontnya di input ini.</span>--}}
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
