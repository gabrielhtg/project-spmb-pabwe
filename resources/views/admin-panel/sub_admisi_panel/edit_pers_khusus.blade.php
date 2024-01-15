<!-- Button trigger modal -->
<button type="button" class="btn btn-warning" onclick="showModalEditTodo({{$prodi->id}}, '{{$prodi->program_studi}}', '{{$prodi->deskripsi_persyaratan}}', '{{asset($prodi->cover)}}')">
    <i class="bi bi-pen"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="edit_pers_khusus" tabindex="-1" aria-labelledby="edit_pers_khusus" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Edit Data Persyaratan Khusus</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formEditProdi" action="{{route('post.prodi.edit.prodi')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="inputEditProdiId" value="{{ $prodi->id }}">
                    <div class="mb-3">
                        <label for="inputEditProdi" class="form-label">Program Studi</label>
                        <input type="text" class="form-control" id="inputEditProdi" name="program_studi">
                    </div>
                    <div class="mb-3">
                        <label for="inputEditDeskripsi" class="form-label w-100">Deskripsi Persyaratan
                        <textarea class="inputEditDeskripsi" id="inputEditDeskripsi" name="deskripsi_persyaratan" rows="4" required></textarea>
                        </label>
                    </div>
                    <div class="mb-3">
                        <img src="" style="height: 120px;" id="previewEditCover" alt="Cover">
                        <label for="inputEditCover" class="form-label">Preview Cover</label>
                        <input class="form-control" type="file" id="inputEditCover" name="cover">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function showModalEditTodo(id, program_studi, deskripsi_persyaratan, cover) {
        const inputProdiId = document.getElementById("inputEditProdiId");
        const inputProdi = document.getElementById("inputEditProdi");
        const inputDeskripsi = document.getElementById("inputEditDeskripsi");
        const inputCover = document.getElementById("inputEditCover");
        const previewCover = document.getElementById("previewEditCover");

        inputProdiId.value = id;
        inputProdi.value = program_studi;
        inputDeskripsi.value = deskripsi_persyaratan;
        previewCover.src = cover;

        // Show the modal using Bootstrap's built-in function
        $('#edit_pers_khusus').modal('show');
        }
</script>
