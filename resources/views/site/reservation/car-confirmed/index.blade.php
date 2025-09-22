@extends('site.reservation.layouts.main')
@section('title', 'AngoCar - Reserva Concluída')
@section('content')

    <!-- Breadscrumb Section -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">
                        <font dir="auto" style="vertical-align: inherit;">
                            <font dir="auto" style="vertical-align: inherit;">Confira</font>
                        </font>
                    </h2>
                    <nav aria-label="migalhas de pão" class="page-breadcrumb">
                        <ol class="breadcrumb">
                          
                            <li class="breadcrumb-item active" aria-current="page">
                                <font dir="auto" style="vertical-align: inherit;">
                                    <font dir="auto" style="vertical-align: inherit;">Confira</font>
                                </font>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadscrumb Section -->

    <!-- Booking Success -->
     <div class="booking-new-module">
			<div class="container">
				<div class="booking-wizard-head">
					<div class="row align-items-center">
						<div class="col-xl-4 col-lg-3">
							<div class="booking-head-title">
								<h4>Reserve Seu Carro</h4>
								<p>Complete as seguintes etapas</p>
							</div>
						</div>
						<div class="col-xl-8 col-lg-9">
							<div class="booking-wizard-lists">
								<ul>
									<li class="active activated">
										<span><img src="{{ url('assets/user/img/icons/booking-head-icon-01.svg')}}" alt="Ícone de Reserva"></span>
										<h6>Localização e Horário</h6>
									</li>
									<li class="active activated">
										<span><img src="{{ url('assets/user/img/icons/booking-head-icon-02.svg')}}" alt="Ícone de Reserva"></span>
										<h6>Serviços Extras</h6>
									</li>
									<li class="active activated">
										<span><img src="{{ url('assets/user/img/icons/booking-head-icon-03.svg')}}" alt="Ícone de Reserva"></span>
										<h6>Detalhes</h6>
									</li>
									<li class="active activated">
										<span><img src="{{ url('assets/user/img/icons/booking-head-icon-04.svg')}}" alt="Ícone de Reserva"></span>
										<h6>Checkout</h6>
									</li>
									<li class="active">
										<span><img src="{{ url('assets/user/img/icons/booking-head-icon-05.svg')}}" alt="Ícone de Reserva"></span>
										<h6>Reserva Confirmada</h6>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
		        <div class="booking-card">
                <div class="success-book">
                    <span class="success-icon">
                        <i class="fa-solid fa-check-double"></i>
                    </span>
                    <h5>
                        <font dir="auto" style="vertical-align: inherit;">
                            <font dir="auto" style="vertical-align: inherit;">Obrigado! Seu pedido foi recebido
                            </font>
                        </font>
                    </h5>
                    <h5 class="order-no">
                        <font dir="auto" style="vertical-align: inherit;">
                            <font dir="auto" style="vertical-align: inherit;">Número do pedido: </font>
                        </font><span>
                            <font dir="auto" style="vertical-align: inherit;">
                                <font dir="auto" style="vertical-align: inherit;">#123456</font>
                            </font>
                        </span>
                    </h5>
                </div>
                <div class="booking-header">
                    <div class="booking-img-wrap">
                        <div class="book-img">
                            <img src="assets/user/img/cars/car-05.jpg" alt="imagem">
                        </div>
                        <div class="book-info">
                            <h6>
                                <font dir="auto" style="vertical-align: inherit;">
                                    <font dir="auto" style="vertical-align: inherit;">Chevrolet Camaro</font>
                                </font>
                            </h6>
                            <p><i class="feather-map-pin"></i>
                                <font dir="auto" style="vertical-align: inherit;">
                                    <font dir="auto" style="vertical-align: inherit;">Localização: Miami St, Destin,
                                        FL 32550, EUA</font>
                                </font>
                            </p>
                        </div>
                    </div>
                    <div class="book-amount">
                        <p>
                            <font dir="auto" style="vertical-align: inherit;">
                                <font dir="auto" style="vertical-align: inherit;">Montante total</font>
                            </font>
                        </p>
                        <h6>
                            <font dir="auto" style="vertical-align: inherit;">
                                <font dir="auto" style="vertical-align: inherit;">$ 4700</font>
                            </font>
                        </h6>
                    </div>
                </div>
                <div class="row">

                    <!-- Car Pricing -->
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="book-card flex-fill">
                            <div class="book-head">
                                <h6>
                                    <font dir="auto" style="vertical-align: inherit;">
                                        <font dir="auto" style="vertical-align: inherit;">Preços de carros</font>
                                    </font>
                                </h6>
                            </div>
                            <div class="book-body">
                                <ul class="pricing-lists">
                                    <li>
                                        <div>
                                            <p>
                                                <font dir="auto" style="vertical-align: inherit;">
                                                    <font dir="auto" style="vertical-align: inherit;">Taxa de
                                                        aluguel </font>
                                                </font><span>
                                                    <font dir="auto" style="vertical-align: inherit;">
                                                        <font dir="auto" style="vertical-align: inherit;">(1 dia)
                                                        </font>
                                                    </font>
                                                </span>
                                            </p>
                                            <p class="text-danger">
                                                <font dir="auto" style="vertical-align: inherit;">
                                                    <font dir="auto" style="vertical-align: inherit;">(Isso não
                                                        inclui combustível)</font>
                                                </font>
                                            </p>
                                        </div>
                                        <span>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">+ $ 60</font>
                                            </font>
                                        </span>
                                    </li>
                                    <li>
                                        <p>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">Entrega em
                                                    domicílio</font>
                                            </font>
                                        </p>
                                        <span>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">+ $ 60</font>
                                            </font>
                                        </span>
                                    </li>
                                    <li>
                                        <p>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">Taxas de proteção
                                                    de viagem</font>
                                            </font>
                                        </p>
                                        <span>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">+ $ 25</font>
                                            </font>
                                        </span>
                                    </li>
                                    <li>
                                        <p>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">Taxas de
                                                    conveniência</font>
                                            </font>
                                        </p>
                                        <span>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">+ $2</font>
                                            </font>
                                        </span>
                                    </li>
                                    <li>
                                        <p>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">Imposto</font>
                                            </font>
                                        </p>
                                        <span>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">+ $2</font>
                                            </font>
                                        </span>
                                    </li>
                                    <li>
                                        <p>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">Depósito
                                                    Reembolsável</font>
                                            </font>
                                        </p>
                                        <span>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">+$ 1200</font>
                                            </font>
                                        </span>
                                    </li>
                                    <li>
                                        <p>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">Seguro Premium
                                                    Completo</font>
                                            </font>
                                        </p>
                                        <span>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">+$200</font>
                                            </font>
                                        </span>
                                    </li>
                                    <li class="total">
                                        <p>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">Subtotal</font>
                                            </font>
                                        </p>
                                        <span>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">+$ 1604</font>
                                            </font>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Car Pricing -->

                    <!-- Location & Time -->
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="book-card flex-fill">
                            <div class="book-head">
                                <h6>
                                    <font dir="auto" style="vertical-align: inherit;">
                                        <font dir="auto" style="vertical-align: inherit;">Localização e hora</font>
                                    </font>
                                </h6>
                            </div>
                            <div class="book-body">
                                <ul class="location-lists">
                                    <li>
                                        <h6>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">Tipo de reserva
                                                </font>
                                            </font>
                                        </h6>
                                        <p>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">Entrega</font>
                                            </font>
                                        </p>
                                    </li>
                                    <li>
                                        <h6>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">Tipo de aluguel
                                                </font>
                                            </font>
                                        </h6>
                                        <p>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">Diário</font>
                                            </font>
                                        </p>
                                    </li>
                                    <li>
                                        <h6>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">Escolher</font>
                                            </font>
                                        </h6>
                                        <p>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">1230 E Springs Rd,
                                                    Los Angeles, CA, EUA</font>
                                            </font>
                                        </p>
                                        <p>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">18/04/2024 - 14:00
                                                </font>
                                            </font>
                                        </p>
                                    </li>
                                    <li>
                                        <h6>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">Retornar</font>
                                            </font>
                                        </h6>
                                        <p>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">1230 E Springs Rd,
                                                    Los Angeles, CA, EUA</font>
                                            </font>
                                        </p>
                                        <p>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">18/04/2024 - 14:00
                                                </font>
                                            </font>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Location & Time -->

                    <!-- Add-ons Pricing -->
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="book-card flex-fill">
                            <div class="book-head">
                                <h6>
                                    <font dir="auto" style="vertical-align: inherit;">
                                        <font dir="auto" style="vertical-align: inherit;">Preços de serviços extras
                                        </font>
                                    </font>
                                </h6>
                            </div>
                            <div class="book-body">
                                <ul class="pricing-lists">
                                    <li>
                                        <p>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">Sistemas de
                                                    navegação GPS</font>
                                            </font>
                                        </p>
                                        <span>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;"> $ 25</font>
                                            </font>
                                        </span>
                                    </li>
                                    <li>
                                        <p>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">Ponto de acesso
                                                    Wi-Fi</font>
                                            </font>
                                        </p>
                                        <span>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">$ 25</font>
                                            </font>
                                        </span>
                                    </li>
                                    <li>
                                        <p>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">Assentos de
                                                    segurança para crianças</font>
                                            </font>
                                        </p>
                                        <span>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">$ 50</font>
                                            </font>
                                        </span>
                                    </li>
                                    <li class="total">
                                        <p>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">Taxa de Serviços
                                                    Extras</font>
                                            </font>
                                        </p>
                                        <span>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">$ 100</font>
                                            </font>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Add-ons Pricing -->

                    <!-- Driver Details -->
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="book-card flex-fill">
                            <div class="book-head">
                                <h6>
                                    <font dir="auto" style="vertical-align: inherit;">
                                        <font dir="auto" style="vertical-align: inherit;">Detalhes do motorista
                                        </font>
                                    </font>
                                </h6>
                            </div>
                            <div class="book-body">
                                <ul class="location-lists">
                                    <li>
                                        <h6>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">Tipo de driver
                                                </font>
                                            </font>
                                        </h6>
                                        <p>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">Motorista interino
                                                </font>
                                            </font>
                                        </p>
                                    </li>
                                </ul>
                                <div class="driver-info">
                                    <span>
                                        <img src="assets/user/img/drivers/driver-02.jpg"
                                            alt="imagem">
                                    </span>
                                    <div class="driver-name">
                                        <h6>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">Ruban</font>
                                            </font>
                                        </h6>
                                        <ul>
                                            <li>
                                                <font dir="auto" style="vertical-align: inherit;">
                                                    <font dir="auto" style="vertical-align: inherit;">Número de
                                                        passeios concluídos: 32</font>
                                                </font>
                                            </li>
                                            <li>
                                                <font dir="auto" style="vertical-align: inherit;">
                                                    <font dir="auto" style="vertical-align: inherit;">Preço: $ 100
                                                    </font>
                                                </font>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Driver Details -->

                    <!-- Billing Information -->
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="book-card flex-fill">
                            <div class="book-head">
                                <h6>
                                    <font dir="auto" style="vertical-align: inherit;">
                                        <font dir="auto" style="vertical-align: inherit;">Informações de pagamento
                                        </font>
                                    </font>
                                </h6>
                            </div>
                            <div class="book-body">
                                <ul class="billing-lists">
                                    <li>
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">Darren Jurel</font>
                                        </font>
                                    </li>
                                    <li>
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">Mak Infotech</font>
                                        </font>
                                    </li>
                                    <li>
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">1230 E Springs Rd, Los
                                                Angeles, CA, EUA</font>
                                        </font>
                                    </li>
                                    <li>
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">+1 124554 45445</font>
                                        </font>
                                    </li>
                                    <li>
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">dj@exemplo.com</font>
                                        </font>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Billing Information -->

                    <!-- Payment  Details -->
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="book-card flex-fill">
                            <div class="book-head">
                                <h6>
                                    <font dir="auto" style="vertical-align: inherit;">
                                        <font dir="auto" style="vertical-align: inherit;">Detalhes do pagamento
                                        </font>
                                    </font>
                                </h6>
                            </div>
                            <div class="book-body">
                                <ul class="location-lists">
                                    <li>
                                        <h6>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">Modo de pagamento
                                                </font>
                                            </font>
                                        </h6>
                                        <p>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">Cartão de Débito
                                                </font>
                                            </font>
                                        </p>
                                    </li>
                                    <li>
                                        <h6>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">ID da transação
                                                </font>
                                            </font>
                                        </h6>
                                        <p><span>
                                                <font dir="auto" style="vertical-align: inherit;">
                                                    <font dir="auto" style="vertical-align: inherit;">
                                                        #13245454455454</font>
                                                </font>
                                            </span></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Payment  Details -->

                    <!-- Additional Information -->
                    <div class="col-lg-12">
                        <div class="book-card mb-0">
                            <div class="book-head">
                                <h6>
                                    <font dir="auto" style="vertical-align: inherit;">
                                        <font dir="auto" style="vertical-align: inherit;">Informações adicionais
                                        </font>
                                    </font>
                                </h6>
                            </div>
                            <div class="book-body">
                                <ul class="location-lists">
                                    <li>
                                        <p>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">As locadoras
                                                    normalmente exigem que os clientes devolvam o veículo com o
                                                    tanque cheio. Se o veículo for devolvido com menos do que o
                                                    tanque cheio, os clientes poderão ser cobrados pelo
                                                    reabastecimento a uma taxa premium, muitas vezes superior aos
                                                    preços locais de combustível.</font>
                                            </font>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Additional Information -->

                </div>
            </div>
            <div class="print-btn text-center">
                <a href="javascript:void(0);" class="btn btn-secondary">
                    <font dir="auto" style="vertical-align: inherit;">
                        <font dir="auto" style="vertical-align: inherit;">Ordem de impressão</font>
                    </font>
                </a>
            </div>
        </div>

    </div>
    <!-- /Booking Success -->

@endsection
