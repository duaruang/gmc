<?php $__env->startSection('title'); ?>
Tambah Program
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Tambah Program</h4>
                    <a href="<?php echo e(route('admin.program.index')); ?>" class="btn btn-primary">
                        <i class="mdi mdi-arrow-left mdi-18px"></i>
                    </a>
                </div>
                <p class="card-description"></p>
                <form class="forms-sample" action="<?php echo e(route('admin.program.store')); ?>" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type='hidden' name='kode' value="<?php echo md5(date('his'));?>">
                    <div class="form-group">
                        <label for="title">Kategori</label>
                        <select name='kategori_id' class='form-control'>
                            <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($data->kategori_id); ?>"><?php echo e($data->nama); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Judul" value="<?php echo e(old('judul')); ?>">
                    </div>
                    <div class="form-group">
                        <label for="image">Gambar</label>
                        <input type="file" name="image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="target_amount">Target</label>
                        <input type="number" name="target_amount" class="form-control" id="target" placeholder="Target" value="<?php echo e(old('target_amount')); ?>">
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/admin/program/create.blade.php ENDPATH**/ ?>