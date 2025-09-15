@extends('site.home.car_details.layout.main')
@section('content-car_details')

    <!-- Section para exibir od detalhes do carro -->
        <section class="car-details fix section-padding">
            <div class="container">
                <div class="car-details-wrapper">
                    <div class="row g-5">
                        
                        {{-- Barra de etapas do processo de reserva --}}
                            <section class="reservation-steps section-padding pt-4 pb-4">
                                <div class="container">
                                    <div class="row text-center justify-content-center">
                                        @php
                                            $steps = [
                                                ['etapa' => 'Seleção do Carro', 'icone' => 'fa-car', 'ativo' => false],
                                                ['etapa' => 'Extras', 'icone' => 'fa-boxes', 'ativo' => true],
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

                                        <!-- Botão -->
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <button type="submit" class="theme-btn">Continuar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                    </div>
                </div>
            </div>
        </section>

@endsection