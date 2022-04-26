<?php $__env->startSection('title'); ?>
Beranda
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        Hello <?php echo e(auth()->user()->name); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.member', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/member/home.blade.php ENDPATH**/ ?>