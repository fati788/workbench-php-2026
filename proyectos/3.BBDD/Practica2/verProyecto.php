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
    ?>
    <main>
       <div class="card">
                <div class="card-header bg-primary text-white text-center fw-semibold fs-5">
                <h3> Detalle de Proyecto </h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><strong>Nombre:</strong> <?=  $_REQUEST['nombre']; ?></h5>
                    <p class="card-text"><strong>Fecha de inicio: </strong><?= $_REQUEST['fechaIni']; ?></p>
                    <p class="card-text"><strong>Fecha de fin:</strong> <?= $_REQUEST['fechaFinPrevista']; ?></p>
                    <p class="card-text"><strong>Dias transcurridos:</strong> <?= $_REQUEST['diasTranscurridos']; ?></p>
                    
                    <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="<?= $_REQUEST['porcentageCompletado']; ?>" aria-valuemin="0" aria-valuemax="100">
                           <div class="progress-bar text-bg-success" style="width:  <?= $_REQUEST['porcentageCompletado']; ?>%;"> <?= $_REQUEST['porcentageCompletado']; ?>%</div>
                     </div>
                      
                    
                    <p class="card-text"><strong>Importancia: </strong><?= $_REQUEST['importancia']; ?></p>
                    <a href="./proyectos.php" class="btn btn-primary">Volver</a>
                </div>
            </div>
    </main> 
    

    <?php 
    include_once("pie.php");
    ?>