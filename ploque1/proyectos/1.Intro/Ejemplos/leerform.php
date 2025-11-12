<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <?php
    if ($_POST['usuario'] == "") {
        echo "No has introducido usuario<br>";
    } else {
        echo "Usuario: " . $_POST['usuario'] . "<br>";
    }
    if ($_POST['password'] == "") {
        echo "No has introducido contraseña<br>";
    } else {
        echo "Contraseña: " . $_POST['password'] . "<br>";
    }



    ?>

</body>
</html>