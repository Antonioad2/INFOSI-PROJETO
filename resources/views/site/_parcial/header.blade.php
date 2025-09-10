<header class="header-section">
                <!-- Offcanvas Area Start -->
                <div class="fix-area">
                    <div class="offcanvas__info">
                        <div class="offcanvas__wrapper">
                            <div class="offcanvas__content">
                                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                                    <div class="offcanvas__logo">
                                        <a href="index.html">
                                            <img src="{{ url('assets/user/img/logo/black-logo.svg')}}" alt="logo-img">
                                        </a>
                                    </div>
                                    <div class="offcanvas__close">
                                        <button><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <p class="text d-none d-xl-block">
                                    Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                                </p>
                                <div class="mobile-menu fix mb-3"></div>
                                <div class="offcanvas__contact">
                                    <h4>Informações de Contato</h4>
                                    <ul>
                                        <li class="d-flex align-items-center">
                                            <div class="offcanvas__contact-icon"><i class="fal fa-map-marker-alt"></i></div>
                                            <div class="offcanvas__contact-text">
                                                <a target="_blank" href="#">Rua Principal, Luanda, Angola</a>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <div class="offcanvas__contact-icon mr-15"><i class="fal fa-envelope"></i></div>
                                            <div class="offcanvas__contact-text">
                                                <a href="mailto:info@example.com"><span class="mailto:info@example.com">info@example.com</span></a>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <div class="offcanvas__contact-icon mr-15"><i class="fal fa-clock"></i></div>
                                            <div class="offcanvas__contact-text">
                                                <a target="_blank" href="#">Segunda-Sexta, 09h-17h</a>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <div class="offcanvas__contact-icon mr-15"><i class="far fa-phone"></i></div>
                                            <div class="offcanvas__contact-text">
                                                <a href="tel:+244923456789">+244 923 456 789</a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="header-button mt-4">
                                        <a href="contact.html" class="theme-btn text-center">
                                            <span>Solicitar Orçamento<i class="fa-solid fa-arrow-right-long"></i></span>
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
    
            {{-- <div class="header-top-section style-two">
                <div class="container-fluid">
                    <div class="header-top-wrapper style-2">
                        <ul class="contact-list">
                            <li>
                                <i class="fas fa-envelope"></i>
                                <a href="mailto:info@example.com" class="link">infosi@gov.ao</a>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                Martires. Luanda, Angola
                            </li>
                        </ul>
                        <div class="header-top-right">
                            <ul class="top-list">
                                <li><a href="contact.html">Ajuda</a></li>
                                <li><a href="contact.html">Suporte</a></li>
                                <li><a href="contact.html">Contacto</a></li>
                            </ul>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div id="header-sticky" class="header-3">
                <div class="container-fluid">
                    <div class="mega-menu-wrapper">
                        <div class="header-main">
                            <div class="header-left">
                                <div class="logo">
                                    <a href="{{route('site.home')}}" class="header-logo-1">
                                        <img src="{{ url('assets/user/img/logo/white-logo-2.svg')}}" alt="logo-img">
                                    </a>
                                    <a href="index.html" class="header-logo-2">
                                        <img src="{{ url('assets/user/img/logo/black-logo.svg')}}" alt="logo-img">
                                    </a>
                                </div>
                                <div class="mean__menu-wrapper">
                                    <div class="main-menu">
                                    @include('site._parcial.menu')
                                    </div>
                                </div>
                            </div>
                            <div class="header-right d-flex justify-content-end align-items-center">
                                <div class="icon-items">
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="content">
                                        <p>Liga Para Nós</p>
                                        <h6><a href="tel:+9288009850">+92 (8800) - 9850</a></h6>
                                    </div>
                                </div>
                               {{-- <a href="#0" class="search-trigger search-icon"><i class="fa-regular fa-magnifying-glass"></i></a> --}}
                                <div class="header-button">
                                    <a href="{{ route('site.reservation') }}" class="theme-btn">
                                        Encontre seu carro
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
            </div>
        </header>
