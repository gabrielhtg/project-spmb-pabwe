@extends('template.admin-panel-template')

@section('isi-admin-panel')

  <h1>Program Panel</h1>

  <section>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Kode</th>
          <th scope="col">Nama</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Gambar</th>
          <th scope="col">Visi</th>
          <th scope="col">Misi</th>
          <th scope="col">Lokasi</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </section>

@endsection