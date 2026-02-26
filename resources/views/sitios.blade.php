@extends('layouts.app')
@section('title','Sitios')

@section('content')
<div class="container py-4 py-md-5">
<!-- SITIOS PRINCIPALES -->

<div id="sitios" class="d-flex justify-content-between align-items-end mb-2 ">
    <div>
      <h3 class="fw-bold mb-0 section-title">Sitios principales</h3>
      <div class="text-muted">Acceso directo a los sitios oficiales</div>
    </div>
  </div>

  <div class="row g-3 mb-4">
    <div class="col-md-6">
      <div class="card h-100 card-hover">
        <div class="card-body p-4">
          <div class="d-flex gap-3">
           <span class="">
                <img src="{{ asset('img/ofis.png') }}" alt="Logo" width="100">
            </span>
            <div class="flex-grow-1">
              <h5 class="fw-bold mb-1">Gestiones Oficina</h5>
              <div class="text-muted small">Sitio oficial</div>

              <div class="mt-3 d-grid gap-2">
                <a class="btn btn-outline-primary"
                   href="https://amigos.aapos.site/"
                   target="_blank" rel="noopener">
                  <i class="bi bi-box-arrow-up-right me-1"></i> Abrir sitio
                </a>
                <div class="text-muted small">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card h-100 card-hover">
        <div class="card-body p-4">
          <div class="d-flex gap-3">
            <span class="">
                <img src="{{ asset('img/donaciones.png') }}" alt="Logo" width="100">
            </span>
            <div class="flex-grow-1">
              <h5 class="fw-bold mb-1">Donaciones</h5>
              <div class="text-muted small">Sitio oficial</div>

              <div class="mt-3 d-grid gap-2">
                <a class="btn btn-outline-primary"
                   href="https://aapos.site/"
                   target="_blank" rel="noopener">
                  <i class="bi bi-box-arrow-up-right me-1"></i> Abrir sitio
                </a>
                <div class="text-muted small">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="container my-5">
  <div class="card shadow-lg rounded-4 p-4">
    <h2 class="mb-4 text-center">Directorio Telefónico Oficinas</h2>

    <div class="accordion directorio-accordion" id="directorioAccordion">

      <!-- PBX y Oficinas -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingPbx">
          <button class="accordion-button collapsed" type="button"
            data-bs-toggle="collapse" data-bs-target="#pbx"
            aria-expanded="false" aria-controls="pbx">
            PBX y Oficinas
          </button>
        </h2>

        <div id="pbx" class="accordion-collapse collapse"
          aria-labelledby="headingPbx" data-bs-parent="#directorioAccordion">
          <div class="accordion-body">
            <table class="table table-bordered mb-0">
              <tbody>
                <tr><td>PBX Oficina Rambla Zona 14</td><td>2223-8300</td></tr>
                <tr><td>Oficina Rambla Zona 14</td><td>2508-8423</td></tr>
                <tr><td>Oficina Antigua</td><td>7832-5950</td></tr>
                <tr><td>Oficina Antigua</td><td>7832-9391</td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Extensiones por Área -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingExt">
          <button class="accordion-button collapsed" type="button"
            data-bs-toggle="collapse" data-bs-target="#extensiones"
            aria-expanded="false" aria-controls="extensiones">
            Extensiones por Área AAPOS
          </button>
        </h2>

        <div id="extensiones" class="accordion-collapse collapse"
          aria-labelledby="headingExt" data-bs-parent="#directorioAccordion">
          <div class="accordion-body">
            <table class="table table-bordered mb-0">
              <thead>
                <tr><th>Área</th><th>2223-8300 + Extensión</th></tr>
              </thead>
              <tbody>
                <tr><td>Rifa</td><td>202</td></tr>
                <tr><td>Comunicaciones y Mercadeo</td><td>203</td></tr>
                <tr><td>Contabilidad y Finanzas</td><td>204</td></tr>
                <tr><td>Dirección Ejecutiva</td><td>205</td></tr>
                <tr><td>Ventas</td><td>206</td></tr>
                <tr><td>Recursos Humanos</td><td>207</td></tr>
                <tr><td>Antigua Office</td><td>180</td></tr>
                <tr><td>Tienda Munag</td><td>208</td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Instituciones -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingInst">
          <button class="accordion-button collapsed" type="button"
            data-bs-toggle="collapse" data-bs-target="#instituciones"
            aria-expanded="false" aria-controls="instituciones">
            Instituciones
          </button>
        </h2>

        <div id="instituciones" class="accordion-collapse collapse"
          aria-labelledby="headingInst" data-bs-parent="#directorioAccordion">
          <div class="accordion-body">
            <table class="table table-bordered mb-4">
              <thead>
                <tr><th>Institución</th><th>Número de línea</th><th>Marcación interna</th></tr>
              </thead>
              <tbody>
                <tr><td>OSSHP</td><td>7931-2100</td><td>9 + número</td></tr>
                <tr><td>AAPOS</td><td>7832-5950</td><td>10 + número</td></tr>
                <tr><td>AAPOS</td><td>7832-9391</td><td>11 + número</td></tr>
              </tbody>
            </table>

            <h5 class="mb-3">Instituciones de OSSHP</h5>
            <table class="table table-bordered mb-0">
              <tbody>
                <tr><td>Guardería</td><td>7832-4375</td></tr>
                <tr><td>HVS</td><td>7795-7100</td></tr>
                <tr><td>Albergue</td><td>7832-3375</td></tr>
                <tr><td>Renacer</td><td>5517-0769</td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Instrucciones de Marcación -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingMarc">
          <button class="accordion-button collapsed" type="button"
            data-bs-toggle="collapse" data-bs-target="#marcaciones"
            aria-expanded="false" aria-controls="marcaciones">
            Instrucciones de Marcación (Planta IP)
          </button>
        </h2>

        <div id="marcaciones" class="accordion-collapse collapse"
          aria-labelledby="headingMarc" data-bs-parent="#directorioAccordion">
          <div class="accordion-body">
            <div class="row g-3">
              <div class="col-md-6">
                <h5>Llamadas Nacionales</h5>
                <p class="mb-1"><strong>Marcación:</strong> 9 + número</p>
                <p class="mb-0"><strong>Ejemplo:</strong> 9 + 41433569</p>
              </div>

              <div class="col-md-6">
                <h5>Llamadas Internacionales</h5>
                <p class="mb-1"><strong>Marcación:</strong> 9 + 00 + código de país + número</p>
                <p class="mb-0"><strong>Ejemplo:</strong> 9 + 00 + 507 + 5578698</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /accordion -->
  </div><!-- /card -->
</div><!-- /container -->


</div>
@endsection
