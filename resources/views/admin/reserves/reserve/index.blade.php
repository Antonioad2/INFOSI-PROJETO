@extends('admin.reserves.reserve.layout.principal')
@section('title', 'Duralux || Reservas')
@section('content-reserve')

<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Reservas</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Reservas</li>
            </ul>
        </div>
        <div class="page-header-right ms-auto">
            <div class="page-header-right-items">
                <div class="d-flex d-md-none">
                    <a href="javascript:void(0)" class="page-header-right-close-toggle">
                        <i class="feather-arrow-left me-2"></i>
                        <span>Voltar</span>
                    </a>
                </div>
                <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                    <a href="{{ route('reserves.create') }}" class="btn btn-primary">
                        <i class="feather-plus me-2"></i>
                        <span>Nova Reserva</span>
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
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover" id="reserveList">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Cliente</th>
                                        <th>Carro</th>
                                        <th>Data Início</th>
                                        <th>Data Fim</th>
                                        <th>Valor</th>
                                        <th>Recursos</th>
                                        <th>Motorista</th>
                                        <th>Status</th>
                                        <th class="text-end">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($reserves as $reserve)
                                        <tr>
                                            <td>{{ $reserve->id }}</td>
                                            <td>{{ $reserve->client->name ?? 'N/A' }}</td>
                                              <td>
                                                 @if($reserve->image)
                                                    <a href="{{ asset('uploads/brand/brand_logo/' . $reserve->image) }}">
                                                        <img src="{{ asset('uploads/brand/brand_logo/' . $reserve->image) }}" alt="Brand Logo" width="50" height="50" class="img-fluid">
                                                    </a>                                                                                                                  
                                                    @else
                                                        <span>Sem imagem do carro</span>
                                                 @endif
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($reserve->start_date)->format('d/m/Y') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($reserve->end_date)->format('d/m/Y') }}</td>
                                            <td>{{ number_format($reserve->total_amount, 2, ',', '.') }} KZ</td>
                                            <td>
                                                @php
                                                    $labels = [
                                                        'baby_seat' => 'Cadeira de Bebê',
                                                        'protected_theft' => 'Proteção contra Roubo',
                                                        'protected_accidents' => 'Proteção contra Acidentes',
                                                    ];

                                                    // Decodifica o JSON para array
                                                    $resources = is_string($reserve->resources) ? json_decode($reserve->resources, true) : $reserve->resources;
                                                @endphp

                                                @if(!empty($resources))
                                                    {{ collect($resources)->map(fn($r) => $labels[$r] ?? $r)->implode(', ') }}
                                                @else
                                                    Nenhum
                                                @endif
                                            </td>
                                            <td>{{ $reserve->driver->full_name ?? 'N/A' }}</td>
                                            <td>
                                                @if($reserve->status == 'in_progress')
                                                    <span class="badge bg-warning">Em Andamento</span>
                                                @elseif($reserve->status == 'completed')
                                                    <span class="badge bg-success">Concluída</span>
                                                @else
                                                    <span class="badge bg-danger">Cancelada</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="hstack gap-2 justify-content-end">
                                                    <a href="{{ route('reserves.show', $reserve->id) }}" class="avatar-text avatar-md">
                                                        <i class="feather feather-eye"></i>
                                                    </a>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                            <i class="feather feather-more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item" href="{{ route('reserves.edit', $reserve->id) }}">
                                                                    <i class="feather feather-edit-3 me-3"></i>
                                                                    <span>Editar</span>
                                                                </a>
                                                            </li>
                                                            <li class="dropdown-divider"></li>
                                                            <li>
                                                                <form action="{{ route('reserves.destroy', $reserve->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta reserva?');">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="dropdown-item">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Excluir</span>
                                                                    </button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="9" class="text-center">Nenhuma reserva cadastrada.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>

@section('scripts')
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#reserveList').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json'
                },
                pageLength: 10,
                responsive: true,
                columnDefs: [
                    { orderable: false, targets: [8] }, // Desativa ordenação na coluna de ações
                    { width: '50px', targets: [0] },   // Define largura fixa para ID
                    { width: '120px', targets: [5, 6] } // Define largura para Valor Total e Recurso
                ]
            });
        });
    </script>
@endsection
@endsection