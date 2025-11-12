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
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle"
                        id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= $_SESSION['usuario']; ?>
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="controlador.php?accion=cerrarsesion">Cerrar sesión</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </header>

    <main>
        <div class="container text-center my-5">

            <div class="card shadow-lg p-4 mx-auto">
                <h2 class="card-title mb-3">Bienvenido al Juego</h2>
                <p class="text-muted">Haga clic en el dorso de la carta para pedir otra carta:</p>

                <form action="controlador.php" method="POST">
                    <button class="mb-2" type="submit" name="dorso" value="1"
                        style="border:none; background:none;">
                        <img class="img-fluid mb-3" src="cartas/dorso-rojo.svg" alt="Dorso" width="150">
                    </button>

                    <label>
                        <?php
                        $cont = 0;
                        if (isset($_SESSION['cartas_mostradas'])) {
                            foreach ($_SESSION['cartas_mostradas'] as $c) {
                                echo "<img src='$c' width='150'>";
                                $cont++;
                                if ($cont == 5) {
                                    break;
                                }
                            }
                        }
                        ?>
                    </label><br>

                    <button class="btn btn-primary" type="submit" name="reiniciar">Reiniciar</button>
                </form>

                <p>
                    <strong>Puntuación actual:</strong>
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
                    echo "<p><strong>" . $_SESSION['mensaje'] . "</strong></p>";
                }
                ?>

                <div class="card mt-4 p-3">
                    <h4 class="card-title">Estadísticas:</h4>

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
                        Jugadas:
                        <span class="badge bg-secondary">
                            <?php echo $jugadas; ?>
                        </span>
                    </p>

                    <p>
                        Ganadas:
                        <span class="badge bg-success">
                            <?php echo $ganadas; ?>
                        </span>
                    </p>

                    <p>
                        Perdidas:
                        <span class="badge bg-danger">
                            <?php echo $perdidas; ?>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </main>

    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>
