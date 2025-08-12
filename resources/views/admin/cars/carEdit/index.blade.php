@extends('admin.colors.colorEdit.layout.principal')
@section('title', 'Duralux || Color Edit')
@section('content-colorEdit')

<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Cor</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Editar</li>
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
                <!--<a href="javascript:void(0);" class="btn btn-light-brand successAlertMessage">
                        <i class="feather-layers me-2"></i>
                        <span>Save as Draft</span>
                    </a>  -->
                    <a href="javascript:void(0);" class="btn btn-primary successAlertMessage">
                        <i class="feather-save me-2"></i>
                        <span>Salvar Cor</span>
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
    <div class="main-content">
        <div class="row">
            <div class="col-xl-16">
                <div class="card invoice-container">
                    <div class="card-header">
                        <h5>Cadastro de Cor</h5>
                    
                    </div>
                    <div class="card-body p-0">
                        <div class="px-4 pt-4">
                            <div class="d-md-flex align-items-center justify-content-between">
                                <div class="mb-4 mb-md-0 your-brand">
                                    <div class="wd-100 ht-100 position-relative overflow-hidden border border-gray-2 rounded">
                                        <img src="{{ url('assets/images/logo-abbr.png')}}" class="upload-pic img-fluid rounded h-100 w-100" alt="">
                                        <div class="position-absolute start-50 top-50 end-0 bottom-0 translate-middle h-100 w-100 hstack align-items-center justify-content-center c-pointer upload-button">
                                            <i class="feather feather-camera" aria-hidden="true"></i>
                                        </div>
                                        <input class="file-upload" type="file" accept="image/*">
                                    </div>
                                    <div class="fs-12 text-muted mt-2">* Upload your brand</div>
                                </div>
                               
                            </div>
                        </div>
                        
                                <form action="{{ route('colors.update', ['color' => $color->id]) }}" method="POST">
                                @csrf
                                @method('PUT')

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="row">
                                    {{-- Nome --}}
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Nome da Cor</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ old('name', $color->name) }}" placeholder="Ex: Cinza, Azul...">
                                    </div>

                                    {{-- Data de Cadastro --}}
                                    <div class="col-lg-5 mb-3">
                                        <label class="form-label">Data de Cadastro</label>
                                        <input type="date" name="date" class="form-control" value="{{ old('date', $color->date) }}">
                                    </div>

                                    {{-- Descrição --}}
                                    <div class="col-12 mb-4">
                                        <label class="form-label">Descrição</label>
                                        <textarea name="description" class="form-control" rows="4" placeholder="Escreve uma descrição...">{{ old('description', $color->description ?? '') }}</textarea>
                                    </div>

                                    {{-- Botão de Enviar --}}
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary"> Salvar
                                        </button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div> 
           
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>
@endsection