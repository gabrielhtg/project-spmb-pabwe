@extends('template.admin-panel-template')

@section('isi-admin-panel')

<div class="container-fluid p-3">
  <div class="card">
  <div class="card-header bg-primary text-white" style="display: flex; justify-content: space-between; align-items: center;">
                <span class="fs-3">Data Pengumuman</span>
                <a href="{{ route("pengumuman-panel") }}">
                    <button class="btn btn-outline-light">
                        Kembali
                    </button>
                </a>
    </div>
    <div class="container">
      <form>

        <label for="inputtag" class="form-label">Pilih Tag Pengumuman</label>
        <select class="form-select" name="selectOption" id="selectOption">
          <option value="option1">PMDK</option>
          <option value="option2">USM 1</option>
          <option value="option3">USM 2</option>
          <option value="option4">USM 3</option>
          <option value="option5">USM 4</option>
          <option value="option6">UTBK</option>
        </select>

        <div class="mb-3">
          <label for="inputjudul" class="form-label">Judul Pengumuman</label>
          <input type="text" class="form-control" id="inputjudul">
        </div>

        <div class="fw-bold">Tambah File Pengumuman</div>

        <div class="mb-3">
          <label for="inputfile" class="form-label">Nama File</label>
          <input type="text" class="form-control" id="inputfile">
        </div>

        <div class="mb-3">
          <label for="inputfile" class="form-label">File</label>
          <input type="file" class="form-control" id="inputfile">
        </div>

        <div class="mb-3">
          <button type="button" id="create-pengumuman" class="btn btn-primary">Submit</button>
        </div>

      </form>
    </div>
  </div>
</div>

@endsection