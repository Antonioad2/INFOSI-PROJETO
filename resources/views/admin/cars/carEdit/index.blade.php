@extends('admin.cars.carEdit.layout.principal')

@section('title', 'Duralux || Editar Carro')
@section('content-carEdit')
<div class="nxl-content">
    <div class="page-header">
        <div class="page-header-title">
            <h5 class="m-b-10">Editar Carro</h5>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">Carro</li>
            <li class="breadcrumb-item active">Editar</li>
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

                        <form action="{{ route('cars.update', $car->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Marca</label>
                                    <select name="brand_id" class="form-control">
                                        <option value="">Selecione a Marca</option>
                                        @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}" {{ old('brand_id', $car->brand_id) == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Modelo</label>
                                    <select name="models_id" class="form-control">
                                        <option value="">Selecione o Modelo</option>
                                        @foreach($models as $model)
                                            <option value="{{ $model->id }}" {{ old('models_id', $car->models_id) == $model->id ? 'selected' : '' }}>{{ $model->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Cor</label>
                                    <select name="color_id" class="form-control">
                                        <option value="">Selecione a Cor</option>
                                        @foreach($colors as $color)
                                            <option value="{{ $color->id }}" {{ old('color_id', $car->color_id) == $color->id ? 'selected' : '' }}>{{ $color->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Combustível</label>
                                    <select name="fuel_id" class="form-control">
                                        <option value="">Selecione o Tipo</option>
                                        @foreach($fuels as $fuel)
                                            <option value="{{ $fuel->id }}" {{ old('fuel_id', $car->fuel_id) == $fuel->id ? 'selected' : '' }}>{{ $fuel->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Categoria</label>
                                    <select name="category" class="form-control">
                                        <option value="Luxury" {{ old('category', $car->category) == 'Luxury' ? 'selected' : '' }}>Luxo</option>
                                        <option value="Standard" {{ old('category', $car->category) == 'Standard' ? 'selected' : '' }}>Padrão</option>
                                        <option value="Economy" {{ old('category', $car->category) == 'Economy' ? 'selected' : '' }}>-Econômico</option>
                                    </select>
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Número de Chassi</label>
                                    <input type="text" name="chassi" class="form-control" value="{{ old('chassi', $car->chassi) }}">
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Placa ou Matrícula</label>
                                    <input type="text" name="license_plate" class="form-control" value="{{ old('license_plate', $car->license_plate) }}">
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Data de Fabricação</label>
                                    <input type="date" name="manufacture_date" class="form-control" value="{{ old('manufacture_date', $car->manufacture_date) }}">
                                </div>

                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Data de Registro</label>
                                    <input type="date" name="registration_date" class="form-control" value="{{ old('registration_date', $car->registration_date) }}">
                                </div>

                                <!-- Campo combinado para Seguro -->
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Seguro</label>
                                    <div class="input-group">
                                        <input type="text" name="car_insurance" class="form-control" value="{{ old('car_insurance', $car->car_insurance) }}" placeholder="Número do Seguro">
                                        <input type="file" name="car_insurance_image" class="form-control" accept="image/*,.pdf" style="border-left: 1px solid #ced4da;">
                                    </div>
                                    @if ($car->car_insurance_image)
                                        <small class="form-text text-muted">Arquivo atual: <a href="{{ Storage::url($car->car_insurance_image) }}" target="_blank">Ver arquivo</a></small>
                                    @endif
                                </div>

                                <!-- Campo combinado para Documento do Carro -->
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Documento do Carro</label>
                                    <div class="input-group">
                                        <input type="text" name="car_document" class="form-control" value="{{ old('car_document', $car->car_document) }}" placeholder="Número do Documento">
                                        <input type="file" name="car_document_image" class="form-control" accept="image/*,.pdf" style="border-left: 1px solid #ced4da;">
                                    </div>
                                    @if ($car->car_document_image)
                                        <small class="form-text text-muted">Arquivo atual: <a href="{{ Storage::url($car->car_document_image) }}" target="_blank">Ver arquivo</a></small>
                                    @endif
                                </div>

                                <!-- Campo de Foto mantido separado -->
                                <div class="col-lg-4 mb-3">
                                    <label class="form-label">Foto do Carro</label>
                                    @if($car->image)
                                        <div class="mb-2">
                                            @if (in_array(pathinfo($car->image, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png']))
                                                <img src="{{ Storage::url($car->image) }}" alt="Car Image" style="max-width: 100px; max-height: 100px;">
                                            @else
                                                <a href="{{ Storage::url($car->image) }}" target="_blank">Ver arquivo (PDF)</a>
                                            @endif
                                            <p class="text-muted">Arquivo atual</p>
                                        </div>
                                    @endif
                                    <input type="file" name="image" class="form-control" accept="image/*,.pdf">
                                    <small class="form-text text-muted">Deixe em branco para manter o arquivo atual.</small>
                                </div>

                                

                                <div class="col-lg-12 mb-3">
                                    <label class="form-label">Observações</label>
                                    <textarea name="observations" class="form-control" rows="3">{{ old('observations', $car->observations) }}</textarea>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary">Atualizar</button>
                                    <a href="{{ route('cars.index') }}" class="btn btn-secondary">Cancelar</a>
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
