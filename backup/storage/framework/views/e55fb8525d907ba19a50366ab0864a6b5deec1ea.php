<?php $__env->startSection('content'); ?>
<!--Page Header Start-->
<section class="page-header" style="background-image: url(<?php echo e(asset('asting/images/backgrounds/page-header-bg.jpg')); ?>);">
    <div class="container">
        <div class="page-header__inner">
            <h2>Invoice</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li>Invoice</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Campaign Details Start-->
<section class="campaign-details">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="text-center mb-4">
                    <h4>Terimakasih</h4>
                    <span>Donasi Anda akan di proses</span>
                </div>
                <h4 class="text-center mb-2">Invoice Donasi</h4>
                <div class="d-flex mb-2 justify-content-between">
                    <div>Tanggal</div>
                    <div class="font-weight-bold">
                        <?php echo e(\Carbon\Carbon::parse($donasi->created_at)->format('d-m-Y')); ?>

                    </div>
                </div>
                <div class="d-flex mb-2 justify-content-between">
                    <div>Program</div>
                    <div class="font-weight-bold">
                        <?php echo e($donasi->program->title); ?>

                    </div>
                </div>
                <div class="d-flex mb-2 justify-content-between">
                    <div>Bank</div>
                    <div class="font-weight-bold">
                        <?php echo e($donasi->bank->bank); ?>

                    </div>
                </div>
                <div class="d-flex mb-2 justify-content-between">
                    <div>Rekening Bank</div>
                    <div class="font-weight-bold">
                        <?php echo e($donasi->bank->number); ?>

                    </div>
                </div>
                <div class="d-flex mb-2 justify-content-between">
                    <div>Atas Nama</div>
                    <div class="font-weight-bold">
                        <?php echo e($donasi->bank->name); ?>

                    </div>
                </div>
                <div class="d-flex mb-2 justify-content-between">
                    <div>Jumlah Donasi</div>
                    <div class="font-weight-bold">
                        <?php echo e(number_format($donasi->amount,0,',','.')); ?>

                    </div>
                </div>
                <div class="text-center my-4">
                    Silahkan transfer sesuai dengan jumlah dan rekening yang tertera di inovoice Anda
                </div>
                <div>
                    <a href="#" class="btn btn-block btn-success">
                        <i class="fa fa-print"></i> Cetak Invoice
                    </a>
                </div>
            </div
                </div>
        </div>
    </div>
</section>
<!--Campaign Details End-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.asting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/asting/program/invoice.blade.php ENDPATH**/ ?>