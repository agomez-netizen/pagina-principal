@extends('layouts.app')
@section('title','Proyectos')

@section('content')
<div class="container py-4 py-md-5">

  <h3 class="fw-bold mb-0 section-title">Proyectos</h3>
  <div class="text-muted mb-3">Descripciones Oficiales de Proyectos AAPOS</div>

  <div class="row g-3">
    @forelse($proyectos as $p)
      <div class="col-md-4">
        <div class="p-4 rounded-4 bg-white border h-100">
          <div class="d-flex justify-content-between align-items-start">
            <div class="fw-semibold">{{ $p->nombre }}</div>
            <span class="badge text-bg-primary">Proyecto</span>
          </div>

          <div class="text-muted small mt-2">
            {{ $p->descripcion ?? 'Sin descripción.' }}
          </div>

          @if($p->direccion)
          <div class="mt-3">
            <a href="{{ $p->direccion }}" class="btn btn-success btn-sm rounded-pill px-3" target="_blank">
              📄 Descargar
            </a>
          </div>
          @endif
        </div>
      </div>
    @empty
      <div class="col-12">
        <div class="alert alert-warning mb-0">No hay proyectos activos.</div>
      </div>
    @endforelse
  </div>

</div>
@endsection
