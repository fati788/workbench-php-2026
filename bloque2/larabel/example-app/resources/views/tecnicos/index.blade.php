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
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#nuevaTecnicoModal">
        Nueva
    </button>


    <table class="table table-striped table-bordered">
        <thead>

        <th scope="col">Nombre</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Telefono</th>
        <th scope="col">Email</th>
        <th scope="col">Estado</th>
        <th scope="col">Acciones</th>
        </thead>

        <tbody>
        @foreach($tecnicos as $tecnico)
            <tr>

                <td>{{$tecnico->nombre}}</td>
                <td>{{$tecnico->apellidos}}</td>
                <td>{{$tecnico->telefono}}</td>
                <td>{{$tecnico->email}}</td>
                <td>
                @if($tecnico->estado == 'libre')
                    <span class="badge bg-success">
                        {{$tecnico->estado}}
                    </span>
                @else
                    <span class="badge bg-danger">
                        {{$tecnico->estado}}
                    </span>
                @endif
                </td>
                <td>
                    <form action="{{ route('tecnicos.destroy' ,  $tecnico->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger mb-3">Eliminar</button>
                    </form>
                    <a href="{{route('tecnicos.show', $tecnico->id )}}" class="btn btn-outline-success">ver</a>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>

</div>
<!-- Modal -->
<div class="modal fade" id="nuevaTecnicoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva Incidencia</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('tecnicos.store') }}" method="POST" id="nuevaIncidenciaForm">
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="102.22">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" placeholder="102.22">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Telefono</label>
                        <input type="text" class="form-control" name="telefono" placeholder="mojacar">
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="102.22">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary m-b-3" data-bs-dismiss="modal">Crerar</button>
                <button type="submit" class="btn btn-success" form="nuevaIncidenciaForm">Guardar</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>
