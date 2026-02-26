@extends('layouts.app')
@section('title','Comunicaciones')

@section('content')
<div class="container py-4 py-md-5">

     <!-- COMUNICACIONES -->
  <div id="comunicaciones" class="card mb-4 card-hover">
    <div class="card-body p-4">
      <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
        <div>
          <h3 class="fw-bold mb-0 section-title">Comunicaciones</h3>
          <div class="text-muted">Acceso rápido a contenido y redes sociales</div>
        </div>
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
</div>
@endsection
