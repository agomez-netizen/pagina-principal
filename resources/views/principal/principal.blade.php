@extends('layouts.app')

@section('title', 'Principal')

@section('content')

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-white sticky-top border-bottom">
  <div class="container py-2">
    <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="#">
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

  <!-- HERO -->
  <div class="card hero mb-4 card-hover">
    <div class="card-body p-4 p-md-5">
      <div class="row align-items-center g-4">
        <div class="col-lg-8">
          <div class="d-flex align-items-center gap-2 mb-2">
           <span class="icon-pill">
                <img src="{{ asset('img/logo_apos.png') }}" alt="Logo" width="40">
            </span>
            <div>
              <div class="text-muted small">Panel central</div>
          <h2 class="fw-bold mb-0 section-title">Asociación Amigos Pro Obras Sociales</h2>
            </div>
          </div>

          <p class="text-muted mb-4 fs-5">
            Guatemaltecos con alta vocación de servicio, filantropía y compromiso social con Guatemala
          </p>

          <div class="d-flex flex-wrap gap-2 mb-4">
            <span class="badge rounded-pill chip text-dark px-3 py-2"><i class="bi bi-graph-up me-1"></i>Servicio</span>
            <span class="badge rounded-pill chip text-dark px-3 py-2"><i class="bi bi-rocket-takeoff me-1"></i>Compromiso</span>
            <span class="badge rounded-pill chip text-dark px-3 py-2"><i class="bi bi-lightbulb me-1"></i>Innovación</span>
            <span class="badge rounded-pill chip text-dark px-3 py-2"><i class="bi bi-award me-1"></i>Liderazgo</span>
            <span class="badge rounded-pill chip text-dark px-3 py-2"><i class="bi bi-people me-1"></i>Sostenibilidad</span>
          </div>

          <div class="d-flex flex-wrap gap-2">
            <a href="#sitios" class="btn btn-primary">
              <i class="bi bi-link-45deg me-1"></i> Ver sitios principales
            </a>
            <a href="#comunicaciones" class="btn btn-success">
              <i class="bi bi-broadcast me-1"></i> Ir a comunicaciones
            </a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="p-4 bg-white rounded-4 border">
            <div class="d-flex justify-content-between align-items-start">
              <div>
                <div class="text-muted small">Tip rápido</div>
                <div class="fw-semibold">Checklist de digitalización</div>
              </div>
              <span class="badge text-bg-primary">Hoy</span>
            </div>

            <div class="d-grid gap-3 mt-3">
              <a class="btn btn-primary d-flex align-items-center justify-content-center"
                 href="https://amigos.aapos.site/login" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-person-fill me-2"></i>
                <span>OFICINA AAPOS</span>
              </a>

              <a class="btn btn-primary d-flex align-items-center justify-content-center"
                 href="https://aapos.site/login" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-person-circle me-2"></i>
                <span>DONACIONES</span>
              </a>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>


