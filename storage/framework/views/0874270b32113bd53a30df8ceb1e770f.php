<?php $__env->startSection('isi-auth'); ?>
    <div id="tampilan_admin_mobile"
         class="d-flex d-sm-none w-100 vh-100 justify-content-center flex-column align-items-center">

        <h1 class="fw-semibold">SPMB IT DEL LOGIN</h1>

        <?php if(Session::get('error')): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo e(Session::get('error')); ?>

            </div>
        <?php endif; ?>

        <form class="p-4 p-md-5 rounded-3 w-100" action="<?php echo e(route('post.login')); ?>" method="post" >
            <?php echo csrf_field(); ?>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="input_username_mobile" name="input_username">
                <label for="input_username_mobile">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="input_password_mobile" name="input_password">
                <label for="input_password_mobile">Password</label>
            </div>





            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
        </form>
    </div>

    <main id="tampilan_admin_desktop" class="d-none w-100 vh-100 d-sm-flex align-items-center justify-content-center">
        <form class="p-4 p-md-5 rounded-3 shadow-lg" action="<?php echo e(route('post.login')); ?>" method="post">
            <?php echo csrf_field(); ?>

            <h2 class="fw-semibold text-center mb-5">SPMB IT DEL LOGIN</h2>

            <?php if(Session::get('error')): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo e(Session::get('error')); ?>

                </div>
            <?php endif; ?>

            <div class="form-floating mb-3">
                <input type="text" class="form-control w-100" id="input_username_dekstop" name="input_username">
                <label for="input_username_dekstop">Username</label>
                <?php $__errorArgs = ['input_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control w-100" id="input_password_desktop" name="input_password">
                <label for="input_password_desktop">Password</label>
                <?php $__errorArgs = ['input_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>





            <button class="w-100 btn btn-lg btn-primary" type="submit">LOGIN</button>
        </form>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.authTemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1. Perkuliahan\Semester 5\PABW\proyekKelompok\project-spmb-pabwe\resources\views/auth/login.blade.php ENDPATH**/ ?>