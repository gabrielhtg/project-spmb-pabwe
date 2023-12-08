<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3 mb-2 align-self-end" data-bs-toggle="modal" data-bs-target="#addPhoneNumberModal">
    Tambah Nomor Telepon
</button>

<!-- Modal -->
<div class="modal fade" id="addPhoneNumberModal" tabindex="-1" aria-labelledby="addPhoneNumberModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-semibold">Tambah Nomor Telepon</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('addPhoneNumber') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label w-100">
                            Nama
                            <input type="text" class="form-control" name="namaNomorTelepon">
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label w-100">
                            Phone Number
                            <input type="text" class="form-control" name="nomorTelepon">
                        </label>
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
