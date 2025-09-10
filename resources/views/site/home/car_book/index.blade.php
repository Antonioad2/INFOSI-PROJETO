@extends('site.home.car_book.layout.main')
@section('content-car_book')

    <!-- Section para exibir os detalhes do carro e o formulário lado a lado -->
    <section class="car-details fix section-padding">
        <div class="container">
            <div class="row g-5">

                <!-- Coluna esquerda: Formulário Cliente + Pagamento -->
                <div class="col-lg-5">
                    <div class="car-details-wrapper-booking">
                        <div class="car-booking-items">
                            <div class="booking-header">
                                <h3>Finalizar Reserva</h3>
                                <p>Preencha seus dados e efetue o pagamento.</p>
                            </div>

                            <form action="{{ route('site.reservation.confirm') }}" method="POST">
                                @csrf
                                <input type="hidden" name="car_id" value="{{ $car->id }}">

                                    <!-- Carro escolhido -->
                                        <input type="hidden" name="car_id" value="{{ $car->id }}">
                                    <!-- Fim carro escolhido -->

                                    <!-- Dados da reserva vindos do step1 -->
                                        <input type="hidden" name="pickup_location" value="{{ $reservationData['pickup_location'] ?? '' }}">
                                        <input type="hidden" name="start_date" value="{{ $reservationData['start_date'] ?? '' }}">
                                        <input type="hidden" name="end_date" value="{{ $reservationData['end_date'] ?? '' }}">
                                        <input type="hidden" name="driver_id" value="{{ $reservationData['driver_id'] ?? '' }}">
                                        
                                        @if(!empty($reservationData['extras']))
                                            @foreach($reservationData['extras'] as $extra)
                                                <input type="hidden" name="extras[]" value="{{ $extra }}">
                                            @endforeach
                                        @endif
                                    <!-- Fim dados reserva -->

                                <div class="row g-4">
                                    <!-- Cliente -->
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <label class="label-text">Nome</label>
                                            <input type="text" name="name" required placeholder="João Silva">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <label class="label-text">Data Nascimento</label>
                                            <input type="date" name="birth_date" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <label class="label-text">Email</label>
                                            <input type="email" name="email" required placeholder="joaosilva@gmail.com">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <label class="label-text">Contacto</label>
                                            <input type="text" name="phone" required placeholder="+244 923 456 789">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <label class="label-text">Endereço</label>
                                            <input type="text" name="address" required placeholder="Address">
                                        </div>
                                    </div>

                                    <!-- Pagamento -->
                                    <div class="col-12 mt-4">
                                        <h4>Pagamento</h4>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <label class="label-text">Nome no Cartão</label>
                                            <input type="text" name="card_name" required placeholder="Ex: João Manuel">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <label class="label-text">Banco Emissor</label>
                                            <select name="bank" class="form-control" required>
                                                <option value="">Selecione o Banco</option>
                                                <option value="BAI">BAI</option>
                                                <option value="BFA">BFA</option>
                                                <option value="BCI">BCI</option>
                                                <option value="Standard">Standard Bank</option>
                                                <option value="Atlântico">Banco Atlântico</option>
                                                <option value="Outro">Outro</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <label class="label-text">Número do Cartão</label>
                                            <input type="text" name="card_number" maxlength="16" required placeholder="0000 0000 0000 0000">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <label class="label-text">Validade</label>
                                            <input type="month" name="expiry_date" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <label class="label-text">CVV</label>
                                            <input type="password" name="cvv" maxlength="3" required placeholder="***">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <button class="theme-btn" type="submit">Confirmar Reserva</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Coluna direita: Detalhes do carro -->
                <div class="col-lg-7">

                    
                    <div class="car-details-wrapper">
                        <div class="car-details-items">
                            <div class="car-image">
                                <img src="{{ asset('uploads/car/car_images/' . $car->image) }}" 
                                     alt="{{ $car->brand->name ?? '' }} {{ $car->models->name ?? '' }}">
                            </div>
                            <div class="car-content">
                                <h3>{{ $car->brand->name ?? '' }} {{ $car->models->name ?? '' }}</h3>
                                <h6>{{ number_format($car->price, 2, ',', '.') }} Kz<span>/ Dia</span></h6>
                                
                                    <div class="icon-details-area">
                                            <h4>Principais Características</h4>
                                            <div class="icon-details-main-items">
                                                <div class="icon-items">
                                                    <div class="icon"><img src="{{ url('assets/user/img/car/icon/07.png') }}" alt="img"></div>
                                                    <div class="content"><h6>Categoria:</h6><p>{{ $car->category ?? 'N/A' }}</p></div>
                                                </div>
                                                <div class="icon-items">
                                                    <div class="icon"><img src="{{ url('assets/user/img/car/icon/07.png') }}" alt="img"></div>
                                                    <div class="content"><h6>Quilometragem:</h6><p>{{ $car->mileage ?? 'N/A' }} (Km)</p></div>
                                                </div>
                                                <div class="icon-items">
                                                    <div class="icon"><img src="{{ url('assets/user/img/car/icon/07.png') }}" alt="img"></div>
                                                    <div class="content"><h6>Ano:</h6><p>{{ $car->manufacture_date ?? 'N/A' }}</p></div>
                                                </div>
                                                <div class="icon-items">
                                                    <div class="icon"><img src="{{ url('assets/user/img/car/icon/07.png') }}" alt="img"></div>
                                                    <div class="content"><h6>Cilindragem:</h6><p>{{ $car->engine ?? 'N/A' }}</p></div>
                                                </div>
                                            </div>
                                            <div class="icon-details-main-items">
                                                <div class="icon-items">
                                                    <div class="icon"><img src="{{ url('assets/user/img/car/seat.svg') }}" alt="img"></div>
                                                    <div class="content"><h6>Lugares:</h6><p>{{ $car->number_of_seats ?? 'N/A' }}</p></div>
                                                </div>
                                                <div class="icon-items">
                                                    <div class="icon"><img src="{{ url('assets/user/img/car/door.svg') }}" alt="img"></div>
                                                    <div class="content"><h6>Porta:</h6><p>{{ $car->number_of_doors ?? 'N/A' }}</p></div>
                                                </div>
                                                <div class="icon-items">
                                                    <div class="icon"><img src="{{ url('assets/user/img/car/automatic.svg') }}" alt="img"></div>
                                                    <div class="content"><h6>Transmissão:</h6><p>{{ $car->transmission ?? 'N/A' }}</p></div>
                                                </div>
                                                <div class="icon-items">
                                                    <div class="icon"><img src="{{ url('assets/user/img/car/petrol.svg') }}" alt="img"></div>
                                                    <div class="content"><h6>Combustível:</h6><p>{{ $car->fuel->name ?? 'N/A' }}</p></div>
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
</div>
@endsection
