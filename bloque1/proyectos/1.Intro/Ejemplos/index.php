<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    echo "Hola, mundo. Estamos en proyectos/index.php";
    ?>
    <p>Esto no esta dentro del php</p>

    <?= " <br>Hola, mundo copmrimido" ?>


    <?php
    //$variable = "hola mundo con variable";

    $numero = 5;
    if ($numero > 3) {

        echo "<br>El numero es mayor que 3";
    } else {
        echo "<br>El numero es menor o igual que 3";
    }  
    echo "<br>El numero es: $numero";//punto y coma al final de cada sentencia
    echo '<br>El numero es: ' . ($numero+1); // el punto es para concatenar cadena 
   
    //un comentario de una sola linea
    /*
    comentario de varias lineas
    */
    //CADENAS
  //DEBILMENTE TIPADO
    $variable = "5"; //cadena
    echo "<br>Variable vale $variable";
    $variable = $variable + 2; //suma, convierte cadena a número
    echo "<br>Variable vale $variable";
    $variable = "Lo que me de la gana"; //cadena
    echo "<br>Variable vale $variable<br>";

    var_dump($variable); //muestra tipo y valor - depurar código
    echo "<br>";

    $condicion = true; //false
    var_dump($condicion);
    echo "<br>";

    //CADENAS
    $cadena = "Esto es una cadena";
    echo "<br>$cadena";
    $cadena2 = 'Esto es otra cadena';
    echo "<br>$cadena2<br>";

    echo '<a href="http://www.google.es">Enlace a Google</a><br>';
    echo "<a href='http://www.google.es'>Enlace a Google</a><br>";

    ?>

</body>

</html>