@extends('site.home.reservation.layout.main')
@section('content-reservation')

    <!-- View para Listagem de Carros disponíveis -->
    <div>
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/user/img/bg-header-banner.jpg');">
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
                    <h1 class="wow fadeInUp" data-wow-delay=".5s">list Style</h1>
                </div>
            </div>
        </div>

        <!-- Cards Para Listagem de Carros disponíveis -->
        <section class="car-list-section section-padding fix">
            <div class="container">
                <h3 class="mb-4">Carros disponíveis</h3>

                @if($cars->isEmpty())

                     <!-- No caso da tabela cars estiver vazia(nenhum carro cadastrado) -->
                    <p>Nenhum carro disponível para os critérios informados.</p>

                @else

                    <!-- Caso encontre carros-->
                    <div class="car-list-wrapper">
                        <div class="row g-4">
                            @foreach($cars as $car)
                                <div class="col-lg-12">
                                    <div class="car-list-items">
                                        <div class="car-image bg-cover" 
                                            style="background-image: url('{{ asset('uploads/car/car_images/' . $car->image) }}');">
                                            <div class="post-cat">
                                                Modelo de {{ $car->manufacture_date }}
                                            </div>
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
                                            
                                            <h6 class="price">
                                                R$ {{ number_format($car->price_per_day, 2, ',', '.') ?? '---' }} 
                                                <span>/ Dia</span>
                                             <a href="{{ route('site.car_details', ['car_id' => $car->id]) }}" class="theme-btn">
                                                    Selecionar
                                                </a>
                                            </h6>  
                                                                                      
                                            <h3>
                                                <a href="#">
                                                    {{ $car->brand->name ?? '' }} {{ $car->models->name ?? '' }}
                                                </a>
                                            </h3>
                                            <p>
                                                Categoria: {{ $car->category ?? '' }} <br>
                                                Cor: {{ $car->color->name ?? '' }} <br>
                                                Combustível: {{ $car->fuel->name ?? '' }}
                                            </p>
                                            <ul class="icon-items">
                                                <li>
                                                    <img src="{{ asset('assets/user/img/car/seat.svg') }}" alt="img" class="me-1">
                                                    {{ $car->number_of_seats ?? '---' }} Lugares
                                                </li>
                                                <li>
                                                    <img src="{{ asset('assets/user/img/car/door.svg') }}" alt="img" class="me-1">
                                                    {{ $car->number_of_doors ?? '---' }} Portas
                                                </li>
                                                <li>
                                                    <img src="{{ asset('assets/user/img/car/automatic.svg') }}" alt="img" class="me-1">
                                                    {{ $car->transmission ?? '---' }}
                                                </li>
                                                <li>
                                                    <img src="{{ asset('assets/user/img/car/petrol.svg') }}" alt="img" class="me-1">
                                                    {{ $car->fuel->name ?? '---' }}
                                                </li>

                                            </ul>
                                            
                                        </div>
                                     
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </section>


    </div>
    <!-- Fim da View -->
@endsection