<!-- SITIOS PRINCIPALES -->
  <div id="sitios" class="d-flex justify-content-between align-items-end mb-2">
    <div>
      <h3 class="fw-bold mb-0 section-title">Sitios principales</h3>
      <div class="text-muted">Acceso directo a los sitios oficiales</div>
    </div>
    <span class="badge text-bg-success px-3 py-2"><i class="bi bi-check2-circle me-1"></i>Oficial</span>
  </div>

  <div class="row g-3 mb-4">
    <div class="col-md-6">
      <div class="card h-100 card-hover">
        <div class="card-body p-4">
          <div class="d-flex gap-3">
           <span class="">
                <img src="{{ asset('img/logo_aapos.png') }}" alt="Logo" width="100">
            </span>
            <div class="flex-grow-1">
              <h5 class="fw-bold mb-1">Asociación Amigos Pro Obras Sociales</h5>
              <div class="text-muted small">Sitio oficial</div>

              <div class="mt-3 d-grid gap-2">
                <a class="btn btn-outline-primary"
                   href="https://www.amigosproobras.org/"
                   target="_blank" rel="noopener">
                  <i class="bi bi-box-arrow-up-right me-1"></i> Abrir sitio
                </a>
                <div class="text-muted small">
                  <span class="kbd-like"></span>
                </div>
              </div>
            </div>
            <span class="badge text-bg-success align-self-start">Web</span>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card h-100 card-hover">
        <div class="card-body p-4">
          <div class="d-flex gap-3">
            <span class="">
                <img src="{{ asset('img/logo_obras.png') }}" alt="Logo" width="60">
            </span>
            <div class="flex-grow-1">
              <h5 class="fw-bold mb-1">Obras Sociales del Santo Hermano Pedro</h5>
              <div class="text-muted small">Sitio oficial</div>

              <div class="mt-3 d-grid gap-2">
                <a class="btn btn-outline-primary"
                   href="https://hermanopedrogt.org/"
                   target="_blank" rel="noopener">
                  <i class="bi bi-box-arrow-up-right me-1"></i> Abrir sitio
                </a>
                <div class="text-muted small">
                </div>
              </div>
            </div>
            <span class="badge text-bg-success align-self-start">Web</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- COMUNICACIONES -->
  <div id="comunicaciones" class="card mb-4 card-hover">
    <div class="card-body p-4">
      <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
        <div>
          <h3 class="fw-bold mb-0 section-title">Comunicaciones</h3>
          <div class="text-muted">Acceso rápido a contenido y redes sociales</div>
        </div>
        <span class="badge text-bg-primary px-3 py-2"><i class="bi bi-diagram-3 me-1"></i>Centralizado</span>
      </div>

      <div class="row g-3">

        <!-- Flickr -->
        <div class="col-lg-5">
          <div class="p-4 rounded-4 bg-white border h-100">
            <div class="d-flex justify-content-between align-items-start mb-2">
              <div class="d-flex align-items-center gap-2">
                <span class="icon-pill dark"><i class="bi bi-camera2"></i></span>
                <div>
                  <div class="fw-semibold">Flickr</div>
                  <div class="text-muted small">Repositorios de imágenes por año</div>
                </div>
              </div>
              <span class="badge text-bg-dark">Álbumes</span>
            </div>

            <div class="d-grid gap-2 mt-3">
              <a class="btn btn-outline-dark"
                 href="https://www.flickr.com/photos/200997072@N06/albums/"
                 target="_blank" rel="noopener">
                <i class="bi bi-images me-1"></i> 2024 (Álbumes)
              </a>

              <a class="btn btn-outline-dark"
                 href="https://www.flickr.com/photos/201481385@N08/albums/"
                 target="_blank" rel="noopener">
                <i class="bi bi-images me-1"></i> 2025 (Álbumes)
              </a>
            </div>

            <div class="text-muted small mt-3">
            </div>
          </div>
        </div>

        <!-- Redes -->
        <div class="col-lg-7">
          <div class="p-4 rounded-4 bg-white border h-100">
            <div class="d-flex justify-content-between align-items-start mb-2">
              <div class="d-flex align-items-center gap-2">
                <span class="icon-pill info"><i class="bi bi-broadcast"></i></span>
                <div>
                  <div class="fw-semibold">Redes sociales</div>
                  <div class="text-muted small">Canales de comunicación</div>
                </div>
              </div>
              <span class="badge text-bg-info">Social</span>
            </div>

            <div class="row g-2 mt-3">
              <div class="col-sm-6">
                <a class="btn btn-outline-primary w-100"
                   href="https://www.facebook.com/amigosproobras"
                   target="_blank" rel="noopener">
                  <i class="bi bi-facebook me-1"></i> Facebook
                </a>
              </div>

              <div class="col-sm-6">
                <a class="btn btn-outline-danger w-100"
                   href="https://www.instagram.com/amigosproobras"
                   target="_blank" rel="noopener">
                  <i class="bi bi-instagram me-1"></i> Instagram
                </a>
              </div>

              <div class="col-sm-6">
                <a class="btn btn-outline-dark w-100"
                   href="https://www.tiktok.com/@amigosproobras"
                   target="_blank" rel="noopener">
                  <i class="bi bi-tiktok me-1"></i> TikTok
                </a>
              </div>

              <div class="col-sm-6">
                <a class="btn btn-outline-danger w-100"
                   href="https://www.youtube.com/@amigosproobras"
                   target="_blank" rel="noopener">
                  <i class="bi bi-youtube me-1"></i> YouTube
                </a>
              </div>
            </div>

            <div class="text-muted small mt-3">
            </div>
          </div>
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
        <span class="badge text-bg-success px-3 py-2"><i class="bi bi-map me-1"></i>Roadmap</span>
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
        <a class="btn btn-soft btn-sm" href="#top">
          <i class="bi bi-arrow-up me-1"></i> Volver arriba
        </a>
      </div>
    </div>
  </div>

  <footer class="py-4 text-center text-muted small">
    © 2026 AAPOS OFICINA <br>
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
