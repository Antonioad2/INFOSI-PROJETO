@extends('site.reservation.layouts.main')
@section('title', 'AngoCar - Informações de Cobrança')
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
                            <li class="breadcrumb-item"><a>
                                    <font dir="auto" style="vertical-align: inherit;">
                                        <font dir="auto" style="vertical-align: inherit;">Lar</font>
                                    </font>
                                </a></li>
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

    <div class="booking-new-module" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="booking-wizard-head">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-3">
                        <div class="booking-head-title">
                            <h4>
                                <font dir="auto" style="vertical-align: inherit;">
                                    <font dir="auto" style="vertical-align: inherit;">Reserve seu carro</font>
                                </font>
                            </h4>
                            <p>
                                <font dir="auto" style="vertical-align: inherit;">
                                    <font dir="auto" style="vertical-align: inherit;">Conclua as seguintes etapas</font>
                                </font>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9">
                        <div class="booking-wizard-lists">
                            <ul>
                                <li class="active activated">
                                    <span><img src="assets/user/img/icons/booking-head-icon-01.svg"
                                            alt="Ícone de reserva"></span>
                                    <h6>
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">Localização e hora</font>
                                        </font>
                                    </h6>
                                </li>
                                <li class="active activated">
                                    <span><img src="assets/user/img/icons/booking-head-icon-02.svg"
                                            alt="Ícone de reserva"></span>
                                    <h6>
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">Serviços extras</font>
                                        </font>
                                    </h6>
                                </li>
                                <li class="active">
                                    <span><img src="assets/user/img/icons/booking-head-icon-03.svg"
                                            alt="Ícone de reserva"></span>
                                    <h6>
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">Detalhe</font>
                                        </font>
                                    </h6>
                                </li>
                                <li>
                                    <span><img src="assets/user/img/icons/booking-head-icon-04.svg"
                                            alt="Ícone de reserva"></span>
                                    <h6>
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">Confira</font>
                                        </font>
                                    </h6>
                                </li>
                                <li>
                                    <span><img src="assets/user/img/icons/booking-head-icon-05.svg"
                                            alt="Ícone de reserva"></span>
                                    <h6>
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">Reserva confirmada</font>
                                        </font>
                                    </h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="booking-detail-info" style="transform: none;">
                <div class="row" style="transform: none;">
                    <div class="col-lg-8">
                        <div class="booking-information-main">
                            <form action="https://dreamsrent.dreamstechnologies.com/html/template/booking-payment.html">
                                <div class="booking-information-card">
                                    <div class="booking-info-head justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <span><i class="bx bx-add-to-queue"></i></span>
                                            <h5>
                                                <font dir="auto" style="vertical-align: inherit;">
                                                    <font dir="auto" style="vertical-align: inherit;">Informações de
                                                        cobrança</font>
                                                </font>
                                            </h5>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <h6>
                                                <font dir="auto" style="vertical-align: inherit;">
                                                    <font dir="auto" style="vertical-align: inherit;">Já é cliente?
                                                    </font>
                                                </font>
                                            </h6>
                                            <a href="javascript:void(0);" class="btn btn-secondary ms-3"
                                                data-bs-toggle="modal" data-bs-target="#sign_in_modal"><i
                                                    class="bx bx-user me-2"></i>
                                                <font dir="auto" style="vertical-align: inherit;">
                                                    <font dir="auto" style="vertical-align: inherit;">Entrar</font>
                                                </font>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="booking-info-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">
                                                        <font dir="auto" style="vertical-align: inherit;">
                                                            <font dir="auto" style="vertical-align: inherit;">Primeiro
                                                                nome </font>
                                                        </font><span class="text-danger">
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">*
                                                                </font>
                                                            </font>
                                                        </span>
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Digite o primeiro nome">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">
                                                        <font dir="auto" style="vertical-align: inherit;">
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                Sobrenome </font>
                                                        </font><span class="text-danger">
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">*
                                                                </font>
                                                            </font>
                                                        </span>
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Digite o sobrenome">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">
                                                        <font dir="auto" style="vertical-align: inherit;">
                                                            <font dir="auto" style="vertical-align: inherit;">Número
                                                                de pessoas </font>
                                                        </font><span class="text-danger">
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">*
                                                                </font>
                                                            </font>
                                                        </span>
                                                    </label>
                                                    <select class="form-control select select2-hidden-accessible"
                                                        data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                        <option data-select2-id="3">
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">2
                                                                    adultos, 1 criança</font>
                                                            </font>
                                                        </option>
                                                        <option>
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">5
                                                                    adultos, 2 crianças</font>
                                                            </font>
                                                        </option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" data-select2-id="2" style="width: 100%;"><span
                                                            class="selection"><span
                                                                class="select2-selection select2-selection--single"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0"
                                                                aria-disabled="false"
                                                                aria-labelledby="select2-mowb-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-mowb-container" role="textbox"
                                                                    aria-readonly="true" title="2 adultos, 1 criança">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        <font dir="auto"
                                                                            style="vertical-align: inherit;">2 adultos, 1
                                                                            criança</font>
                                                                    </font>
                                                                </span><span class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">
                                                        <font dir="auto" style="vertical-align: inherit;">
                                                            <font dir="auto" style="vertical-align: inherit;">Empresa
                                                            </font>
                                                        </font>
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Digite o nome da empresa">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-block">
                                                    <label class="form-label">
                                                        <font dir="auto" style="vertical-align: inherit;">
                                                            <font dir="auto" style="vertical-align: inherit;">Endereço
                                                                da Rua </font>
                                                        </font><span class="text-danger">
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">*
                                                                </font>
                                                            </font>
                                                        </span>
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Digite o endereço">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-block">
                                                    <label class="form-label">
                                                        <font dir="auto" style="vertical-align: inherit;">
                                                            <font dir="auto" style="vertical-align: inherit;">País
                                                            </font>
                                                        </font><span class="text-danger">
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">*
                                                                </font>
                                                            </font>
                                                        </span>
                                                    </label>
                                                    <select class="form-control select select2-hidden-accessible"
                                                        data-select2-id="4" tabindex="-1" aria-hidden="true">
                                                        <option data-select2-id="6">
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">País
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option>
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">EUA
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option>
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    Reino Unido</font>
                                                            </font>
                                                        </option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--default"
                                                        dir="ltr" data-select2-id="5" style="width: 100%;"><span
                                                            class="selection"><span
                                                                class="select2-selection select2-selection--single"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0"
                                                                aria-disabled="false"
                                                                aria-labelledby="select2-75lr-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-75lr-container" role="textbox"
                                                                    aria-readonly="true" title="País">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        <font dir="auto"
                                                                            style="vertical-align: inherit;">País</font>
                                                                    </font>
                                                                </span><span class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-block">
                                                    <label class="form-label">
                                                        <font dir="auto" style="vertical-align: inherit;">
                                                            <font dir="auto" style="vertical-align: inherit;">Digite a
                                                                cidade </font>
                                                        </font><span class="text-danger">
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">*
                                                                </font>
                                                            </font>
                                                        </span>
                                                    </label>
                                                    <input type="text" class="form-control" placeholder="Cidade">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-block">
                                                    <label class="form-label">
                                                        <font dir="auto" style="vertical-align: inherit;">
                                                            <font dir="auto" style="vertical-align: inherit;">Código
                                                                PIN </font>
                                                        </font><span class="text-danger">
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">*
                                                                </font>
                                                            </font>
                                                        </span>
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Digite o código PIN">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">
                                                        <font dir="auto" style="vertical-align: inherit;">
                                                            <font dir="auto" style="vertical-align: inherit;">Endereço
                                                                de email </font>
                                                        </font><span class="text-danger">
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">*
                                                                </font>
                                                            </font>
                                                        </span>
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Digite o e-mail">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">
                                                        <font dir="auto" style="vertical-align: inherit;">
                                                            <font dir="auto" style="vertical-align: inherit;">Número
                                                                de telefone </font>
                                                        </font><span class="text-danger">
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">*
                                                                </font>
                                                            </font>
                                                        </span>
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Digite o número de telefone">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-block">
                                                    <label class="form-label">
                                                        <font dir="auto" style="vertical-align: inherit;">
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                Informações adicionais</font>
                                                        </font>
                                                    </label>
                                                    <textarea class="form-control" placeholder="Insira informações adicionais" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-block m-0">
                                                    <label class="custom_check d-inline-flex location-check m-0"><span>
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">Li e
                                                                    aceito os Termos e Condições</font>
                                                            </font>
                                                        </span> <span class="text-danger">
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">*
                                                                </font>
                                                            </font>
                                                        </span>
                                                        <input type="checkbox" name="remeber">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-info-btns d-flex justify-content-end">
                                    <a href="https://dreamsrent.dreamstechnologies.com/html/template/booking-addon.html"
                                        class="btn btn-secondary">
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">Voltar para Serviços
                                                Extras</font>
                                        </font>
                                    </a>
                                    <button class="btn btn-primary continue-book-btn" type="submit">
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">Confirme e pague agora
                                            </font>
                                        </font>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 theiaStickySidebar"
                        style="position: relative; overflow: visible; box-sizing: border-box; min-height: 735.797px;">

                        <div class="theiaStickySidebar"
                            style="padding-top: 0px; padding-bottom: 1px; position: fixed; transform: translateY(30px); top: 0px; left: 834.5px; width: 356px;">
                            <div class="booking-sidebar">
                                <div class="booking-sidebar-card">
                                    <div class="accordion-item border-0 mb-4">
                                        <div class="accordion-header">
                                            <div class="accordion-button collapsed" role="button"
                                                data-bs-toggle="collapse" data-bs-target="#accordion_collapse_one"
                                                aria-expanded="true">
                                                <div class="booking-sidebar-head">
                                                    <h5>
                                                        <font dir="auto" style="vertical-align: inherit;">
                                                            <font dir="auto" style="vertical-align: inherit;">Detalhes
                                                                da reserva</font>
                                                        </font><i class="fas fa-chevron-down"></i>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion_collapse_one" class="accordion-collapse collapse">
                                            <div class="booking-sidebar-body">
                                                <div class="booking-car-detail">
                                                    <span class="car-img">
                                                        <img src="assets/user/img/icons/car-list-4.jpg"
                                                            class="img-fluid" alt="Carro">
                                                    </span>
                                                    <div class="care-more-info">
                                                        <h5>
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    Chevrolet Camaro</font>
                                                            </font>
                                                        </h5>
                                                        <p>
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    Miami St, Destin, FL 32550, EUA</font>
                                                            </font>
                                                        </p>
                                                        <a
                                                            href="https://dreamsrent.dreamstechnologies.com/html/template/listing-details.html">
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">Ver
                                                                    detalhes do carro</font>
                                                            </font>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="booking-vehicle-rates">
                                                    <ul>
                                                        <li>
                                                            <div class="rental-charge">
                                                                <h6>
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        <font dir="auto"
                                                                            style="vertical-align: inherit;">Taxa de
                                                                            aluguel </font>
                                                                    </font><span>
                                                                        <font dir="auto"
                                                                            style="vertical-align: inherit;">
                                                                            <font dir="auto"
                                                                                style="vertical-align: inherit;">(1 dia)
                                                                            </font>
                                                                        </font>
                                                                    </span>
                                                                </h6>
                                                                <span class="text-danger">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        <font dir="auto"
                                                                            style="vertical-align: inherit;">(Isso não
                                                                            inclui combustível)</font>
                                                                    </font>
                                                                </span>
                                                            </div>
                                                            <h5>
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        + $ 300</font>
                                                                </font>
                                                            </h5>
                                                        </li>
                                                        <li>
                                                            <h6>
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        Entrega em domicílio</font>
                                                                </font>
                                                            </h6>
                                                            <h5>
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        + $ 60</font>
                                                                </font>
                                                            </h5>
                                                        </li>
                                                        <li>
                                                            <h6>
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        Taxas de proteção de viagem</font>
                                                                </font>
                                                            </h6>
                                                            <h5>
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        + $ 25</font>
                                                                </font>
                                                            </h5>
                                                        </li>
                                                        <li>
                                                            <h6>
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        Taxas de conveniência</font>
                                                                </font>
                                                            </h6>
                                                            <h5>
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        + $2</font>
                                                                </font>
                                                            </h5>
                                                        </li>
                                                        <li>
                                                            <h6>
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        Imposto</font>
                                                                </font>
                                                            </h6>
                                                            <h5>
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        + $2</font>
                                                                </font>
                                                            </h5>
                                                        </li>
                                                        <li>
                                                            <h6>
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        Depósito Reembolsável</font>
                                                                </font>
                                                            </h6>
                                                            <h5>
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        +$ 1200</font>
                                                                </font>
                                                            </h5>
                                                        </li>
                                                        <li>
                                                            <h6>
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        Seguro Premium Completo</font>
                                                                </font><i class="bx bxs-x-circle text-danger"></i>
                                                            </h6>
                                                            <h5>
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        +$200</font>
                                                                </font>
                                                            </h5>
                                                        </li>
                                                        <li class="total-rate">
                                                            <h6>
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        Subtotal</font>
                                                                </font>
                                                            </h6>
                                                            <h5>
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        +$ 1604</font>
                                                                </font>
                                                            </h5>
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
                                            <div class="accordion-button collapsed" role="button"
                                                data-bs-toggle="collapse" data-bs-target="#accordion_collapse_three"
                                                aria-expanded="true">
                                                <div
                                                    class="booking-sidebar-head p-0 d-flex justify-content-between align-items-center">
                                                    <h5>
                                                        <font dir="auto" style="vertical-align: inherit;">
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                Localização e hora</font>
                                                        </font><i class="fas fa-chevron-down"></i>
                                                    </h5>
                                                </div>
                                            </div>
                                            <a href="https://dreamsrent.dreamstechnologies.com/html/template/booking-checkout.html"
                                                class="d-flex align-items-center sidebar-edit"><i
                                                    class="bx bx-edit-alt me-2"></i>
                                                <font dir="auto" style="vertical-align: inherit;">
                                                    <font dir="auto" style="vertical-align: inherit;">Editar</font>
                                                </font>
                                            </a>
                                        </div>
                                        <div id="accordion_collapse_three" class="accordion-collapse collapse">
                                            <div class="booking-sidebar-body">
                                                <ul class="location-address-info">
                                                    <li>
                                                        <h6>
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">Tipo
                                                                    de aluguel</font>
                                                            </font>
                                                        </h6>
                                                        <p>
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    Entrega</font>
                                                            </font>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h6>
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">Tipo
                                                                    de reserva</font>
                                                            </font>
                                                        </h6>
                                                        <p>
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">Dias
                                                                </font>
                                                            </font>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h6>
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    Local e horário de entrega</font>
                                                            </font>
                                                        </h6>
                                                        <p>
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">1230
                                                                    E Springs Rd, Los Angeles, CA, EUA</font>
                                                            </font>
                                                        </p>
                                                        <p>
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    18/04/2024 - 14:00</font>
                                                            </font>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h6>
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    Local e horário de retorno</font>
                                                            </font>
                                                        </h6>
                                                        <p>
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    Cruzeiro Norwegian Caribbean Los Angeles, CA 90025
                                                                </font>
                                                            </font>
                                                        </p>
                                                        <p>
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    27/04/2024 - 03:00</font>
                                                            </font>
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-sidebar-card">
                                    <div class="accordion-item border-0 mb-4">
                                        <div class="accordion-header d-flex align-center justify-content-between p-3">
                                            <div class="accordion-button collapsed" role="button"
                                                data-bs-toggle="collapse" data-bs-target="#accordion_collapse_four"
                                                aria-expanded="true">
                                                <div
                                                    class="booking-sidebar-head p-0 d-flex justify-content-between align-items-center">
                                                    <h5>
                                                        <font dir="auto" style="vertical-align: inherit;">
                                                            <font dir="auto" style="vertical-align: inherit;">Serviços
                                                                extras</font>
                                                        </font><i class="fas fa-chevron-down"></i>
                                                    </h5>
                                                </div>
                                                <a href="https://dreamsrent.dreamstechnologies.com/html/template/booking-addon.html"
                                                    class="d-flex align-items-center sidebar-edit"><i
                                                        class="bx bx-edit-alt me-2"></i>
                                                    <font dir="auto" style="vertical-align: inherit;">
                                                        <font dir="auto" style="vertical-align: inherit;">Editar
                                                        </font>
                                                    </font>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="accordion_collapse_four" class="accordion-collapse collapse">
                                            <div class="booking-sidebar-body">
                                                <div class="booking-vehicle-rates">
                                                    <ul class="mt-0">
                                                        <li>
                                                            <h6>
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        Sistemas de navegação GPS</font>
                                                                </font>
                                                            </h6>
                                                            <h5>
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        $ 25</font>
                                                                </font>
                                                            </h5>
                                                        </li>
                                                        <li>
                                                            <h6>
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        Ponto de acesso Wi-Fi</font>
                                                                </font>
                                                            </h6>
                                                            <h5>
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        $ 25</font>
                                                                </font>
                                                            </h5>
                                                        </li>
                                                        <li>
                                                            <h6>
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        Assentos de segurança para crianças</font>
                                                                </font>
                                                            </h6>
                                                            <h5>
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        $ 50</font>
                                                                </font>
                                                            </h5>
                                                        </li>
                                                        <li class="total-rate">
                                                            <h6>
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        Taxa de Serviços Extras</font>
                                                                </font>
                                                            </h6>
                                                            <h5>
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        $ 1200</font>
                                                                </font>
                                                            </h5>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="book-our-drivers">
                                                    <h4 class="title-head">
                                                        <font dir="auto" style="vertical-align: inherit;">
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                Motorista</font>
                                                        </font>
                                                    </h4>
                                                    <ul class="acting-driver-list">
                                                        <li class="d-block">
                                                            <div class="driver-profile-info">
                                                                <span class="driver-profile"><img
                                                                        src="assets/user/img/icons/driver-02.jpg"
                                                                        alt="Imagem"></span>
                                                                <div class="driver-name">
                                                                    <h5>
                                                                        <font dir="auto"
                                                                            style="vertical-align: inherit;">
                                                                            <font dir="auto"
                                                                                style="vertical-align: inherit;">Ruban
                                                                            </font>
                                                                        </font>
                                                                    </h5>
                                                                    <ul>
                                                                        <li>
                                                                            <font dir="auto"
                                                                                style="vertical-align: inherit;">
                                                                                <font dir="auto"
                                                                                    style="vertical-align: inherit;">Número
                                                                                    de passeios concluídos: 32</font>
                                                                            </font>
                                                                        </li>
                                                                        <li>
                                                                            <font dir="auto"
                                                                                style="vertical-align: inherit;">
                                                                                <font dir="auto"
                                                                                    style="vertical-align: inherit;">Preço:
                                                                                    $ 100</font>
                                                                            </font>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="change-driver">
                                                                <a href="javascript:void(0);"
                                                                    class="btn btn-secondary d-inline-flex align-items-center"><i
                                                                        class="bx bx-check-circle me-2"></i>
                                                                    <font dir="auto" style="vertical-align: inherit;">
                                                                        <font dir="auto"
                                                                            style="vertical-align: inherit;">Alterar driver
                                                                        </font>
                                                                    </font>
                                                                </a>
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
                                            <div class="accordion-button collapsed" role="button"
                                                data-bs-toggle="collapse" data-bs-target="#accordion_collapse_two"
                                                aria-expanded="true">
                                                <div
                                                    class="booking-sidebar-head p-0 d-flex justify-content-between align-items-center">
                                                    <h5>
                                                        <font dir="auto" style="vertical-align: inherit;">
                                                            <font dir="auto" style="vertical-align: inherit;">Cupom
                                                            </font>
                                                        </font><i class="fas fa-chevron-down"></i>
                                                    </h5>
                                                </div>
                                                <a href="https://dreamsrent.dreamstechnologies.com/html/template/booking-detail.html?driver_type=on#"
                                                    class="coupon-view">
                                                    <font dir="auto" style="vertical-align: inherit;">
                                                        <font dir="auto" style="vertical-align: inherit;">Ver cupons
                                                        </font>
                                                    </font>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="accordion_collapse_two" class="accordion-collapse collapse">
                                            <div class="booking-sidebar-body">
                                                <form
                                                    action="https://dreamsrent.dreamstechnologies.com/html/template/booking-detail.html">
                                                    <div class="d-flex align-items-center">
                                                        <div class="form-custom flex-fill">
                                                            <input type="text" class="form-control mb-0"
                                                                value="FIRSTBOOKING">
                                                            <a href="https://dreamsrent.dreamstechnologies.com/html/template/booking-detail.html?driver_type=on#"
                                                                class="coupon-close"><span><i
                                                                        class="bx bx-x"></i></span></a>
                                                        </div>
                                                        <button type="submit"
                                                            class="btn btn-secondary d-flex align-items-center apply-coupon-btn disabled ms-2">
                                                            <font dir="auto" style="vertical-align: inherit;">
                                                                <font dir="auto" style="vertical-align: inherit;">
                                                                    Aplicar</font>
                                                            </font><i class="feather-arrow-right ms-2"></i>
                                                        </button>
                                                    </div>
                                                    <span class="coupen-applied-offter"><i class="bx bxs-offer"></i>
                                                        <font dir="auto" style="vertical-align: inherit;">
                                                            <font dir="auto" style="vertical-align: inherit;">Salvo
                                                                nesta reserva</font>
                                                        </font>
                                                    </span>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="total-rate-card">
                                    <div class="vehicle-total-price">
                                        <h5>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">Total estimado
                                                </font>
                                            </font>
                                        </h5>
                                        <span>
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">$ 3541</font>
                                            </font>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-sensor"
                                style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div class="resize-sensor-expand"
                                    style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                    <div
                                        style="position: absolute; left: 0px; top: 0px; transition: all; width: 366px; height: 422px;">
                                    </div>
                                </div>
                                <div class="resize-sensor-shrink"
                                    style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                    <div
                                        style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%">
                                    </div>
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
                                    <h1>
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">Entrar</font>
                                        </font>
                                    </h1>
                                    <p class="account-subtitle">
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">Enviaremos um código de
                                                confirmação para seu e-mail.</font>
                                        </font>
                                    </p>
                                    <form action="https://dreamsrent.dreamstechnologies.com/html/template/index.html">
                                        <div class="input-block">
                                            <label class="form-label">
                                                <font dir="auto" style="vertical-align: inherit;">
                                                    <font dir="auto" style="vertical-align: inherit;">E-mail </font>
                                                </font><span class="text-danger">
                                                    <font dir="auto" style="vertical-align: inherit;">
                                                        <font dir="auto" style="vertical-align: inherit;">*</font>
                                                    </font>
                                                </span>
                                            </label>
                                            <input type="email" class="form-control" placeholder="Digite o e-mail">
                                        </div>
                                        <div class="input-block">
                                            <label class="form-label">
                                                <font dir="auto" style="vertical-align: inherit;">
                                                    <font dir="auto" style="vertical-align: inherit;">Senha </font>
                                                </font><span class="text-danger">
                                                    <font dir="auto" style="vertical-align: inherit;">
                                                        <font dir="auto" style="vertical-align: inherit;">*</font>
                                                    </font>
                                                </span>
                                            </label>
                                            <div class="pass-group">
                                                <input type="password" class="form-control pass-input"
                                                    placeholder=".............">
                                                <span class="fas fa-eye-slash toggle-password"></span>
                                            </div>
                                        </div>
                                        <div class="input-block text-end">
                                            <a class="forgot-link"
                                                href="https://dreamsrent.dreamstechnologies.com/html/template/forgot-password.html">
                                                <font dir="auto" style="vertical-align: inherit;">
                                                    <font dir="auto" style="vertical-align: inherit;">Esqueceu sua
                                                        senha ?</font>
                                                </font>
                                            </a>
                                        </div>
                                        <div class="input-block m-0">
                                            <label class="custom_check d-inline-flex"><span>
                                                    <font dir="auto" style="vertical-align: inherit;">
                                                        <font dir="auto" style="vertical-align: inherit;">Lembre de
                                                            mim</font>
                                                    </font>
                                                </span>
                                                <input type="checkbox" name="remeber">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <a href="https://dreamsrent.dreamstechnologies.com/html/template/index.html"
                                            class="btn btn-outline-light w-100 btn-size mt-1">
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">Entrar</font>
                                            </font>
                                        </a>
                                        <div class="login-or">
                                            <span class="or-line"></span>
                                            <span class="span-or-log">
                                                <font dir="auto" style="vertical-align: inherit;">
                                                    <font dir="auto" style="vertical-align: inherit;">Ou faça login
                                                        com seu e-mail</font>
                                                </font>
                                            </span>
                                        </div>
                                        <!-- Social Login -->
                                        <div class="social-login">
                                            <a href="https://dreamsrent.dreamstechnologies.com/html/template/booking-detail.html?driver_type=on#"
                                                class="d-flex align-items-center justify-content-center input-block btn google-login w-100"><span><img
                                                        src="assets/user/img/icons/google.svg"
                                                        class="img-fluid" alt="Google"></span>
                                                <font dir="auto" style="vertical-align: inherit;">
                                                    <font dir="auto" style="vertical-align: inherit;">Entrar com o
                                                        Google</font>
                                                </font>
                                            </a>
                                        </div>
                                        <div class="social-login">
                                            <a href="https://dreamsrent.dreamstechnologies.com/html/template/booking-detail.html?driver_type=on#"
                                                class="d-flex align-items-center justify-content-center input-block btn google-login w-100"><span><img
                                                        src="assets/user/img/icons/facebook.svg"
                                                        class="img-fluid" alt="Facebook"></span>
                                                <font dir="auto" style="vertical-align: inherit;">
                                                    <font dir="auto" style="vertical-align: inherit;">Entrar com o
                                                        Facebook</font>
                                                </font>
                                            </a>
                                        </div>
                                        <!-- /Social Login -->
                                        <div class="text-center dont-have">
                                            <font dir="auto" style="vertical-align: inherit;">
                                                <font dir="auto" style="vertical-align: inherit;">Não tem uma conta?
                                                </font>
                                            </font><a
                                                href="https://dreamsrent.dreamstechnologies.com/html/template/register.html">
                                                <font dir="auto" style="vertical-align: inherit;">
                                                    <font dir="auto" style="vertical-align: inherit;">Cadastre-se
                                                    </font>
                                                </font>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
