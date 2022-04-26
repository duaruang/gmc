<!DOCTYPE html>
<html lang="en">

<head>
    @include('include/head')
    @stack('style')
    <style>
        .badge.bg-success a{
            color:#fff;
        }
    </style>
</head>

<body>
        <header id="header" class="header">
			@include('include/header')
        </header>

        @yield('content')

        <footer class="bg-footer" style="background-image: url('{{ asset('assets/images/image1.png') }}'); ">
            @include('include/footer')
        </footer>
        
        
        @include('include/scripts')
        @stack('script')
		
</html>