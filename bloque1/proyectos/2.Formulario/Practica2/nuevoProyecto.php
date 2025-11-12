<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
}


?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nuevo Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>

    <?php
  include_once("cabecera.php");
    ?>
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
      <form action="controlador.php" method="POST" class="p-4 border rounded shadow bg-white">
        <h3 class="text-center mb-4 text-primary">Nuevo Proyecto</h3>

        <div class="mb-3">
          <label for="nombre" class="form-label fw-semibold">Nombre</label>
          <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre del proyecto">
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="fechaIni" class="form-label fw-semibold">Fecha de Inicio</label>
            <input type="date" name="fechaIni" id="fechaIni" class="form-control">
          </div>
          <div class="col-md-6 mb-3">
            <label for="fechaFinPrevista" class="form-label fw-semibold">Fecha de Fin Prevista</label>
            <input type="date" name="fechaFinPrevista" id="fechaFinPrevista" class="form-control">
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="diasTranscurridos" class="form-label fw-semibold">Días Transcurridos</label>
            <input type="number" name="diasTranscurridos" id="diasTranscurridos" class="form-control"  min="0" placeholder="0">
          </div>
          <div class="col-md-6 mb-3">
            <label for="porcentageCompletado" class="form-label fw-semibold">Porcentaje Completado</label>
            <input type="number" name="porcentageCompletado" id="porcentageCompletado" class="form-control"  min="0" placeholder="0">
          </div>
        </div>

        <div class="mb-4">
          <label for="importancia" class="form-label fw-semibold">Importancia</label>
         <input type="number" name="importancia" id="importancia" class="form-control" placeholder="1-5" max="5" min="1">
        </div>

        <div class="d-grid">
          <button class="btn btn-primary btn-lg" type="submit" name="accion" value="nuevo">
            <i class="bi bi-plus-circle"></i> Crear Proyecto
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php 
include_once("pie.php");
?>