<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3 mb-2" data-bs-toggle="modal" data-bs-target="#add_biaya_studi">
    Tambah
</button>
<!-- Modal -->
<div class="modal fade" id="add_biaya_studi" tabindex="-1" aria-labelledby="add_biaya_studi" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Tambah Data Biaya Studi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('add_biaya_studi') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="fakultas" class="form-label">Fakultas</label>
                        <input type="text" class="form-control" name="fakultas">
                    </div>
                    <div class="mb-3">
                        <label for="program_studi" class="form-label">Program Studi</label>
                        <input type="text" class="form-control" name="pro_stud">
                    </div>
                    <div class="mb-3">
                        <label for="biaya_spp" class="form-label">Biaya SPP (Rp)</label>
                        <input type="text" class="form-control" name="biaya_spp">
                    </div>
                    <div class="mb-3">
                        <label for="uang_pengembangan" class="form-label">Uang Pengembangan</label>
                        <input type="text" class="form-control" name="uang_pengembangan">
                    </div>
                    <div class="mb-3">
                        <label for="uang_pangkal" class="form-label">Uang Pangkal</label>
                        <input type="text" class="form-control" name="uang_pangkal">
                    </div>
                    <div class="mb-3">
                        <label for="perlengkapan_mahasiswa" class="form-label">Perlengkapan Mahasiswa</label>
                        <input type="text" class="form-control" name="perlengkapan_mahasiswa">
                    </div>
                    <div class="mb-3">
                        <label for="perlengkapan_makan" class="form-label">Perlengkapan Makan</label>
                        <input type="text" class="form-control" name="perlengkapan_makan">
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