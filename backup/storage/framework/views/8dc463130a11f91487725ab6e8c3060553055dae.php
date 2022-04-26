<?php $__env->startSection('title'); ?>
Tampilan Kategori
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Tampilan Kategori</h4>
                    <a href="<?php echo e(route('admin.kategori.index')); ?>" class="btn btn-primary">
                        <i class="mdi mdi-arrow-left mdi-18px"></i>
                    </a>
                </div>
                <p class="card-description"></p>
                <img src="<?php echo e($kategori->image_url); ?>" alt="" class="img-fluid">
                <h3 class="mb-4"><?php echo e($kategori->title); ?></h3>
                <?php echo $kategori->keterangan; ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/admin/kategori/show.blade.php ENDPATH**/ ?>