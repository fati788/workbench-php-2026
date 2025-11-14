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
                      <a href="{{route('incidencias.delete', $incidencia->id )}}" class="btn btn-danger">X</a>
                  </td>
              </tr>
          @endforeach
        </tbody>

    </table>
      {{ $incidencias->links() }}
  </div>
  </body>
</html>
