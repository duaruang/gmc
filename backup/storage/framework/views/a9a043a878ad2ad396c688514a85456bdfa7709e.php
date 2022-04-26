<?php $__env->startSection('content'); ?>
<!--Page Header Start-->
<section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    <div class="container">
        <div class="page-header__inner">
            <h2>Manajemen</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>/</span></li>
                <li>Manajemen</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Become Volunteer Start-->
<section class="become-volunteer">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-12">
                <div class="become-volunteer__left">
                    <img src="<?php echo e(asset('images/manage/1.jpg')); ?>" style='width:100%'>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="become-volunteer__left">
                    <img src="<?php echo e(asset('images/manage/2.jpg')); ?>" style='width:100%'>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="become-volunteer__left">
                    <img src="<?php echo e(asset('images/manage/3.jpg')); ?>" style='width:100%'>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Become Volunteer End-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.asting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/asting/profile/manage.blade.php ENDPATH**/ ?>