<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Incidencias</title>
    <!-- CSS do Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- JavaScript do Bootstrap 5 (com Popper incluído) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<div class="container">
    <h2>Tecnicos</h2>

    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#nuevaTecnicoModal">
        Nueva
    </button>

    <div class="card text-center">

            @if($tecnico->estado == 'libre')
                <div class="card-header">
                        {{$tecnico->estado}}
                </div>
            @else
                <div class="card-header text-danger">
                    {{$tecnico->estado}}
                </div>
            @endif


        <div class="card-body">
            <h5 class="card-title">{{$tecnico->nombre}}</h5>
            <h5 class="card-title">{{$tecnico->telefono}}</h5>
            <p class="card-text">{{$tecnico->email}}</p>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="nuevaTecnicoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Nueva Incidencia</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('tecnicos.store') }}" method="POST" id="nuevaIncidenciaForm">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Telefono</label>
                            <input type="text" class="form-control" name="telefono">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success" form="nuevaIncidenciaForm">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <a href="{{route('tecnicos.index')}}" class="btn btn-primary mt-3">Volver</a>
</div>

</body>
</html>
