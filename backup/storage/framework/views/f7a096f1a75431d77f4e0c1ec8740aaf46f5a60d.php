<?php $__env->startSection('title'); ?>
Artikel
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">List Artikel</h4>
                    <a class="btn btn-primary" href="<?php echo e(route('admin.article.create')); ?>">
                        <i class="mdi mdi-plus mdi-18px"></i>
                    </a>
                </div>
                <p class="card-description"></p>
                <div class="table-responsive">
                    <table class="table datatables">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th>Tanggal Publikasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($article->title); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($article->published_at)->isoFormat('D MMMM Y')); ?></td>
                                <td>
                                    <a class="btn btn-primary" href="<?php echo e(route('admin.article.show',$article->article_id)); ?>">
                                        <i class="mdi mdi-eye mdi-24px mx-0"></i>
                                    </a>
                                    <a class="btn btn-info" href="<?php echo e(route('admin.article.edit',$article->article_id)); ?>">
                                        <i class="mdi mdi-pencil mdi-24px mx-0"></i>
                                    </a>
                                    <form action="<?php echo e(route('admin.article.destroy',$article->article_id)); ?>" method="POST" class="d-inline-block" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button class="btn btn-danger">
                                            <i class="mdi mdi-delete mdi-24px mx-0"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script>
    $('.datatables').DataTable();
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/admin/article/index.blade.php ENDPATH**/ ?>