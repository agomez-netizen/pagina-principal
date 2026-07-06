<div class="col-12 col-sm-6 col-md-4 col-lg-3">
    <div class="card h-100 shadow-sm border-0 rounded-4">

        <img src="{{ asset($imagen) }}"
            class="card-img-top p-4"
            alt="{{ $titulo }}"
            style="height: 240px; object-fit: contain;">

        <div class="card-body d-flex flex-column">
            <h6 class="fw-bold">{{ $titulo }}</h6>

            @if(!empty($descripcion))
                <p class="small text-muted flex-grow-1">
                    {{ $descripcion }}
                </p>
            @else
                <p class="small text-muted flex-grow-1"></p>
            @endif

            <a href="{{ $link }}"
                target="_blank"
                class="btn btn-primary rounded-pill btn-sm mt-auto">
                {{ $boton ?? 'Ver' }}
            </a>
        </div>

    </div>
</div>
