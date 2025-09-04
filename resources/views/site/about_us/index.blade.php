@extends('site.about_us.layout.principal')
@section('content-about_us')
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
                                <button>
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <p class="text d-none d-xl-block">
                            Nullam dignissim, ante scelerisque the  is euismod fermentum odio sem semper the is erat, a feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
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
                                        <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="mailto:info@example.com"><span class="mailto:info@example.com">info@example.com</span></a>
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



        <!-- Search Area Start -->
        <div class="search-wrap">
            <div class="search-inner">
                <i class="fas fa-times search-close" id="search-close"></i>
                <div class="search-cell">
                    <form method="get">
                        <div class="search-field-holder">
                            <input type="search" class="main-search-input" placeholder="Search...">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--<< Breadcrumb Section Start >>-->
              <div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset('assets/user/img/bg-header-banner.jpg') }}')">
            <div class="container">
                <div class="page-heading">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="{{route('site.home')}}">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                        </li>
                        <li>
                            Sobre Nós
                        </li>
                    </ul>
                    <h1 class="wow fadeInUp" data-wow-delay=".5s">Sobre Nós</h1>
                </div>
            </div>
        </div>

        <!-- About Section Start -->
        <section class="about-section fix section-padding">
            <div class="container">
                <div class="about-wrapper-2">
                    <div class="row g-4">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="about-image">
                                <img src="{{ url('assets/user/img/about/01.png')}}" alt="about-image">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <div class="section-title">
                                    <img src="{{ url('assets/user/img/sub-icon.png')}}" alt="icon-img" class="wow fadeInUp">
                                    <span class="wow fadeInUp" data-wow-delay=".2s">Get to know us</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                        Trusted & Leading in 
                                        Car Rent Services
                                    </h2>
                                </div>
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".6s">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised.
                                </p>
                                <div class="about-list-wrapper">
                                    <div class="about-list-items wow fadeInUp" data-wow-delay=".3s">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-arrow-right"></i>
                                                Nsectetur cing elit
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-arrow-right"></i>
                                                Suspe ndisse suscit sagittis leo
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-arrow-right"></i>
                                                If you are going to use pasage
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-arrow-right"></i>
                                                Generators on the to repeatY
                                            </li>
                                        </ul>
                                        <a href="about.html" class="theme-btn">Discover More</a>
                                    </div>
                                    <div class="author-items wow fadeInUp" data-wow-delay=".5s">
                                        <div class="icon">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                        <p>Need help? Talk to an <br> Expert</p>
                                        <h6><a href="tel:9288009850">+92 (8800) - 9850</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section Start -->
        <section class="team-section fix section-padding pt-0">
            <div class="container">
                <div class="section-title text-center">
                    <img src="{{ url('assets/user/img/sub-icon.png')}}" alt="icon-img" class="wow fadeInUp">
                    <span class="wow fadeInUp" data-wow-delay=".2s">Our expert people</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">
                        Meet Our Professional <br>
                        Team Members
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="team-card-items">
                            <div class="border-shape">
                                <img src="{{ url('assets/user/img/team/border.png')}}" alt="img">
                            </div>
                            <div class="team-image">
                                <img src="{{ url('assets/user/img/team/team-01.jpg')}}" alt="team-img">
                            </div>
                            <div class="team-content">
                                <h3><a href="about.html">Mike Hardson</a></h3>
                                <p>manager</p>
                                <div class="social-icon d-flex align-items-center justify-content-center">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="team-card-items">
                            <div class="border-shape">
                                <img src="{{ url('assets/user/img/team/border.png')}}" alt="img">
                            </div>
                            <div class="team-image">
                                <img src="{{ url('assets/user/img/team/team-02.jpg')}}" alt="team-img">
                            </div>
                            <div class="team-content">
                                <h3><a href="about.html">Aleesha Brown</a></h3>
                                <p>manager</p>
                                <div class="social-icon d-flex align-items-center justify-content-center">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="team-card-items">
                            <div class="border-shape">
                                <img src="{{ url('assets/user/img/team/border.png')}}" alt="img">
                            </div>
                            <div class="team-image">
                                <img src="{{ url('assets/user/img/team/team-03.jpg')}}" alt="team-img">
                            </div>
                            <div class="team-content">
                                <h3><a href="about.html">David Jhonson</a></h3>
                                <p>manager</p>
                                <div class="social-icon d-flex align-items-center justify-content-center">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       

        <!-- Testimonial Section Start -->
        
        <!-- Car Sale Section Start -->
        <section class="car-sale-section fix section-padding pt-0">
            <div class="container-fluid">
                <div class="car-sale-wrapper">
                    <div class="sale-shape">
                        <img src="{{ url('assets/user/img/bg-shape-saleoff.png')}}" alt="shape-img">
                    </div>
                    <div class="badge-shape">
                        <img src="{{ url('assets/user/img/bagde.png')}}" alt="shape-img">
                    </div>
                    <div class="car-shape">
                        <img src="{{ url('assets/user/img/car.png')}}" alt="img">
                    </div>
                    <div class="car-sale-content">
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">Sale 50% Off</h2>
                        <h3 class="wow fadeInUp" data-wow-delay=".5s">on all rental cars for 1 month</h3>
                        <a href="car-details.html" class="theme-btn bg-header wow fadeInUp" data-wow-delay=".7s">Book Your Car</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Brand Section Start -->
        <div class="brand-wrapper style-2 pb-80">
            <div class="array-button">
                <button class="array-prev-2"><i class="far fa-chevron-left"></i></button>
                <button class="array-next-2"><i class="far fa-chevron-right"></i></button>
            </div>
            <div class="container">
                <div class="swiper brand-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-image style-color">
                                <img src="{{ url('assets/user/img/brand/01.png')}}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image style-color">
                                <img src="{{ url('assets/user/img/brand/02.png')}}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image style-color">
                                <img src="{{ url('assets/user/img/brand/03.png')}}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image style-color">
                                <img src="{{ url('assets/user/img/brand/04.png')}}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image style-color">
                                <img src="{{ url('assets/user/img/brand/05.png')}}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image style-color">
                                <img src="{{ url('assets/user/img/brand/06.png')}}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        
     @endsection