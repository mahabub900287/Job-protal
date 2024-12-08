<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Job board HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend') }}/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/price_rangs.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/slicknav.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/style.css">
    <style>
        .active {
            color: red !important;
        }
    </style>
</head>

<body>
    {{-- main header --}}
    @include('frontend.partrials.header')

    {{-- breadcrumb --}}
    {{-- @include('include.breadcrumb') --}}

    <main>
        <!-- Main Content Area -->
        @yield('main-content')
    </main>

    {{-- footer --}}
    @include('frontend.partrials.footer')

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{ asset('assets/frontend') }}/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('assets/frontend') }}/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('assets/frontend') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets/frontend') }}/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('assets/frontend') }}/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('assets/frontend') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('assets/frontend') }}/js/slick.min.js"></script>
    <script src="{{ asset('assets/frontend') }}/js/price_rangs.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('assets/frontend') }}/js/wow.min.js"></script>
    <script src="{{ asset('assets/frontend') }}/js/animated.headline.js"></script>
    <script src="{{ asset('assets/frontend') }}/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ asset('assets/frontend') }}/js/jquery.scrollUp.min.js"></script>
    <script src="{{ asset('assets/frontend') }}/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('assets/frontend') }}/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="{{ asset('assets/frontend') }}/js/contact.js"></script>
    <script src="{{ asset('assets/frontend') }}/js/jquery.form.js"></script>
    <script src="{{ asset('assets/frontend') }}/js/jquery.validate.min.js"></script>
    <script src="{{ asset('assets/frontend') }}/js/mail-script.js"></script>
    <script src="{{ asset('assets/frontend') }}/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('assets/frontend') }}/js/plugins.js"></script>
    <script src="{{ asset('assets/frontend') }}/js/main.js"></script>
    <x-notify.notify></x-notify.notify>
</body>

</html>
