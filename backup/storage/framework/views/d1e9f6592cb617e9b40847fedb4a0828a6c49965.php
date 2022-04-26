<?php $__env->startSection('title'); ?>
Donasi
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">List Donasi</h4>
                </div>
                <p class="card-description"></p>
                <div class="table-responsive">
                    <table class="table datatables">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tanggal</th>
                                <th>Program</th>
                                <th>Bank</th>
                                <th>Jumlah</th>
                                <th>Status</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $donations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($donation->created_at)->format('d F Y')); ?></td>
                                <td><?php echo e($donation->program->title); ?></td>
                                <td><?php echo e($donation->bank->bank); ?></td>
                                <td>Rp. <?php echo e(number_format($donation->amount,0,',','.')); ?></td>
                                <td>
                                    <?php if($donation->status): ?>
                                    <label class="badge badge-success">Lunas</label>
                                    <?php else: ?>
                                    <label class="badge badge-danger">Belum Lunas</label>
                                    <?php endif; ?>
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
<?php echo $__env->make('layout.member', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/member/donation/index.blade.php ENDPATH**/ ?>