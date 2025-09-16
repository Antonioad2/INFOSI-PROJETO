<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<!-- Mirrored from pixydrops.com/remons/car-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Jul 2025 11:19:52 GMT -->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="pixydrops">
    <meta name="description" content="ANGOCARS - Aluguel de Carros Em Angola">
    <!-- ======== Page title ============ -->
    <title>ANGOCARS - Aluguel de Carros Em Angola</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="{{ url('assets/user/img/favicon.png') }}">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="{{ url('assets/user/css/bootstrap.min.css') }}">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="{{ url('assets/user/css/all.min.css') }}">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="{{ url('assets/user/css/animate.css') }}">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="{{ url('assets/user/css/magnific-popup.css') }}">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="{{ url('assets/user/css/meanmenu.css') }}">
    <!--<< DatePicker.css >>-->
    <link rel="stylesheet" href="{{ url('assets/user/css/datepickerboot.css') }}">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="{{ url('assets/user/css/swiper-bundle.min.css') }}">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="{{ url('assets/user/css/nice-select.css') }}">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="{{ url('assets/user/css/main2.css') }}">
    <link rel="stylesheet" href="{{ url('assets/user/css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="R" class="letters-loading">
                    R
                </span>
                <span data-text-preloader="E" class="letters-loading">
                    E
                </span>
                <span data-text-preloader="M" class="letters-loading">
                    M
                </span>
                <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
                <span data-text-preloader="N" class="letters-loading">
                    N
                </span>
                <span data-text-preloader="S" class="letters-loading">
                    S
                </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Back To Top Start -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    @include('site._parcial.header')
    @yield('content-car_details')
    @include('site._parcial.footer')

    <!--<< All JS Plugins >>-->
    <script src="{{ url('assets/user/js/jquery-3.7.1.min.js') }}"></script>
    <!--<< Viewport Js >>-->
    <script src="{{ url('assets/user/js/viewport.jquery.js') }}"></script>
    <!--<< Bootstrap Js >>-->
    <script src="{{ url('assets/user/js/bootstrap.bundle.min.js') }}"></script>
    <!--<< Nice Select Js >>-->
    <script src="{{ url('assets/user/js/jquery.nice-select.min.js') }}"></script>
    <!--<< Waypoints Js >>-->
    <script src="{{ url('assets/user/js/jquery.waypoints.js') }}"></script>
    <!--<< Counterup Js >>-->
    <script src="{{ url('assets/user/js/jquery.counterup.min.js') }}"></script>
    <!--<< Datepicker Js >>-->
    <script src="{{ url('assets/user/js/bootstrap-datepicker.js') }}"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="{{ url('assets/user/js/swiper-bundle.min.js') }}"></script>
    <!--<< MeanMenu Js >>-->
    <script src="{{ url('assets/user/js/jquery.meanmenu.min.js') }}"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="{{ url('assets/user/js/jquery.magnific-popup.min.js') }}"></script>
    <!--<< GSAP Animation Js >>-->
    <script src="{{ url('assets/user/js/animation.js') }}"></script>
    <!--<< Wow Animation Js >>-->
    <script src="{{ url('assets/user/js/wow.min.js') }}"></script>
    <!--<< Main.js >>-->
    <script src="{{ url('assets/user/js/main.js') }}"></script>
</body>

<!-- Mirrored from pixydrops.com/remons/car-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Jul 2025 11:19:57 GMT -->

</html>
