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
              @if(isset($incidencia->imagen))
                  <img src="{{asset("storage/".$incidencia->imagen)}}">
              @endif
          </div>
          <div class="card-footer text-body-secondary">
             {{$incidencia->created_at}}
          </div>
      </div>
    <a href="{{route("incidencias.index")}}" class="btn btn-primary mt-3">Volver</a>

  </div>
  <!------------------   Modal  ------------------->
  <!-- Modal -->
  <div class="modal fade" id="nuevaIncidenciaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Nueva Incidencia</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form action="{{ route('incidencias.store') }}" method="POST" id="nuevaIncidenciaForm" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                          <label  class="form-label">Latitud</label>
                          <input type="text" class="form-control" name="latitud" placeholder="102.22">
                      </div>
                      <div class="mb-3">
                          <label  class="form-label">longitud</label>
                          <input type="text" class="form-control" name="longitud" placeholder="102.22">
                      </div>
                      <div class="mb-3">
                          <label  class="form-label">ciudad</label>
                          <input type="text" class="form-control" name="ciudad" placeholder="mojacar">
                      </div>

                      <div class="mb-3">
                          <label  class="form-label">direccion</label>
                          <input type="text" class="form-control" name="direccion" placeholder="102.22">
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">descripcion</label>
                          <textarea class="form-control" name="descripcion" rows="3"></textarea>
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Imagen</label>
                          <input type="file" class="form-control" name="imagen">
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary" form="nuevaIncidenciaForm">Guardar</button>
              </div>
          </div>
      </div>
  </div>

  </body>
</html>
