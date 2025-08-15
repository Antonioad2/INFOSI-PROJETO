@extends('admin.cars.carCreate.layout.principal')

@section('title', 'Duralux || Carro create')
@section('content-carCreate')
<div class="nxl-content">
    <div class="page-header">
        <div class="page-header-title">
            <h5 class="m-b-10">Cadastro de Carro</h5>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Carro</li>
            <li class="breadcrumb-item active">Novo</li>
        </ul>
    </div>

    <div class="main-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Marca</label>
                                    <select name="brand_id" class="form-control">
                                        <option value="">Selecione a Marca</option>
                                        @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Modelo</label>
                                    <select name="models_id" class="form-control">
                                        <option value="">Selecione o Modelo</option>
                                        @foreach($models as $model)
                                            <option value="{{ $model->id }}" {{ old('models_id') == $model->id ? 'selected' : '' }}>{{ $model->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Cor</label>
                                    <select name="color_id" class="form-control">
                                        <option value="">Selecione a Cor</option>
                                        @foreach($colors as $color)
                                            <option value="{{ $color->id }}" {{ old('color_id') == $color->id ? 'selected' : '' }}>{{ $color->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Combustível</label>
                                    <select name="fuel_id" class="form-control">
                                        <option value="">Selecione o Tipo</option>
                                        @foreach($fuels as $fuel)
                                            <option value="{{ $fuel->id }}" {{ old('fuel_id') == $fuel->id ? 'selected' : '' }}>{{ $fuel->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Categoria</label>
                                    <select name="category" class="form-control">
                                        <option value="Luxury" {{ old('category') == 'Luxury' ? 'selected' : '' }}>Luxo</option>
                                        <option value="Standard" {{ old('category') == 'Standard' ? 'selected' : '' }}>Padrão / Intermediário</option>
                                        <option value="Economy" {{ old('category') == 'Economy' ? 'selected' : '' }}>Econômico</option>
                                    </select>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Número de Chassi</label>
                                    <input type="text" name="chassi" class="form-control" value="{{ old('chassi') }}">
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Placa ou Matrícula</label>
                                    <input type="text" name="license_plate" class="form-control" value="{{ old('license_plate') }}">
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Data de Fabricação</label>
                                    <input type="date" name="manufacture_date" class="form-control" value="{{ old('manufacture_date') }}">
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Data de Registro</label>
                                    <input type="date" name="registration_date" class="form-control" value="{{ old('registration_date') }}">
                                </div>

                                <!-- Campo combinado para Seguro -->
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Seguro</label>
                                    <div class="input-group">
                                        <input type="text" name="car_insurance" class="form-control" value="{{ old('car_insurance') }}" placeholder="Número do Seguro">
                                        <input type="file" name="car_insurance_upload" class="form-control" accept="application/pdf" style="border-left: 1px solid #ced4da;">
                                    </div>
                                </div>

                                <!-- Campo combinado para Documento do Carro -->
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Documento do Carro</label>
                                    <div class="input-group">
                                        <input type="text" name="car_document" class="form-control" value="{{ old('car_document') }}" placeholder="Número do Documento">
                                        <input type="file" name="car_document_upload" class="form-control" accept="application/pdf" style="border-left: 1px solid #ced4da;">
                                    </div>
                                </div>

                                <!-- Campo de Foto mantido separado -->
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Foto do Carro</label>
                                    <input type="file" name="image" class="form-control" accept="image/*">
                                </div>

                                <!-- Campo combinado para Inspeção -->
                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Inspeção</label>
                                    <div class="input-group">
                                        <input type="date" name="inspection_date" class="form-control" value="{{ old('inspection_date') }}" placeholder="Data da Inspeção">
                                        <input type="file" name="inspection_document_upload" class="form-control" accept="application/pdf" style="border-left: 1px solid #ced4da;">
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Observações</label>
                                    <textarea name="observations" class="form-control" rows="3">{{ old('observations') }}</textarea>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function() {
        $('select[name="brand_id"]').on('change', function() {
            var brandId = $(this).val();
            var modelSelect = $('select[name="models_id"]');

            modelSelect.html('<option value="">Carregando...</option>');

            if (brandId) {
                $.ajax({
                    url: '/get-models-by-brand/' + brandId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        modelSelect.empty();
                        modelSelect.append('<option value="">Selecione o Modelo</option>');
                        $.each(data, function(key, value) {
                            modelSelect.append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    },
                    error: function() {
                        modelSelect.html('<option value="">Erro ao carregar modelos</option>');
                    }
                });
            } else {
                modelSelect.html('<option value="">Selecione a Marca primeiro</option>');
            }
        });
    });
</script>
@endpush
