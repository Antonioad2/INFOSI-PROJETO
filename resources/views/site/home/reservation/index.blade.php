@extends('site.home.reservation.layout.main')
@section('content-reservation')

    <!-- View para Listagem de Carros disponíveis -->
    <div>

        <!-- Cards Para Listagem de Carros disponíveis -->
        <section class="car-list-section section-padding fix">
            <div class="container">

                {{-- Barra de etapas do processo de reserva --}}
                <section class="reservation-steps section-padding pt-4 pb-4">
                    <div class="container">
                        <div class="row text-center justify-content-center">
                            @php
                                $steps = [
                                    ['etapa' => 'Seleção do Carro', 'icone' => 'fa-car', 'ativo' => true],
                                    ['etapa' => 'Extras', 'icone' => 'fa-boxes', 'ativo' => false],
                                    ['etapa' => 'Confirmação', 'icone' => 'fa-check-circle', 'ativo' => false],
                                ];
                            @endphp

                            @foreach($steps as $step)
                                <div class="col-md-2 col-6 mb-3">
                                    <div class="card border-0 shadow-sm {{ $step['ativo'] ? 'bg-primary text-white' : '' }}">
                                        <div class="card-body d-flex flex-column align-items-center">
                                            <i class="fa-solid {{ $step['icone'] }} fa-2x mb-2"></i>
                                            <span class="fw-semibold">{{ $step['etapa'] }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                {{-- End Barra de etapas do processo de reserva --}}

                <h3 class="mb-4">Carros disponíveis</h3>

                <!-- Adicionando o filtro por categoria -->
                <div class="category-filter mb-4">
                    <h5>Filtrar por Categoria:</h5>
                    <div class="btn-group">
                        <a href="{{ route('site.reservation') }}" class="btn {{ !request('category') ? 'active' : '' }}">Todos</a>
                                <a href="{{ route('site.reservation', ['category' => 'Luxury']) }}" class="btn {{ request('category') == 'Luxury' ? 'active' : '' }}">Luxo</a>
                                <a href="{{ route('site.reservation', ['category' => 'Standard']) }}" class="btn {{ request('category') == 'Standard' ? 'active' : '' }}">Intermédio</a>
                                <a href="{{ route('site.reservation', ['category' => 'Economy']) }}"  class="btn {{ request('category') == 'Economy' ? 'active' : '' }}">Econômico</a>
                        </div>
                </div>

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
                                                {{ number_format($car->price, 2, ',', '.') ?? '---' }} Kz
                                                <span>/ Dia</span>
                                             <a href="{{ route('site.car_details', ['car_id' => $car->id]) }}" class="theme-btn1">
                                                    Selecionar
                                                </a>
                                            </h6>  
                                                                                      
                                            <h3>
                                                <a href="#">
                                                    {{ $car->brand->name ?? '' }} {{ $car->models->name ?? '' }}
                                                </a>
                                            </h3>
                                            <p>
                                                Categoria:  
                                                @if($car->category == 'Luxury')
                                                    <span class="badge bg-danger">Luxo</span>
                                                @elseif($car->category == 'Standard')
                                                    <span class="badge bg-warning">Intermédio</span>
                                                @elseif($car->category == 'Economy')
                                                    <span class="badge bg-primary">Económico</span>
                                                @endif <br>
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