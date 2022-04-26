<?php $__env->startSection('title'); ?>
Tambah Artikel
<?php $__env->stopSection(); ?>

<?php $__env->startSection('vendor-css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('skydash/vendors/summernote/summernote-bs4.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Tambah Artikel</h4>
                    <a href="<?php echo e(route('admin.article.index')); ?>" class="btn btn-primary">
                        <i class="mdi mdi-arrow-left mdi-18px"></i>
                    </a>
                </div>
                <p class="card-description"></p>
                <form class="forms-sample" action="<?php echo e(route('admin.article.store')); ?>" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
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
                        <label for="published_at">Tanggal Publikasi</label>
                        <input type="date" name="published_at" class="form-control" id="published_at" placeholder="Tanggal Publikasi" value="<?php echo e(old('published_at')); ?>">
                    </div>
                    <div class="form-group">
                        <label for="content">Konten</label>
                        <textarea name="content" id="content" class="summernote"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('vendor-js'); ?>
<script src="<?php echo e(asset('skydash/vendors/summernote/summernote-bs4.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script>
    $('.summernote').summernote();
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/admin/article/create.blade.php ENDPATH**/ ?>