<!DOCTYPE html>
<html lang="es" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Javier Profe">
    <title>Login</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="icon" href="./img/icono.png" sizes="32x32" type="image/png">
</head>

<body class="bg-body-tertiary d-flex justify-content-center align-items-center vh-100">

    <main class="w-100" style="max-width: 400px;">
        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-body p-4">
                <h1 class="h3 mb-4 fw-normal text-center">Iniciar sesión</h1>

                <form action="controlador.php" method="POST"> 
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" name="email"  required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>

                    <input class="btn btn-primary w-100 py-2" type="submit" name="login" value="Login">
                </form>
            </div>
        </div>
    </main>

    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>
