<?php $__env->startSection('title'); ?>
Tambah Bank
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Tambah Bank</h4>
                    <a href="<?php echo e(route('admin.bank.index')); ?>" class="btn btn-primary">
                        <i class="mdi mdi-arrow-left mdi-18px"></i>
                    </a>
                </div>
                <p class="card-description"></p>
                <form class="forms-sample" action="<?php echo e(route('admin.bank.store')); ?>" method="POST" autocomplete="off">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="bank">Bank</label>
                        <input type="text" name="bank" class="form-control" id="bank" placeholder="Bank" value="<?php echo e(old('bank')); ?>">
                    </div>
                    <div class="form-group">
                        <label for="name">Atas Nama</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama" value="<?php echo e(old('name')); ?>">
                    </div>
                    <div class="form-group">
                        <label for="number">No Rekening</label>
                        <input type="text" name="number" class="form-control" id="number" placeholder="No Rekening" value="<?php echo e(old('number')); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/admin/bank/create.blade.php ENDPATH**/ ?>