<?php $__env->startSection('content'); ?>
<!--Page Header Start-->
<section class="page-header" style="background-image: url(<?php echo e(asset('')); ?>);">
    <div class="container">
        <div class="page-header__inner">
            <h2>Donations</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                <li><span>/</span></li>
                <li>Campaigns</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Popular Causes Three Start-->
<section class="popular-causes-three campaign-page">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <!--Popular Causes Single-->
                <div class="popular-causes__sinlge">
                    <div class="popular-causes__img">
                        <img src="<?php echo e($program->image_url); ?>" alt="">
                        
                    </div>
                    <div class="popular-causes__content">
                        <div class="popular-causes__title">
                            <h3><a href="<?php echo e(route('program.show',$program->slug)); ?>"><?php echo e($program->title); ?></a>
                            </h3>
                            <p><?php echo e($program->description_formated); ?></p>
                        </div>
                        <div class="popular-causes__progress">
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="<?php echo e($program->percent); ?>%">
                                    <div class="count-text"><?php echo e(number_format($program->percent,2,',','.')); ?>%</div>
                                </div>
                            </div>
                            <div class="popular-causes__goals">
                                <p><span>Rp <?php echo e(number_format($program->total_donasi,0,',','.')); ?></span> Terkumpul</p>
                                <p><span>Rp <?php echo e(number_format($program->target_amount,0,',','.')); ?></span> Goal</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <nav class="pagination col-12">
                <?php echo e($programs->links('vendor.pagination.custom')); ?>

            </nav>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.asting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/asting/program/index.blade.php ENDPATH**/ ?>