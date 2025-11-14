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
    <title>Proyectos</title>

    <?php         
      include_once("cabecera.php");
      include_once("modelo.php");
      
      if (isset($_SESSION['incidencias_filtradas'])) {
      $incidencias = $_SESSION['incidencias_filtradas'];
      unset($_SESSION['incidencias_filtradas']); // limpiar después de mostrar
     } else {
      $incidencias = obtenerIncidenciasPorTecnico($_SESSION['id_tecnico']);
     }
    ?>
    <!-- FORMULARIO DE FILTROS MEJORADO -->
    <div class="container mt-3">
        <form method="POST" action="controlador.php"
            class="row g-3 mb-4 align-items-end p-3 bg-light rounded shadow-sm">
            <input type="hidden" name="accion" value="listar">

            <!-- FILTRO ESTADO -->
            <div class="col-md-4 col-lg-3">
                <label for="estado" class="form-label fw-bold text-primary-emphasis">Estado</label>
                <select name="estado" id="estado" class="form-select">
                    <option value="Todas">Todas</option>
                    <option value="Pendiente">Pendiente</option>
                    <option value="En proceso">En proceso</option>
                    <option value="Resuelta">Resuelta</option>
                    <option value="Cerrada">Cerrada</option>
                </select>
            </div>

            <!-- FILTRO TIPO -->
            <div class="col-md-4 col-lg-3">
                <label for="tipo" class="form-label fw-bold text-primary-emphasis">Tipo</label>
                <select name="tipo" id="tipo" class="form-select">
                    <option value="Todas">Todas</option>
                    <option value="Hardware">Hardware</option>
                    <option value="Software">Software</option>
                    <option value="Red">Red</option>
                    <option value="Otros">Otros</option>
                </select>
            </div>

            <!-- FILTRO PRIORIDAD -->
            <div class="col-md-4 col-lg-3">
                <label for="prioridad" class="form-label fw-bold text-primary-emphasis" >Prioridad</label>
                <select name="prioridad" id="prioridad" class="form-select">
                    <option value="Todas">Todas</option>
                    <option value="Baja">Baja</option>
                    <option value="Media">Media</option>
                    <option value="Alta">Alta</option>
                    <option value="Crítica">Crítica</option>
                </select>
            </div>

            <!-- BOTÓN FILTRAR -->
            <div class="col-md-12 col-lg-1 d-grid">
                <button type="submit" class="btn btn-primary btn-lg mt-2 mt-lg-0">Filtrar</button>
            </div>
        </form>
    </div>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
     

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">Incidencias</h3>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class=" table table-striped">
                        <thead>
                            <tr>
                                <th class ="text-primary-emphasis">Título</th>
                                <th class ="text-primary-emphasis">Tipo</th>
                                <th class ="text-primary-emphasis">Estado</th>
                                <th class ="text-primary-emphasis">Prioridad</th>
                                <th class ="text-primary-emphasis">Fecha de creación</th>
                                <th class ="text-primary-emphasis">Acciones </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                                      foreach($incidencias as $incidencia){
                                        echo "<tr>";
                                         echo "<td>" . $incidencia['titulo']. "</td>";
                                         echo "<td>" . $incidencia['tipo'] . "</td>";
                                         echo "<td>" . $incidencia['estado'] . "</td>";
                                         echo "<td>" . $incidencia['prioridad'] . "</td>";
                                         echo "<td>" . $incidencia['fecha_creacion'] . "</td>";
                                         echo "<td>";
                                          echo "<a class='text-danger'  data-bs-toggle='modal' data-bs-target='#eliminarIncidencia' href='#'><i class='fa-solid fa-trash m-2'></i></a>";
                                          echo "<a class='text-success'  href='controlador.php?accion=verIncidencia&id=". $incidencia['id_incidencia']."'><i class='fa-solid fa-eye m-2'></i></a>";
                                         echo "</td>";

                                        echo "</tr>";
                                      }
                                      ?>
<!-- Modal Eliminar incidencia -->
 <div class="modal fade" id="eliminarIncidencia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar incidencia</h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">

                 <form action="controlador.php" method="POST" id="fei">
                     <div class="form-group">
                         <label class="form-label">¿Estás seguro de borrar esta incidencia?</label>
                     </div>
                     <input type="hidden" name="id_incidencia" value="<?= $incidencia['id_incidencia']; ?>">
                 </form>

             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                 <button type="submit" class="btn btn-primary" name="eliminarIncidencia" form="fei">Sí</button>
             </div>
         </div>
     </div>
 </div>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <?php 
        include_once("pie.php");
    ?>