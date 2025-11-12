<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <h3>Ejemplo Formulario</h3>
        <form action="ejemploRecogerPost.php" method="POST">
            <form>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Edad</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="edad" min="18" max="80">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Fecha de registro</label>
                    <div class="col-sm-6">
                        <input type="date" name="fecha">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Hora de registro</label>
                    <div class="col-sm-6">
                        <input type="time" name="hora">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Deporte</label>
                    <div class="col-sm-6">
                        <select name="deporte">
                            <option value="ciclismo">Ciclismo</option>
                            <option value="padel">Pádel</option>
                            <option value="baloncesto">Baloncesto</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Notificaciones</label>
                    <div class="col-sm-6">
                        <select multiple name="notificaciones[]">
                            <option value="email">Email</option>
                            <option value="telefono">Teléfono</option>
                            <option value="rrss">RRSS</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Móvil</label>
                    <div class="col-sm-6">
                        <input type="radio" name="movil" value="android">Android <br>
                        <input type="radio" name="movil" value="ios">IOS
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Países favoritos</label>
                    <div class="col-sm-6">
                        <input type="checkbox" name="paises[]" value="españa">España<br>
                        <input type="checkbox" name="paises[]" value="italia">Italia<br>
                        <input type="checkbox" name="paises[]" value="japon">Japón<br>
                        <input type="checkbox" name="paises[]" value="holanda">Holanda<br>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>

                <input type="submit" class="btn btn-primary" name="accion" value="Login">
                <input type="submit" class="btn btn-primary" name="accion" value="Registro">

            </form>

    </div>





    <script src="./js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>

</html>