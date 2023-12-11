<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalKompetisi">
    Tambah
</button>

<!-- Modal -->
<div class="modal fade" id="modalKompetisi" tabindex="-1" aria-labelledby="modalKompetisiLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah MBKM Non Kompetisi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('addMbkmKompetisi') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label w-100">
                            Jumlah SKS
                            <input type="text" name="jumlah_sks" class="form-control">
                        </label>
                    </div>

                    <div class="">
                        <label class="form-label w-100">
                            Potongan SPP
                            <input type="text" name="potongan_spp" class="form-control">
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
