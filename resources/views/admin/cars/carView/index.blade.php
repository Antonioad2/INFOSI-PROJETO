@extends('admin.cars.carView.layout.principal')

@section('title', 'Duralux || Carro View')
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
                            <span class="fs-12 fw-normal text-muted d-block">Informações Gerais sobre este carro</span>
                        </h5>
                        <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-sm btn-light-brand">Editar Carro</a>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Marca</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-git-commit"></i>
                                </div>
                                <span>{{ $brands->find($car->brand_id)->name ?? 'N/A' }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Modelo</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-git-commit"></i>
                                </div>
                                <span>{{ $models->find($car->models_id)->name ?? 'N/A' }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Cor</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-git-commit"></i>
                                </div>
                                <span>{{ $colors->find($car->color_id)->name ?? 'N/A' }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Combustível</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-git-commit"></i>
                                </div>
                                <span>{{ $fuels->find($car->fuel_id)->name ?? 'N/A' }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Categoria</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-git-commit"></i>
                                </div>
                                <span>{{ $car->category }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Chassi</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-git-commit"></i>
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
                                    <i class="feather-git-commit"></i>
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
                                <span>{{ \Carbon\Carbon::parse($car->manufacture_date)->format('d/m/Y') }}</span>
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
                                <span>{{ \Carbon\Carbon::parse($car->registration_date)->format('d/m/Y') }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Observações</div>
                        <div class="col-lg-10 hstack gap-1">
                            <span>{{ $car->observations ?? 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Valor</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-dollar-sign"></i>
                                </div>
                                <span>{{ number_format($car->value, 2, ',', '.') }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Seguro</div>
                        <div class="col-lg-10 hstack gap-1">
                            <span>{{ $car->car_insurance ?? 'N/A' }}</span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Foto</div>
                        <div class="col-lg-10 hstack gap-1">
                            @if($car->image)
                                <img src="{{ asset('storage/' . $car->image) }}" alt="Car Image" style="max-width: 200px; max-height: 200px;">
                            @else
                                <span>Sem imagem</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2 fw-medium">Data de Criação</div>
                        <div class="col-lg-10 hstack gap-1">
                            <a href="javascript:void(0);" class="hstack gap-2">
                                <div class="avatar-text avatar-sm">
                                    <i class="feather-clock"></i>
                                </div>
                                <span>{{ \Carbon\Carbon::parse($car->created_at)->format('d/m/Y H:i') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>
@endsection