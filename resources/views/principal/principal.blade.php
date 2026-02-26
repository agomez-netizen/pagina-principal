@extends('layouts.app')

@section('title', 'Principal')

@section('content')

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-white sticky-top border-bottom">
  <div class="container py-2">
    <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="https://aapos.site/">
        <img src="{{ asset('img/logo_apos.png') }}" alt="Logo" height="100">
        OFICINA AMIGOS PRO OBRAS
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNav" aria-controls="topNav" aria-expanded="false" aria-label="Abrir navegación">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="topNav">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
        <li class="nav-item"><a class="nav-link" href="#sitios">Sitios</a></li>
        <li class="nav-item"><a class="nav-link" href="#comunicaciones">Comunicaciones</a></li>
        <li class="nav-item"><a class="nav-link" href="#proyectos">Proyectos</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container py-4 py-md-5">

 </div>





<div class="container-fluid my-5 px-0">

    <div class="card shadow-lg border-0 w-100 rounded-4">

        <div class="card-body text-center py-5">

            <h2 class="fw-bold text-primary mb-4">
                Obras Sociales del Santo Hermano Pedro
            </h2>

            <p class="text-muted mb-4">
                Accede a los principales servicios institucionales <br> (Solo personal con correo institucional AAPOS).
            </p>

            <div class="d-flex justify-content-center gap-4 flex-wrap">

                <!-- Botón Directorio -->
                <a href="https://docs.google.com/spreadsheets/d/1UXj0d5d6Iwfc0zspmdXKYqJBO3V70lvF/edit?usp=sharing&ouid=108161976230086813560&rtpof=true&sd=true"
                   target="_blank"
                   class="btn btn-primary btn-lg px-5 py-3 rounded-pill shadow">
                    📞 Directorio OSSHP
                </a>

                <!-- Botón Jornadas Médicas -->
                <a href="https://docs.google.com/spreadsheets/d/14x0P0WL8oErPlYsY-VM0VmVTZqGrNSF9/edit?rtpof=true&sd=true"
                   target="_blank"
                   class="btn btn-outline-primary btn-lg px-5 py-3 rounded-pill shadow">
                    🏥 Jornadas Médicas OSSHP
                </a>

            </div>

        </div>

    </div>

</div>





  <!-- PROYECTOS (AQUÍ LO CONECTAMOS A TU BD) -->
  <div id="proyectos" class="card card-hover">
    <div class="card-body p-4">
      <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-2">
        <div>
          <h3 class="fw-bold mb-0 section-title">Proyectos</h3>
          <div class="text-muted">Iniciativas en marcha</div>
        </div>
        <!--<span class="badge text-bg-success px-3 py-2"><i class="bi bi-map me-1"></i>Roadmap</span>-->
      </div>

      <div class="divider my-4"></div>

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
               <div class="text-muted small mt-2">
                <a href="{{ $p->direccion }}"
                class="btn btn-success btn-sm rounded-pill px-3"
                target="_blank">
                📄 Descargar
                </a>
              </div>
            </div>
          </div>
        @empty
          <div class="col-12">
            <div class="alert alert-warning mb-0">No hay proyectos activos.</div>
          </div>
        @endforelse
      </div>

      <div class="divider my-4"></div>

      <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">
        <div class="text-muted small">
          Asociación Amigos Pro Obras ©  2026
        </div>

      </div>
    </div>
  </div>

  <footer class="py-4 text-center text-muted small">
    © 2026 AAPOS OFICINA1 <br>
  </footer>
</div>
@endsection

@push('scripts')
<script>
  // OJO: esto va al final (aquí sí existe el DOM)
  const btnTop = document.querySelector('a[href="#top"]');
  if (btnTop) {
    btnTop.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }
</script>
@endpush
