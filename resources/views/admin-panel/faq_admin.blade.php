@extends('template.admin-panel-template')

@section('isi-admin-panel')

    <div class="container-fluid p-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <span class="fs-3">FAQ</span>
            </div>
            <div class="p-3">

                <div class="pt-3">
                    <table class="table table-striped table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kategori</th>
                                <th scope="col">Jumlah Pertanyaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $counter = 1;
                                $faqByCategory = []; // Variabel untuk menyimpan jumlah faq per kategori
                            @endphp

                            @foreach ($faq as $item)
                                @php
                                    // Inisialisasi jumlah faq untuk kategori jika belum ada
                                    $faqByCategory[$item->kategori] = $faqByCategory[$item->kategori] ?? 0;
                                    // Tambahkan 1 ke jumlah faq untuk kategori tersebut
                                    $faqByCategory[$item->kategori]++;
                                @endphp
                            @endforeach

                            @foreach ($faqByCategory as $kategori => $jumlahFaq)
                                <tr>
                                    <td>{{ $counter++ }}</td>
                                    <td>{{ $kategori }}</td>
                                    <td>{{ $jumlahFaq }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <a href="{{ route('get.add-faq') }}">
                        <button class="btn btn-primary">Tambah FAQ</button>
                    </a>
                </div>

                <div class="pt-3">
                    <table class="table table-striped table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Pertanyaan</th>
                                <th scope="col">Jawaban</th>
                                <th scope="col">Created by</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($faq))
                                @php
                                    $counter = 1;
                                @endphp
                                @foreach ($faq as $item)
                                    <tr>
                                        <th>{{ $counter++ }}</th>
                                        <td>{{ $item->kategori }}</td>
                                        <td>{{ $item->pertanyaan }}</td>
                                        <td>{{ $item->jawaban }}</td>
                                        <td>{{ $admin->firstname }}</td>
                                        <td>{{ date('d F Y - H:i', strtotime($item->created_at)) }}</td>
                                        <td style="min-width: 120px; width: 120px">
                                            <button class="btn btn-success"
                                                onclick="showModalEdit({{ $item->id }},'{{ $item->kategori }}', '{{ $item->pertanyaan }}', '{{ $item->jawaban }}')">
                                                <i class="bi bi-pen"></i>
                                            </button>

                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal{{ $item->id }}"><i
                                                    class="bi bi-trash"></i></button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Hapus FAQ!</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah anda yakin ingin menghapus {{ $item->pertanyaan }}?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <form action="{{ route('post.destroyFaq', $item->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="8" class="text-center text-muted">Belum ada data tersedia!</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>

                    <!-- MODAL EDIT FAQ -->
                    <div class="modal fade" id="editFaq" tabindex="-1" aria-labelledby="editFaqLabel" aria-hidder="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editFaqLabel">Ubah Data FAQ</h5>
                                    <button class="btn-close" type="button" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="{{ route('post.faq.edit') }}" method="POST"
                                    onsubmit="return validateForm()">
                                    @csrf
                                    <input name="id" type="hidden" id="inputEditFaq">

                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="inputEditKategori" class="form-label">Pilih Kategori FAQ</label>
                                            <select class="form-select" id="inputEditKategori" name="kategori">
                                                <option value="Umum">Umum</option>
                                                <option value="Persyaratan Pendaftaran">Persyaratan Pendaftaran</option>
                                                <option value="Jalur Seleksi">Jalur Seleksi</option>
                                                <option value="Ujian">Ujian</option>
                                                <option value="Pengumuman">Pengumuman</option>
                                                <option value="Resgistrasi">Registrasi</option>
                                                <option value="Beasiswa">Beasiswa</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="inputPertanyaan" class="form-label">Pertanyaan</label>
                                            <input type="text" class="form-control" id="inputPertanyaan"
                                                name="pertanyaan">
                                        </div>

                                        <div class="mb-3">
                                            <label for="inputJawaban" class="form-label">Jawaban</label>
                                            <input type="text" class="form-control" id="inputJawaban" name="jawaban">
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- AKHIR MODAL EDIT -->
                </div>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            var kategori = document.getElementById("inputEditKategori").value;
            var pertanyaan = document.getElementById("inputPertanyaan").value;
            var jawaban = document.getElementById("inputJawaban").value;

            if (kategori === "" || pertanyaan === "" || jawaban === "") {
                alert("Semua kolom harus diisi!");
                return false;
            }

            return true;
        }
    </script>

@endsection

@section('other-js')
    <script>
        function showModalEdit(id, kategori, pertanyaan, jawaban) {
            const modalEditFaq = document.getElementById("editFaq");
            const inputId = document.getElementById("inputEditFaq");
            const inputKategori = document.getElementById("inputEditKategori")
            const inputPertanyaan = document.getElementById("inputPertanyaan");
            const inputJawaban = document.getElementById("inputJawaban");

            inputKategori.value = kategori;
            inputId.value = id;
            inputPertanyaan.value = pertanyaan;
            inputJawaban.value = jawaban;

            var myModal = new bootstrap.Modal(modalEditFaq)
            myModal.show();
        }
    </script>
@endsection
