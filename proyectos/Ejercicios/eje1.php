<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 </title>
</head>
<body>
  
  <?php
  function genererNumeroAleatorio($min , $max){   
    return rand($min,$max);   //genera un numero aleatorio entre el minimo y el maximo
  }
   $primero = genererNumeroAleatorio(1,10);
   $segundo = genererNumeroAleatorio(1,10);

    echo"<h3> la diferencia de $primero y $segundo es: " .($primero-$segundo)."</h3>";
     echo  "<br> la division de $primero y $segundo es: " .($primero/$segundo)."</h3>";


  ?>


</body>
</html>