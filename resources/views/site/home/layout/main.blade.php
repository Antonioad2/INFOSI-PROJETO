<!DOCTYPE html>
<html lang="pt">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="pixydrops">
    <meta name="description" content="Remons - Template HTML para Aluguel de Carros">
    <!-- ======== Título da Página ============ -->
    <title>Remons - Template HTML para Aluguel de Carros</title>
    <!--<< Favicon >>-->
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
    <!--<< Nice Select.css>>-->
    <link rel="stylesheet" href="{{ url('assets/user/css/nice-select.css')}}">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="{{ url('assets/user/css/main.css')}}">
    <link rel="stylesheet" href="{{ url('assets/user/css/home.css')}}">
    
</head>
<body>

    <main class="nxl-container">
        @yield('content-home')
    <!-- Footer Section Start -->
    @include('site._parcial.footer')
    </main>

    <!--<< All JS Plugins >>-->
    <script src="{{ url('assets/user/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{ url('assets/user/js/viewport.jquery.js')}}"></script>
    <script src="{{ url('assets/user/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ url('assets/user/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ url('assets/user/js/jquery.waypoints.js')}}"></script>
    <script src="{{ url('assets/user/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ url('assets/user/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{ url('assets/user/js/swiper-bundle.min.js')}}"></script>
    <script src="{{ url('assets/user/js/jquery.meanmenu.min.js')}}"></script>
    <script src="{{ url('assets/user/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ url('assets/user/js/animation.js')}}"></script>
    <script src="{{ url('assets/user/js/wow.min.js')}}"></script>
    <script src="{{ url('assets/user/js/main.js')}}"></script>
    <script src="{{ asset('assets/js/date-handle.js') }}"></script>
</body>
</html>