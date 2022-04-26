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
                    <a class="btn btn-primary" href="<?php echo e(route('admin.program.create')); ?>">
                        <i class="mdi mdi-plus mdi-18px"></i>
                    </a>
                </div>
                <form action="/admin/export/donasi" method="post">
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
                                <th>Tanggal</th>
                                <th>Nama</th>
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
                                <td><?php echo e($donation->user->name); ?></td>
                                <td><?php echo e($donation->program->title); ?></td>
                                <td><?php echo e($donation->bank->bank); ?></td>
                                <td>Rp. <?php echo e(number_format($donation->amount,0,',','.')); ?></td>
                                <td>
                                    <?php if($donation->status): ?>
                                    <label class="badge badge-success">Lunas</label>
                                    <?php else: ?>
                                    <form action="<?php echo e(route('admin.donation.approve',$donation->donasi_id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <label class="badge badge-danger label-approve" style="cursor: pointer">Belum Lunas</label>
                                    </form>
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
    
    $('.label-approve').on('click',function(){
        var form = $(this).parents('form');
        Swal.fire({
            title: 'Apakah anda yakin ingin mengkonfirmasi pembayaran ini?',
            text: "Anda tidak akan bisa memulihkanya kembali!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, konfirmasi!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.value) {
                showLoading();
                form.submit();
            }
        });
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/admin/donation/index.blade.php ENDPATH**/ ?>