<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'Principal')</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>

  <!-- CSS (primero el compilado si lo usas, luego tu styles) -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

  @stack('styles')
</head>

<body id="top">

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-white fixed-top border-bottom">
    <div class="container py-2">
      <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="{{ route('home') }}">
        <img src="{{ asset('img/logo_apos.png') }}" alt="Logo" height="60">
        OFICINA AMIGOS PRO OBRAS
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="topNav">
        <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('sitios') ? 'active fw-bold' : '' }}"
               href="{{ route('sitios') }}">Sitios</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('comunicaciones') ? 'active fw-bold' : '' }}"
               href="{{ route('comunicaciones') }}">Comunicaciones</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('proyectos') ? 'active fw-bold' : '' }}"
               href="{{ route('proyectos') }}">Proyectos</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('folletos') ? 'active fw-bold' : '' }}"
               href="{{ route('folletos') }}">Folletos</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Para que el contenido no quede debajo del menú fijo -->
  <main class="pt-5 mt-4">
    @yield('content')
  </main>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Scripts por vista -->
  @stack('scripts')
</body>
</html>
