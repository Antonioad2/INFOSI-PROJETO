@extends('site.reservation.layouts.main')
@section('title', 'AngoCars Pagamento')
@section('content')
	<div class="main-wrapper">
	
		<!-- Seção de Navegação -->
		<div class="breadcrumb-bar">
			<div class="container">
				<div class="row align-items-center text-center">
		    		<div class="col-md-12 col-12">
			    	    <h2 class="breadcrumb-title">Pagamento</h2>
				    	<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item active" aria-current="page">Pagamento</li>
							</ol>
						</nav>							
					</div>
				</div>
			</div>
		</div>
		<!-- /Seção de Navegação -->
        
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
									<li class="active">
										<span><img src="{{ url('assets/user/img/icons/booking-head-icon-04.svg')}}" alt="Ícone de Reserva"></span>
										<h6>Checkout</h6>
									</li>
									<li>
										<span><img src="{{ url('assets/user/img/icons/booking-head-icon-05.svg')}}" alt="Ícone de Reserva"></span>
										<h6>Reserva Confirmada</h6>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="booking-detail-info">
					<div class="row">
						<div class="col-lg-12">
							<div class="booking-information-main">
								<form action="https://dreamsrent.dreamstechnologies.com/html/template/booking-success.html">
									<div class="booking-information-card payment-info-card">
										<div class="booking-info-head">
											<div class="d-flex align-items-center">
												<span><i class="bx bx-money"></i></span>
												<h5>Pagamento</h5>
											</div>										
										</div>
										<div class="booking-info-body">
											<div class="payment-method-types">
												<h5>Escolha seu Método de Pagamento</h5>
												<ul>
													<li>
														<label class="payment_custom_check">
															<input type="radio" name="payment_type" checked="">
															<span class="payment_checkmark">
																<span class="checked-title"><img src="./Dreams Rent _ Template_files/payment-method-01.svg" alt="Imagem"></span>
															</span>							
														</label>
													</li>
													<li>
														<label class="payment_custom_check">
															<input type="radio" name="payment_type">
															<span class="payment_checkmark">
																<span class="checked-title"><img src="./Dreams Rent _ Template_files/payment-method-02.svg" alt="Imagem"></span>
															</span>							
														</label>
													</li>
													<li>
														<label class="payment_custom_check">
															<input type="radio" name="payment_type">
															<span class="payment_checkmark">
																<span class="checked-title"><img src="./Dreams Rent _ Template_files/payment-method-03.svg" alt="Imagem"></span>
															</span>							
														</label>
													</li>
													<li>
														<label class="payment_custom_check">
															<input type="radio" name="payment_type">
															<span class="payment_checkmark">
																<span class="checked-title"><img src="./Dreams Rent _ Template_files/payment-method-04.svg" alt="Imagem"></span>
															</span>							
														</label>
													</li>
												</ul>
											</div>
											<div class="payment-method-types payments-cards-types">
												<div class="row">
													<div class="col-lg-7">
														<ul>
															<li>
																<label class="payment_custom_check">
																	<input type="radio" name="payment_card" id="debit_card" checked="">
																	<span class="payment_checkmark">
																		<span class="checked-title"><img src="./Dreams Rent _ Template_files/payment-card-01.svg" alt="Imagem"></span>
																		<small>Cartão de Débito <span>523************14</span></small>
																	</span>							
																</label>
															</li>
															<li>
																<label class="payment_custom_check">
																	<input type="radio" name="payment_card" id="credit_card">
																	<span class="payment_checkmark">
																		<span class="checked-title"><img src="./Dreams Rent _ Template_files/payment-card-02.svg" alt="Imagem"></span>
																		<small>Cartão de Crédito <span>654************12</span></small>
																	</span>							
																</label>
															</li>
															<li>
																<label class="payment_custom_check">
																	<input type="radio" name="payment_card" id="add_new_card">
																	<span class="payment_checkmark">
																		<span class="checked-title">Adicionar Novo Cartão</span>
																	</span>							
																</label>
															</li>
														</ul>
													</div>
												</div>
												<div class="add-new-cards" id="card-hide">
													<h5 class="title-head">Adicionar Novo Cartão</h5>
													<div class="row">
														<div class="col-md-6">
															<div class="input-block">	
																<label class="form-label">Número do Cartão <span class="text-danger"> *</span></label>											
																<input type="text" class="form-control" placeholder="Digite o Número do Cartão">
															</div>
														</div>
														<div class="col-md-6">
															<div class="input-block">	
																<label class="form-label">Nome no Cartão <span class="text-danger"> *</span></label>											
																<input type="text" class="form-control" placeholder="Digite o nome no cartão">
															</div>
														</div>
														<div class="col-md-6">
															<div class="input-block">	
																<label class="form-label">CVV <span class="text-danger"> *</span></label>											
																<div class="group-img">
																	<input type="text" class="form-control" placeholder="Digite o Número CVV">
																	<span class="input-cal-icon"><i class="bx bx-lock"></i></span>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="input-block date-widget">	
																<label class="form-label">Data de Validade <span class="text-danger"> *</span></label>											
																<div class="group-img">
																	<input type="text" class="form-control datetimepicker" placeholder="Escolha a Data">
																	<span class="input-cal-icon"><i class="bx bx-calendar"></i></span>
																</div>
															</div>
														</div>
														<div class="col-md-12">
															<div class="input-block m-0">
																<label class="custom_check d-inline-flex location-check m-0"><span>Salvar esta conta para transações futuras</span>
																	<input type="checkbox" name="remeber">
																	<span class="checkmark"></span>
																</label>
															</div>
														</div>
													</div>
												</div>
											</div>										
										</div>
									</div>

									<div class="booking-info-btns d-flex justify-content-end">
										<a href="https://dreamsrent.dreamstechnologies.com/html/template/booking-detail.html" class="btn btn-secondary">Voltar para informações de cobrança</a>
										<button class="btn btn-primary continue-book-btn" type="submit">Pagar $4700 e Confirmar Reserva</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<!-- Início do ScrollToTop -->
		<div class="progress-wrap">
			<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
				<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 306.896;"></path>
			</svg>
		</div>
		<!-- Fim do ScrollToTop -->
	
@endsection