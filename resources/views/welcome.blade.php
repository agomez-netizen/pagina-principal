<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel - Oficina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">OFICINA AMIGOS PRO OBRAS</a>
  </div>
</nav>

<div class="container my-4">

  <div class="card shadow-sm mb-4">
    <div class="card-body">
      <h4 class="mb-0">Panel central</h4>
      <p class="text-muted mb-0">Tu dashboard conectado a base de datos ✅</p>
    </div>
  </div>

  <h5 class="fw-bold mb-2">Proyectos</h5>
  <p class="text-muted">Iniciativas en marcha</p>

  <div class="row g-3">
    @forelse($proyectos as $p)
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-start">
              <h6 class="fw-bold mb-1">{{ $p->nombre }}</h6>
              <span class="badge bg-success">Activo</span>
            </div>

            <p class="text-muted mb-0">
              {{ $p->descripcion ?? 'Sin descripción.' }}
            </p>
          </div>
        </div>
      </div>
    @empty
      <div class="col-12">
        <div class="alert alert-warning mb-0">
          No hay proyectos activos.
        </div>
      </div>
    @endforelse
  </div>

</div>

</body>
</html>
