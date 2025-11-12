<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar ficheros en formularios</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <h3>Ejemplo Formulario enviar archivo</h3>
        <form action="ejemploFileRecibir.php" method="post" enctype="multipart/form-data">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nombre">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Archivo adjunto</label>
                <div class="col-sm-6">
                    <input type="file" class="form-control" name="archivo">
                </div>
            </div>

            <input type="submit" class="btn btn-primary" name="accion" value="Enviar">
        </form>
    </div>


    <script src="./js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>

</html>