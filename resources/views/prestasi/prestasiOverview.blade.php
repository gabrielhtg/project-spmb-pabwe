@extends('template.prestasi')

@section('isi-halaman')
<style>
    .card {
            margin-bottom: 30px;
            /* width:300px;
            height:450px */
            height:95%;
        }

    .mx-auto h2{
        margin-bottom: 30px;
    }

    .modal-content .modal-body img {
        width:100%;
        height:250px;
    }
</style>

    <section class="container">
        <div class="cat-prestasi text-center">
            <div class="d-flex justify-content-between align-items-center">
                <div class="mx-auto">
                    <h2>Prestasi Institut</h2>
                </div>
                <div class="button-all"></div>
            </div>
        </div>

        <div class="row">
            @if(isset($dataPrestasiInstitutOverview) && sizeof($dataPrestasiInstitutOverview))
                @foreach($dataPrestasiInstitutOverview as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card">
                            <img src="{{asset($item->photo)}}" class="card-img-top" alt="pict1"/>
                            <div class="card-body">
                                <h5 class="card-title">{{$item->judul_prestasi}}</h5>
                                <p class="card-text">
                                    {{ substr($item->deskripsi, 0, 154) }}
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p style="font-size: 14px; margin: 0;">{{$item->created_at}}</p>
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#popup{{$item->id}}">See More</button>
                                </div>

                                <div class="modal fade" id="popup{{$item->id}}" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modal-title">Prestasi Institut</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ asset($item->photo) }}" class="card-img-top" alt="pict1"/>
                                                <h5 class="card-title">{{$item->judul_prestasi}}</h5>
                                                <p>
                                                    {{$item->deskripsi}}
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <p style="font-size: 14px; margin: 0;">{{$item->created_at}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            @endif
        </div>

        <div class="cat-prestasi text-center">
            <div class="d-flex justify-content-between align-items-center">
                <div class="mx-auto">
                    <h2>Prestasi Dosen dan Staff</h2>
                </div>
                <div class="button-all"></div>
            </div>
        </div>

        <div class="row">
            @if((isset($dataPrestasiDosenOverview) && sizeof($dataPrestasiDosenOverview)))
                @foreach($dataPrestasiDosenOverview as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card">
                            <img src="{{asset($item->photo)}}" class="card-img-top" alt="pict1"/>
                            <div class="card-body">
                                <h5 class="card-title">{{$item->judul_prestasi}}</h5>
                                <p class="card-text">
                                    {{ substr($item->deskripsi, 0, 154) }}
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p style="font-size: 14px; margin: 0;">{{$item->created_at}}</p>
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#popup{{$item->id}}">See More</button>
                                </div>

                                <div class="modal fade" id="popup{{$item->id}}" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modal-title">Prestasi Dosen/Staff</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ asset($item->photo) }}" class="card-img-top" alt="pict1"/>
                                                <h5 class="card-title">{{$item->judul_prestasi}}</h5>
                                                <p>
                                                    {{$item->deskripsi}}
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <p style="font-size: 14px; margin: 0;">{{$item->created_at}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            @endif
        </div>

        <div class="cat-prestasi text-center">
            <div class="d-flex justify-content-between align-items-center">
                <div class="mx-auto">
                    <h2>Prestasi Mahasiswa</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @if((isset($dataPrestasiMahasiswaOverview) && sizeof($dataPrestasiMahasiswaOverview)))
                @foreach($dataPrestasiMahasiswaOverview as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card">
                            <img src="{{asset($item->photo)}}" class="card-img-top" alt="pict1"/>
                            <div class="card-body">
                                <h5 class="card-title">{{$item->judul_prestasi}}</h5>
                                <p class="card-text">
                                    {{ substr($item->deskripsi, 0, 154) }}
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p style="font-size: 14px; margin: 0;">{{$item->created_at}}</p>
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#popup{{$item->id}}">See More</button>
                                </div>

                                <div class="modal fade" id="popup{{$item->id}}" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modal-title">Prestasi Mahasiswa</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ asset($item->photo) }}" class="card-img-top" alt="pict1"/>
                                                <h5 class="card-title">{{$item->judul_prestasi}}</h5>
                                                <p>
                                                    {{$item->deskripsi}}
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <p style="font-size: 14px; margin: 0;">{{$item->created_at}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            @endif
        </div>
    </section>

    <script>
        // Modal dialog
        function createPopUp(id) {
            let popupNode = document.querySelector(id);
            if (!popupNode) {
                console.error(`Popup with id ${id} not found`);
                return function () {
                }; // Return an empty function
            }

            let overlay = popupNode.querySelector(".overlay");
            let closeBtn = popupNode.querySelector(".btn-close");

            function openPopup() {
                popupNode.classList.add("active");
            }

            function closePopup() {
                popupNode.classList.remove("active");
            }

            if (overlay) {
                overlay.addEventListener("click", closePopup);
            }

            if (closeBtn) {
                closeBtn.addEventListener("click", closePopup);
            }

            return openPopup;
        }

        document.addEventListener("DOMContentLoaded", function () {
            let popups = document.querySelectorAll(".open-popup");

            popups.forEach(function (popupButton) {
                popupButton.addEventListener("click", function () {
                    let popupId = popupButton.getAttribute("data-popup");
                    let popup = createPopUp(popupId);
                    popup();
                });
            });
        });
    </script>
@endsection
