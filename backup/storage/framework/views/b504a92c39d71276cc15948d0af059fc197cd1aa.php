<script src="<?php echo e(asset('assets/vendor/sweetalert2/sweetalert2.min.js')); ?>"></script>
<?php if(session()->has('success')): ?>
<script>
    Swal.fire({
        title: 'Success',
        icon: 'success',
        text: "<?php echo e(session('success')); ?>",
        position: 'topRight'
    });
</script>
<?php endif; ?>

<?php if(session()->has('warning')): ?>
<script>
    Swal.fire({
        title: 'Warning',
        icon: 'warning',
        text: "<?php echo e(session('warning')); ?>",
        position: 'topRight'
    });
</script>
<?php endif; ?>

<?php if(session()->has('info')): ?>
<script>
    Swal.fire({
        title: 'Info',
        icon: 'info',
        text: "<?php echo e(session('info')); ?>",
        position: 'topRight'
    });
</script>
<?php endif; ?>

<?php if(session()->has('error')): ?>
<script>
    Swal.fire({
        title: 'Error',
        icon: 'error',
        text: "<?php echo e(session('error')); ?>",
        position: 'topRight'
    });
</script>
<?php endif; ?>

<script>
    $('.btn-delete').on('click',function(e){
        e.preventDefault();
        var form = $(this).parents('form');
        Swal.fire({
            title: 'Apakah anda yakin ingin menghapus data ini?',
            text: "Anda tidak akan bisa memulihkanya kembali!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.value) {
                form.submit();
            }
        });
    });

    $('.btn-submit').click(function(){
        showLoading();
    });

    $('.coming').click(function(){
        Swal.fire('Coming Soon!','','warning');
    });

    $('.form').on('submit',function(){
        showLoading();
    });

    function showLoading(){
        Swal.fire({
            title: 'Please Wait !',
            showConfirmButton: false,
            allowOutsideClick: false,
            onBeforeOpen: () => {
                Swal.showLoading()
            },
        });
    }

    function hideLoading(){
        swal.close();
    }
</script>
<?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/vendor/swal/js/swal.blade.php ENDPATH**/ ?>