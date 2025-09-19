<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend') }}/image/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{ asset('frontend') }}/image/favicon.ico" type="image/x-icon">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/pe-helper.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/all.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:wght@700;900&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link href="{{ asset('frontend') }}/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/leaflet.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/aos.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/style.css">

    <title>@yield('title', 'Fungi')</title>

    {{-- Page-specific CSS --}}
    @stack('styles')
</head>

<body data-bs-spy="scroll" data-bs-target="#site-navbar" class="home-vcard">

    <!-- PRE LOADER -->
    @include('frontend.partials.preloader')

    <!-- SITE HEADER -->
    @include('frontend.partials.header')
    

    <div class="container">
        <div class="box-wrapper">

            {{-- main content --}}
            @yield('content')

            <!-- SITE FOOTER -->
		    @include('frontend.partials.footer')

        </div> <!-- .box-wrapper -->
    </div> <!-- .container -->

    <script src="{{ asset('frontend') }}/js/jquery.js"></script>
    <script src="{{ asset('frontend') }}/js/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/js/swiper-bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/js/leaflet.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('frontend') }}/js/aos.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.preloadinator.min.js"></script>
    <script src="{{ asset('frontend') }}/js/vanilla-tilt.min.js"></script>
    <script src="{{ asset('frontend') }}/js/typer.js"></script>
    <script src="{{ asset('frontend') }}/js/magicmouse.js"></script>
    <script src="{{ asset('frontend') }}/js/script.js"></script>

    {{-- Page-specific JS --}}
    @stack('scripts')
</body>

</html>
