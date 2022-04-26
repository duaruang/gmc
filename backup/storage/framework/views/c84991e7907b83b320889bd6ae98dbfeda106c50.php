<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo e(asset('skydash/vendors/feather/feather.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('skydash/vendors/ti-icons/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('skydash/vendors/css/vendor.bundle.base.css')); ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo e(asset('skydash/css/vertical-layout-light/style.css')); ?>">
    <?php echo $__env->make('vendor.swal.css.swal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- endinject -->
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/logo.png')); ?>" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                
                            </div>
                            <h4>Hello! Admin</h4>
                            <h6 class="font-weight-light">Masuk untuk melanjutkan.</h6>
                            <form class="pt-3" action="<?php echo e(route('admin.login.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input name="password" type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Masuk</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo e(asset('skydash/vendors/js/vendor.bundle.base.js')); ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo e(asset('skydash/js/off-canvas.js')); ?>"></script>
    <script src="<?php echo e(asset('skydash/js/hoverable-collapse.js')); ?>"></script>
    <script src="<?php echo e(asset('skydash/js/template.js')); ?>"></script>
    <script src="<?php echo e(asset('skydash/js/settings.js')); ?>"></script>
    <script src="<?php echo e(asset('skydash/js/todolist.js')); ?>"></script>
    <?php echo $__env->make('vendor.swal.js.swal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- endinject -->
</body>

</html><?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/admin/login.blade.php ENDPATH**/ ?>