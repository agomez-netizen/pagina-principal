@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h3>Exportar Informe Word</h3>

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

        <div class="row">

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

            <div class="col-md-2 d-flex align-items-end">
                <button class="btn btn-primary w-100">
                    Exportar Word
                </button>
            </div>

        </div>
    </form>

</div>

@endsection
