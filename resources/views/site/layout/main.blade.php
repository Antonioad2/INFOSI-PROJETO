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
</head>
<body>
    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                <span data-text-preloader="R" class="letters-loading">R</span>
                <span data-text-preloader="E" class="letters-loading">E</span>
                <span data-text-preloader="M" class="letters-loading">M</span>
                <span data-text-preloader="O" class="letters-loading">O</span>
                <span data-text-preloader="N" class="letters-loading">N</span>
                <span data-text-preloader="S" class="letters-loading">S</span>
            </div>
            <p class="text-center">Carregando</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left"><div class="bg"></div></div>
                <div class="col-3 loader-section section-left"><div class="bg"></div></div>
                <div class="col-3 loader-section section-right"><div class="bg"></div></div>
                <div class="col-3 loader-section section-right"><div class="bg"></div></div>
            </div>
        </div>
    </div>

    <!-- Voltar ao Topo Start -->
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
                                    <a href="tel:+244923456789">+244923456789</a>
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
    <div class="offcanvas__overlay"></div>

    <!-- Header Section Start -->
    @include('site.home.header')

    <!-- Search Area Start -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Pesquisar...">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Hero Section Start -->
    <section class="hero-section hero-3 fix">
        <div class="array-button">
            <button class="image-array-left bg-cover" style="background-image: url('assets/user/img/bg-slideshow-03.jpg')">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button class="image-array-right bg-cover" style="background-image: url('assets/user/img/bg-slideshow-03.jpg')">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
        <h6 class="search-text">Alugue o Seu Carro</h6>
        <div class="line-icon">
            <img src="{{ url('assets/user/img/hero/icon.png')}}" alt="img">
        </div>
        <div class="swiper hero-slider-3">
            
            <div class="swiper-wrapper">
                <div class="swiper-slide"> 
                    <div class="hero-image bg-cover" style="background-image: url('{{ asset('assets/user/img/hero/hero-3.jpg') }}')">
                        <div class="line-shape" data-animation="slideInLeft" data-duration="3s" data-delay="2.1s">
                            <img src="{{ url('assets/user/img/hero/line-shape-1.png')}}" alt="shape-img">
                        </div>
                        <div class="line-shape-2" data-animation="slideInLeft" data-duration="3s" data-delay="2.3s">
                            <img src="{{ url('assets/user/img/hero/line-shape-2.png')}}" alt="shape-img">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <div class="hero-content">
                                    <h4 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                        Bem-vindo à Remons Aluguel
                                    </h4>
                                    <h1 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                        Economize Muito <br>
                                        com Aluguel de Carros
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-image bg-cover" style="background-image: url('assets/img/hero/hero-4.jpg')">
                        <div class="line-shape" data-animation="slideInLeft" data-duration="3s" data-delay="2.1s">
                            <img src="{{ url('assets/user/img/hero/line-shape-1.png')}}" alt="shape-img">
                        </div>
                        <div class="line-shape-2" data-animation="slideInLeft" data-duration="3s" data-delay="2.3s">
                            <img src="{{ url('assets/user/img/hero/line-shape-2.png')}}" alt="shape-img">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <div class="hero-content">
                                    <h4 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                        Bem-vindo à Remons Aluguel
                                    </h4>
                                    <h1 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                        Economize Muito <br>
                                        com Aluguel de Carros
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pick Up Location Section Start -->
    <div class="pickup-loaction-area bg-cover" style="background-image: url('assets/img/brand-bg.png')" >
        <div class="container">
            <div class="brand-wrapper pt-80 pb-80">
                <div class="swiper brand-slider">
                    <div class="swiper-wrapper">
                        
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="{{ url('assets/user/img/brand/01.png')}}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="{{ url('assets/user/img/brand/02.png')}}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="{{ url('assets/user/img/brand/03.png')}}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="{{ url('assets/user/img/brand/04.png')}}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="{{ url('assets/user/img/brand/05.png')}}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="{{ url('assets/user/img/brand/06.png')}}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pickup-wrapper wow fadeInUp" data-wow-delay=".4s" style="background-color: #ff3726 ; color: white"  >
                <form action="" class="car-search-form">
                    <div class="row g-4 align-items-end" >
                        <!-- Input Local de levantamento -->
                        <div class="col-lg-3 mb-6">
                            <label class="form-label">Local de Levantamento</label>
                            <input type="text" name="location" class="form-control custom-input" value="{{ old('location') }}" placeholder="Ex: Luanda, Angola">
                        </div>
                        <!-- Input Data e hora de levantamento -->
                        <div class="col-lg-3 mb-6">
                            <label class="form-label">Data e Hora de Levantamento</label>
                            <input type="datetime-local" name="pickup_datetime" class="form-control custom-input" value="{{ old('pickup_datetime', now()->format('Y-m-d\TH:i')) }}" min="{{ now()->format('Y-m-d\TH:i') }}">
                        </div>
                        <!-- Input Data e hora de devolução -->
                        <div class="col-lg-3 mb-6">
                            <label class="form-label">Data e Hora de Devolução</label>
                            <input type="datetime-local" name="dropoff_datetime" class="form-control custom-input" value="{{ old('dropoff_datetime', now()->addDay()->format('Y-m-d\TH:i')) }}" min="{{ now()->format('Y-m-d\TH:i') }}">
                        </div>

                        <!-- Input Tipo de Carro -->
                        <div class="col-lg-3 mb-6">
                            <label class="form-label">Bairro</label>
                            <input type="text" name="location" class="form-control custom-input" value="{{ old('location') }}" placeholder="Ex: Paraiso">

                        </div>
                        <!-- Botão de Enviar -->
                        <div class="col-lg-12 mb-3">
                            <button type="submit" class="btn btn-primary custom-btn w-100">Pesquisar</button>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>

    <!-- Search Booking Section Start -->
    <section class="feature-benefit section section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <img src="{{ url('assets/user/img/sub-icon.png')}}" alt="icon-img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">Nossos Benefícios</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    Por que Escolher a <br>
                    Remons Aluguel
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="feature-benefit-items">
                        <div class="icon-box-shape">
                            <img src="{{ url('assets/user/img/feature-benefit/box-icon-bg1.png')}}" alt="shape-img">
                        </div>
                        <div class="bg-button-shape">
                            <img src="{{ url('assets/user/img/feature-benefit/bg-button-iconbox.png')}}" alt="shape-img">
                        </div>
                        <div class="feature-content">
                            <h4>
                                <a href="car-details.html">
                                    Reservas Mais Fáceis <br>
                                    e Rápidas
                                </a>
                            </h4>
                            <p>Neque porro quisquam est, qui fre dolorem ipsum quia dolor.</p>
                            <div class="icon">
                                <img src="{{ url('assets/user/img/feature-benefit/icon-1.png')}}" alt="icon-img">
                            </div>
                        </div>
                        <div class="feature-button">
                            <a href="car-details.html" class="link-btn">Ver Mais <i class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="feature-benefit-items">
                        <div class="icon-box-shape">
                            <img src="{{ url('assets/user/img/feature-benefit/box-icon-bg2.png')}}" alt="shape-img">
                        </div>
                        <div class="bg-button-shape">
                            <img src="{{ url('assets/user/img/feature-benefit/bg-button-iconbox.png')}}" alt="shape-img">
                        </div>
                        <div class="feature-content">
                            <h4>
                                <a href="car-details.html">
                                    Muitos Locais <br>
                                    de Levantamento
                                </a>
                            </h4>
                            <p>Neque porro quisquam est, qui fre dolorem ipsum quia dolor.</p>
                            <div class="icon">
                                <img src="{{ url('assets/user/img/feature-benefit/icon-2.png')}}" alt="icon-img">
                            </div>
                        </div>
                        <div class="feature-button">
                            <a href="car-details.html" class="link-btn">Ver Mais <i class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="feature-benefit-items">
                        <div class="icon-box-shape">
                            <img src="{{ url('assets/user/img/feature-benefit/box-icon-bg3.png')}}" alt="shape-img">
                        </div>
                        <div class="bg-button-shape">
                            <img src="{{ url('assets/user/img/feature-benefit/bg-button-iconbox.png')}}" alt="shape-img">
                        </div>
                        <div class="feature-content">
                            <h4>
                                <a href="car-details.html">
                                    Clientes 100% <br>
                                    Satisfeitos
                                </a>
                            </h4>
                            <p>Neque porro quisquam est, qui fre dolorem ipsum quia dolor.</p>
                            <div class="icon">
                                <img src="{{ url('assets/user/img/feature-benefit/icon-3.png')}}" alt="icon-img">
                            </div>
                        </div>
                        <div class="feature-button">
                            <a href="car-details.html" class="link-btn">Ver Mais <i class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Car Rentals Section Start -->
    <section class="car-rentals-section-2 section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <img src="{{ url('assets/user/img/sub-icon.png')}}" alt="icon-img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">Conheça Nossos Novos Carros</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    Carros Disponíveis <br>
                    para Aluguel
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="car-rentals-items">
                        <div class="car-image">
                            <img src="{{ url('assets/user/img/car/05.jpg')}}" alt="img">
                        </div>
                        <div class="car-content">
                            <div class="post-cat">Modelo 2024</div>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>2 Avaliações</span>
                            </div>
                            <h4><a href="car-details.html">Hyundai Accent Limited</a></h4>
                            <h6>70.000 Kz <span>/ Dia</span></h6>
                            <div class="icon-items">
                                <ul>
                                    <li><img src="{{ url('assets/user/img/car/seat.svg')}}" alt="img" class="me-1">6 Lugares</li>
                                    <li><img src="{{ url('assets/user/img/car/door.svg')}}" alt="img" class="me-1">2 Portas</li>
                                </ul>
                                <ul>
                                    <li><img src="{{ url('assets/user/img/car/automatic.svg')}}" alt="img" class="me-1">Automático</li>
                                    <li><img src="{{ url('assets/user/img/car/petrol.svg')}}" alt="img" class="me-1">Gasolina</li>
                                </ul>
                            </div>
                            <a href="car-details.html" class="theme-btn bg-color w-100 text-center">Reservar Agora <i class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Repetido para outros carros, com mesmos ajustes de tradução -->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="car-rentals-items">
                        <div class="car-image">
                            <img src="{{ url('assets/user/img/car/06.jpg')}}" alt="img">
                        </div>
                        <div class="car-content">
                            <div class="post-cat">Modelo 2024</div>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>2 Avaliações</span>
                            </div>
                            <h4><a href="car-details.html">Hyundai Accent Limited</a></h4>
                            <h6>70.000 Kz <span>/ Dia</span></h6>
                            <div class="icon-items">
                                <ul>
                                    <li><img src="{{ url('assets/user/img/car/seat.svg')}}" alt="img" class="me-1">6 Lugares</li>
                                    <li><img src="{{ url('assets/user/img/car/door.svg')}}" alt="img" class="me-1">2 Portas</li>
                                </ul>
                                <ul>
                                    <li><img src="{{ url('assets/user/img/car/automatic.svg')}}" alt="img" class="me-1">Automático</li>
                                    <li><img src="{{ url('assets/user/img/car/petrol.svg')}}" alt="img" class="me-1">Gasolina</li>
                                </ul>
                            </div>
                            <a href="car-details.html" class="theme-btn bg-color w-100 text-center">Reservar Agora <i class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="car-rentals-items">
                        <div class="car-image">
                            <img src="{{ url('assets/user/img/car/07.jpg')}}" alt="img">
                        </div>
                        <div class="car-content">
                            <div class="post-cat">Modelo 2024</div>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>2 Avaliações</span>
                            </div>
                            <h4><a href="car-details.html">Hyundai Accent Limited</a></h4>
                            <h6>70.000 Kz <span>/ Dia</span></h6>
                            <div class="icon-items">
                                <ul>
                                    <li><img src="{{ url('assets/user/img/car/seat.svg')}}" alt="img" class="me-1">6 Lugares</li>
                                    <li><img src="{{ url('assets/user/img/car/door.svg')}}" alt="img" class="me-1">2 Portas</li>
                                </ul>
                                <ul>
                                    <li><img src="{{ url('assets/user/img/car/automatic.svg')}}" alt="img" class="me-1">Automático</li>
                                    <li><img src="{{ url('assets/user/img/car/petrol.svg')}}" alt="img" class="me-1">Gasolina</li>
                                </ul>
                            </div>
                            <a href="car-details.html" class="theme-btn bg-color w-100 text-center">Reservar Agora <i class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="car-rentals-items">
                        <div class="car-image">
                            <img src="{{ url('assets/user/img/car/08.jpg')}}" alt="img">
                        </div>
                        <div class="car-content">
                            <div class="post-cat">Modelo 2024</div>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>2 Avaliações</span>
                            </div>
                            <h4><a href="car-details.html">Hyundai Accent Limited</a></h4>
                            <h6>70.000 Kz <span>/ Dia</span></h6>
                            <div class="icon-items">
                                <ul>
                                    <li><img src="{{ url('assets/user/img/car/seat.svg')}}" alt="img" class="me-1">6 Lugares</li>
                                    <li><img src="{{ url('assets/user/img/car/door.svg')}}" alt="img" class="me-1">2 Portas</li>
                                </ul>
                                <ul>
                                    <li><img src="{{ url('assets/user/img/car/automatic.svg')}}" alt="img" class="me-1">Automático</li>
                                    <li><img src="{{ url('assets/user/img/car/petrol.svg')}}" alt="img" class="me-1">Gasolina</li>
                                </ul>
                            </div>
                            <a href="car-details.html" class="theme-btn bg-color w-100 text-center">Reservar Agora <i class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="car-rentals-items">
                        <div class="car-image">
                            <img src="{{ url('assets/user/img/car/09.jpg')}}" alt="img">
                        </div>
                        <div class="car-content">
                            <div class="post-cat">Modelo 2024</div>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>2 Avaliações</span>
                            </div>
                            <h4><a href="car-details.html">Hyundai Accent Limited</a></h4>
                            <h6>70.000 Kz <span>/ Dia</span></h6>
                            <div class="icon-items">
                                <ul>
                                    <li><img src="{{ url('assets/user/img/car/seat.svg')}}" alt="img" class="me-1">6 Lugares</li>
                                    <li><img src="{{ url('assets/user/img/car/door.svg')}}" alt="img" class="me-1">2 Portas</li>
                                </ul>
                                <ul>
                                    <li><img src="{{ url('assets/user/img/car/automatic.svg')}}" alt="img" class="me-1">Automático</li>
                                    <li><img src="{{ url('assets/user/img/car/petrol.svg')}}" alt="img" class="me-1">Gasolina</li>
                                </ul>
                            </div>
                            <a href="car-details.html" class="theme-btn bg-color w-100 text-center">Reservar Agora <i class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="car-rentals-items">
                        <div class="car-image">
                            <img src="{{ url('assets/user/img/car/10.jpg')}}" alt="img">
                        </div>
                        <div class="car-content">
                            <div class="post-cat">Modelo 2024</div>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>2 Avaliações</span>
                            </div>
                            <h4><a href="car-details.html">Hyundai Accent Limited</a></h4>
                            <h6>70.000 Kz <span>/ Dia</span></h6>
                            <div class="icon-items">
                                <ul>
                                    <li><img src="{{ url('assets/user/img/car/seat.svg')}}" alt="img" class="me-1">6 Lugares</li>
                                    <li><img src="{{ url('assets/user/img/car/door.svg')}}" alt="img" class="me-1">2 Portas</li>
                                </ul>
                                <ul>
                                    <li><img src="{{ url('assets/user/img/car/automatic.svg')}}" alt="img" class="me-1">Automático</li>
                                    <li><img src="{{ url('assets/user/img/car/petrol.svg')}}" alt="img" class="me-1">Gasolina</li>
                                </ul>
                            </div>
                            <a href="car-details.html" class="theme-btn bg-color w-100 text-center">Reservar Agora <i class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How Works Section Start -->
    
        <!-- How Works Section Start -->
        <section class="how-works-section fix section-padding pt-0">
            <div class="container">
               <div class="section-title text-center">
                    <img src="{{ url('assets/user/img/sub-icon.png')}}" alt="img" class="wow fadeInUp">
                    <span class="wow fadeInUp" data-wow-delay=".2s">Passos simples para obter serviço</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Veja como funciona</h2>
               </div>
               <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="how-works-items">
                            <h6 class="title"><a href="car-details.html">Pesquisa</a></h6>
                            <div class="icon-box">
                                <div class="icon">
                                    <img src="{{ url('assets/user/img/how-work/icon-1.png')}}" alt="img" class="icon-1">
                                    <img src="{{ url('assets/user/img/how-work/icon-11.png')}}" alt="img" class="icon-2">
                                </div>
                            </div>
                            <p>
                                Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse id quam sed eros.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="how-works-items">
                            <h6 class="title"><a href="car-details.html">Seleciona</a></h6>
                            <div class="icon-box">
                                <div class="icon">
                                    <img src="{{ url('assets/user/img/how-work/icon-2.png')}}" alt="img" class="icon-1">
                                    <img src="{{ url('assets/user/img/how-work/icon-22.png')}}" alt="img" class="icon-2">
                                </div>
                            </div>
                            <p>
                                Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse id quam sed eros.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="how-works-items">
                            <h6 class="title"><a href="car-details.html">Pagamento</a></h6>
                            <div class="icon-box">
                                <div class="icon">
                                    <img src="{{ url('assets/user/img/how-work/icon-3.png')}}" alt="img" class="icon-1">
                                    <img src="{{ url('assets/user/img/how-work/icon-33.png')}}" alt="img" class="icon-2">
                                </div>
                            </div>
                            <p>
                                Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse id quam sed eros.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="how-works-items">
                            <h6 class="title"><a href="car-details.html">Seleciona o Motorista</a></h6>
                            <div class="icon-box">
                                <div class="icon">
                                    <img src="{{ url('assets/user/img/how-work/icon-4.png')}}" alt="img" class="icon-1">
                                    <img src="{{ url('assets/user/img/how-work/icon-44.png')}}" alt="img" class="icon-2">
                                </div>
                            </div>
                            <p>
                                Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse id quam sed eros.
                            </p>
                        </div>
                    </div>
                       <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="how-works-items">
                            <h6 class="title"><a href="car-details.html">Conduza</a></h6>
                            <div class="icon-box">
                                <div class="icon">
                                    <img src="{{ url('assets/user/img/how-work/icon-4.png')}}" alt="img" class="icon-1">
                                    <img src="{{ url('assets/user/img/how-work/icon-44.png')}}" alt="img" class="icon-2">
                                </div>
                            </div>
                            <p>
                                Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse id quam sed eros.
                            </p>
                        </div>
                    </div>
               </div>
            </div>
        </section>

        
  <!-- Gallery Section Start -->
        <div class="gallery-section-2 fix">
            <div class="gallery-wrapper">
                <div class="row g-4">
                    <div class="col-xxl-5 col-xl-6 col-lg-7">
                        <div class="row g-3">
                            <div class="col-lg-6 col-md-6">
                                <div class="gallery-image">
                                    <img src="{{ url('assets/user/img/gallery/g-10.jpg')}}" alt="img">
                                    <div class="icon-box">
                                        <a href="{{ url('assets/user/img/gallery/g-10.jpg')}}" class="icon img-popup-2">
                                            <i class="fa-solid fa-plus"></i>
                                        </a>
                                    </div>
                                    <div class="mask"></div>
                                    <div class="mask-second"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="row g-3">
                                    <div class="col-lg-12">
                                        <div class="gallery-image">
                                            <img src="{{ url('assets/user/img/gallery/g-11.jpg')}}" alt="img">
                                            <div class="icon-box">
                                                <a href="{{ url('assets/user/img/gallery/g-12.jpg')}}" class="icon img-popup-2">
                                                    <i class="fa-solid fa-plus"></i>
                                                </a>
                                            </div>
                                            <div class="mask"></div>
                                            <div class="mask-second"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="gallery-image">
                                            <img src="{{ url('assets/user/img/gallery/g-12.jpg')}}" alt="img">
                                            <div class="icon-box">
                                                <a href="{{ url('assets/user/img/gallery/g-12.jpg')}}" class="icon img-popup-2">
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
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-5 col-md-6">
                        <div class="gallery-image style-width">
                            <img src="{{ url('assets/user/img/gallery/g-13.jpg')}}" alt="img">
                            <div class="icon-box">
                                <a href="{{ url('assets/user/img/gallery/g-13.jpg')}}" class="icon img-popup-2">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                            <div class="mask"></div>
                            <div class="mask-second"></div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-6 col-lg-4 col-md-6">
                        <div class="gallery-content">
                            <div class="icon">
                                <img src="{{ url('assets/user/img/gallery/icon.png')}}" alt="img">
                            </div>
                            <h2>
                                Trusted & Reliable
                                Car Rentals <br>
                                Gallery
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <!-- Select Car Section Start -->
    <section class="select-car-section section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <img src="{{ url('assets/user/img/sub-icon.png')}}" alt="img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">Tipos de Carros</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    Modelos Populares <br>
                    Disponíveis
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="select-car-items">
                        <div class="thumb">
                            <img src="{{ url('assets/user/img/car/popular-car-1.jpg')}}" alt="">
                        </div>
                        <div class="bg-overlay"></div>
                        <div class="icon">
                            <img src="{{ url('assets/user/img/car/icon/01.png')}}" alt="img">
                        </div>
                        <div class="content">
                            <h5><a href="car-details.html">Sedã</a></h5>
                            <p>10 Carros Disponíveis</p>
                        </div>
                        <a href="car-details.html" class="arrow-icon"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="select-car-items">
                        <div class="thumb">
                            <img src="{{ url('assets/user/img/car/popular-car-2.jpg')}}" alt="">
                        </div>
                        <div class="bg-overlay"></div>
                        <div class="icon">
                            <img src="{{ url('assets/user/img/car/icon/02.png')}}" alt="img">
                        </div>
                        <div class="content">
                            <h5><a href="car-details.html">SUV</a></h5>
                            <p>10 Carros Disponíveis</p>
                        </div>
                        <a href="car-details.html" class="arrow-icon"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="select-car-items">
                        <div class="thumb">
                            <img src="{{ url('assets/user/img/car/popular-car-3.jpg')}}" alt="img">
                        </div>
                        <div class="bg-overlay"></div>
                        <div class="icon">
                            <img src="{{ url('assets/user/img/car/icon/03.png')}}" alt="img">
                        </div>
                        <div class="content">
                            <h5><a href="car-details.html">Limousine</a></h5>
                            <p>10 Carros Disponíveis</p>
                        </div>
                        <a href="car-details.html" class="arrow-icon"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="select-car-items">
                        <div class="thumb">
                            <img src="{{ url('assets/user/img/car/popular-car-4.jpg')}}" alt="img">
                        </div>
                        <div class="bg-overlay"></div>
                        <div class="icon">
                            <img src="{{ url('assets/user/img/car/icon/04.png')}}" alt="img">
                        </div>
                        <div class="content">
                            <h5><a href="car-details.html">Conversível</a></h5>
                            <p>10 Carros Disponíveis</p>
                        </div>
                        <a href="car-details.html" class="arrow-icon"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="select-car-items">
                        <div class="thumb">
                            <img src="{{ url('assets/user/img/car/popular-car-5.jpg')}}" alt="img">
                        </div>
                        <div class="bg-overlay"></div>
                        <div class="icon">
                            <img src="{{ url('assets/user/img/car/icon/05.png')}}" alt="img">
                        </div>
                        <div class="content">
                            <h5><a href="car-details.html">Pick-up</a></h5>
                            <p>10 Carros Disponíveis</p>
                        </div>
                        <a href="car-details.html" class="arrow-icon"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="select-car-items">
                        <div class="thumb">
                            <img src="{{ url('assets/user/img/car/popular-car-6.jpg')}}" alt="img">
                        </div>
                        <div class="bg-overlay"></div>
                        <div class="icon">
                            <img src="{{ url('assets/user/img/car/icon/06.png')}}" alt="img">
                        </div>
                        <div class="content">
                            <h5><a href="car-details.html">Compacto</a></h5>
                            <p>10 Carros Disponíveis</p>
                        </div>
                        <a href="car-details.html" class="arrow-icon"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Faster Booking Section Start -->
    <section class="faster-booking-section fix section-padding pt-0">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 wow fadeInUp" data-wow-delay=".3s">
                    <div class="faster-booking-image">
                        <img src="{{ url('assets/user/img/f-booking-01.jpg')}}" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="faster-booking-items">
                        <div class="thumb">
                            <img src="{{ url('assets/user/img/f-booking-02.jpg')}}" alt="img">
                        </div>
                        <div class="content">
                            <div class="icon">
                                <img src="{{ url('assets/user/img/feature-benefit/icon-1.png')}}" alt="icon-img">
                            </div>
                            <h4>
                                Reservas Mais Fáceis <br>
                                e Rápidas
                            </h4>
                            <p>
                                Sed ut perspiciatis unde omnis <br> iste natus.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInUp" data-wow-delay=".7s">
                    <div class="faster-booking-image">
                        <img src="{{ url('assets/user/img/f-booking-03.jpg')}}" alt="img">
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
                <span class="wow fadeInUp" data-wow-delay=".2s">Nossa Equipe</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    Conheça Nossos <br>
                    Profissionais
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
                            <h3><a href="index-3.html">Mike Hardson</a></h3>
                            <p>Gerente</p>
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
                            <h3><a href="index-3.html">Aleesha Brown</a></h3>
                            <p>Gerente</p>
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
                            <h3><a href="index-3.html">David Jhonson</a></h3>
                            <p>Gerente</p>
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

    <!-- News Section Start -->
    <section class="news-section section-padding fix bg-cover" style="background-image: url('assets/img/news/bg.jpg')">
        <div class="container">
            <div class="section-title text-center">
                <img src="{{ url('assets/user/img/sub-icon.png')}}" alt="icon-img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">Do Blog</span>
                <h2 class="text-white wow fadeInUp" data-wow-delay=".4s">
                    Últimas Notícias e <br>
                    Artigos do Blog
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="{{ url('assets/user/img/news/01.jpg')}}" alt="news-img">
                            <div class="post-date">
                                <h6>20 <br> Mar</h6>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="post-client">
                                <img src="{{ url('assets/user/img/news/client.png')}}" alt="img">
                            </div>
                            <div class="news-cont">
                                <span>por Mike Hardson</span>
                                <h3><a href="news-details.html">O carro de estrada mais rápido e potente</a></h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem…</p>
                            </div>
                            <ul>
                                <li><i class="fa-solid fa-comments"></i> 2 Comentários</li>
                                <li><a href="news-details.html"><i class="fa-solid fa-arrow-right-long"></i> Mais</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="{{ url('assets/user/img/news/02.jpg')}}" alt="news-img">
                            <div class="post-date">
                                <h6>26 <br> Mar</h6>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="post-client">
                                <img src="{{ url('assets/user/img/news/client.png')}}" alt="img">
                            </div>
                            <div class="news-cont">
                                <span>por Mike Hardson</span>
                                <h3><a href="news-details.html">O carro de estrada mais rápido e potente</a></h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem…</p>
                            </div>
                            <ul>
                                <li><i class="fa-solid fa-comments"></i> 2 Comentários</li>
                                <li><a href="news-details.html"><i class="fa-solid fa-arrow-right-long"></i> Mais</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="{{ url('assets/user/img/news/03.jpg')}}" alt="news-img">
                            <div class="post-date">
                                <h6>29 <br> Mar</h6>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="post-client">
                                <img src="{{ url('assets/user/img/news/client.png')}}" alt="img">
                            </div>
                            <div class="news-cont">
                                <span>por Mike Hardson</span>
                                <h3><a href="news-details.html">O carro de estrada mais rápido e potente</a></h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem…</p>
                            </div>
                            <ul>
                                <li><i class="fa-solid fa-comments"></i> 2 Comentários</li>
                                <li><a href="news-details.html"><i class="fa-solid fa-arrow-right-long"></i> Mais</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta Car Booking Section Start -->
    <section class="cta-car-booking-section bg-cover section-padding" style="background-image: url('assets/img/cta/cta-service.jpg')">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-12">
                    <div class="cta-car-booking-items">
                        <div class="content">
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                Economize Tempo e Dinheiro com o Melhor <br>
                                Serviço de Aluguel de Carros da Cidade
                            </h2>
                            <div class="button-items">
                                <a href="about.html" class="theme-btn bg-white wow fadeInUp" data-wow-delay=".5s">Saiba Mais</a>
                                <a href="car-details.html" class="theme-btn bg-header wow fadeInUp" data-wow-delay=".7s">Reservar Seu Carro</a>
                            </div>
                        </div>
                        <div class="car-image">
                            <img src="{{ url('assets/user/img/car-slideshow-2.png')}}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Faq Section Start -->
    <section class="faq-section fix section-padding">
        <div class="container">
            <div class="faq-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="faq-image">
                            <img src="{{ url('assets/user/img/faq.png')}}" alt="img">
                            <div class="color-shape float-bob-y">
                                <img src="{{ url('assets/user/img/faq-color-shape.png')}}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-content">
                            <div class="section-title">
                                <img src="{{ url('assets/user/img/sub-icon.png')}}" alt="icon-img" class="wow fadeInUp">
                                <span class="wow fadeInUp" data-wow-delay=".2s">Perguntas Frequentes</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                    Perguntas e Respostas
                                </h2>
                            </div>
                            <div class="faq-accordion mt-4 mt-md-0">
                                <div class="accordion" id="accordion">
                                    <div class="accordion-item mb-4 wow fadeInUp" data-wow-delay=".3s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                                Como funciona o processo de aluguel?
                                            </button>
                                        </h5>
                                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Existem muitas variações de passagens disponíveis, mas sofreram alterações em alguma forma por palavras aleatórias injetadas que não parecem nem um pouco críveis agora.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-4 wow fadeInUp" data-wow-delay=".5s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                                Onde devo registrar minha empresa?
                                            </button>
                                        </h5>
                                        <div id="faq2" class="accordion-collapse show" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Existem muitas variações de passagens disponíveis, mas sofreram alterações em alguma forma por palavras aleatórias injetadas que não parecem nem um pouco críveis agora.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                                Como existem muitas variações de passagens?
                                            </button>
                                        </h5>
                                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Existem muitas variações de passagens disponíveis, mas sofreram alterações em alguma forma por palavras aleatórias injetadas que não parecem nem um pouco críveis agora.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brand Section Start -->
    <div class="brand-wrapper style-2 pt-0 pb-80">
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

    <!-- Cta Cheap Rental Section Start -->
    <section class="cta-cheap-rental-section">
        <div class="container">
            <div class="cta-cheap-rental">
                <div class="cta-cheap-rental-left wow fadeInUp" data-wow-delay=".3s">
                    <div class="logo-thumb">
                        <a href="index.html">
                            <img src="{{ url('assets/user/img/logo/white-logo.svg')}}" alt="logo-img">
                        </a>
                    </div>
                    <h4 class="text-white">Economize muito com nosso aluguel de carros acessível</h4>
                </div>
                <div class="social-icon d-flex align-items-center wow fadeInUp" data-wow-delay=".5s">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section Start -->
    @include('site.home.footer')

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
</body>
</html>