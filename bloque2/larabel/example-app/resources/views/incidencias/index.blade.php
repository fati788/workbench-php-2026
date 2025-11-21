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


     <table class="table table-striped table-bordered">
        <thead>
        <th scope="col">#</th>
        <th scope="col">Laltidud</th>
        <th scope="col">Longitud</th>
        <th scope="col">Ciudad</th>
        <th scope="col">Direccion</th>
        <th scope="col">Estado</th>
        <th scope="col">Descripcio</th>
        <th scope="col">Acciones</th>
        </thead>

        <tbody>
          @foreach($incidencias as $incidencia)
              <tr>
              <td>{{$incidencia->id}}</td>
              <td>{{$incidencia->latitud}}</td>
              <td>{{$incidencia->longitud}}</td>
              <td>{{$incidencia->ciudad}}</td>
              <td>{{$incidencia->direccion}}</td>
              <td>{{$incidencia->estado}}</td>
                  <td>{{$incidencia->descripcion}}</td>
                  <td>
                      <a href="{{route('incidencias.delete', $incidencia->id )}}" class="btn btn-danger mb-3">eliminar</a>
                      <a href="{{route('incidencias.show', $incidencia->id )}}" class="btn btn-success">ver</a>
                  </td>
              </tr>
          @endforeach
        </tbody>

    </table>
      {{ $incidencias->links() }}
  </div>
  <!-- Modal -->
  <div class="modal fade" id="nuevaIncidenciaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva Incidencia</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form action="{{ route('incidencias.store') }}" method="POST" id="nuevaIncidenciaForm">
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
