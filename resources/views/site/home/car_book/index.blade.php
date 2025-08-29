@extends('site.home.car_book.layout.main')
@section('content-car_book')

    <div>
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/user/img/bg-header-banner.jpg')">
            <div class="container">
                <div class="page-heading">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fas fa-chevron-right"></i></li>
                        <li>Cars</li>
                    </ul>
                    <h1 class="wow fadeInUp" data-wow-delay=".5s">Single Car</h1>
                </div>
            </div>
        </div>

        <!-- Section para exibir os detalhes do carro e o formulário lado a lado -->
        <section class="car-details fix section-padding">
            <!-- INICIO container -->
            <div class="container">

                <!-- INICIO row -->
                <div class="row g-5">
                    
                    <!-- Coluna da esquerda: Detalhes do Carro -->
                        <div class="col-lg-5">
                            <div class="car-details-wrapper-booking">

                                <div class="car-booking-items">
                                    <div class="booking-header">
                                        <h3>Request for Booking</h3>
                                        <p>Send your requirement to us. We will check email and contact you soon.</p>
                                    </div>

                                    <form action="#" id="contact-form" method="POST" class="contact-form-items">
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="form-clt">
                                                    <label class="label-text">Nome</label>
                                                    <input type="text" name="name" id="name" placeholder="Joao Silva">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-clt">
                                                    <label class="label-text">Data Nascimento</label>
                                                    <input type="date" name="date" id="date">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-clt">
                                                    <label class="label-text">Email</label>
                                                    <input type="text" name="email" id="email" placeholder="joaosilva@gmail.com">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-clt">
                                                    <label class="label-text">Contacto</label>
                                                    <input type="text" name="phone" id="phone" placeholder="+244 923 456 789">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-clt">
                                                    <label class="label-text">Endereço</label>
                                                    <input type="text" name="address" id="address" placeholder="Address">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <!-- FIM Coluna da esquerda: Detalhes do Carro -->

                    <!-- Coluna da direita: Formulário de Booking -->
                        <div class="col-lg-7">
                            <div class="car-details-wrapper">
                                <div class="car-details-items">
                                    <div class="car-image">
                                        <img src="{{ asset('uploads/car/car_images/' . $car->image) }}" 
                                            alt="{{ $car->brand->name ?? '' }} {{ $car->models->name ?? '' }}">
                                    </div>
                                    <div class="car-content">
                                        <h3>{{ $car->brand->name ?? '' }} {{ $car->models->name ?? '' }}</h3>
                                        <h6>R$ {{ number_format($car->price_per_day, 2, ',', '.') }} <span>/ Day</span></h6>

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
                    <!-- FIM Coluna da direita: Formulário de Booking -->

                </div> 
                <!-- FIM row -->
                
            </div>
            <!-- FIM container -->
        </section>

        <!-- Section: Pagamento com Cartão -->
        <section class="payment-section fix section-padding">
            <div class="payment-wrapper">
                <div class="row g-5">
                    <div class="col-12">
                        <div class="payment-header">
                            <h3>Pagamento com Cartão de Débito</h3>
                            <p>Insira os dados do seu cartão Multicaixa ou Visa/Débito emitido por bancos angolanos.</p>
                        </div>

                        <form action="#" method="POST" class="payment-form">
                            <div class="row g-4">
                                <!-- Nome do Titular -->
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <label class="label-text">Nome no Cartão</label>
                                        <input type="text" name="card_name" placeholder="Ex: João Manuel">
                                    </div>
                                </div>

                                <!-- Banco -->
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <label class="label-text">Banco Emissor</label>
                                        <select name="bank" class="form-control">
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

                                <!-- Número do Cartão -->
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <label class="label-text">Número do Cartão</label>
                                        <input type="text" name="card_number" maxlength="16" placeholder="0000 0000 0000 0000">
                                    </div>
                                </div>

                                <!-- Data de Validade -->
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <label class="label-text">Validade</label>
                                        <input type="month" name="expiry_date">
                                    </div>
                                </div>

                                <!-- CVV -->
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <label class="label-text">CVV</label>
                                        <input type="password" name="cvv" maxlength="3" placeholder="***">
                                    </div>
                                </div>

                                <!-- Botão -->
                                <div class="col-lg-12">
                                    <button class="theme-btn" type="submit">
                                        Confirmar Pagamento
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- FIM Section: Pagamento com Cartão -->

    </div>
@endsection
