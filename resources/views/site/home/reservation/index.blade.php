@extends('site.home.reservation.layout.main')
@section('content-reservation')

    <!--<< Breadcrumb Section Start >>-->
    <div>
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/user/img/bg-header-banner.jpg');">
            <div class="container">
                <div class="page-heading">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="index.html">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fas fa-chevron-right"></i>
                        </li>
                        <li>
                            Cars
                        </li>
                    </ul>
                    <h1 class="wow fadeInUp" data-wow-delay=".5s">list Style</h1>
                </div>
            </div>
        </div>

<div class="container mt-4">
    <h3>Carros encontrados</h3>

    @if($cars->isEmpty())
        <p>Nenhum carro disponível para os critérios informados.</p>
    @else
        <div class="row">
            @foreach($cars as $car)
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm">
                        <img src="{{ asset('uploads/car/car_images/' . $car->image) }}" class="card-img-top" alt="Carro">
                        <div class="card-body">
                            <h5 class="card-title">{{ $car->brand->name ?? '' }} {{ $car->models->name ?? '' }}</h5>
                            <p class="card-text">
                                Categoria: {{ $car->category }} <br>
                                Cor: {{ $car->color->name ?? '' }} <br>
                                Combustível: {{ $car->fuel->name ?? '' }}
                            </p>
                            <a href="#" class="btn btn-primary">Reservar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>


    </div>
    <!--<< Breadcrumb Section End >>-->
@endsection