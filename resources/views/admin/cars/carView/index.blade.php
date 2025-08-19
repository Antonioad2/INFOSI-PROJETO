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
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>
@endsection