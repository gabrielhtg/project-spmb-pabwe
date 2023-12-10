<div id="item-2" class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <span class="fs-5">Social Media Institusi</span>
    </div>
    <div class="card-body d-flex flex-column">
        @include('admin-panel.sub_admin_panel.tambah_social_media_hero_section')
        <div class="overflow-x-auto">
            <table
                class="table text-center align-middle table-striped table-bordered overflow-x-auto">
                <thead class="align-middle">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Link</th>
                    <th scope="col">Icon Social Media</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach($socialMedia as $e)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $e->nama }}</td>
                        <td><a href="{{ $e->link }}">Klik Disini</a></td>
                        <td>{{ $e->icon }}</td>
                        <td style="min-width: 120px; width: 120px">
                            <button class="btn btn-success">
                                <i class="bi bi-pen"></i>
                            </button>
                            <form action="{{ route('removeSocialMedia') }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $e->id }}">
                                <button class="btn btn-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
