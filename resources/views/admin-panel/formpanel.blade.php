@extends('template.admin-panel-template')

@section('isi-admin-panel')

<style>
    .custom-container {
      border: 1px solid #ddd;
      padding: 20px;
      border-radius: 8px;
      margin-bottom: 20px;
      background-color: rgb(13, 110, 253);
      color: white;
    }

    .table-container {
      border: 1px solid #ccc;
      border-radius: 8px;
      padding: 20px;
    }
  </style>
</head>
<body>
<div class="container-fluid table-container" style="padding: 10px;">
  <div class="container-fluid custom-container">
    <h2>Form</h2>
  </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">No WhatsApp</th>
          <th scope="col">Pesan</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Emely</td>
          <td>08217238890</td>
          <td>Bagaimana cara melihat jadwal pendaftaran</td>
          <td><button type="button" class="btn btn-primary">Berikan jawaban</button> </td>
        </tr>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-zZ3GNrD5dW1kRAB8fI3s19aRlWpTbN4dj/kWu0Ie6C5jkgWo/jAwUZf9pC+I5oM2" crossorigin="anonymous"></script>
</body>

@endsection