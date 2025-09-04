<!DOCTYPE html>
<html lang="pt">
<head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="pixydrops">
        <meta name="description" content="Remons - Booking Rental HTML Template">
        <!-- ======== Page title ============ -->
        <title>Remons - Booking Rental HTML Template</title>
        <!--<< Favcion >>-->
        <link rel="shortcut icon" href="{{ url('assets/user/img/favicon.png')}}">
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="{{ url('assets/user/css/bootstrap.min.css')}}">
        <!--<< All Min Css >>-->
        <link rel="stylesheet" href="{{ url('assets/user/css/all.min.css')}}">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="{{ url('assets/user/css/animate.css')}}">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="{{ url('assets/user/css/magnific-popup.css')}}">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="{{ url('assets/user/css/meanmenu.css')}}">
        <!--<< DatePicker.css >>-->
        <link rel="stylesheet" href="{{ url('assets/user/css/datepickerboot.css')}}">
        <!--<< Swiper Bundle.css >>-->
        <link rel="stylesheet" href="{{ url('assets/user/css/swiper-bundle.min.css')}}">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="{{ url('assets/user/css/nice-select.css')}}">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="{{ url('assets/user/css/main.css')}}">
    </head>
    <body>
<body>
    @include('site._parcial.header')

    <main class="nxl-container">
        @yield('content-galeria')
    <!-- Footer Section Start -->
    @include('site._parcial.footer')
    </main><!--<< All JS Plugins >>-->


        <script src="{{ url('assets/user/js/jquery-3.7.1.min.js')}}"></script>
        <!--<< Viewport Js >>-->
        <script src="{{ url('assets/user/js/viewport.jquery.js')}}"></script>
        <!--<< Bootstrap Js >>-->
        <script src="{{ url('assets/user/js/bootstrap.bundle.min.js')}}"></script>
        <!--<< Nice Select Js >>-->
        <script src="{{ url('assets/user/js/jquery.nice-select.min.js')}}"></script>
        <!--<< Waypoints Js >>-->
        <script src="{{ url('assets/user/js/jquery.waypoints.js')}}"></script>
        <!--<< Counterup Js >>-->
        <script src="{{ url('assets/user/js/jquery.counterup.min.js')}}"></script>
        <!--<< Datepicker Js >>-->
        <script src="{{ url('assets/user/js/bootstrap-datepicker.js')}}"></script>
        <!--<< Swiper Slider Js >>-->
        <script src="{{ url('assets/user/js/swiper-bundle.min.js')}}"></script>
        <!--<< MeanMenu Js >>-->
        <script src="{{ url('assets/user/js/jquery.meanmenu.min.js')}}"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="{{ url('assets/user/js/jquery.magnific-popup.min.js')}}"></script>
        <!--<< GSAP Animation Js >>-->
        <script src="{{ url('assets/user/js/animation.js')}}"></script>
        <!--<< Wow Animation Js >>-->
        <script src="{{ url('assets/user/js/wow.min.js')}}"></script>
        <!--<< Main.js >>-->
        <script src="{{ url('assets/user/js/main.js')}}"></script>
</body>
</html>