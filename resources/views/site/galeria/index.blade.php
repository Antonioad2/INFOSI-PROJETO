@extends('site.galeria.layout.principal')
@section('content-galeria')


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

      

        <!-- Header Section Start -->
        @include('site._parcial.header')

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
                            Galeria
                        </li>
                    </ul>
                    <h1 class="wow fadeInUp" data-wow-delay=".5s">Galeria</h1>
                </div>
            </div>
        </div>

        <!--<< Gallery Section Start >>-->
        <div class="gallery-section-3 fix section-padding">
            <div class="container">
                <div class="galley-wrapper-2">
                    <div class="gallery-items">
                        <div class="g-items">
                            <img src="{{ url('assets/user/img/gallery/g-14.jpg')}}" alt="ga-img">
                            <div class="icon-box">
                                <a href="{{ url('assets/user/img/gallery/g-14.jpg')}}" class="icon img-popup-2">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                            <div class="mask"></div>
                            <div class="mask-second"></div>
                        </div>
                        <div class="g-items">
                            <img src="{{ url('assets/user/img/gallery/g-15.jpg')}}" alt="ga-img">
                            <div class="icon-box">
                                <a href="{{ url('assets/user/img/gallery/g-15.jpg')}}" class="icon img-popup-2">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                            <div class="mask"></div>
                            <div class="mask-second"></div>
                        </div>
                        <div class="g-items">
                            <img src="{{ url('assets/user/img/gallery/g-16.jpg')}}" alt="ga-img">
                            <div class="icon-box">
                                <a href="{{ url('assets/user/img/gallery/g-16.jpg')}}" class="icon img-popup-2">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                            <div class="mask"></div>
                            <div class="mask-second"></div>
                        </div>
                    </div>
                    <div class="gallery-items gallery-items-two">
                        <div class="g-items">
                            <img src="{{ url('assets/user/img/gallery/g-17.jpg')}}" alt="ga-img">
                            <div class="icon-box">
                                <a href="{{ url('assets/user/img/gallery/g-17.jpg')}}" class="icon img-popup-2">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                            <div class="mask"></div>
                            <div class="mask-second"></div>
                        </div>
                        <div class="g-items">
                            <img src="{{ url('assets/user/img/gallery/g-18.jpg')}}" alt="ga-img">
                            <div class="icon-box">
                                <a href="{{ url('assets/user/img/gallery/g-18.jpg')}}" class="icon img-popup-2">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                            <div class="mask"></div>
                            <div class="mask-second"></div>
                        </div>
                    </div>
                    <div class="gallery-items gallery-items-three">
                        <div class="g-items">
                            <img src="{{ url('assets/user/img/gallery/g-19.jpg')}}" alt="ga-img">
                            <div class="icon-box">
                                <a href="{{ url('assets/user/img/gallery/g-19.jpg')}}" class="icon img-popup-2">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                            <div class="mask"></div>
                            <div class="mask-second"></div>
                        </div>
                        <div class="g-items">
                            <img src="{{ url('assets/user/img/gallery/g-20.jpg')}}" alt="ga-img">
                            <div class="icon-box">
                                <a href="{{ url('assets/user/img/gallery/g-20.jpg')}}" class="icon img-popup-2">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                            <div class="mask"></div>
                            <div class="mask-second"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

     

     
@endsection