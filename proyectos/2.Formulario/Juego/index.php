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
       <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="icon" href="./images/icono.png" sizes="32x32" type="image/png">
    <title>Juego</title>
</head>
<body>

    <header class="p-3 mb-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form>

                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= $_SESSION['usuario']; ?>
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="controlador.php?accion=cerrarsesion">
                                Cerrar sesion
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main>
        <h1>Bienvinido al Juego</h1>

       <p>Haga clic en el droso de la carta para pedir otra carta: </p>
      
        <form action="controlador.php" method="POST">
            <button class="mb-2" type="submit" name="dorso" value="1" style="border:none; background:none;">
                <img src="cartas/dorso-rojo.svg" alt="Dorso" width="150">
            </button>
              <label>
            <?php
            $cont =0;
            if(isset($_SESSION['cartas_mostradas'])){
                foreach($_SESSION['cartas_mostradas'] as $c){
                    echo "<img src='$c' width='150'>";
                    $cont ++;
                    if($cont == 5){
                        break;
                    }
                }
            }
            ?>
        </label><br>
        <button class="btn btn-primary" type="submit" name="reiniciar">Reiniciar</button>
        </form>
        <hr>
                <p><strong>Puntuación actual:</strong>
            <?php
                if (isset($_SESSION['puntacion'])) {
                    echo $_SESSION['puntacion'];
                } else {
                    echo 0;
                }
            ?>
        </p>
        <?php
           if (isset($_SESSION['mensaje'])) {
              echo "<p><strong>".$_SESSION['mensaje'] . "</strong></p>";
            }

        ?>
        <hr>
        <h4>Estadísticas:</h4>
        <?php
            if (isset($_SESSION['jugadas'])) {
                $jugadas = $_SESSION['jugadas'];
            } else {
                $jugadas = 0;
            }

            if (isset($_SESSION['ganadas'])) {
                $ganadas = $_SESSION['ganadas'];
            } else {
                $ganadas = 0;
            }

            if (isset($_SESSION['perdidas'])) {
                $perdidas = $_SESSION['perdidas'];
            } else {
                $perdidas = 0;
            }
        ?>
        <p>
            Jugadas: <?php echo $jugadas; ?> |
            Ganadas: <?php echo $ganadas; ?> |
            Perdidas: <?php echo $perdidas; ?>
        </p>
                

    </main>
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>


</html>