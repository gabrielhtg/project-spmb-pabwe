<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3 mb-2 align-self-end" data-bs-toggle="modal" data-bs-target="#tambah_alamat_hero_section_modal">
    Tambah Alamat
</button>

<!-- Modal -->
<div class="modal fade" id="tambah_alamat_hero_section_modal" tabindex="-1" aria-labelledby="tambah_alamat_hero_section_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-semibold">Tambah Alamat Media</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('addAlamat') }}" method="post">
                @csrf
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="input_nama_alamat" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="input_nama_alamat" name="input_nama_alamat">
                    </div>
                    <div class="mb-3">
                        <label for="input_alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="input_alamat" name="input_alamat">
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
