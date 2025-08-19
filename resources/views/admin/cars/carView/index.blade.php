@extends('admin.cars.carView.layout.principal')
@section('title', 'Duralux || Visualizar Carro')
@section('content-carView')

<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Carro</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Visualizar</li>
            </ul>
        </div>
        <div class="page-header-right ms-auto">
            <div class="page-header-right-items">
                <div class="d-flex d-md-none">
                    <a href="javascript:void(0)" class="page-header-right-close-toggle">
                        <i class="feather-arrow-left me-2"></i>
                        <span>Back</span>
                    </a>
                </div>
                <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                    <a href="{{ route('cars.create') }}" class="btn btn-primary">
                        <i class="feather-plus me-2"></i>
                        <span>Novo Cadastro</span>
                    </a>
                </div>
            </div>
            <div class="d-md-none d-flex align-items-center">
                <a href="javascript:void(0)" class="page-header-right-open-toggle">
                    <i class="feather-align-right fs-20"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- [ page-header ] end -->
    <!-- [ Main Content ] start -->
    <div class="main-content container-lg">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-body general-info">
                    <div class="mb-4 d-flex align-items-center justify-content-between">
                        <h5 class="fw-bold mb-0">
                            <span class="d-block mb-2">Informações Gerais:</span>
                            <span class="fs-12 fw-normal text-muted d-block">Informações Gerais sobre este Carro</span>
                        </h5>
                        <a href="{{ route('cars.edit', $car) }}" class="btn btn-sm btn-light-brand">Editar Carro</a>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Marca do Carro</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-git-commit"></i>
                                </div>
                                <span>{{ $car->brand->name }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Modelo do Carro</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-git-commit"></i>
                                </div>
                                <span>{{ $car->models->name }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Fornecedor</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-user"></i>
                                </div>
                                <span>{{ $car->supplier->name ?? 'N/A' }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Tipo de Combustível</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-git-commit"></i>
                                </div>
                                <span>{{ $car->fuel->name }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Cor do Carro</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-git-commit"></i>
                                </div>
                                <span>{{ $car->color->name }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Categoria</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-tag"></i>
                                </div>
                                <span>{{ $car->category == 'Luxury' ? 'Luxo' : ($car->category == 'Standard' ? 'Padrão / Intermediário' : 'Econômico') }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Chassi</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-hash"></i>
                                </div>
                                <span>{{ $car->chassi }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Placa</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-hash"></i>
                                </div>
                                <span>{{ $car->license_plate }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Data de Fabricação</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-clock"></i>
                                </div>
                                <span>{{ $car->manufacture_date ? \Carbon\Carbon::parse($car->manufacture_date)->format('d/m/Y') : 'N/A' }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4">
<<<<<<< HEAD
                        <div class="col-lg-2 fw-medium">Data de Registro</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-clock"></i>
                                </div>
                                <span>{{ $car->registration_date ? \Carbon\Carbon::parse($car->registration_date)->format('d/m/Y') : 'N/A' }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Seguro</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-file-text"></i>
                                </div>
                                <span>{{ $car->car_insurance ?? 'N/A' }}</span>
                                @if ($car->car_insurance_upload)
                                    <a href="{{ Storage::url($car->car_insurance_upload) }}" target="_blank" class="ms-2">Ver arquivo</a>
                                @endif
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Documento do Carro</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-file-text"></i>
                                </div>
                                <span>{{ $car->car_document ?? 'N/A' }}</span>
                                @if ($car->car_document_upload)
                                    <a href="{{ Storage::url($car->car_document_upload) }}" target="_blank" class="ms-2">Ver arquivo</a>
                                @endif
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Foto do Carro</div>
                        <div class="col-lg-10 hstack gap-1">
                            @if($car->image)
                                <img src="{{ Storage::url($car->image) }}" alt="Car Image" style="max-width: 200px; max-height: 200px;">
                            @else
                                <span>Nenhuma foto disponível</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Inspeção</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-file-text"></i>
                                </div>
                                <span>{{ $car->inspection_date ? \Carbon\Carbon::parse($car->inspection_date)->format('d/m/Y') : 'N/A' }}</span>
                                @if ($car->inspection_document_upload)
                                    <a href="{{ Storage::url($car->inspection_document_upload) }}" target="_blank" class="ms-2">Ver arquivo</a>
                                @endif
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Observações</div>
                        <div class="col-lg-8 hstack gap-1">{{ $car->observations ?? 'N/A' }}</div>
                    </div>
                </div>
=======
                        <div class="col-lg-2 fw-medium">Lead By</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-image avatar-sm">
                                    <img src="assets/images/avatar/2.png" alt="" class="img-fluid">
                                </div>
                                <span>Green Cute - Website design and development</span>
                            </a>
                        </div>
                    </div> -->
                    <!-- <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Tags</div>
                        <div class="col-lg-10 hstack gap-1"><a href="javascript:void(0);" class="badge bg-soft-primary text-primary">VIP</a><a href="javascript:void(0);" class="badge bg-soft-success text-success">High Rated</a><a href="javascript:void(0);" class="badge bg-soft-warning text-warning">Promotions</a><a href="javascript:void(0);" class="badge bg-soft-danger text-danger">Team</a><a href="javascript:void(0);" class="badge bg-soft-teal text-teal">Updates</a></div>
                    </div> -->
                    
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Descrição</div>
                        <div class="col-lg-8 hstack gap-1">{{$car->observations}}</div>
                    </div>
                </div>

                <!-- Seção para Documentos -->
                <div class="row mb-4">
                    <div class="col-lg-2 fw-medium">Documentos</div>
                    <div class="col-lg-10 hstack gap-3">
                        @if($car->car_insurance_upload)
                            <div class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-file-text"></i>
                                </div>
                                <a href="{{ asset($car->car_insurance_upload) }}" target="_blank">Seguro ({{ $car->car_insurance }})</a>
                            </div>
                        @else
                            <span>Sem documento de seguro</span>
                        @endif
                    </div>
                </div>
                

                <div class="row mb-4">
                    <div class="col-lg-2 fw-medium"></div>
                    <div class="col-lg-10 hstack gap-3">
                        @if($car->car_document_upload)
                            <div class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-file-text"></i>
                                </div>
                                <a href="{{ asset($car->car_document_upload) }}" target="_blank">Documento do Carro ({{ $car->car_document }})</a>
                            </div>
                        @else
                            <span>Sem documento do carro</span>
                        @endif
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-lg-2 fw-medium"></div>
                    <div class="col-lg-10 hstack gap-3">
                        @if($car->inspection_document_upload)
                            <div class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-file-text"></i>
                                </div>
                                <a href="{{ asset($car->inspection_document_upload) }}" target="_blank">Documento de Inspeção ({{ $car->inspection_date }})</a>
                            </div>
                        @else
                            <span>Sem documento de inspeção</span>
                        @endif
                    </div>
                </div>

                <!-- Seção para Imagens do carro -->

                <div class="row mb-4">
                    <div class="col-lg-2 fw-medium">Imagens do Carro</div>
                    <div class="col-lg-10 hstack gap-3">
                        @if($car->image)
                            <div class="hstack gap-2">
                                <div class="avatar-image avatar-sm">
                                    <img src="{{ asset($car->image) }}" alt="Car Image" class="img-fluid">
                                </div>
                                <span>Imagem do Carro</span>
                            </div>
                            @else
                            <span>Sem imagem do carro</span>
                        @endif
                    </div>
                </div>

            

                <!-- <div class="card invoice-container">
                    <div class="card-header">
                        <div>
                            <h2 class="fs-16 fw-700 text-truncate-1-line mb-0 mb-sm-1">Invoice Preview</h2>
                            <div class="dropdown d-none d-sm-block">
                                <a href="javascript:void(0)" class="dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" data-bs-offset="0,25" aria-expanded="false">
                                    <span class="fs-11 fw-400 text-muted me-2">Invoice Templates</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item active">Default</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">Simple</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">Classic</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">Modern</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">Untimate</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">Essential</a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">Create Template</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">Delete Template</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0)" class="d-flex me-1" data-alert-target="invoicSendMessage">
                                <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Send Invoice">
                                    <i class="feather feather-send"></i>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="d-flex me-1 printBTN">
                                <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Print Invoice"><i class="feather feather-printer"></i></div>
                            </a>
                            <a href="javascript:void(0)" class="d-flex me-1">
                                <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Add Payment"><i class="feather feather-dollar-sign"></i></div>
                            </a>
                            <a href="javascript:void(0)" class="d-flex me-1 file-download">
                                <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Download Invoice"><i class="feather feather-download"></i></div>
                            </a>
                            <a href="invoice-create.html" class="d-flex me-1">
                                <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit Invoice">
                                    <i class="feather feather-edit"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="px-4 pt-4">
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <div>
                                    <div class="fs-24 fw-bolder font-montserrat-alt text-uppercase">Duralux</div>
                                    <address class="text-muted">
                                        P.O. Box 18728,<br>
                                        DeLorean New York<br>
                                        VAT No: 2617 348 2752
                                    </address>
                                    <div class="d-flex gap-2">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm">
                                            <i class="feather-facebook"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm">
                                            <i class="feather-twitter"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm">
                                            <i class="feather-instagram"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm">
                                            <i class="feather-linkedin"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm">
                                            <i class="feather-github"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="lh-lg pt-3 pt-sm-0">
                                    <h2 class="fs-4 fw-bold text-primary">Invoice</h2>
                                    <div>
                                        <span class="fw-bold text-dark">Invoice:</span>
                                        <span class="fw-bold text-primary">#NXL369852</span>
                                    </div>
                                    <div>
                                        <span class="fw-bold text-dark">Due Date:</span>
                                        <span class="text-muted">28 Feb, 2023</span>
                                    </div>
                                    <div>
                                        <span class="fw-bold text-dark">Issued Date:</span>
                                        <span class="text-muted">25 JAN, 2023</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="border-dashed">
                        <div class="px-4 py-sm-5">
                            <div class="d-sm-flex gap-4 justify-content-center">
                                <div class="text-sm-end">
                                    <h2 class="fs-16 fw-bold text-dark mb-3">Invoiced To:</h2>
                                    <address class="text-muted lh-lg">
                                        Ellen Louise Ripley<br>
                                        Nostromo PO Box 29618<br>
                                        VAT No: 295 3932 6119<br>
                                        United Kingdom
                                    </address>
                                </div>
                                <div class="border-end border-end-dashed border-gray-500 d-none d-sm-block"></div>
                                <div class="mt-4 mt-sm-0">
                                    <h2 class="fs-16 fw-bold text-dark mb-3">Payment Details:</h2>
                                    <div class="text-muted lh-lg">
                                        <div>
                                            <span class="text-muted">Total Due:</span>
                                            <span class="fw-bold text-dark">$249 USD</span>
                                        </div>
                                        <div>
                                            <span class="text-muted">Payout Status:</span>
                                            <span class="fw-bold text-warning">Pending</span>
                                        </div>
                                        <div>
                                            <span class="text-muted">Card Holder:</span>
                                            <span class="fw-bold text-dark">Alexandra Della</span>
                                        </div>
                                        <div>
                                            <span class="text-muted">Payment Method:</span>
                                            <span class="fw-bold text-dark">Mastercard</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="border-dashed mb-0">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Service</th>
                                        <th>Description</th>
                                        <th>Rate</th>
                                        <th>QTY</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="javascript:void(0)">Adata </a></td>
                                        <td>Modern &amp; Minimal Multipurpose Bootstrap Admin Dashboard</td>
                                        <td>$50.00</td>
                                        <td>10</td>
                                        <td class="text-dark fw-semibold">$500.00</td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0)">Avesta </a></td>
                                        <td>Multipurpose Bootstrap4 Admin Dashboard Template</td>
                                        <td>$120.00</td>
                                        <td>10</td>
                                        <td class="text-dark fw-semibold">$1200.00</td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0)">Metrical </a></td>
                                        <td>Multipurpose Bootstrap4 Admin Dashboard Template</td>
                                        <td>$450.00</td>
                                        <td>1</td>
                                        <td class="text-dark fw-semibold">$450.00</td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0)">Avesta </a></td>
                                        <td>Multipurpose Bootstrap4 Admin Dashboard Template</td>
                                        <td>$120.00</td>
                                        <td>10</td>
                                        <td class="text-dark fw-semibold">$1200.00</td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0)">Duralux </a></td>
                                        <td>Admin Dashboard &amp; Webapps Template</td>
                                        <td>$50.00</td>
                                        <td>10</td>
                                        <td class="text-dark fw-semibold">$500.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td class="fw-semibold text-dark bg-gray-100 text-lg-end">Sub Total</td>
                                        <td class="fw-bold text-dark bg-gray-100">+ $2150.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td class="fw-semibold text-dark bg-gray-100 text-lg-end">Discount (NXL2023 - 15%)</td>
                                        <td class="fw-bold text-success bg-gray-100">- $567.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td class="fw-semibold text-dark bg-gray-100 text-lg-end">Estimated Tax (12.5%)</td>
                                        <td class="fw-bold text-dark bg-gray-100">+ $225.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td class="fw-semibold text-dark bg-gray-100 text-lg-end">Grand Amount</td>
                                        <td class="fw-bolder text-dark bg-gray-100">= $2065.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr class="border-dashed mt-0">
                        <div class="px-4">
                            <div class="alert alert-dismissible p-4 mt-3 alert-soft-warning-message" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <p class="mb-0">
                                    <strong>NOTES:</strong> All accounts are to be paid within 7 days from receipt of invoice. <br>
                                    To be paid by cheque or credit card or direct payment online. <br>
                                    If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.
                                </p>
                            </div>
                        </div>
                        <div class="px-4 pt-4 d-sm-flex align-items-center justify-content-between">
                            <div class="mb-5 mb-sm-0">
                                <h6 class="fs-13 fw-bold mb-3">Tarm &amp; Condition :</h6>
                                <ul class="list-unstyled lh-lg fs-12">
                                    <li># All accounts are to be paid within 7 days from receipt of invoice.</li>
                                    <li># To be paid by cheque or credit card or direct payment online.</li>
                                    <li># If account is not paid within 7 days the credits details supplied as confirmation.</li>
                                    <li># This is computer generated receipt and does not require physical signature.</li>
                                </ul>
                            </div>
                            <div class="text-center">
                                <img src="assets/images/general/signature.png" class="img-fluid wd-100" alt="image">
                                <h6 class="fs-13 fw-bold mt-2">Account Manager</h6>
                                <p class="fs-11 fw-semibold text-muted">26 MAY 2023, 10:35PM</p>
                            </div>
                        </div>
                    </div>
                </div> -->
>>>>>>> origin/Braulio
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> origin/Braulio
