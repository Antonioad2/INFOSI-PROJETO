@extends('site.reservation.layouts.main')
@section('title', 'AngoCar-Localização')
@section('content')

    <!-- Breadscrumb Section -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">Confira</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Confira</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadscrumb Section -->

    <div class="booking-new-module">
        <div class="container">
            <div class="booking-wizard-head">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-3">
                        <div class="booking-head-title">
                            <h4>Reserve seu Carro</h4>
                            <p>Conclua as etapas seguintes</p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9">
                        <div class="booking-wizard-lists">
                            <ul>
                                <li class="active">
                                    <span><img src="assets/user/img/icons/booking-head-icon-01.svg" alt="Booking Icon"></span>
                                    <h6>Localização e Hora</h6>
                                </li>
                                <li>
                                    <span><img src="assets/user/img/icons/booking-head-icon-02.svg" alt="Booking Icon"></span>
                                    <h6>Serviços Extras</h6>
                                </li>
                                <li>
                                    <span><img src="assets/user/img/icons/booking-head-icon-03.svg" alt="Booking Icon"></span>
                                    <h6>Detalhes</h6>
                                </li>
                                <li>
                                    <span><img src="assets/user/img/icons/booking-head-icon-04.svg" alt="Booking Icon"></span>
                                    <h6>Confira</h6>
                                </li>
                                <li>
                                    <span><img src="assets/user/img/icons/booking-head-icon-05.svg" alt="Booking Icon"></span>
                                    <h6>Reserva Confirmada</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="booking-detail-info">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="booking-information-main">
                            <form action="https://dreamsrent.dreamstechnologies.com/html/template/booking-addon.html">
                                <div class="booking-information-card">
                                    <div class="booking-info-head">
                                        <span><i class="bx bxs-car-garage"></i></span>
                                        <h5>Tipo de Aluguel</h5>
                                    </div>
                                    <div class="booking-info-body">
                                        <ul class="booking-radio-btns">
                                            <li>
                                                <label class="booking_custom_check">
                                                    <input type="radio" name="rent_type" id="location_delivery" checked>
                                                    <span class="booking_checkmark">
                                                        <span class="checked-title">Entrega</span>
                                                    </span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="booking_custom_check">
                                                    <input type="radio" name="rent_type" id="location_pickup">
                                                    <span class="booking_checkmark">
                                                        <span class="checked-title">Retirada em mãos</span>
                                                    </span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="booking-information-card delivery-location">
                                    <div class="booking-info-head">
                                        <span><i class="bx bxs-car-garage"></i></span>
                                        <h5>Localização</h5>
                                    </div>
                                    <div class="booking-info-body">
                                        <div class="form-custom">
                                            <label class="form-label">Local de Entrega</label>
                                            <div class="d-flex align-items-center">
                                                <input type="text" class="form-control mb-0" placeholder="Add Location">
                                                <a href="#"
                                                    class="btn btn-secondary location-btn d-flex align-items-center"><i
                                                        class="bx bx-current-location me-2"></i>Localização Atual</a>
                                            </div>
                                        </div>
                                        <div class="input-block m-0">
                                            <label class="custom_check d-inline-flex location-check"><span>Retornar ao mesmo
                                                    local</span>
                                                <input type="checkbox" name="remeber">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-custom">
                                            <label class="form-label">Local de Devolução</label>
                                            <div class="d-flex align-items-center">
                                                <input type="text" class="form-control mb-0" placeholder="Add Location">
                                                <a href="#"
                                                    class="btn btn-secondary location-btn d-flex align-items-center"><i
                                                        class="bx bx-current-location me-2"></i>Localização Atual</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-information-card pickup-location">
                                    <div class="booking-info-head">
                                        <span><i class="bx bxs-car-garage"></i></span>
                                        <h5>Localização</h5>
                                    </div>
                                    <div class="booking-info-body">
                                        <div class="form-custom">
                                            <label class="form-label">Local de Entrega</label>
                                            <div class="d-flex align-items-center">
                                                <input type="text" class="form-control mb-0"
                                                    value="Newyork Office - 78, 10th street Laplace USA">
                                            </div>
                                        </div>
                                        <div class="input-block m-0">
                                            <label class="custom_check d-inline-flex location-check"><span>Retornar ao mesmo
                                                    local</span>
                                                <input type="checkbox" name="remeber">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-custom">
                                            <label class="form-label">Local de Devolução</label>
                                            <div class="d-flex align-items-center">
                                                <input type="text" class="form-control mb-0"
                                                    value="Newyork Office - 78, 10th street Laplace USA">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-information-card booking-type-card">
                                    <div class="booking-info-head">
                                        <span><i class="bx bxs-location-plus"></i></span>
                                        <h5>Hora</h5>
                                    </div>
                                    <div class="booking-info-body">
                                        <ul class="booking-radio-btns">
                                            <li>
                                                <label class="booking_custom_check">
                                                    <input type="radio" name="booking_type">
                                                    <span class="booking_checkmark">
                                                        <span class="checked-title">Dia ($300)</span>
                                                    </span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="booking_custom_check">
                                                    <input type="radio" name="booking_type" checked>
                                                    <span class="booking_checkmark">
                                                        <span class="checked-title">Semanal ($820)</span>
                                                    </span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="booking_custom_check">
                                                    <input type="radio" name="booking_type">
                                                    <span class="booking_checkmark">
                                                        <span class="checked-title">Mensal ($2400)</span>
                                                    </span>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="booking_custom_check">
                                                    <input type="radio" name="booking_type">
                                                    <span class="booking_checkmark">
                                                        <span class="checked-title">Anual ($9400)</span>
                                                    </span>
                                                </label>
                                            </li>
                                        </ul>
                                        <div class="booking-timings">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-block date-widget">
                                                        <label class="form-label">Data de Início</label>
                                                        <div class="group-img">
                                                            <input type="text" class="form-control datetimepicker"
                                                                placeholder="Choose Date">
                                                            <span class="input-cal-icon"><i
                                                                    class="bx bx-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-block time-widge">
                                                        <label class="form-label">Hora de Início</label>
                                                        <div class="group-img">
                                                            <input type="text" class="form-control timepicker"
                                                                placeholder="Choose Time">
                                                            <span class="input-cal-icon"><i class="bx bx-time"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-block date-widget">
                                                        <label class="form-label">Data de Retorno</label>
                                                        <div class="group-img">
                                                            <input type="text" class="form-control datetimepicker"
                                                                placeholder="Choose Date">
                                                            <span class="input-cal-icon"><i
                                                                    class="bx bx-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-block time-widge">
                                                        <label class="form-label">Hora de Retorno</label>
                                                        <div class="group-img">
                                                            <input type="text" class="form-control timepicker"
                                                                placeholder="Choose Time">
                                                            <span class="input-cal-icon"><i class="bx bx-time"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-info-btns d-flex justify-content-end">
                                    <a href="listing-details.html" class="btn btn-secondary">Voltar para Detalhes do Carro</a>
                                    <button class="btn btn-primary continue-book-btn" type="submit">Continue
                                        Reservando</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 theiaStickySidebar">
                        <div class="booking-sidebar">
                            <div class="booking-sidebar-card">
                                <div class="accordion-item border-0 mb-4">
                                    <div class="accordion-header">
                                        <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-target="#accordion_collapse_one" aria-expanded="true">
                                            <div class="booking-sidebar-head">
                                                <h5>Detalhes da Reserva<i class="fas fa-chevron-down"></i></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="accordion_collapse_one" class="accordion-collapse collapse">
                                        <div class="booking-sidebar-body">
                                            <div class="booking-car-detail">
                                                <span class="car-img">
                                                    <img src="assets/user/img/car-list-4.jpg" class="img-fluid"
                                                        alt="Car">
                                                </span>
                                                <div class="care-more-info">
                                                    <h5>Chevrolet Camaro</h5>
                                                    <p>Miami St, Destin, FL 32550, USA</p>
                                                    {{-- <a href="listing-details.html">View Car Details</a> --}}
                                                </div>
                                            </div>
                                            <div class="booking-vehicle-rates">
                                                <ul>
                                                    <li>
                                                        <div class="rental-charge">
                                                            <h6>Taxa de Aluguel <span> (1 day )</span></h6>
                                                            <span class="text-danger">(This does not include fuel)</span>
                                                        </div>
                                                        <h5>+ $300</h5>
                                                    </li>
                                                    <li>
                                                        <h6>Entrega em Domicílio</h6>
                                                        <h5>+ $60</h5>
                                                    </li>
                                                    <li>
                                                        <h6>Taxas de proteção de viagem</h6>
                                                        <h5>+ $25</h5>
                                                    </li>
                                                    <li>
                                                        <h6>Taxas de conveniência</h6>
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
                                                        <h6>Seguro Premium Completo <i
                                                                class="bx bxs-x-circle text-danger"></i></h6>
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
                                    <div class="accordion-header">
                                        <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                            data-bs-target="#accordion_collapse_two" aria-expanded="true">
                                            <div
                                                class="booking-sidebar-head d-flex justify-content-between align-items-center">
                                                <h5>Cupom<i class="fas fa-chevron-down"></i></h5>
                                                <a href="#" class="coupon-view">Ver Cupons</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="accordion_collapse_two" class="accordion-collapse collapse">
                                        <div class="booking-sidebar-body">
                                            <form
                                                action="https://dreamsrent.dreamstechnologies.com/html/template/booking-checkout.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="form-custom flex-fill">
                                                        <input type="text" class="form-control mb-0"
                                                            placeholder="Código do Cupom">
                                                    </div>
                                                    <button type="submit"
                                                        class="btn btn-secondary apply-coupon-btn d-flex align-items-center ms-2">Aplicar<i
                                                            class="feather-arrow-right ms-2"></i></button>
                                                </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
