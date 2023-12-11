<?php $__env->startSection('isi-halaman'); ?>
    <style>
        .cat-prestasi {
            margin-top: 20px;
            margin-bottom: 70px;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        h2 {
            padding-bottom: 5px;
            text-align: center;
        }

        .card {
            margin-bottom: 30px;
        }

        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* background-color: white; */
            backdrop-filter: blur(5px);
            z-index: 1000;
        }

        .popup-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            /* White background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .popup .popup-content img {
            max-width: 100%;
            /* Image takes 100% width of its container */
            height: auto;
            display: block;
            margin-top: 40px;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1000;
        }


        .btn-close {
            cursor: pointer;
            background-color: #007bff;
            /* Button background color */
            color: #fff;
            /* Button text color */
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            margin-right: 10px;
        }

        .btn-close:hover {
            background-color: #0056b3;
            /* Button background color on hover */
        }


        .popup-content img {
            max-width: 100%;
            height: auto;
        }

        .content-text {
            margin-top: 20px;
        }

        .btn-close {
            background-color: #4caf50;
            /* Solid background color */
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 1001;
        }

        .btn-close:hover {
            background-color: #45a049;
        }

        .popup.active {
            display: block;
        }

        .popup-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }

        .popup-date {
            font-size: 14px;
            color: black;
            /* Adjust the color to your preference */
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
            <?php if(isset($dataPrestasiInstitutOverview) && sizeof($dataPrestasiInstitutOverview)): ?>
                <?php $__currentLoopData = $dataPrestasiInstitutOverview; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card">
                            <img src="<?php echo e(asset($item->photo)); ?>" class="card-img-top" alt="pict1"/>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($item->judul_prestasi); ?></h5>
                                <p class="card-text">
                                    <?php echo e($item->deskripsi); ?>

                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p style="font-size: 14px; margin: 0;"><?php echo e($item->created_at); ?></p>
                                    <a href="#" class="btn btn-primary open-popup" data-popup="#popup<?php echo e($item->id); ?>">See
                                        more</a>
                                </div>

                                <div class="popup" id="popup<?php echo e($item->id); ?>">
                                    <div class="overlay"></div>
                                    <div class="popup-content">
                                        <img src="<?php echo e(asset($item->photo)); ?>" class="card-img-top"
                                             alt="pict1"/>

                                        <div class="content-text">
                                            <h5 class="card-title"><?php echo e($item->judul_prestasi); ?></h5>
                                            <p class="card-text">
                                                <?php echo e($item->deskripsi); ?>

                                            </p>
                                        </div>
                                        <div class="popup-footer">
                                            <span class="popup-date"><?php echo e($item->created_at); ?></span>
                                            <button class="btn-close"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
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
            <?php if((isset($dataPrestasiDosenOverview) && sizeof($dataPrestasiDosenOverview))): ?>
                <?php $__currentLoopData = $dataPrestasiDosenOverview; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card">
                            <img src="<?php echo e(asset($item->photo)); ?>" class="card-img-top" alt="pict1"/>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($item->judul_prestasi); ?></h5>
                                <p class="card-text">
                                    <?php echo e($item->deskripsi); ?>

                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p style="font-size: 14px; margin: 0;"><?php echo e($item->created_at); ?></p>
                                    <a href="#" class="btn btn-primary open-popup" data-popup="#popup<?php echo e($item->id); ?>">See
                                        more</a>
                                </div>

                                <div class="popup" id="popup<?php echo e($item->id); ?>">
                                    <div class="overlay"></div>
                                    <div class="popup-content">
                                        <img src="<?php echo e(asset($item->photo)); ?>" class="card-img-top"
                                             alt="pict1"/>

                                        <div class="content-text">
                                            <h5 class="card-title"><?php echo e($item->judul_prestasi); ?></h5>
                                            <p class="card-text">
                                                <?php echo e($item->deskripsi); ?>

                                            </p>
                                        </div>
                                        <div class="popup-footer">
                                            <span class="popup-date"><?php echo e($item->created_at); ?></span>
                                            <button class="btn-close"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>

        <div class="cat-prestasi text-center">
            <div class="d-flex justify-content-between align-items-center">
                <div class="mx-auto">
                    <h2>Prestasi Mahasiswa</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if((isset($dataPrestasiMahasiswaOverview) && sizeof($dataPrestasiMahasiswaOverview))): ?>
                <?php $__currentLoopData = $dataPrestasiMahasiswaOverview; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card">
                            <img src="<?php echo e(asset($item->photo)); ?>" class="card-img-top" alt="pict1"/>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($item->judul_prestasi); ?></h5>
                                <p class="card-text">
                                    <?php echo e($item->deskripsi); ?>

                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p style="font-size: 14px; margin: 0;"><?php echo e($item->created_at); ?></p>
                                    <a href="#" class="btn btn-primary open-popup" data-popup="#popup<?php echo e($item->id); ?>">See
                                        more</a>
                                </div>

                                <div class="popup" id="popup<?php echo e($item->id); ?>">
                                    <div class="overlay"></div>
                                    <div class="popup-content">
                                        <img src="<?php echo e(asset($item->photo)); ?>" class="card-img-top"
                                             alt="pict1"/>

                                        <div class="content-text">
                                            <h5 class="card-title"><?php echo e($item->judul_prestasi); ?></h5>
                                            <p class="card-text">
                                                <?php echo e($item->deskripsi); ?>

                                            </p>
                                        </div>
                                        <div class="popup-footer">
                                            <span class="popup-date"><?php echo e($item->created_at); ?></span>
                                            <button class="btn-close"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.prestasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1. Perkuliahan\Semester 5\PABW\project-spmb-pabwe\resources\views/prestasi/prestasiOverview.blade.php ENDPATH**/ ?>