<?php $__env->startSection('title'); ?>
Program
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">List Program</h4>
                    <a class="btn btn-primary" href="<?php echo e(route('admin.program.create')); ?>">
                        <i class="mdi mdi-plus mdi-18px"></i>
                    </a>
                </div>
                <form action="/admin/export/program" method="post">
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
                                <th>Target</th>
                                
                                
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($program->title); ?></td>
                                <td>Rp. <?php echo e(number_format($program->target_amount,0,',','.')); ?></td>
                                
                                
                                <td>
                                    <a class="btn btn-primary" href="<?php echo e(route('admin.program.show',$program->program_id)); ?>">
                                        <i class="mdi mdi-eye mdi-24px mx-0"></i>
                                    </a>
                                    <a class="btn btn-info" href="<?php echo e(route('admin.program.edit',$program->program_id)); ?>">
                                        <i class="mdi mdi-pencil mdi-24px mx-0"></i>
                                    </a>
                                    <form action="<?php echo e(route('admin.program.destroy',$program->program_id)); ?>" method="POST" class="d-inline-block">
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
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/admin/program/index.blade.php ENDPATH**/ ?>