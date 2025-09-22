<!-- Header -->
<header class="header header-four">
    <div class="container">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="{{ route('home')}}" class="navbar-brand logo">
                    <img src="{{ url('assets/user/img/logo-white.svg') }}" class="img-fluid white-logo" alt="Logo">
                    <img src="{{ url('assets/user/img/logo.svg') }}" class="img-fluid dark-logo" alt="Logo">
                </a>
                <a href="{{ route('home')}}" class="navbar-brand logo-small">
                    <img src="{{ url('assets/user/img/logo-small.png') }}" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="index.html" class="menu-logo">
                        <img src="{{ url('assets/user/img/logo.svg') }}" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
                </div>
                <ul class="main-nav">
                    <li class="has-submenu megamenu active">
                        <a href="{{ route('home')}}">Início </a>
                        
                    </li>
                    <li class="has-submenu">
                        <a href="{{ route('site.car-list') }}">Carros <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="listing-grid.html">Listing Grid</a></li>
                            <li><a href="{{ route('site.car-list') }}">Listing List</a></li>
                            <li><a href="listing-map.html">Listing With Map</a></li>
                            <li><a href="listing-details.html">Listing Details</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Serviços <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="contact-us.html">Contact</a></li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Authentication</a>
                                <ul class="submenu">
                                    <li><a href="register.html">Cadastra-se</a></li>
                                    <li><a href="login.html">Conecte-se</a></li>
                                    <li><a href="forgot-password.html">Forgot Password</a></li>
                                    <li><a href="reset-password.html">Reset Password</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Booking</a>
                                <ul class="submenu">
                                    <li><a href="booking-checkout.html">Booking Checkout</a></li>
                                    <li><a href="booking.html">Booking</a></li>
                                    <li><a href="invoice-details.html">Invoice Details</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="javascript:void(0);">Error Page</a>
                                <ul class="submenu">
                                    <li><a href="error-404.html">404 Error</a></li>
                                    <li><a href="error-500.html">500 Error</a></li>
                                </ul>
                            </li>
                          
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="{{route('site.blog')}}">Ofertas <i class="fas fa-chevron-down"></i></a>
                       
                    </li>

                    <li class="has-submenu">
                        <a href="{{route('site.about-us')}}">Sobre Nós </a>                   
                    </li>

                   

                    {{-- Dashboard --}}

                    <li class="login-link">
                        <a href="register.html">Cadastra-se</a>
                    </li>
                    <li class="login-link">
                        <a href="login.html">Conecte-se</a>
                    </li>
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                <li class="nav-item user-link">
                    <a class="nav-link btn-secondary btn d-inline-flex align-items-center" href="login.html"><i
                            class="bx bx-user me-1"></i>Conecte-se</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link header-reg  d-inline-flex align-items-center" href="register.html"><span><i
                                class="bx bx-lock"></i></span>Cadastra-se</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!-- /Header -->
