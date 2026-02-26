@extends('layouts.app')
@section('title','Folletos')

@section('content')
<div class="container py-4 py-md-5">

  <h2 class="fw-bold mb-1">Folletos</h2>
  <div class="text-muted mb-4">Folletos AAPOS</div>

  <!-- NAV TABS -->
  <ul class="nav nav-tabs mb-4" id="folletosTabs" role="tablist">

    <li class="nav-item" role="presentation">
      <button class="nav-link active"
              id="tab-2025"
              data-bs-toggle="tab"
              data-bs-target="#panel-2025"
              type="button"
              role="tab"
              aria-controls="panel-2025"
              aria-selected="true">
        Folletos 2025
      </button>
    </li>

    <li class="nav-item" role="presentation">
      <button class="nav-link"
              id="tab-2024"
              data-bs-toggle="tab"
              data-bs-target="#panel-2024"
              type="button"
              role="tab"
              aria-controls="panel-2024"
              aria-selected="false">
        Folletos 2024
      </button>
    </li>

    <li class="nav-item" role="presentation">
      <button class="nav-link"
              id="tab-2023"
              data-bs-toggle="tab"
              data-bs-target="#panel-2023"
              type="button"
              role="tab"
              aria-controls="panel-2023"
              aria-selected="false">
        Folletos 2023
      </button>
    </li>

  </ul>

  <!-- TAB CONTENT -->
  <div class="tab-content" id="folletosTabsContent">

    <!-- TAB 2025 -->
<div class="tab-pane fade show active"
     id="panel-2025"
     role="tabpanel"
     aria-labelledby="tab-2025"
     tabindex="0">

  <div class="row g-4">

    <!-- Card 1 -->
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100 shadow-sm border-0 rounded-4">

        <img src="{{ asset('img/impacto2025.png') }}"
             class="card-img-top p-4"
             alt="Folleto 2025"
             style="height: 240px; object-fit: contain;">

        <div class="card-body d-flex flex-column">
          <h6 class="fw-bold">Folleto AAPOS</h6>
          <p class="small text-muted flex-grow-1"></p>
          <a href="https://drive.google.com/file/d/1UAcRMhArAvMd_1vKfZrX2pZqvdjwsiwP/view?usp=sharing"
             class="btn btn-primary rounded-pill btn-sm"
             target="_blank">
            Ver folleto
          </a>
        </div>

      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100 shadow-sm border-0 rounded-4">

        <img src="{{ asset('img/informesemestral.png') }}"
             class="card-img-top p-4"
             alt="Informe Semestral"
             style="height: 240px; object-fit: contain;">

        <div class="card-body d-flex flex-column">
          <h6 class="fw-bold">Informe Semestral</h6>
          <p class="small text-muted flex-grow-1"></p>
          <a href="https://drive.google.com/file/d/1zHV5ZMO-s3GCYI1sODcictrp0bSEFjfv/view?usp=sharing"
             class="btn btn-primary rounded-pill btn-sm"
             target="_blank">
            Ver folleto
          </a>
        </div>

      </div>
    </div>

  </div>

</div>

    <!-- TAB 2024 -->
    <div class="tab-pane fade"
        id="panel-2024"
        role="tabpanel"
        aria-labelledby="tab-2024"
        tabindex="0">

    <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm border-0 rounded-4">
            <img src="{{ asset('img/filantropia.png') }}"
                class="card-img-top p-4"
                alt="Folleto 2024"
                style="height: 240px; object-fit: contain;">
            <div class="card-body d-flex flex-column">
            <h6 class="fw-bold">Folleto Filantropia </h6>
            <p class="small text-muted flex-grow-1"></p>
            <a href="https://drive.google.com/file/d/1Y3IfvaAr8OE9Kc88jjtAceikWVV2gBGe/view?usp=sharing" class="btn btn-primary rounded-pill btn-sm">Ver folleto</a>
            </div>
        </div>
        </div>

        <!-- Card 2 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm border-0 rounded-4">
            <img src="{{ asset('img/folleto2024.png') }}"
                class="card-img-top p-4"
                alt="Folleto 2024"
                style="height: 240px; object-fit: contain;">
            <div class="card-body d-flex flex-column">
            <h6 class="fw-bold">Folleto AAPOS</h6>
            <p class="small text-muted flex-grow-1"></p>
            <a href="https://drive.google.com/file/d/1DldzKWXRuOHB23WPGtbyUqWMfnHy83HE/view?usp=sharing" class="btn btn-primary rounded-pill btn-sm">Ver folleto</a>
            </div>
        </div>
        </div>

            <!-- Card 3 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100 shadow-sm border-0 rounded-4">
            <img src="{{ asset('img/impacto2024.png') }}"
                class="card-img-top p-4"
                alt="Folleto 2024"
                style="height: 240px; object-fit: contain;">
            <div class="card-body d-flex flex-column">
            <h6 class="fw-bold">Material de Impacto</h6>
            <p class="small text-muted flex-grow-1"></p>
            <a href="https://drive.google.com/file/d/1J2pLw1Rp-m8_TOEfQanQ83puxjjMJ2Y0/view?usp=sharing" class="btn btn-primary rounded-pill btn-sm">Ver folleto</a>
            </div>
        </div>
        </div>

    </div>

    </div>

    <!-- TAB 2023 -->
    <div class="tab-pane fade"
         id="panel-2023"
         role="tabpanel"
         aria-labelledby="tab-2023"
         tabindex="0">

      <div class="row g-4">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card h-100 shadow-sm border-0 rounded-4">

            <img src="{{ asset('img/bifoliar2023.png') }}"
                 class="card-img-top p-4"
                 alt="Folleto 2023"
                 style="height: 240px; object-fit: contain;">

            <div class="card-body d-flex flex-column">
              <h6 class="fw-bold">Bifoliar</h6>
              <p class="small text-muted flex-grow-1"></p>
              <a href="https://drive.google.com/file/d/1Mm7IwoFtpv_rOYgEV58q2IGg8iZfK-wa/view?usp=sharing" class="btn btn-primary rounded-pill btn-sm">Ver folleto</a>
            </div>

          </div>
        </div>
      </div>

    </div>

  </div>
</div>
@endsection
