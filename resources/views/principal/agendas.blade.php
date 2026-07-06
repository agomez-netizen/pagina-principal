@extends('layouts.app')

@section('title', 'Agendas')

@section('content')

<div class="container py-4">

    <h2 class="mb-4">Agendas e Informes AAPOS</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('agendas.index') }}" method="GET">

        <div class="row g-3 align-items-end">

            <div class="col-lg-3 col-md-6">
                <label class="form-label">Desde</label>
                <input
                    type="date"
                    class="form-control"
                    name="desde"
                    value="{{ request('desde') }}">
            </div>

            <div class="col-lg-3 col-md-6">
                <label class="form-label">Hasta</label>
                <input
                    type="date"
                    class="form-control"
                    name="hasta"
                    value="{{ request('hasta') }}">
            </div>

            <div class="col-lg-3 col-md-6">
                <label class="form-label">Tipo</label>

                <select class="form-select" name="id_tipo_folleto">
                    <option value="">Todos</option>

                    @foreach($tipos as $tipo)
                        <option
                            value="{{ $tipo->id }}"
                            {{ request('id_tipo_folleto') == $tipo->id ? 'selected' : '' }}>
                            {{ $tipo->nombre }}
                        </option>
                    @endforeach

                </select>
            </div>

            <div class="col-lg-1 col-md-3">
                <button class="btn btn-primary w-100">
                    Filtrar
                </button>
            </div>

            <div class="col-lg-2 col-md-3">
                <a href="{{ route('agendas.index') }}"
                   class="btn btn-outline-secondary w-100">
                    Limpiar
                </a>
            </div>

        </div>

    </form>

    <div class="card shadow-sm mt-5">

        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">

            <span>
                Listado de Agendas
            </span>

            <span>
                Total:
                <strong>{{ $folletos->total() }}</strong>
            </span>

        </div>

        <div class="card-body p-0">

            @if($folletos->count())

                <div class="table-responsive">

                    <table class="table table-hover table-striped align-middle mb-0">

                        <thead class="table-light">

                            <tr>
                                <th width="60">#</th>
                                <th>Nombre</th>
                                <th width="140">Fecha</th>
                                <th width="170">Tipo</th>
                                <th width="120">Documento</th>
                                <th width="110">Drive</th>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach($folletos as $folleto)

                                <tr>

                                    <td>
                                        {{ $folletos->firstItem() + $loop->index }}
                                    </td>

                                    <td>
                                        <strong>{{ $folleto->nombre }}</strong>
                                    </td>

                                    <td>
                                        {{ \Carbon\Carbon::parse($folleto->fecha)->format('d/m/Y') }}
                                    </td>

                                    <td>
                                        {{ $folleto->tipo_folleto }}
                                    </td>

                                    <td>

                                        @if($folleto->documento)

                                            <span class="badge bg-success">
                                                Sí
                                            </span>

                                        @else

                                            <span class="badge bg-secondary">
                                                No
                                            </span>

                                        @endif

                                    </td>

                                    <td>

                                        @if($folleto->link_drive)

                                            <a
                                                href="{{ $folleto->link_drive }}"
                                                target="_blank"
                                                class="btn btn-sm btn-primary">

                                                Abrir

                                            </a>

                                        @endif

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

                <div class="card-footer bg-white">

                    <div class="d-flex justify-content-between align-items-center flex-wrap">

                        <small class="text-muted">
                            Mostrando
                            {{ $folletos->firstItem() }}
                            -
                            {{ $folletos->lastItem() }}
                            de
                            {{ $folletos->total() }}
                            registros
                        </small>

                        {{ $folletos->links() }}

                    </div>

                </div>

            @else

                <div class="text-center py-5">

                    <h5 class="text-muted">
                        No existen registros para los filtros seleccionados.
                    </h5>

                </div>

            @endif

        </div>

    </div>

</div>

@endsection
