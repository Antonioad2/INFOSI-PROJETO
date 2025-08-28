@extends('admin.drivers.driverView.layout.principal')
@section('title', 'Duralux || Detalhes do Motorista')
@section('content-driverView')

<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Detalhes do Motorista</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('drivers.index') }}">Motoristas</a></li>
                <li class="breadcrumb-item">Detalhes</li>
            </ul>
        </div>
        <div class="page-header-right ms-auto">
            <div class="page-header-right-items">
                <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                    <a href="{{ route('drivers.create', $driver) }}" class="btn btn-primary">
                        <span>Novo Motorista</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- [ page-header ] end -->

    <!-- [ Main Content ] start -->
    <div class="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card stretch stretch-full">
                    <div class="card-body">
                        <div class="row">
                            <!-- Informações do Motorista -->
                            <div class="col-md-6">
                                <h6 class="mb-3">Informações Pessoais</h6>
                                <div class="mb-3">
                                    <strong>Nome Completo:</strong> {{ $driver->full_name }}
                                </div>
                                <div class="mb-3">
                                    <strong>BI ou PASSPORTE:</strong> {{ $driver->document_identification }}
                                </div>
                                <div class="mb-3">
                                    <strong>Email:</strong> {{ $driver->email }}
                                </div>
                                <div class="mb-3">
                                    <strong>Telefone:</strong> {{ $driver->phone_number }}
                                </div>
                                <div class="mb-3">
                                    <strong>Gênero:</strong> {{ $driver->gender ? ucfirst($driver->gender) : 'Não informado' }}
                                </div>
                                <div class="mb-3">
                                    <strong>Endereço:</strong> {{ $driver->address ?? 'Não informado' }}
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <h6 class="mb-3">Informações Profissionais</h6>
                                <div class="mb-4 d-flex align-items-center justify-content-between">
                                            <a href="{{ route('drivers.edit', $driver)}}" class="btn btn-sm btn-light-brand">Editar Motorista</a>
                                </div>
                                <div class="mb-3">
                                    <strong>Anos de Experiência:</strong> {{ $driver->experience_years }}
                                </div>
                                <div class="mb-3">
                                    <strong>Data de Cadastro:</strong> {{ $driver->created_at ? $driver->created_at->format('d/m/Y') : 'N/A' }}
                                </div>
                                <div class="mb-3">
                                    <strong>Data de Expiração da Licença:</strong> {{ $driver->license_expiry_date ? \Carbon\Carbon::parse($driver->license_expiry_date)->format('d/m/Y') : 'N/A' }}
                                </div>
                                <div class="mb-3">
                                    <strong>Imagem da Carta de Condução:</strong>
                                    @if(Str::endsWith($driver->id_image, '.pdf'))
                                        <a href="{{ asset('storage/'.$driver->id_image) }}" target="_blank">📄 Ver Documento</a>
                                    @else
                                        <a href="{{ asset('storage/'.$driver->id_image) }}" target="_blank">
                                            <img src="{{ asset('storage/'.$driver->id_image) }}" class="img-fluid" alt="Imagem de Identificação" style="width:100px; height:100px; object-fit:cover;">
                                        </a>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <strong>Imagem de BI/PASSPORTE:</strong>
                                    @if(Str::endsWith($driver->license_image, '.pdf'))
                                        <a href="{{ asset('storage/'.$driver->license_image) }}" target="_blank">📄 Ver Licença</a>
                                    @else
                                        <a href="{{ asset('storage/'.$driver->license_image) }}" target="_blank">
                                            <img src="{{ asset('storage/'.$driver->license_image) }}" class="img-fluid" alt="Imagem da Licença" style="width:100px; height:100px; object-fit:cover;">
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>
@endsection