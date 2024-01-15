<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3 mb-2" data-bs-toggle="modal" data-bs-target="#addJadwalPendaftaran">
    Tambah
</button>

<!-- Modal -->
<div class="modal fade" id="addJadwalPendaftaran" tabindex="-1" aria-labelledby="addJadwalPendaftaran" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Tambah Jadwal Pendaftaran</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('addJadwalPendaftaran') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Jenis Jalur Pendaftaran</label>
                        <input type="text" class="form-control" name="jenis_jalur" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Pendaftaran</label>
                        <input type="text" class="form-control" name="tanggal_pendaftaran" required>
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
