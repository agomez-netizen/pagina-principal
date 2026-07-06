@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h3 class="mb-3">Exportar Informe Word</h3>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('informe.word.exportar') }}" method="POST">
        @csrf

        <div class="row align-items-end">

            <div class="col-md-4">
                <label>Proyecto</label>
                <select name="id_proyecto" class="form-control">
                    <option value="">Todos</option>

                    @foreach($proyectos as $proyecto)
                        <option value="{{ $proyecto->id_proyecto }}">
                            {{ $proyecto->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-3">
                <label>Desde</label>
                <input type="date" name="desde" class="form-control" required>
            </div>

            <div class="col-md-3">
                <label>Hasta</label>
                <input type="date" name="hasta" class="form-control" required>
            </div>

            <div class="col-md-2">
                <button class="btn btn-primary w-100">
                    Exportar Word
                </button>
            </div>

        </div>
    </form>

    <div class="mt-5 p-4 border border-danger border-3 rounded bg-light" style="min-height: 580px;">

        <div class="text-center mb-4">
            <h5 class="text-danger mb-1">Listado de folletos con filtros</h5>
            <small class="text-muted">Vista previa de los registros que se incluirán en el informe</small>
        </div>

        @if(isset($folletos) && $folletos->count() > 0)

            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle bg-white">
                    <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Fecha</th>
                            <th>Tipo</th>
                            <th>Drive</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($folletos as $index => $folleto)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $folleto->nombre }}</td>
                                <td>
                                    {{ $folleto->fecha ? \Carbon\Carbon::parse($folleto->fecha)->format('d/m/Y') : 'Sin fecha' }}
                                </td>
                                <td>{{ $folleto->tipo_folleto ?? 'Sin tipo' }}</td>
                                <td>
                                    @if(!empty($folleto->link_drive))
                                        <a href="{{ $folleto->link_drive }}" target="_blank" class="btn btn-sm btn-outline-primary">
                                            Ver archivo
                                        </a>
                                    @else
                                        <span class="text-muted">No disponible</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        @else

            <div class="d-flex justify-content-center align-items-center" style="min-height: 420px;">
                <div class="text-center text-muted">
                    <h5>No hay folletos para mostrar</h5>
                    <p class="mb-0">Selecciona filtros y genera la búsqueda.</p>
                </div>
            </div>

        @endif

    </div>

</div>

@endsection
