@extends('site.home.car_details.layout.main')
@section('content-car_details')

    <!--View para Exibição do caso escolhido para reserva-->
     <div>
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset('assets/user/img/bg-header-banner.jpg') }}')">
            <div class="container">
                <div class="page-heading">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="index.html">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                        </li>
                        <li>
                            Cars
                        </li>
                    </ul>
                    <h1 class="wow fadeInUp" data-wow-delay=".5s">Single Car</h1>
                </div>
            </div>
        </div>

        <!-- Section para exibir od detalhes do carro -->
        <section class="car-details fix section-padding">
            <div class="container">
                <div class="car-details-wrapper">
                    <div class="row g-5">
                        <div class="col-lg-7">
                            <div class="car-details-items">
                                <div class="car-image">
                                    <img src="{{ asset('uploads/car/car_images/' . $car->image) }}" alt="{{ $car->brand->name ?? '' }} {{ $car->models->name ?? '' }}">
                                </div>
                                <div class="car-content">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <span>0 Reviews</span>
                                    </div>

                                    <h3>{{ $car->brand->name ?? '' }} {{ $car->models->name ?? '' }}</h3>
                                    <h6>Kz {{ number_format($car->price_per_day, 2, ',', '.') }} <span>/ Dia</span></h6>
                                    <p class="mt-4 mb-4">
                                        {{ $car->observations ?? 'No description available.' }}
                                    </p>

                                    <div class="icon-details-area">
                                        <h4>Principais Características</h4>
                                        <div class="icon-details-main-items">
                                            <div class="icon-items">
                                                <div class="icon">
                                                    <img src="{{ url('assets/user/img/car/icon/07.png') }}" alt="img">
                                                </div>
                                                <div class="content">
                                                    <h6>Categoria:</h6>
                                                    <p>{{ $car->category ?? 'N/A' }}</p>
                                                </div>
                                            </div>
                                            <div class="icon-items">
                                                <div class="icon">
                                                    <img src="{{ url('assets/user/img/car/icon/07.png') }}" alt="img">
                                                </div>
                                                <div class="content">
                                                    <h6>Quilometragem:</h6>
                                                    <p>{{ $car->mileage ?? 'N/A' }} (Km)</p>
                                                </div>
                                            </div>
                                            <div class="icon-items">
                                                <div class="icon">
                                                    <img src="{{ url('assets/user/img/car/icon/07.png') }}" alt="img">
                                                </div>
                                                <div class="content">
                                                    <h6>Ano:</h6>
                                                    <p>{{ $car->manufacture_date ?? 'N/A' }}</p>
                                                </div>
                                            </div>
                                            <div class="icon-items">
                                                <div class="icon">
                                                    <img src="{{ url('assets/user/img/car/icon/07.png') }}" alt="img">
                                                </div>
                                                <div class="content">
                                                    <h6>Cilindragem:</h6>
                                                    <p>{{ $car->engine ?? 'N/A' }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="icon-details-main-items">
                                            <div class="icon-items">
                                                <div class="icon">
                                                    <img src="{{ url('assets/user/img/car/seat.svg') }}" alt="img">
                                                </div>
                                                <div class="content">
                                                    <h6>Lugares:</h6>
                                                    <p>{{ $car->number_of_seats ?? 'N/A' }} Lugares</p>
                                                </div>
                                            </div>
                                            <div class="icon-items">
                                                <div class="icon">
                                                    <img src="{{ url('assets/user/img/car/door.svg') }}" alt="img">
                                                </div>
                                                <div class="content">
                                                    <h6>Porta:</h6>
                                                    <p>{{ $car->number_of_doors ?? 'N/A' }} Portas</p>
                                                </div>
                                            </div>
                                            <div class="icon-items">
                                                <div class="icon">
                                                    <img src="{{ url('assets/user/img/car/automatic.svg') }}" alt="img">
                                                </div>
                                                <div class="content">
                                                    <h6>Transmissao:</h6>
                                                    <p>{{ $car->transmission ?? 'N/A' }}</p>
                                                </div>
                                            </div>
                                            <div class="icon-items">
                                                <div class="icon">
                                                    <img src="{{ url('assets/user/img/car/petrol.svg') }}" alt="img">
                                                </div>
                                                <div class="content">
                                                    <h6>Combustível:</h6>
                                                    <p>{{ $car->fuel->name ?? 'N/A' }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

{{--                             <div class="car-booking-items">
                                <div class="booking-header">
                                    <h3>Request for Booking</h3>
                                    <p>Send your requirement to us. We will check email and contact you soon.</p>
                                </div>
                                <form action="#" id="contact-form" method="POST" class="contact-form-items">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <label class="label-text">Your Name</label>
                                                <input type="text" name="name" id="name" placeholder="Afzaal Islam">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <label class="label-text">Email</label>
                                                <input type="text" name="email" id="email" placeholder="pixydrops@gmail.com">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <label class="label-text">Phone Number</label>
                                                <input type="text" name="phone" id="phone" placeholder="+ 00 0000 - 000">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <label class="label-text">Address</label>
                                                <input type="text" name="address" id="address" placeholder="Address">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button class="theme-btn" type="submit">
                                                Send Request
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div> --}}
                        </div>
                          <!-- FORMULARIO DE AGENDAMENTO DA RESERVA-->         
                        <div class="col-lg-5">
                            <div class="car-list-sidebar">
                                <h4 class="title">Formulario de Reserva</h4>
                                <form action="{{ route('site.car_book', ['car_id' => $car->id]) }}" 
                                    id="contact-form2" 
                                    method="POST" 
                                    class="contact-form-items">
                                    @csrf {{-- obrigatório em POST --}}

                                    <div class="row g-4">
                                        <!-- Local -->
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <label class="label-text">Localizaçao</label>
                                                <div class="category-oneadjust">
                                                   <select name="location" class="category" required>
                                                        <option value="">Seleciona Localização</option>
                                                        <option value="Belas">Belas</option>
                                                        <option value="Cacuaco">Cacuaco</option>
                                                        <option value="Cazenga">Cazenga</option>
                                                        <option value="Icolo e Bengo">Icolo e Bengo</option>
                                                        <option value="Luanda">Luanda</option>
                                                        <option value="Kilamba Kiaxi">Kilamba Kiaxi</option>
                                                        <option value="Quiçama">Quiçama</option>
                                                        <option value="Talatona">Talatona</option>
                                                        <option value="Viana">Viana</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Data de Pick-up -->
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <label class="label-text">Data de Levantamento</label>
                                                <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                                                    <input class="form-control" type="text" name="pickup_date" placeholder="Data de Levantamento" required>
                                                    <span class="input-group-addon"><i class="fa-solid fa-calendar-days"></i></span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Data de Drop-off -->
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <label class="label-text">Data de Entrega</label>
                                                <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                                                    <input class="form-control" type="text" name="Data_de_Entrega" placeholder="Data de Entrega" required>
                                                    <span class="input-group-addon"><i class="fa-solid fa-calendar-days"></i></span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Quantidade -->
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <label class="label-text">Quantidade</label>
                                                <div class="category-oneadjust">
                                                    <input type="number" name="quantity" class="category form-control" placeholder="Digite a quantidade" min="1" required>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Recursos extras -->
                                       <div class="col-lg-12">
                                                <div class="form-clt">
                                                    <label class="label-text">Recursos adicionais</label>
                                                    <div class="input-save-items-area">
                                                        <div class="input-save-items">
                                                            <div class="input-save d-flex align-items-center mb-3">
                                                                <input type="checkbox" class="form-check-input" name="resources[]" value="driver" id="driver">
                                                                <label for="driver">
                                                                    <i class="fas fa-user-tie me-2"></i> Motorista
                                                                </label>
                                                            </div>
                                                            <div class="input-save d-flex align-items-center mb-3">
                                                                <input type="checkbox" class="form-check-input" name="resources[]" value="accident" id="accident">
                                                                <label for="accident">
                                                                    <i class="fas fa-ambulance me-2"></i> Proteção contra Acidentes
                                                                </label>
                                                            </div>
                                                            <div class="input-save d-flex align-items-center mb-3">
                                                                <input type="checkbox" class="form-check-input" name="resources[]" value="baby_seat" id="babySeat">
                                                                <label for="babySeat">
                                                                    <i class="fas fa-baby-carriage me-2"></i> Assento p/ Bebé
                                                                </label>
                                                            </div>
                                                            <div class="input-save d-flex align-items-center">
                                                                <input type="checkbox" class="form-check-input" name="resources[]" value="theft" id="theft">
                                                                <label for="theft">
                                                                    <i class="fas fa-shield-alt me-2"></i> Proteção contra Roubo
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="input-save-items">
                                                            <div class="input-save d-flex align-items-center mb-3">
                                                                <label>Kz1000 / Dia</label>
                                                            </div>
                                                            <div class="input-save d-flex align-items-center mb-3">
                                                                <label>Kz1000 / Dia</label>
                                                            </div>
                                                            <div class="input-save d-flex align-items-center">
                                                                <label>Kz1000 / Dia</label>
                                                            </div>
                                                            <div class="input-save d-flex align-items-center">
                                                                <label>Kz1000 / Dia</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        <!-- Botão -->
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <button type="submit" class="theme-btn">Reservar Agora</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Car Rentals Section Start -->
       {{--<section class="car-rentals-section-2 section-padding fix pt-0">
            <div class="container">
                <div class="section-title text-center">
                    <img src="{{ url('assets/user/img/sub-icon.png') }}" alt="icon-img" class="wow fadeInUp">
                    <span class="wow fadeInUp" data-wow-delay=".2s">Checkout our new cars</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">
                        Similar Cars Available
                    </h2>
                </div>
                <div class="row">
                    @foreach($cars->take(3) as $similarCar)
                        @if($similarCar->id != $car->id)
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".{{ 3 + loop.index * 2 }}s">
                                <div class="car-rentals-items">
                                    <div class="car-image">
                                        <img src="{{ asset('uploads/car/car_images/' . $similarCar->image) }}" alt="{{ $similarCar->brand->name ?? '' }} {{ $similarCar->models->name ?? '' }}">
                                    </div>
                                    <div class="car-content">
                                        <div class="post-cat">
                                            {{ $similarCar->manufacture_date ?? 'N/A' }} Model
                                        </div>
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <span>0 Reviews</span>
                                        </div>
                                        <h4><a href="{{ route('site.car_details', ['car_id' => $similarCar->id]) }}">{{ $similarCar->brand->name ?? '' }} {{ $similarCar->models->name ?? '' }}</a></h4>
                                        <h6>R$ {{ number_format($similarCar->price_per_day, 2, ',', '.') }} <span>/ Day</span></h6>
                                        <div class="icon-items">
                                            <ul>
                                                <li>
                                                    <img src="{{ url('assets/user/img/car/seat.svg') }}" alt="img" class="me-1">
                                                    {{ $similarCar->number_of_seats ?? 'N/A' }} Seats
                                                </li>
                                                <li>
                                                    <img src="{{ url('assets/user/img/car/door.svg') }}" alt="img" class="me-1">
                                                    {{ $similarCar->number_of_doors ?? 'N/A' }} Doors
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <img src="{{ url('assets/user/img/car/automatic.svg') }}" alt="img" class="me-1">
                                                    {{ $similarCar->transmission ?? 'N/A' }}
                                                </li>
                                                <li>
                                                    <img src="{{ url('assets/user/img/car/petrol.svg') }}" alt="img" class="me-1">
                                                    {{ $similarCar->fuel->name ?? 'N/A' }}
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="{{ route('site.car_details', ['car_id' => $similarCar->id]) }}" class="theme-btn bg-color w-100 text-center">Book Now <i class="fa-solid fa-arrow-right ps-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>--}}
    </div>
    <!--<< Breadcrumb Section End >>-->
@endsection