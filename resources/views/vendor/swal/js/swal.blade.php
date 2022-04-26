<script src="{{ asset('assets/vendor/sweetalert2/sweetalert2.min.js') }}"></script>
@if (session()->has('success'))
<script>
    Swal.fire({
        title: 'Success',
        icon: 'success',
        text: "{{ session('success') }}",
        position: 'topRight'
    });
</script>
@endif

@if (session()->has('warning'))
<script>
    Swal.fire({
        title: 'Warning',
        icon: 'warning',
        text: "{{ session('warning') }}",
        position: 'topRight'
    });
</script>
@endif

@if (session()->has('info'))
<script>
    Swal.fire({
        title: 'Info',
        icon: 'info',
        text: "{{ session('info') }}",
        position: 'topRight'
    });
</script>
@endif

@if (session()->has('error'))
<script>
    Swal.fire({
        title: 'Error',
        icon: 'error',
        text: "{{ session('error') }}",
        position: 'topRight'
    });
</script>
@endif

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
