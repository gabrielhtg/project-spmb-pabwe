@extends('template.admin-panel-template')

@section('isi-admin-panel')

    <div class="container">
      <form>
        <div class="mb-3">
          <button type="button" id="create-pengumuman" class="btn btn-primary">Create Pengumuman</button>
        </div>

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

        <button type="submit" class="btn btn-primary">Submit</button>

      </form>
    </div>

@endsection