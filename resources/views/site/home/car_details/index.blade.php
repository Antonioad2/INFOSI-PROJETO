@extends('site.home.car_details.layout.main')
@section('content-car_details')

    <!--View para Exibição do caso escolhido para reserva-->
     <div>
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('{{ asset('assets/user/img/bg-header-banner.jpg') }}')">
            <div class="container">
                <div class="page-heading">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li><a href="{{route('site.home')}}">Home</a></li>
                        <li><i class="fas fa-chevron-right"></i></li>
                        <li>Cars</li>
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
                        {{-- <div class="col-lg-7">
                            <div class="car-details-items">
                                <div class="car-image">
                                    <img src="{{ asset('uploads/car/car_images/' . $car->image) }}" 
                                        alt="{{ $car->brand->name ?? '' }} {{ $car->models->name ?? '' }}"
                                        style="width: 30rem"
                                    >
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
                                    <h6>{{ number_format($car->price, 2, ',', '.') }} Kz <span>/ Dia</span></h6>
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
                        </div> --}}

                        <!-- FORMULARIO DE AGENDAMENTO DA RESERVA-->         
                        
                            <div class="car-list-sidebar" >
                                <form action="{{ route('site.reservation.step1', ['car_id' => $car->id]) }}" 
                                    id="contact-form2" 
                                    method="POST" 
                                    class="contact-form-items">
                                    @csrf

                                    <div class="row g-4">
                                        <!-- Local -->
                                        <h4 class="title">Detalhes de Levantamento</h4>
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <label class="label-text">Localizaçao</label>
                                                <div class="pickup_location">
                                                   <select name="pickup_location" class="category" required>
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
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <label class="label-text">Data de Levantamento</label>
                                                <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                                                    <input class="form-control" type="text" name="start_date" placeholder="Data de Levantamento" required>
                                                    <span class="input-group-addon"><i class="fa-solid fa-calendar-days"></i></span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Data de Drop-off -->
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <label class="label-text">Data de Entrega</label>
                                                <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                                                    <input class="form-control" type="text" name="end_date" placeholder="Data de Entrega" required>
                                                    <span class="input-group-addon"><i class="fa-solid fa-calendar-days"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="division"></div>
                                    
                                    <div class="row g-4">
                                        <h4 class="title">Recursos adicionais</h4>
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <div class="input-save-items-area">
                                                    <div class="input-resources">
                                                        <!-- Listagem Dinâmica dos Extras -->
                                                        <!-- Os extras estão definidos no ficheiro config/resources.php -->
                                                        @php
                                                            $extras = config('resources.extras', []);
                                                        @endphp

                                                        @if(!empty($extras))
                                                            @foreach($extras as $key => $data)
                                                                <div class="input-resources-add">
                                                                    <label for="{{ $key }}">
                                                                        <i class="{{ $data['icon'] ?? 'fas fa-check' }} me-2"></i> <br>
                                                                        {{ $data['label'] }} <br> +
                                                                        {{ number_format($data['price'], 2, ',', '.') }} Kz
                                                                    </label>
                                                                    <input type="checkbox" class="form-check-input"
                                                                        name="resources[]" value="{{ $key }}" id="{{ $key }}"
                                                                        {{ (is_array(old('resources')) && 
                                                                        in_array($key, old('resources'))) ?
                                                                        'checked' : '' }}
                                                                    >
                                                                </div>
                                                            @endforeach
                                                        @else
                                                            <p class="text-muted">Nenhum recurso adicional disponível.</p>
                                                        @endif
                                                        <!-- Fim da Listagem Dinâmica -->

                                                        <!-- Incluir Motorista -->
                                                        <div class="input-resources-driver">
                                                            <label for="withDriver">
                                                                <i class="fas fa-user-tie me-2"></i> <br>
                                                                Incluir Motorista
                                                            </label> <br>
                                                            <input type="checkbox" id="withDriver" name="with_driver" value="1">

                                                            <div id="driverSelect" style="display:none;" class="mt-2">
                                                                <label for="driver_id">Escolha o motorista:</label>
                                                                <select name="driver_id" id="driver_id" class="form-select">
                                                                    @foreach($drivers as $driver)
                                                                        <option value="{{ $driver->id }}">
                                                                            {{ $driver->full_name }} (+ {{ number_format($driver->daily_price, 2, ',', '.') }} Kz / dia)
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <!-- Script para mostrar/ocultar a seleção do motorista -->
                                                        <script>
                                                            document.getElementById('withDriver').addEventListener('change', function() {
                                                            document.getElementById('driverSelect').style.display = this.checked ? 'block' : 'none';
                                                            });
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- <div class="division"></div>

                                            <div class="row g-4">
                                                <h4 class="title">Valor da Reserva</h4>
                                                <div>
                                                    <h5>Preço diário do carro</h5>
                                                    <h6>{{ number_format($car->price, 2, ',', '.') }} Kz</h6>
                                                </div>
                                                <div>
                                                    <h5>Valor total da reserva</h5>
                                                    <!-- TOTAL: hidden (para envio) + display -->
                                                    <div class="col-lg-4 mb-4">
                                                        <label class="form-label">Valor Total</label>
                                                        <input type="hidden" id="totalAmount" name="total_amount" value="{{ old('total_amount', 0) }}">
                                                        <input type="text" id="totalAmountDisplay" class="form-control" value="{{ old('total_amount') ? number_format(old('total_amount'), 2, ',', '.') . ' Kz' : '' }}" readonly>
                                                    </div>
                                                </div>
                                            </div>  --}}

                                        <!-- Botão -->
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <button type="submit" class="theme-btn">Continuar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>

                            {{-- <!-- Script para o calculo automático para o preço -->
                                
                            <script>
                                    // injeta config do backend no frontend (garante fonte única de verdade)
                                    window.resourcePrices = @json(config('resources.extras'));
                                    // driver prices por id (pega do select via data-price, mas deixo isto como fallback)
                                    window.driverPrices = @json($drivers->pluck('daily_price', 'id'));

                                    document.addEventListener('DOMContentLoaded', function () {
                                        const carSelect   = document.getElementById("carSelect");
                                        const startDate   = document.querySelector("input[name='start_date']");
                                        const endDate     = document.querySelector("input[name='end_date']");
                                        const resources   = document.querySelectorAll("input[name='resources[]']");
                                        const withDriver  = document.getElementById("withDriver");
                                        const driverDiv   = document.getElementById("driverSelect");
                                        const driverInput = document.getElementById("driverSelectInput");
                                        const totalAmount = document.getElementById("totalAmount");           // hidden (envio)
                                        const totalDisplay= document.getElementById("totalAmountDisplay");    // visível

                                        function daysBetween(startStr, endStr) {
                                            const [y1,m1,d1] = startStr.split('-').map(Number);
                                            const [y2,m2,d2] = endStr.split('-').map(Number);
                                            const start = Date.UTC(y1, m1 - 1, d1);
                                            const end   = Date.UTC(y2, m2 - 1, d2);
                                            const diff  = (end - start) / (1000 * 60 * 60 * 24);
                                            return diff > 0 ? diff : 1;
                                        }

                                        function formatKz(n) {
                                            return new Intl.NumberFormat('pt-PT', { minimumFractionDigits: 2, maximumFractionDigits: 2 }).format(n) + ' Kz';
                                        }

                                        function getDriverDailyPrice() {
                                            if (!driverInput) return 0;
                                            const opt = driverInput.options[driverInput.selectedIndex];
                                            if (opt && opt.dataset.price) return parseFloat(opt.dataset.price) || 0;
                                            return window.driverPrices && window.driverPrices[driverInput.value] ? parseFloat(window.driverPrices[driverInput.value]) : 0;
                                        }

                                        function calculateTotal() {
                                            let total = 0;
                                            let days = 1;
                                            if (startDate.value && endDate.value) {
                                                days = daysBetween(startDate.value, endDate.value);
                                            }

                                            // preço do carro (data-price)
                                            const selectedCar = carSelect.options[carSelect.selectedIndex];
                                            if (selectedCar && selectedCar.dataset.price) {
                                                total += (parseFloat(selectedCar.dataset.price) || 0) * days;
                                            }

                                            // recursos (pegar só o price do objeto)
                                            resources.forEach(r => {
                                                if (r.checked) {
                                                    const resource = window.resourcePrices ? window.resourcePrices[r.value] : null;
                                                    const price = resource && resource.price ? parseFloat(resource.price) : 0;
                                                    total += price;
                                                }
                                            });

                                            // motorista (por dia)
                                            if (withDriver.checked) {
                                                total += getDriverDailyPrice() * days;
                                            }

                                            totalAmount.value = total.toFixed(2);
                                            totalDisplay.value = formatKz(total);
                                        }

                                        withDriver.addEventListener('change', function () {
                                            driverDiv.style.display = this.checked ? 'block' : 'none';
                                            if (!this.checked && driverInput) driverInput.value = '';
                                            calculateTotal();
                                        });

                                        [carSelect, startDate, endDate, driverInput].forEach(el => {
                                            if (!el) return;
                                            el.addEventListener('change', calculateTotal);
                                        });
                                        resources.forEach(r => r.addEventListener('change', calculateTotal));

                                        calculateTotal();
                                    });
                            </script>

                            <!-- FIM do Script para o calculo automático para o preço --> --}}
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