<?php $__env->startSection('title'); ?>
Edit Biaya
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Edit Biaya</h4>
                    <a href="<?php echo e(route('admin.price.index')); ?>" class="btn btn-primary">
                        <i class="mdi mdi-arrow-left mdi-18px"></i>
                    </a>
                </div>
                <p class="card-description"></p>
                <form class="forms-sample" action="<?php echo e(route('admin.price.update',$price->price_id)); ?>" method="POST" autocomplete="off">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('put'); ?>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama" value="<?php echo e(!empty(old('name')) ? old('name') : $price->name); ?>">
                    </div>
                    <div class="form-group">
                        <label for="amount">Harga</label>
                        <input type="number" name="amount" class="form-control" id="amount" placeholder="Harga" value="<?php echo e(!empty(old('amount')) ? old('amount') : $price->amount); ?>">
                    </div>
                    <div class="form-group">
                        <label for="type">Tipe</label>
                        <select name="type" id="type" class="form-control">
                            <option value="">Pilih</option>
                            <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($type); ?>" <?php echo e(empty(old('type')) && $price->type == $type || old('type')==$type ? 'selected' : ''); ?>><?php echo e($type); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/admin/bank/edit.blade.php ENDPATH**/ ?>