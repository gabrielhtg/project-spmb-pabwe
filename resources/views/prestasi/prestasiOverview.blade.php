@extends('template.app')

@section('isi-halaman')
<section class="container">
      <div class="cat-prestasi">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Prestasi Institut</h2>
          <div class="button-all">
            <a href="#" class="btn btn-outline-primary">See All</a>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <div class="card" style="width: 18rem">
              <img src="{{ asset("assets/img/prestasi/cta.jpg") }}" class="card-img-top" alt="pict1" />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <p style="font-size: 14px; margin: 0;">25 Nov 2023</p>
                  <a href="#" class="btn btn-primary open-popup" data-popup="#popup1">See more</a>
                </div>
                

                <div class="popup" id="popup1">
                  <div class="overlay"></div>
                  <div class="popup-content">
                    <img
                      src="{{ asset("assets/img/prestasi/cta.jpg") }}"
                      class="card-img-top"
                      alt="pict1"
                    />

                    <div class="content-text">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content. Some quick
                        example text to build on the card title and make up the
                        bulk of the card's content. Some quick example text to
                        build on the card title and make up the bulk of the
                        card's content. Some quick example text to build on the
                        card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content. Some quick
                        example text to build on the card title and make up the
                        bulk of the card's content.
                      </p>
                    </div>
                    <div class="popup-footer">
                      <span class="popup-date">Date: November 25, 2023</span>
                      <button class="btn-close"></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card" style="width: 18rem">
              <img src="{{ asset("assets/img/prestasi/cta.jpg") }}" class="card-img-top" alt="pict1" />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <p style="font-size: 14px; margin: 0;">25 Nov 2023</p>
                  <a href="#" class="btn btn-primary open-popup" data-popup="#popup2">See more</a>
                </div>

                <div class="popup" id="popup2">
                  <div class="overlay"></div>
                  <div class="popup-content">
                    <img
                      src="{{ asset("assets/img/prestasi/cta.jpg") }}"
                      class="card-img-top"
                      alt="pict1"
                    />

                    <div class="content-text">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content. Some quick
                        example text to build on the card title and make up the
                        bulk of the card's content. Some quick example text to
                        build on the card title and make up the bulk of the
                        card's content. Some quick example text to build on the
                        card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content. Some quick
                        example text to build on the card title and make up the
                        bulk of the card's content.
                      </p>
                    </div>
                    <button class="btn-close"></button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card" style="width: 18rem">
              <img src="{{ asset("assets/img/prestasi/cta.jpg") }}" class="card-img-top" alt="pict1" />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <p style="font-size: 14px; margin: 0;">25 Nov 2023</p>
                  <a href="#" class="btn btn-primary open-popup" data-popup="#popup3">See more</a>
                </div>

                <div class="popup" id="popup3">
                  <div class="overlay"></div>
                  <div class="popup-content">
                    <img
                      src="{{ asset("assets/img/prestasi/cta.jpg") }}"
                      class="card-img-top"
                      alt="pict1"
                    />
                    <div class="content-text">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content. Some quick
                        example text to build on the card title and make up the
                        bulk of the card's content. Some quick example text to
                        build on the card title and make up the bulk of the
                        card's content. Some quick example text to build on the
                        card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content. Some quick
                        example text to build on the card title and make up the
                        bulk of the card's content.
                      </p>
                    </div>
                    <button class="btn-close"></button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card" style="width: 18rem">
              <img src="{{ asset("assets/img/prestasi/cta.jpg") }}" class="card-img-top" alt="pict1" />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <p style="font-size: 14px; margin: 0;">25 Nov 2023</p>
                  <a href="#" class="btn btn-primary open-popup" data-popup="#popup4">See more</a>
                </div>

                <div class="popup" id="popup4">
                  <div class="overlay"></div>
                  <div class="popup-content">
                    <img
                      src="{{ asset("assets/img/prestasi/cta.jpg") }}"
                      class="card-img-top"
                      alt="pict1"
                    />
                    <div class="content-text">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content. Some quick
                        example text to build on the card title and make up the
                        bulk of the card's content. Some quick example text to
                        build on the card title and make up the bulk of the
                        card's content. Some quick example text to build on the
                        card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content. Some quick
                        example text to build on the card title and make up the
                        bulk of the card's content.
                      </p>
                    </div>
                    <button class="btn-close"></button>
                  </div>
                </div>
              </div>
            </div>
          </div>

      <div class="cat-prestasi">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Prestasi Dosen/Staff</h2>
          <a href="#" class="btn btn-outline-primary">See All</a>
        </div>
        <div class="row">
          <div class="col">
            <div class="card" style="width: 18rem">
              <img src="{{ asset("assets/img/prestasi/cta.jpg") }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <p style="font-size: 14px; margin: 0;">25 Nov 2023</p>
                  <a href="#" class="btn btn-primary open-popup" data-popup="#popup5">See more</a>
                </div>

                <div class="popup" id="popup5">
                  <div class="overlay"></div>
                  <div class="popup-content">
                    <img
                      src="{{ asset("assets/img/prestasi/cta.jpg") }}"
                      class="card-img-top"
                      alt="pict1"
                    />

                    <div class="content-text">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content. Some quick
                        example text to build on the card title and make up the
                        bulk of the card's content. Some quick example text to
                        build on the card title and make up the bulk of the
                        card's content. Some quick example text to build on the
                        card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content. Some quick
                        example text to build on the card title and make up the
                        bulk of the card's content.
                      </p>
                    </div>
                    <div class="popup-footer">
                      <span class="popup-date">Date: November 25, 2023</span>
                      <button class="btn-close"></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card" style="width: 18rem">
              <img src="{{ asset("assets/img/prestasi/cta.jpg") }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <p style="font-size: 14px; margin: 0;">25 Nov 2023</p>
                  <a href="#" class="btn btn-primary open-popup" data-popup="#popup6">See more</a>
                </div>

                <div class="popup" id="popup6">
                  <div class="overlay"></div>
                  <div class="popup-content">
                    <img
                      src="{{ asset("assets/img/prestasi/cta.jpg") }}"
                      class="card-img-top"
                      alt="pict1"
                    />

                    <div class="content-text">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content. Some quick
                        example text to build on the card title and make up the
                        bulk of the card's content. Some quick example text to
                        build on the card title and make up the bulk of the
                        card's content. Some quick example text to build on the
                        card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content. Some quick
                        example text to build on the card title and make up the
                        bulk of the card's content.
                      </p>
                    </div>
                    <div class="popup-footer">
                      <span class="popup-date">Date: November 25, 2023</span>
                      <button class="btn-close"></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card" style="width: 18rem">
              <img src="{{ asset("assets/img/prestasi/cta.jpg") }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <p style="font-size: 14px; margin: 0;">25 Nov 2023</p>
                  <a href="#" class="btn btn-primary open-popup" data-popup="#popup7">See more</a>
                </div>

                <div class="popup" id="popup7">
                  <div class="overlay"></div>
                  <div class="popup-content">
                    <img
                      src="{{ asset("assets/img/prestasi/cta.jpg") }}"
                      class="card-img-top"
                      alt="pict1"
                    />

                    <div class="content-text">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content. Some quick
                        example text to build on the card title and make up the
                        bulk of the card's content. Some quick example text to
                        build on the card title and make up the bulk of the
                        card's content. Some quick example text to build on the
                        card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content. Some quick
                        example text to build on the card title and make up the
                        bulk of the card's content.
                      </p>
                    </div>
                    <div class="popup-footer">
                      <span class="popup-date">Date: November 25, 2023</span>
                      <button class="btn-close"></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card" style="width: 18rem">
              <img src="{{ asset("assets/img/prestasi/cta.jpg") }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <p style="font-size: 14px; margin: 0;">25 Nov 2023</p>
                  <a href="#" class="btn btn-primary open-popup" data-popup="#popup8">See more</a>
                </div>

                <div class="popup" id="popup8">
                  <div class="overlay"></div>
                  <div class="popup-content">
                    <img
                      src="{{ asset("assets/img/prestasi/cta.jpg") }}"
                      class="card-img-top"
                      alt="pict1"
                    />

                    <div class="content-text">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content. Some quick
                        example text to build on the card title and make up the
                        bulk of the card's content. Some quick example text to
                        build on the card title and make up the bulk of the
                        card's content. Some quick example text to build on the
                        card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content. Some quick
                        example text to build on the card title and make up the
                        bulk of the card's content.
                      </p>
                    </div>
                    <div class="popup-footer">
                      <span class="popup-date">Date: November 25, 2023</span>
                      <button class="btn-close"></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="cat-prestasi">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Prestasi Mahasiswa</h2>
          <a href="#" class="btn btn-outline-primary">See All</a>
        </div>
        <div class="row">
          <div class="col">
            <div class="card" style="width: 18rem">
              <img src="{{ asset("assets/img/prestasi/cta.jpg") }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <p style="font-size: 14px; margin: 0;">25 Nov 2023</p>
                  <a href="#" class="btn btn-primary open-popup" data-popup="#popup9">See more</a>
                </div>

                <div class="popup" id="popup9">
                  <div class="overlay"></div>
                  <div class="popup-content">
                    <img
                      src="{{ asset("assets/img/prestasi/cta.jpg") }}"
                      class="card-img-top"
                      alt="pict1"
                    />

                    <div class="content-text">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content. Some quick
                        example text to build on the card title and make up the
                        bulk of the card's content. Some quick example text to
                        build on the card title and make up the bulk of the
                        card's content. Some quick example text to build on the
                        card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content. Some quick
                        example text to build on the card title and make up the
                        bulk of the card's content.
                      </p>
                    </div>
                    <div class="popup-footer">
                      <span class="popup-date">Date: November 25, 2023</span>
                      <button class="btn-close"></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card" style="width: 18rem">
              <img src="{{ asset("assets/img/prestasi/cta.jpg") }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <p style="font-size: 14px; margin: 0;">25 Nov 2023</p>
                  <a href="#" class="btn btn-primary open-popup" data-popup="#popup10">See more</a>
                </div>

                <div class="popup" id="popup10">
                  <div class="overlay"></div>
                  <div class="popup-content">
                    <img
                      src="{{ asset("assets/img/prestasi/cta.jpg") }}"
                      class="card-img-top"
                      alt="pict1"
                    />

                    <div class="content-text">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content. Some quick
                        example text to build on the card title and make up the
                        bulk of the card's content. Some quick example text to
                        build on the card title and make up the bulk of the
                        card's content. Some quick example text to build on the
                        card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content. Some quick
                        example text to build on the card title and make up the
                        bulk of the card's content.
                      </p>
                    </div>
                    <div class="popup-footer">
                      <span class="popup-date">Date: November 25, 2023</span>
                      <button class="btn-close"></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card" style="width: 18rem">
              <img src="{{ asset("assets/img/prestasi/cta.jpg") }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <p style="font-size: 14px; margin: 0;">25 Nov 2023</p>
                  <a href="#" class="btn btn-primary open-popup" data-popup="#popup11">See more</a>
                </div>

                <div class="popup" id="popup11">
                  <div class="overlay"></div>
                  <div class="popup-content">
                    <img
                      src="{{ asset("assets/img/prestasi/cta.jpg") }}"
                      class="card-img-top"
                      alt="pict1"
                    />

                    <div class="content-text">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content. Some quick
                        example text to build on the card title and make up the
                        bulk of the card's content. Some quick example text to
                        build on the card title and make up the bulk of the
                        card's content. Some quick example text to build on the
                        card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content. Some quick
                        example text to build on the card title and make up the
                        bulk of the card's content.
                      </p>
                    </div>
                    <div class="popup-footer">
                      <span class="popup-date">Date: November 25, 2023</span>
                      <button class="btn-close"></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card" style="width: 18rem">
              <img src="{{ asset("assets/img/prestasi/cta.jpg") }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <p style="font-size: 14px; margin: 0;">25 Nov 2023</p>
                  <a href="#" class="btn btn-primary open-popup" data-popup="#popup12">See more</a>
                </div>

                <div class="popup" id="popup12">
                  <div class="overlay"></div>
                  <div class="popup-content">
                    <img
                      src="{{ asset("assets/img/prestasi/cta.jpg") }}"
                      class="card-img-top"
                      alt="pict1"
                    />

                    <div class="content-text">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content. Some quick
                        example text to build on the card title and make up the
                        bulk of the card's content. Some quick example text to
                        build on the card title and make up the bulk of the
                        card's content. Some quick example text to build on the
                        card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and
                        make up the bulk of the card's content. Some quick
                        example text to build on the card title and make up the
                        bulk of the card's content.
                      </p>
                    </div>
                    <div class="popup-footer">
                      <span class="popup-date">Date: November 25, 2023</span>
                      <button class="btn-close"></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>

<script>
  // Modal dialog
  function createPopUp(id) {
    let popupNode = document.querySelector(id);
    if (!popupNode) {
      console.error(`Popup with id ${id} not found`);
      return function () {}; // Return an empty function
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
