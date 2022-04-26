<?php $__env->startSection('title'); ?>
Tampilan Program
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Tampilan Program</h4>
                    <a href="<?php echo e(route('admin.program.index')); ?>" class="btn btn-primary">
                        <i class="mdi mdi-arrow-left mdi-18px"></i>
                    </a>
                </div>
                <p class="card-description"></p>
                <img src="<?php echo e($program->image_url); ?>" alt="" class="img-fluid">
                <h3 class="mb-4"><?php echo e($program->title); ?></h3>
                <?php echo $program->description; ?>

            </div>
            <div class="card-footer">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: <?php echo e($program->percent); ?>%;"></div>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <span>
                        Donasi Terkumpul <br>
                        Rp. <?php echo e(number_format($program->total_donasi,0,',','.')); ?>

                    </span>
                    <?php if(!empty($program->target_amount)): ?>
                    <div>
                        Membutuhkan <br>
                        Rp. <?php echo e(number_format($program->target_amount,0,',','.')); ?>

                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/admin/program/show.blade.php ENDPATH**/ ?>