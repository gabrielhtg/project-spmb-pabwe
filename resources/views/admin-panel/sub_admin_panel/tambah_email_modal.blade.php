<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-2 align-self-end" data-bs-toggle="modal" data-bs-target="#tambahEmailModal">
    Tambah Email
</button>

<!-- Modal -->
<div class="modal fade" id="tambahEmailModal" tabindex="-1" aria-labelledby="tambahEmailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-semibold">Tambah Email</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('addEmail') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label w-100">
                            Nama
                            <input type="text" class="form-control" name="namaEmail">
                        </label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label w-100">
                            Email
                            <input type="text" class="form-control" name="email">
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
