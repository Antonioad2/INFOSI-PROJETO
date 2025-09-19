@extends('site.reservation.layouts.main')
@section('title', 'AngoCar Listagem de Carros')
@section('content')

    <!-- Breadscrumb Section -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">Listagem de Carros</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            {{-- <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Listings</a></li> --}}
                            <li class="breadcrumb-item active" aria-current="page">Início/Carros/Listagem de Carros</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div> <br>
    <!-- /Breadscrumb Section -->

    <!-- Search -->
    <div class="section-search page-search">
        <div class="container">
            <div class="search-box-banner">
                <form action="https://dreamsrent.dreamstechnologies.com/html/template/listing-grid.html">
                    <ul class="align-items-center">
                        <li class="column-group-main">
                            <div class="input-block">
                                <label>Local de Retirada</label>
                                <div class="group-img">
                                    <input type="text" class="form-control"
                                        placeholder="Digite a cidade, Aeroporto, ou Endereço">
                                    <span><i class="feather-map-pin"></i></span>
                                </div>
                            </div>
                        </li>
                        <li class="column-group-main">
                            <div class="input-block">
                                <label>Data de Retirada</label>
                            </div>
                            <div class="input-block-wrapp">
                                <div class="input-block date-widget">
                                    <div class="group-img">
                                        <input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
                                        <span><i class="feather-calendar"></i></span>
                                    </div>
                                </div>
                                <div class="input-block time-widge">
                                    <div class="group-img">
                                        <input type="text" class="form-control timepicker" placeholder="11:00 AM">
                                        <span><i class="feather-clock"></i></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="column-group-main">
                            <div class="input-block">
                                <label>Data de Devolução</label>
                            </div>
                            <div class="input-block-wrapp">
                                <div class="input-block date-widge">
                                    <div class="group-img">
                                        <input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
                                        <span><i class="feather-calendar"></i></span>
                                    </div>
                                </div>
                                <div class="input-block time-widge">
                                    <div class="group-img">
                                        <input type="text" class="form-control timepicker" placeholder="11:00 AM">
                                        <span><i class="feather-clock"></i></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="column-group-last">
                            <div class="input-block">
                                <div class="search-btn">
                                    <button class="btn search-button" type="submit"> <i class="fa fa-search"
                                            aria-hidden="true"></i>Pesquisar</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <!-- /Search -->

    <!-- Sort By -->
    <div class="sort-section">
        <div class="container">
            <div class="sortby-sec">
                <div class="sorting-div">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-4 col-lg-3 col-sm-12 col-12">
                            <div class="count-search">
                                <p>Mostrando 1-9 de 154 Carros</p>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-9 col-sm-12 col-12">
                            <div class="product-filter-group">
                                <div class="sortbyset">
                                    <ul>
                                        <li>
                                            <span class="sortbytitle">Ver : </span>
                                            <div class="sorting-select select-one">
                                                <select class="form-control select">
                                                    <option>5</option>
                                                    <option>10</option>
                                                    <option>15</option>
                                                    <option>20</option>
                                                    <option>30</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="sortbytitle">Ordenar Por </span>
                                            <div class="sorting-select select-two">
                                                <select class="form-control select">
                                                    <option>Recente</option>
                                                    <option>Relevância</option>
                                                    <option>Menor ao Maior</option>
                                                    <option>Maior ao Menor</option>
                                                    <option>Mais Avaliado</option>
                                                    <option>Distância</option>
                                                    <option>Popularidade</option>
                                                </select>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="grid-listview">
                                    <ul>
                                        <li>
                                            <a href="listing-grid.html">
                                                <i class="feather-grid"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="listing-list.html" class="active">
                                                <i class="feather-list"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="listing-map.html">
                                                <i class="feather-map-pin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Sort By -->

    <!-- Car Grid View -->
    <section class="section car-listing pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-12 col-12 theiaStickySidebar">
                    <form action="#" autocomplete="off" class="sidebar-form">
                        <div class="sidebar-heading">
                            <h3>O Que Você Está Procurando?</h3>
                        </div>
                        <div class="product-search">
                            <div class="form-custom">
                                <input type="text" class="form-control" id="member_search1" placeholder="">
                                <span><img src="assets/user/img/icons/search.svg" alt="img"></span>
                            </div>
                        </div>
                        <div class="product-availability">
                            <h6>Disponibilidade</h6>
                            <div class="status-toggle">
                                <input id="mobile_notifications" class="check" type="checkbox" checked="">
                                <label for="mobile_notifications" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="accord-list">
                            <div class="accordion" id="accordionMain1">
                                <div class="card-header-new" id="headingOne">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Marca de Carro
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample1">
                                    <div class="card-body-chat">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div id="checkBoxes1">
                                                    <div class="selectBox-cont">
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username" class="brand-filter"
                                                                value="Renault">
                                                            <span class="checkmark"></span> Renault
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username" class="brand-filter"
                                                                value="Nissan">
                                                            <span class="checkmark"></span> Nissan
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username" class="brand-filter"
                                                                value="Mercedes Benz">
                                                            <span class="checkmark"></span> Mercedes Benz
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" name="username" class="brand-filter"
                                                                value="Suzuki">
                                                            <span class="checkmark"></span> Suzuki
                                                        </label>
                                                        <!-- View All -->
                                                        <div class="view-content">
                                                            <div class="viewall-One">
                                                                <label class="custom_check w-100">
                                                                    <input type="checkbox" name="username"
                                                                        class="brand-filter" value="Kia">
                                                                    <span class="checkmark"></span> Kia
                                                                </label>
                                                                <label class="custom_check w-100">
                                                                    <input type="checkbox" name="username"
                                                                        class="brand-filter" value="Chevrolet">
                                                                    <span class="checkmark"></span> Chevrolet
                                                                </label>
                                                                <label class="custom_check w-100">
                                                                    <input type="checkbox" name="username"
                                                                        class="brand-filter" value="Toyota">
                                                                    <span class="checkmark"></span> Toyota
                                                                </label>
                                                                <label class="custom_check w-100">
                                                                    <input type="checkbox" name="username"
                                                                        class="brand-filter" value="BMW">
                                                                    <span class="checkmark"></span> BMW
                                                                </label>
                                                                <label class="custom_check w-100">
                                                                    <input type="checkbox" name="username"
                                                                        class="brand-filter" value="Mitsubishi">
                                                                    <span class="checkmark"></span> Mitsubishi
                                                                </label>
                                                                <label class="custom_check w-100">
                                                                    <input type="checkbox" name="username"
                                                                        class="brand-filter" value="Porsche">
                                                                    <span class="checkmark"></span> Porsche
                                                                </label>
                                                                <label class="custom_check w-100">
                                                                    <input type="checkbox" name="username"
                                                                        class="brand-filter" value="Land Rover">
                                                                    <span class="checkmark"></span> Land Rover
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <!-- /View All -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionMain2">
                                <div class="card-header-new" id="headingTwo">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseTwo">
                                            Categoria de Carro
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample2">
                                    <div class="card-body-chat">
                                        <div id="checkBoxes2">
                                            <div class="selectBox-cont">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" class="category-filter" value="Economic">
                                                    <span class="checkmark"></span> Económico
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" class="category-filter" value="Standard">
                                                    <span class="checkmark"></span> Intermédio
                                                </label>
                                                {{-- <label class="custom_check w-100">
                                                    <input type="checkbox" class="category-filter" value="Sedã">
                                                    <span class="checkmark"></span> Sedã (10)
                                                </label> --}}
                                                <!-- View All -->
                                                <div class="view-content">
                                                    <div class="viewall-One">
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" class="category-filter"
                                                                value="Luxury">
                                                            <span class="checkmark"></span> Luxuoso
                                                        </label>
                                                        {{-- <label class="custom_check w-100">
                                                            <input type="checkbox" class="category-filter"
                                                                value="SUV">
                                                            <span class="checkmark"></span> SUV (6)
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" class="category-filter"
                                                                value="Camião">
                                                            <span class="checkmark"></span> Camião (5)
                                                        </label> --}}
                                                    </div>
                                                </div>
                                                <!-- /View All -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion" id="accordionMain3">
                                <div class="card-header-new" id="headingYear">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseYear" aria-expanded="true"
                                            aria-controls="collapseYear">
                                            Ano
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseYear" class="collapse" aria-labelledby="headingYear"
                                    data-bs-parent="#accordionExample2">
                                    <div class="card-body-chat">
                                        <div id="checkBoxes3">
                                            <div class="selectBox-cont">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" class="year-filter" value="2024"
                                                        name="username">
                                                    <span class="checkmark"></span> 2024
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" class="year-filter" value="2023"
                                                        name="username">
                                                    <span class="checkmark"></span> 2023
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" class="year-filter" value="2022"
                                                        name="username">
                                                    <span class="checkmark"></span> 2022
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" class="year-filter" value="2021"
                                                        name="username">
                                                    <span class="checkmark"></span> 2021
                                                </label>
                                                <!-- View All -->
                                                <div class="view-content">
                                                    <div class="viewall-One">
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" class="year-filter" value="2020"
                                                                name="username">
                                                            <span class="checkmark"></span> 2020
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" class="year-filter" value="2019"
                                                                name="username">
                                                            <span class="checkmark"></span> 2019
                                                        </label>
                                                        <label class="custom_check w-100">
                                                            <input type="checkbox" class="year-filter" value="2018"
                                                                name="username">
                                                            <span class="checkmark"></span> 2018
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- /View All -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionMain7">
                                <div class="card-header-new" id="headingColor">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseColor" aria-expanded="true"
                                            aria-controls="collapseColor">
                                            Cores
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseColor" class="collapse" aria-labelledby="headingColor"
                                    data-bs-parent="#accordionExample2">
                                    <div class="card-body-chat">
                                        <div class="theme-colorsset">
                                            <ul>
                                                <li>
                                                    <div class="input-themeselects">
                                                        <input type="radio" class="color-filter" name="color"
                                                            id="greenColor" value="Verde" checked="">
                                                        <label for="greenColor" class="green-clr"></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-themeselects">
                                                        <input type="radio" class="color-filter" name="color"
                                                            id="yellowColor" value="Amarelo">
                                                        <label for="yellowColor" class="yellow-clr"></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-themeselects">
                                                        <input type="radio" class="color-filter" name="color"
                                                            id="brownColor" value="Cinza">
                                                        <label for="brownColor" class="brown-clr"></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-themeselects">
                                                        <input type="radio" class="color-filter" name="color"
                                                            id="blackColor" value="Preto">
                                                        <label for="blackColor" class="black-clr"></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-themeselects">
                                                        <input type="radio" class="color-filter" name="color"
                                                            id="redColor" value="Vermelho" checked="">
                                                        <label for="redColor" class="red-clr"></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-themeselects">
                                                        <input type="radio" class="color-filter" name="color"
                                                            id="gray100Color" value="Branco">
                                                        <label for="gray100Color" class="gray100-clr"></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-themeselects">
                                                        <input type="radio" class="color-filter" name="color"
                                                            id="blueColor" value="Azul">
                                                        <label for="blueColor" class="blue-clr"></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionMain8">
                                <div class="card-header-new" id="headingThree">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="true"
                                            aria-controls="collapseThree">
                                            Capacidade
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample3">
                                    <div class="card-body-chat">
                                        <div id="checkBoxes6">
                                            <div class="selectBox-cont">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" class="seat-filter" value="2"
                                                        name="bystatus">
                                                    <span class="checkmark"></span> 2 Assentos
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" class="seat-filter" value="4"
                                                        name="bystatus">
                                                    <span class="checkmark"></span> 4 Assentos
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" class="seat-filter" value="5"
                                                        name="bystatus">
                                                    <span class="checkmark"></span> 5 Assentos
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" class="seat-filter" value="7"
                                                        name="bystatus">
                                                    <span class="checkmark"></span> 7 Assentos
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionMain9">
                                <div class="card-header-new" id="headingFour">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="true"
                                            aria-controls="collapseFour">
                                            Preço
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample4">
                                    <div class="card-body-chat">
                                        <div class="filter-range">
                                            <input type="text" class="input-range">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionMain04">
                                <div class="card-header-new" id="headingtransmiss">
                                    <h6 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapsetransmission" aria-expanded="true"
                                            aria-controls="collapsetransmission">
                                            Transmissão
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h6>
                                </div>
                                <div id="collapsetransmission" class="collapse" aria-labelledby="headingtransmiss"
                                    data-bs-parent="#accordionExample2">
                                    <div class="card-body-chat">
                                        <div class="fuel-list">
                                            <ul>
                                                <li>
                                                    <div class="input-selection">
                                                        <input type="radio" class="transmission-filter" value="Manual"
                                                            name="transmission" id="manual" checked="">
                                                        <label for="manual">Manual </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-selection">
                                                        <input type="radio" class="transmission-filter" value="Semi"
                                                            name="transmission" id="semi">
                                                        <label for="semi">Semi Automático</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-selection">
                                                        <input type="radio" class="transmission-filter"
                                                            value="Automático" name="transmission" id="automatic">
                                                        <label for="automatic">Automático</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit"
                            class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary filter-btn">
                            <span><i class="feather-filter me-2"></i></span>Filtrar Resultados
                        </button>
                        <a href="#" class="reset-filter">Redefinir Filtro</a>
                    </form>
                </div>

                {{-- === LISTA DE CARROS === --}}
                <div class="col-xl-9 col-lg-8 col-sm-12 col-12">
                    <div class="row" id="car-list">
                        @foreach ($cars as $car)
                            @php
                                $imagePath = !empty($car->images) ? trim($car->images) : $car->image ?? 'default.jpg';
                            @endphp

                            <div class="listview-car car-card" data-brand="{{ $car->brand->name ?? '' }}"
                                data-category="{{ $car->category ?? '' }}" data-year="{{ $car->manufacture_date ?? '' }}"
                                data-color="{{ $car->color ?? '' }}" data-seat="{{ $car->number_of_seats ?? '' }}"
                                data-transmission="{{ $car->transmission ?? '' }}">
                                <div class="card">
                                    <div class="blog-widget d-flex">
                                        <!-- Imagem única do carro -->
                                        <div class="blog-img">
                                            <a href="{{ route('car.details', $car->id) }}">
                                                <img src="{{ url('uploads/car/car_images/' . $imagePath) }}"
                                                    class="img-fluid" alt="{{ $car->brand->name ?? 'Carro' }}">
                                            </a>
                                            <div class="fav-item justify-content-end">
                                                <span class="img-count">
                                                    <i class="feather-image"></i>01
                                                </span>
                                                <a href="javascript:void(0)" class="fav-icon">
                                                    <i class="feather-heart"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Conteúdo de detalhes -->
                                        <div class="bloglist-content w-100">
                                            <div class="card-body">
                                                <div class="blog-list-head d-flex">
                                                    <div class="blog-list-title">
                                                        <h3>
                                                            <a href="{{ route('car.details', $car->id) }}">
                                                                {{ $car->brand->name ?? '' }}
                                                                {{ $car->models->name ?? $car->name }}
                                                            </a>
                                                        </h3>
                                                        <h6>Categoria : <span>{{ $car->category ?? 'N/D' }}</span></h6>
                                                    </div>
                                                    <div class="blog-list-rate">
                                                        <div class="list-rating">
                                                            @for ($i = 0; $i < 5; $i++)
                                                                <i
                                                                    class="fas fa-star {{ $i < ($car->rating ?? 0) ? 'filled' : '' }}"></i>
                                                            @endfor
                                                            <span>({{ $car->reviews_count ?? 0 }} Avaliações)</span>
                                                        </div>
                                                        <h6>${{ $car->price_per_day ?? $car->price }} <span>/ Dia</span>
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="listing-details-group">
                                                    <ul>
                                                        <li>
                                                            <span><img src="assets/user/img/icons/car-parts-01.svg"
                                                                    alt="Transmissão"></span>
                                                            <p>{{ $car->transmission ?? 'N/A' }}</p>
                                                        </li>
                                                        <li>
                                                            <span><img src="assets/user/img/icons/car-parts-02.svg"
                                                                    alt="Quilometragem"></span>
                                                            <p>{{ $car->mileage ?? 'N/A' }} (Km)</p>
                                                        </li>
                                                        <li>
                                                            <span><img src="assets/user/img/icons/car-parts-03.svg"
                                                                    alt="Combustível"></span>
                                                            <p>{{ $car->fuel->name ?? 'N/A' }}</p>
                                                        </li>
                                                        <li>
                                                            <span><img src="assets/user/img/icons/car-parts-04.svg"
                                                                    alt="Potência"></span>
                                                            <p>{{ $car->engine ?? 'N/A' }} (KVA)</p>
                                                        </li>
                                                        <li>
                                                            <span><img src="assets/user/img/icons/car-parts-06.svg"
                                                                    alt="Pessoas"></span>
                                                            <p>{{ $car->number_of_seats ?? 'N/A' }} Pessoas</p>
                                                        </li>
                                                        <li>
                                                            <span><img src="assets/user/img/icons/car-parts-05.svg"
                                                                    alt="Ano"></span>
                                                            <p>{{ $car->manufacture_date ?? 'N/A' }}</p>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="blog-list-head list-head-bottom d-flex">
                                                    <div class="blog-list-title">
                                                        <div class="title-bottom">
                                                            <div class="car-list-icon">
                                                                <img src="{{ asset('assets/user/img/profiles/avatar-14.jpg') }}"
                                                                    alt="user">
                                                            </div>
                                                            <div class="address-info">
                                                                <h6>
                                                                    <i class="feather-map-pin"></i>
                                                                    {{ $car->location ?? 'Luanda, Angola' }}
                                                                </h6>
                                                            </div>
                                                            <div class="list-km">
                                                                <span class="km-count">
                                                                    <img src="assets/user/img/icons/map-pin.svg"
                                                                        alt="distância">3.2m
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-button">
                                                        <a href="{{ route('car.details', ['car_id' => $car->id]) }}"
                                                            class="btn btn-order">
                                                            <span><i class="feather-calendar me-2"></i></span>Alugar Agora
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @if ($car->featured)
                                            <div class="feature-text">
                                                <span class="bg-danger">Destaque</span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        const brandCheckboxes = document.querySelectorAll('.brand-filter');
                        const categoryCheckboxes = document.querySelectorAll('.category-filter');
                        const yearCheckboxes = document.querySelectorAll('.year-filter');
                        const colorCheckboxes = document.querySelectorAll('.color-filter');
                        const seatCheckboxes = document.querySelectorAll('.seat-filter');
                        const transmissionCheckboxes = document.querySelectorAll('.transmission-filter');
                        const cars = document.querySelectorAll('#car-list .car-card');

                        function filterCars() {
                            const selectedBrands = [...brandCheckboxes].filter(ch => ch.checked).map(ch => ch.value);
                            const selectedCategories = [...categoryCheckboxes].filter(ch => ch.checked).map(ch => ch.value);
                            const selectedYears = [...yearCheckboxes].filter(ch => ch.checked).map(ch => ch.value);
                            const selectedColors = [...colorCheckboxes].filter(ch => ch.checked).map(ch => ch.value);
                            const selectedSeats = [...seatCheckboxes].filter(ch => ch.checked).map(ch => ch.value);
                            const selectedTransmissions = [...transmissionCheckboxes].filter(ch => ch.checked).map(ch => ch
                                .value);

                            cars.forEach(car => {
                                const brand = car.dataset.brand || '';
                                const category = car.dataset.category || '';
                                const year = car.dataset.year || '';
                                const color = car.dataset.color || '';
                                const seat = car.dataset.seat || '';
                                const transmission = car.dataset.transmission || '';

                                const brandMatch = !selectedBrands.length || selectedBrands.includes(brand);
                                const categoryMatch = !selectedCategories.length || selectedCategories.includes(
                                    category);
                                const yearMatch = !selectedYears.length || selectedYears.includes(year);
                                const colorMatch = !selectedColors.length || selectedColors.includes(color);
                                const seatMatch = !selectedSeats.length || selectedSeats.includes(seat);
                                const transmissionMatch = !selectedTransmissions.length || selectedTransmissions
                                    .includes(transmission);

                                // Só esconde quando falhar em filtros ativos
                                car.style.display = (brandMatch && categoryMatch && yearMatch && colorMatch &&
                                        seatMatch && transmissionMatch) ?
                                    '' :
                                    'none';
                            });
                        }

                        // Ouvinte para TODOS os filtros
                        [
                            ...brandCheckboxes,
                            ...categoryCheckboxes,
                            ...yearCheckboxes,
                            ...colorCheckboxes,
                            ...seatCheckboxes,
                            ...transmissionCheckboxes
                        ].forEach(cb => cb.addEventListener('change', filterCars));
                    });
                </script>




            </div>
        </div>
    </section>
    <!-- /Car Grid View -->

@endsection
