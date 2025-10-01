<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
    $nombre = "Javier";

    if ($nombre == "Javier") {
        echo "Hola, Javier";
    } elseif ($nombre == "Ana") {
        echo "Hola, Ana";
    } else {
        echo "No te conozco";
    }

    $numero = "3";
    if ($numero === 3) { //== compara valores, === compara valores y tipos
        echo "<br>El número es 3";
    } elseif ($numero === "3") {
        echo "<br>El número es cadena 3";
    } else {
        echo "<br>El número no es 3";
    }

    //Operador ternario (condition ? true : false)
    $edad = 17;
    echo "<br>" . ($edad >= 18 ? "Eres mayor de edad" : "Eres menor de edad");


    ?>

</body>
</html>