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
     ?>
     <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tablas</h1>
                    <a class="btn btn-primary btn-sm mb-2" href="controlador.php?accion=generarProyectos">
                                   Generar informe
                                 </a>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Proyectos</h6>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                
                                

                                <table class=" table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Fecha Inicio</th>
                                            <th>Fecha Fin Prevista</th>
                                            <th>Dias Transcurridos</th>
                                            <th>Porcentage Completado (%)</th>
                                            <th>importancia</th>
                                            <th>Acciones </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php

                                      foreach($_SESSION['proyectos'] as $proyecto){
                                        echo "<tr>";
                                         echo "<td>" . $proyecto['nombre']. "</td>";
                                         echo "<td>" . $proyecto['fechaIni'] . "</td>";
                                         echo "<td>" . $proyecto['fechaFinPrevista'] . "</td>";
                                         echo "<td>" . $proyecto['diasTranscurridos'] . "</td>";
                                         echo "<td>" . $proyecto['porcentageCompletado'] . "</td>";
                                         echo "<td>" . $proyecto['importancia'] . "</td>";
                                         echo "<td>";
                                          echo "<a href='controlador.php?accion=eliminar&id=". $proyecto['id']."'> <i class='fa-solid fa-trash'></i> </a>";
                                          echo "<a href='controlador.php?accion=verProyecto&id=". $proyecto['id']."'> <i class='fa-solid fa-eye'></i> </a>";
                                         echo "</td>";

                                        echo "</tr>";
                                      }
                                      ?>
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