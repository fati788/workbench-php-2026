<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Javier Profe">
    <title>Clientes</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="icon" href="./img/icono.png" sizes="32x32" type="image/png">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">

    <div class="container">
      <?php include_once("header.php"); ?>

       <main>

            <button type="button" class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#nuevoUsuario">
                Nuevo
            </button>

         <table class=" table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>DNI</th>
                        <th>Email</th>
                       <th> Accion </th> 
                    </tr>
                </thead>
                 <tbody>
    
                    <?php  
                      $posicio = 0;
                       foreach($_SESSION['usuarios'] as $usuario){
                        echo "<tr>";
                        echo "<td>" . $usuario['nombre'] . "</td>";
                        echo "<td>" . $usuario['dni'] . "</td>";
                        echo "<td>" . $usuario['email'] . "</td>";
                        echo "<td>";
                        echo "<a href='controlador.php?accion=delUsuario&posicion=" . $posicio . "'>Eliminar</a>";
                        echo "</td>";
                        echo "</tr>";
                        $posicio++;
                       }
                    ?>
                   </tbody>
            </table>

        </main>
        <?php include_once("./footer.php"); ?>
    </div>   