<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="USOFTS CO">
    <title>Al-khuory</title>

{{--    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" >--}}

    <!-- google fonts -->

    <!-- sweet alert -->
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.min.css') }}" />

    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="preload" href="{{asset('assets/css/fonts/dm.css')}}" as="style" onload="this.rel='stylesheet'">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@200;300;400&display=swap" rel="stylesheet">
</head>

<body  @if(App::getLocale() == 'ar') style="   font-family: 'Noto Kufi Arabic', sans-serif; @endif " >

<div class="content-wrapper">
    @include('layouts.header')
    <!-- /header -->
    @yield('content')
    <!-- /section -->
</div>
<!-- /.content-wrapper -->
@include('layouts.footer')

<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

</body>


</html>

<!-- jquery 3.6.4 -->
<script src="{{ asset('assets/js/jquery-3-6-4.min.js') }}"></script>
{{--<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>--}}
<!-- bootstrap 5.3 -->
{{--<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>--}}

<!-- sweet alert -->
<script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>

<!-- iconify -->
<script src="{{ asset('assets/js/iconify.min.js') }}"></script>

<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/theme.js')}}"></script>

<script>
    function swalMessage (ntficon,messagetoshow) // used to show the notification messages --- "ntficon" receives the icon that needed to show with the message --- "messagetoshow" receives the message itself.
    {
        Swal.fire({
            icon: ntficon,
            text: messagetoshow,
            toast: true,
            position: 'top-end',
            timer: 3000,
            timerProgressBar: true,
            showConfirmButton: false,
            customClass: {
                confirmButton: 'btn btn-primary',
            },
            showClass: {
                popup: 'swal2-noanimation',
                backdrop: 'swal2-noanimation'
            },

        })
    }

    @if(session()->has('flash_icon') && session()->has('flash_message'))
    swalMessage("{{ session('flash_icon') }}", "{{ session('flash_message') }}");
    {{ session()->forget('flash_icon') }}
    {{ session()->forget('flash_message') }}
    @endif

</script>

@stack('script')
