<?php
session_start();
if (!isset($_SESSION['usuario']))
    header("Location: login.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="./css/fontawesome.css">
    <link href="./assets/css/solid.css" rel="stylesheet" />

    <link rel="icon" href="./img/icono.png" sizes="32x32" type="image/png">
    <title>Ver Proyectos</title>

    <?php         
    include_once("cabecera.php");
    include_once("modelo.php");
    $incidencia = getIncidencia($_REQUEST['id']);
    ?>
    <main>
        <?php if (isset($incidencia)) { ?>
        <div class="card">
            <div class="card-header bg-primary text-white text-center fw-semibold fs-5">
                <h3> Detalle de Proyecto </h3>
            </div>
            <div class="card-body">
                <h5 class="card-title"><strong>titulo:</strong>
                    <?=  $incidencia['titulo']; ?>
                </h5>
                <p class="card-text"><strong> descripcion: </strong>
                    <?= $incidencia['descripcion']; ?>
                </p>
                <p class="card-text"><strong>tipo:</strong>
                    <?= $incidencia['tipo']; ?>
                </p>
                <p class="card-text"><strong> estado:</strong>
                    <?= $incidencia['estado']; ?>
                </p>
                <p class="card-text"><strong>prioridad:</strong>
                    <?= $incidencia['prioridad']; ?>
                </p>
                <p class="card-text"><strong>fecha de creacion:</strong>
                    <?= $incidencia['fecha_creacion']; ?>
                </p>
                <p class="card-text"><strong>fecha de actualizacion:</strong>
                    <?= $incidencia['fecha_actualizacion']; ?>
                </p>
                
                <a href="./dashboard.php" class="btn btn-primary">Volver</a>
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modificarIncidencia">Modificar Incidencia</a>

                
            </div>
        </div>

        <?php
        } else {
            echo "NO ENCONTRADO";
        }
        ?>
        <!-- Modal para modificar un incidencia  -->
 
<div class="modal fade" id="modificarIncidencia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="text-center mb-4 text-primary" id="exampleModalLabel">Modificar Incidencia</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="controlador.php" method="POST" class="p-4 border rounded shadow bg-white" id="mdi">

                    <div class="mb-3">
                        <label for="titulo" class="form-label fw-semibold">Titulo</label>
                        <input type="text" name="titulo" id="titulo" class="form-control"
                            placeholder="Ingrese el titulo del incidencia">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label fw-semibold">Descripcion</label>
                        <textarea class="form-control" rows="5" name="descripcion" id="descripcion"
                            placeholder="Ingrese una descipcio"></textarea>

                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select name="tipo" id="tipo" class="form-select">
                            <option value="Hardware">Hardware</option>
                            <option value="Software">Software</option>
                            <option value="Red">Red</option>
                            <option value="Otros">Otros</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="prioridad" class="form-label">Prioridad</label>
                        <select name="prioridad" id="prioridad" class="form-select">
                            <option value="Baja">Baja</option>
                            <option value="Media">Media</option>
                            <option value="Alta">Alta</option>
                            <option value="Crítica">Crítica</option>
                        </select>
                    </div>
                        <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <select name="estado" id="estado" class="form-select">
                            <option value="Pendiente">Pendiente</option>
                            <option value="En proceso">En proceso</option>
                            <option value="Resuelta">Resuelta</option>
                            <option value="Cerrada">Cerrada</option>
                        </select>
                    </div>
        <input type="hidden" name="id_incidencia" value="<?= $incidencia['id_incidencia']; ?>">

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button class="btn btn-primary btn-lg" type="submit" name="accion" value="actualizar" form="mdi">
                    <i class="bi bi-plus-circle"></i> Crear Incidencia
                </button>
            </div>
        </div>
    </div>
</div>    
    </main>


    <?php 
    include_once("pie.php");
    ?>