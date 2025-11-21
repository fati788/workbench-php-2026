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
     <h2>Incidencias</h2>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#nuevaIncidenciaModal">
          Nueva
      </button>
      <div class="card text-center">
          <div class="card-header">
             {{$incidencia->estado}}
          </div>
          <div class="card-body">
              <h5 class="card-title">{{$incidencia->ciudad}}</h5>
              <h5 class="card-title">{{$incidencia->direccion}}</h5>
              <p class="card-text">{{$incidencia->descripcion}}</p>
          </div>
          <div class="card-footer text-body-secondary">
             {{$incidencia->created_at}}
          </div>
      </div>
    <a href="{{route("incidencias.index")}}" class="btn btn-primary mt-3">Volver</a>

  </div>

  </body>
</html>
