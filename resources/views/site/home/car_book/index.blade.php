@extends('site.home.car_book.layout.main')
@section('content-car_book')

    <!-- Section para exibir os detalhes do carro e o formulário lado a lado -->
    <section class="car-details fix section-padding">
        <div class="container">
            <div class="row g-5">

                {{-- Barra de etapas do processo de reserva --}}
                <section class="reservation-steps section-padding pt-4 pb-4">
                    <div class="container">
                        <div class="row text-center justify-content-center">
                            @php
                                $steps = [
                                    ['etapa' => 'Seleção do Carro', 'icone' => 'fa-car', 'ativo' => false],
                                    ['etapa' => 'Extras', 'icone' => 'fa-boxes', 'ativo' => false],
                                    ['etapa' => 'Confirmação', 'icone' => 'fa-check-circle', 'ativo' => true],
                                ];
                            @endphp

                            @foreach ($steps as $step)
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
                                <input type="hidden" name="pickup_location"
                                    value="{{ $reservationData['pickup_location'] ?? '' }}">
                                <input type="hidden" name="start_date" value="{{ $reservationData['start_date'] ?? '' }}">
                                <input type="hidden" name="end_date" value="{{ $reservationData['end_date'] ?? '' }}">
                                <input type="hidden" name="driver_id" value="{{ $reservationData['driver_id'] ?? '' }}">

                                @if (!empty($reservationData['extras']))
                                    @foreach ($reservationData['extras'] as $extra)
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

                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <label class="label-text">Endereço</label>
                                            <input type="text" name="address" required placeholder="Address">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-3">
                                        <label class="label-text">Bilhete de Identidade</label>
                                        <div class="input-group">
                                            <input type="text" name="bi" class="form-control"
                                                value="{{ old('bi') }}">
                                            <input type="file" name="bi_upload" class="form-control"
                                                accept="application/pdf" style="border-left: 1px solid #ced4da;">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-3">
                                        <label class="form-label">Carta de Condução</label>
                                        <div class="input-group">
                                            <input type="text" name="driver_license" class="form-control"
                                                value="{{ old('driver_license') }}">
                                            <input type="file" name="driver_license_upload" class="form-control"
                                                accept="application/pdf" style="border-left: 1px solid #ced4da;">
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
                                            <input type="text" name="card_number" maxlength="21" required
                                                placeholder="0000 0000 0000 0000 0000 0">
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
                                            <input type="password" name="cvv" maxlength="3" required
                                                placeholder="***">
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
                <!--End Coluna esquerda: Formulário Cliente + Pagamento -->

                <!-- Coluna direita: Detalhes do carro -->
                <div class="col-lg-7">
                    <div
                        class="car-details-wrapper d-flex flex-column justify-content-start border rounded shadow-sm p-3 bg-white">

                        <div
                            style="display:flex; flex-direction:row; justify-content:space-between; color: #141313 !important">
                            <h5 class="fw-semibold mb-1" style="color: #141313 !important">
                                {{ $car->brand->name ?? '' }} {{ $car->models->name ?? '' }}
                            </h5>
                            <h5 class="h6 fw-semibold">{{ number_format($car->price, 2, ',', '.') }} Kz
                                <small>/Dia</small>
                            </h5>
                        </div>

                        <div style="border-bottom:1px solid #5f5b5b"></div>

                        {{-- Imagem do carro --}}
                        <div class="car-details-items text-center mb-3" style="border: none">
                            <div class="car-image">
                                <img src="{{ asset('uploads/car/car_images/' . $car->image) }}"
                                    alt="{{ $car->brand->name ?? '' }} {{ $car->models->name ?? '' }}">
                            </div>
                        </div>

                        {{-- Principais Características --}}
                        <div class="icon-details-area px-3 py-2 rounded shadow-sm border bg-light mb-3">
                            @php
                                $icons = [
                                    ['src' => 'assets/user/img/car/icon/07.png', 'value' => $car->category ?? 'N/A'],
                                    [
                                        'src' => 'assets/user/img/car/icon/07.png',
                                        'value' => ($car->mileage ?? 'N/A') . ' km',
                                    ],
                                    [
                                        'src' => 'assets/user/img/car/icon/07.png',
                                        'value' => $car->manufacture_date ?? 'N/A',
                                    ],
                                    ['src' => 'assets/user/img/car/icon/07.png', 'value' => $car->engine ?? 'N/A'],
                                    [
                                        'src' => 'assets/user/img/car/seat.svg',
                                        'value' => $car->number_of_seats ?? 'N/A',
                                    ],
                                    [
                                        'src' => 'assets/user/img/car/door.svg',
                                        'value' => $car->number_of_doors ?? 'N/A',
                                    ],
                                    [
                                        'src' => 'assets/user/img/car/automatic.svg',
                                        'value' => $car->transmission ?? 'N/A',
                                    ],
                                    ['src' => 'assets/user/img/car/petrol.svg', 'value' => $car->fuel->name ?? 'N/A'],
                                ];
                            @endphp
                            <h6 class="text-center mb-2" style="color: #141313 !important">
                                <i class="fa-solid fa-clipboard-list me-2" style="color: #141313"></i>Detalhes do Carro
                            </h6>

                            <div class="d-flex flex-wrap justify-content-center gap-3">
                                @foreach ($icons as $item)
                                    <div class="text-center" style="min-width:45px;">
                                        <img src="{{ url($item['src']) }}" alt="icon" width="18"
                                            class="mb-1">
                                        <div class="fw-light small">{{ $item['value'] }}</div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        {{-- Detalhes da Reserva --}}
                        @if (!empty($reservationData))
                            @php
                                $dias = 0;
                                if (!empty($reservationData['start_date']) && !empty($reservationData['end_date'])) {
                                    $dias = \Carbon\Carbon::parse($reservationData['start_date'])->diffInDays(
                                        \Carbon\Carbon::parse($reservationData['end_date']),
                                    );
                                    $dias = $dias === 0 ? 1 : $dias;
                                }
                                $total = $dias * ($car->price ?? 0);
                                $extrasTotal = 0;
                                if (!empty($reservationData['extras_prices'])) {
                                    foreach ($reservationData['extras_prices'] as $price) {
                                        $extrasTotal += $price;
                                    }
                                }
                                $total += $extrasTotal;
                            @endphp

                            <div class="reservation-summary p-3 rounded shadow-sm border bg-white">
                                <h6 class="text-center mb-2" style="color: #141313 !important">
                                    <i class="fa-solid fa-clipboard-list me-2"
                                        style="color: #141313 !important"></i>Detalhes da Reserva
                                </h6>
                                <div class="small text-muted mb-1">
                                    <strong>Local:</strong> {{ $reservationData['pickup_location'] ?? '---' }}
                                </div>
                                <div class="small text-muted mb-1">
                                    <strong>Início:</strong> {{ $reservationData['start_date'] ?? '---' }}
                                </div>
                                <div class="small text-muted mb-1">
                                    <strong>Término:</strong> {{ $reservationData['end_date'] ?? '---' }}
                                </div>
                                <div class="small text-muted mb-2">
                                    <strong>Motorista:</strong> {{ $reservationData['driver_id'] ?? '---' }}
                                </div>

                                @if (!empty($reservationData['extras']))
                                    <div class="small text-muted mb-2">
                                        <strong>Extras:</strong>
                                        <ul class="ps-3 mt-1">
                                            @foreach ($reservationData['extras'] as $extra)
                                                <li>{{ $extra }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div
                                    class="p-2 bg-success bg-opacity-10 rounded d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-success">Valor Total:</span>
                                    <span class="fw-bold text-success">
                                        {{ number_format($total, 2, ',', '.') }} Kz
                                    </span>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <!-- End Coluna direita: Detalhes do carro -->

            </div>
        </div>
    </section>
    </div>
@endsection
