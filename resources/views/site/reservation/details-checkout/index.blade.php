@extends('site.reservation.layouts.main')
@section('title', 'AngoCars Detalhes Checkout')
@section('content')

<div class="main-wrapper" data-select2-id="12" style="transform: none;">

    <!-- Cabeçalho -->

    <!-- /Cabeçalho -->

    <!-- Seção de Navegação -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">Detalhes</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Detalhes</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Seção de Navegação -->

    <div class="booking-new-module" data-select2-id="11" style="transform: none;">
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
                                <li class="active">
                                    <span><img src="{{ url('assets/user/img/icons/booking-head-icon-02.svg')}}" alt="Ícone de Reserva"></span>
                                    <h6>Serviços Extras</h6>
                                </li>
                                <li>
                                    <span><img src="{{ url('assets/user/img/icons/booking-head-icon-03.svg')}}" alt="Ícone de Reserva"></span>
                                    <h6>Detalhes</h6>
                                </li>
                                <li>
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
            <div class="booking-detail-info" data-select2-id="9" style="transform: none;">
                <div class="row" style="transform: none;">
                    <div class="col-lg-8">
                        <div class="booking-information-main">
                            <form action="https://dreamsrent.dreamstechnologies.com/html/template/booking-payment.html">
                                <div class="booking-information-card">
                                    <div class="booking-info-head justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <span><i class="bx bx-add-to-queue"></i></span>
                                            <h5>Informações de Cobrança</h5>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <h6>Cliente recorrente?</h6>
                                            <a href="javascript:void(0);" class="btn btn-secondary ms-3" data-bs-toggle="modal" data-bs-target="#sign_in_modal"><i class="bx bx-user me-2"></i>Entrar</a>
                                        </div>
                                    </div>
                                    <div class="booking-info-body" data-select2-id="8">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">Nome <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" placeholder="Digite o Nome">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">Sobrenome <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" placeholder="Digite o Sobrenome">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">Número de Pessoas <span class="text-danger"> *</span></label>
                                                    <select class="form-control select select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                        <option data-select2-id="3">2 Adultos, 1 Criança</option>
                                                        <option>5 Adultos, 2 Crianças</option>
                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-3mfn-container"><span class="select2-selection__rendered" id="select2-3mfn-container" role="textbox" aria-readonly="true" title="2 Adultos, 1 Criança">2 Adultos, 1 Criança</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">Empresa</label>
                                                    <input type="text" class="form-control" placeholder="Digite o Nome da Empresa">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-block">
                                                    <label class="form-label">Endereço <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" placeholder="Digite o Endereço">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-block">
                                                    <label class="form-label">País <span class="text-danger"> *</span></label>
                                                    <select class="form-control select select2-hidden-accessible" data-select2-id="4" tabindex="-1" aria-hidden="true">
                                                        <option data-select2-id="6">País</option>
                                                        <option data-select2-id="15">EUA</option>
                                                        <option data-select2-id="16">Reino Unido</option>
                                                    </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-lkzx-container"><span class="select2-selection__rendered" id="select2-lkzx-container" role="textbox" aria-readonly="true" title="EUA">EUA</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-block">
                                                    <label class="form-label">Cidade <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" placeholder="Cidade">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-block">
                                                    <label class="form-label">CEP <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" placeholder="Digite o CEP">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">Endereço de E-mail <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" placeholder="Digite o E-mail">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">Número de Telefone <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" placeholder="Digite o Número de Telefone">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-block">
                                                    <label class="form-label">Informações Adicionais</label>
                                                    <textarea class="form-control" placeholder="Digite Informações Adicionais" rows="5" style="height: 134px;"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-block m-0">
                                                    <label class="custom_check d-inline-flex location-check m-0"><span>Li e Aceito os Termos e Condições</span> <span class="text-danger"> *</span>
                                                        <input type="checkbox" name="remeber">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-info-btns d-flex justify-content-end">
                                    <a href="https://dreamsrent.dreamstechnologies.com/html/template/booking-addon.html" class="btn btn-secondary">Voltar para Serviços Extras</a>
                                    <button class="btn btn-primary continue-book-btn" type="submit">Confirmar & Pagar Agora</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 theiaStickySidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                        <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 830.5px;">
                            <div class="booking-sidebar">
                                <div class="booking-sidebar-card">
                                    <div class="accordion-item border-0 mb-4">
                                        <div class="accordion-header">
                                            <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_one" aria-expanded="true">
                                                <div class="booking-sidebar-head">
                                                    <h5>Detalhes da Reserva<i class="fas fa-chevron-down"></i></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion_collapse_one" class="accordion-collapse collapse">
                                            <div class="booking-sidebar-body">
                                                <div class="booking-car-detail">
                                                    <span class="car-img">
                                                        <img src="./Dreams Rent _ Template_files/car-list-4.jpg" class="img-fluid" alt="Carro">
                                                    </span>
                                                    <div class="care-more-info">
                                                        <h5>Chevrolet Camaro</h5>
                                                        <p>Miami St, Destin, FL 32550, EUA</p>
                                                        <a href="https://dreamsrent.dreamstechnologies.com/html/template/listing-details.html">Ver Detalhes do Carro</a>
                                                    </div>
                                                </div>
                                                <div class="booking-vehicle-rates">
                                                    <ul>
                                                        <li>
                                                            <div class="rental-charge">
                                                                <h6>Taxa de Aluguel <span> (1 dia)</span></h6>
                                                                <span class="text-danger">(Não inclui combustível)</span>
                                                            </div>
                                                            <h5>+ $300</h5>
                                                        </li>
                                                        <li>
                                                            <h6>Entrega na Porta</h6>
                                                            <h5>+ $60</h5>
                                                        </li>
                                                        <li>
                                                            <h6>Taxas de Proteção de Viagem</h6>
                                                            <h5>+ $25</h5>
                                                        </li>
                                                        <li>
                                                            <h6>Taxas de Conveniência</h6>
                                                            <h5>+ $2</h5>
                                                        </li>
                                                        <li>
                                                            <h6>Imposto</h6>
                                                            <h5>+ $2</h5>
                                                        </li>
                                                        <li>
                                                            <h6>Depósito Reembolsável</h6>
                                                            <h5>+$1200</h5>
                                                        </li>
                                                        <li>
                                                            <h6>Seguro Premium Completo <i class="bx bxs-x-circle text-danger"></i></h6>
                                                            <h5>+$200</h5>
                                                        </li>
                                                        <li class="total-rate">
                                                            <h6>Subtotal</h6>
                                                            <h5>+$1604</h5>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-sidebar-card">
                                    <div class="accordion-item border-0 mb-4">
                                        <div class="accordion-header p-3 d-flex align-center justify-content-between">
                                            <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_three" aria-expanded="true">
                                                <div class="booking-sidebar-head p-0 d-flex justify-content-between align-items-center">
                                                    <h5>Localização e Horário<i class="fas fa-chevron-down"></i></h5>
                                                </div>
                                            </div>
                                            <a href="https://dreamsrent.dreamstechnologies.com/html/template/booking-checkout.html" class="d-flex align-items-center sidebar-edit"><i class="bx bx-edit-alt me-2"></i>Editar</a>
                                        </div>
                                        <div id="accordion_collapse_three" class="accordion-collapse collapse">
                                            <div class="booking-sidebar-body">
                                                <ul class="location-address-info">
                                                    <li>
                                                        <h6>Tipo de Aluguel</h6>
                                                        <p>Entrega</p>
                                                    </li>
                                                    <li>
                                                        <h6>Tipo de Reserva</h6>
                                                        <p>Dias</p>
                                                    </li>
                                                    <li>
                                                        <h6>Local e Horário de Entrega</h6>
                                                        <p>1230 E Springs Rd, Los Angeles, CA, EUA</p>
                                                        <p>18/04/2024 - 14:00</p>
                                                    </li>
                                                    <li>
                                                        <h6>Local e Horário de Devolução</h6>
                                                        <p>Cruzeiro Caribenho Norueguês, Los Angeles, CA 90025</p>
                                                        <p>27/04/2024 - 03:00</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-sidebar-card">
                                    <div class="accordion-item border-0 mb-4">
                                        <div class="accordion-header d-flex align-center justify-content-between p-3">
                                            <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_four" aria-expanded="true">
                                                <div class="booking-sidebar-head p-0 d-flex justify-content-between align-items-center">
                                                    <h5>Serviços Extras<i class="fas fa-chevron-down"></i></h5>
                                                </div>
                                                <a href="https://dreamsrent.dreamstechnologies.com/html/template/booking-addon.html" class="d-flex align-items-center sidebar-edit"><i class="bx bx-edit-alt me-2"></i>Editar</a>
                                            </div>
                                        </div>
                                        <div id="accordion_collapse_four" class="accordion-collapse collapse">
                                            <div class="booking-sidebar-body">
                                                <div class="booking-vehicle-rates">
                                                    <ul class="mt-0">
                                                        <li>
                                                            <h6>Sistemas de Navegação GPS</h6>
                                                            <h5> $25</h5>
                                                        </li>
                                                        <li>
                                                            <h6>Ponto de Acesso Wi-Fi</h6>
                                                            <h5> $25</h5>
                                                        </li>
                                                        <li>
                                                            <h6>Assentos de Segurança Infantil</h6>
                                                            <h5> $50</h5>
                                                        </li>
                                                        <li class="total-rate">
                                                            <h6>Taxa de Serviços Extras</h6>
                                                            <h5>$1200</h5>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="book-our-drivers">
                                                    <h4 class="title-head">Motorista</h4>
                                                    <ul class="acting-driver-list">
                                                        <li class="d-block">
                                                            <div class="driver-profile-info">
                                                                <span class="driver-profile"><img src="/driver-02.jpg" alt="Imagem"></span>
                                                                <div class="driver-name">
                                                                    <h5>Ruban</h5>
                                                                    <ul>
                                                                        <li>Viagens Concluídas: 32</li>
                                                                        <li>Preço: $100</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="change-driver">
                                                                <a href="javascript:void(0);" class="btn btn-secondary d-inline-flex align-items-center"><i class="bx bx-check-circle me-2"></i>Trocar Motorista</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-sidebar-card">
                                    <div class="accordion-item border-0 mb-4">
                                        <div class="accordion-header d-flex align-center justify-content-between p-3">
                                            <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_two" aria-expanded="true">
                                                <div class="booking-sidebar-head p-0 d-flex justify-content-between align-items-center">
                                                    <h5>Cupom<i class="fas fa-chevron-down"></i></h5>
                                                </div>
                                                <a href="#" class="coupon-view">Ver Cupons</a>
                                            </div>
                                        </div>
                                        <div id="accordion_collapse_two" class="accordion-collapse collapse">
                                            <div class="booking-sidebar-body">
                                                <form action="#">
                                                    <div class="d-flex align-items-center">
                                                        <div class="form-custom flex-fill">
                                                            <input type="text" class="form-control mb-0" value="FIRSTBOOKING">
                                                            <a href="#" class="coupon-close"><span><i class="bx bx-x"></i></span></a>
                                                        </div>
                                                        <button type="submit" class="btn btn-secondary d-flex align-items-center apply-coupon-btn disabled ms-2">Aplicar<i class="feather-arrow-right ms-2"></i></button>
                                                    </div>
                                                    <span class="coupen-applied-offter"><i class="bx bxs-offer"></i>Economizado nesta Reserva</span>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="total-rate-card">
                                    <div class="vehicle-total-price">
                                        <h5>Total Estimado</h5>
                                        <span>$3541</span>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                    <div style="position: absolute; left: 0px; top: 0px; transition: all; width: 390px; height: 826px;"></div>
                                </div>
                                <div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                    <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal new-modal multi-step fade" id="sign_in_modal" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="login-wrapper">
                        <div class="loginbox">
                            <div class="login-auth">
                                <div class="login-auth-wrap">
                                    <h1>Entrar</h1>
                                    <p class="account-subtitle">Enviaremos um código de confirmação para o seu e-mail.</p>
                                    <form action="#">
                                        <div class="input-block">
                                            <label class="form-label">E-mail <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" placeholder="Digite o e-mail">
                                        </div>
                                        <div class="input-block">
                                            <label class="form-label">Senha <span class="text-danger">*</span></label>
                                            <div class="pass-group">
                                                <input type="password" class="form-control pass-input" placeholder=".............">
                                                <span class="fas fa-eye-slash toggle-password"></span>
                                            </div>
                                        </div>
                                        <div class="input-block text-end">
                                            <a class="forgot-link" href="#">Esqueceu a Senha?</a>
                                        </div>
                                        <div class="input-block m-0">
                                            <label class="custom_check d-inline-flex"><span>Lembrar-me</span>
                                                <input type="checkbox" name="remeber">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <a href="#" class="btn btn-outline-light w-100 btn-size mt-1">Entrar</a>
                                        <div class="login-or">
                                            <span class="or-line"></span>
                                            <span class="span-or-log">Ou, faça login com seu e-mail</span>
                                        </div>
                                        <!-- Login Social -->
                                        <div class="social-login">
                                            <a href="#" class="d-flex align-items-center justify-content-center input-block btn google-login w-100"><span><img src="./Dreams Rent _ Template_files/google.svg" class="img-fluid" alt="Google"></span>Fazer Login com Google</a>
                                        </div>
                                        <div class="social-login">
                                            <a href="#" class="d-flex align-items-center justify-content-center input-block btn google-login w-100"><span><img src="./Dreams Rent _ Template_files/facebook.svg" class="img-fluid" alt="Facebook"></span>Fazer Login com Facebook</a>
                                        </div>
                                        <!-- /Login Social -->
                                        <div class="text-center dont-have">Não tem uma conta? <a href="#">Cadastrar-se</a></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Início do scrollToTop -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
    <!-- Fim do scrollToTop -->

@endsection