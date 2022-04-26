<?php $__env->startSection('title'); ?>
Kategori
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">List Kategori</h4>
                    
                    <a class="btn btn-primary" href="<?php echo e(route('admin.kategori.create')); ?>">
                        <i class="mdi mdi-plus mdi-18px"></i>
                    </a>
                </div><form action="/admin/kategori/export_excel" method="post">
                <div class='row col-6'>
                <?php echo csrf_field(); ?>
                        <div class='col-8'><input type="text" name="date" class='form-control' value="" /></div>
                        <div class='col-4'><button class='btn btn-success' type='submit'>Export Excel</button></div>
                   
                </div> </form>
                <p class="card-description"></p>
                <div class="table-responsive">
                    <table class="table datatables">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th>Keterangan</th>
                                
                                
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($kategori->nama); ?></td>
                                <td><?php echo e($kategori->keterangan); ?></td>
                                
                                
                                <td>
                                    <a class="btn btn-primary" href="<?php echo e(route('admin.kategori.show',$kategori->kategori_id)); ?>">
                                        <i class="mdi mdi-eye mdi-24px mx-0"></i>
                                    </a>
                                    <a class="btn btn-info" href="<?php echo e(route('admin.kategori.edit',$kategori->kategori_id)); ?>">
                                        <i class="mdi mdi-pencil mdi-24px mx-0"></i>
                                    </a>
                                    <form action="<?php echo e(route('admin.kategori.destroy',$kategori->kategori_id)); ?>" method="POST" class="d-inline-block">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button class="btn btn-danger btn-delete">
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
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/admin/kategori/index.blade.php ENDPATH**/ ?>