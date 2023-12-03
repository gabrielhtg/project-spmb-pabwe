<div id="item-4" class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <span class="fs-5">Alamat Institusi</span>
    </div>
    <div class="card-body d-flex flex-column">
        @include('admin-panel.sub_admin_panel.tambah_alamat_modal')
        <div>
            <form action="">
                <table class="align-middle text-center table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach($dataAlamat as $e)
                    <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $e -> nama }}</td>
                            <td>{{ $e -> alamat }}</td>
                            <td style="min-width: 120px; width: 120px">
                                <button class="btn btn-success">
                                    <i class="bi bi-pen"></i>
                                </button>
                                <form action="{{ route('removeAlamat') }}" class="d-inline" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $e -> id }}">
                                    <button class="btn btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>
