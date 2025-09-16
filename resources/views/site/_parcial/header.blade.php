<!-- Offcanvas Area Start -->
<div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="{{route('site.home')}}">
                           <img src="{{ url('assets/user/img/logo/1.png') }}" width="140px" alt="Logo">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <p class="text d-none d-xl-block">
                    Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a feugiat
                    leo urna eget eros. Duis Aenean a imperdiet risus.
                </p>
                <div class="mobile-menu fix mb-3"></div>
                <div class="offcanvas__contact">
                    <h4>Contact Info</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">Mutamba</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="mailto:info@example.com"><span
                                        class="mailto:info@example.com">geral@angocars.com</span></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:+11002345909">+11002345909</a>
                            </div>
                        </li>
                    </ul>
                    <div class="header-button mt-4">
                        <a href="contact.html" class="theme-btn text-center">
                            <span>Get A Quote<i class="fa-solid fa-arrow-right-long"></i></span>
                        </a>
                    </div>
                    <div class="social-icon d-flex align-items-center">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>

<!-- Header Top Section Start -->
<div class="header-top-section">
    <div class="container-fluid">
        <div class="header-top-wrapper">
            <ul class="contact-list">
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:info@example.com" class="link">geral@angocars.com</a>
                </li>
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    Mutamba, Luanda Angola
                </li>
            </ul>
            <div class="header-top-right">
                <ul class="top-list">
                    <li><a href="contact.html">Conecte-se</a></li>
                    <li style="background: #ff3726"><a href="contact.html">Inscrever-se</a></li>
                </ul>
                <div class="social-icon d-flex align-items-center">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Header Section Start -->
<header id="header-sticky" class="header-1">
    <div class="container-fluid">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <div class="header-left">
                    <div class="logo">
                        <a href="{{route('site.home')}}" class="header-logo">
                            <img src="{{ url('assets/user/img/logo/1.png') }}" width="140px" alt="logo-img">
                        </a>
                    </div>
                    <div class="mean__menu-wrapper">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-dropdown active menu-thumb">
                                        <a href="{{route('site.home')}}">
                                            Início
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('site.reservation')}}">Carros</a>
                                        <i class="fas fa-angle-down"></i>
                                        <ul class="submenu">
                                            <li><a href="gallery.html">Detalhes</a></li>
                                            <li><a href="faq.html">Marcas</a></li>
                                            <li><a href="faq.html">Segmento de Carros</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="news.html">
                                            Serviços
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="gallery.html">Motoristas</a></li>
                                            <li><a href="faq.html">Recursos Extras</a></li>
                                        </ul>
                                    </li>
                                    {{-- <li>
                                        <a href="program-details.html">
                                            Blogue
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="car-grid.html">Car Grid</a></li>
                                            <li><a href="car-list.html">Car List</a></li>
                                            <li><a href="car-list-sidebar.html">Car Sidebar</a></li>
                                            <li><a href="car-details.html">Car Details</a></li>
                                        </ul>
                                    </li> --}}
                                    <li>
                                        <a href="news.html">Oferta</a>
                                            <i class="fas fa-angle-down"></i>
                                            <ul class="submenu">
                                                <li><a href="car-grid.html">Oferta Especial</a></li>
                                                <li><a href="car-list.html">Carros em Destaque</a></li>
                                                <li><a href="car-list-sidebar.html">Tipos Populares</a></li>
                                                <li><a href="car-details.html">Contacto</a></li>
                                            </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">Sobre Nós</a>
                                            <i class="fas fa-angle-down"></i>
                                        <ul class="submenu">
                                            <li><a href="contact.html">Quem Somos</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="header-right d-flex justify-content-end align-items-center">
                    <div class="icon-items">
                        <div class="icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="content">
                            <p>Call Anytime</p>
                            <h6><a href="tel:+9288009850">+92 (8800) - 9850</a></h6>
                        </div>
                    </div>
                   {{--  <a href="#0" class="search-trigger search-icon"><i
                            class="fa-regular fa-magnifying-glass"></i></a> --}}
                    <div class="header-button">
                        <a href="{{ route('site.reservation') }}" class="header-btn">
                            Find a Car
                        </a>
                    </div>
                    <div class="header__hamburger d-xl-none my-auto">
                        <div class="sidebar__toggle">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
