<?php $__env->startSection('title'); ?>
Donatur
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">List Donatur</h4>
                    
                    
                </div>
                <form action="/admin/export/donatur" method="post">
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
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No Hp</th>
                                <th>Alamat</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $donators; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donator): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($donator->name); ?></td>
                                <td><?php echo e($donator->email); ?></td>
                                <td><?php echo e($donator->phone); ?></td>
                                <td><?php echo e($donator->address); ?></td>
                                
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
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/admin/donator/index.blade.php ENDPATH**/ ?>