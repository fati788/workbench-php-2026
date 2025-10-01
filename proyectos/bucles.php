<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   $frutas = array("Manzana", "Banana", "Cereza");

   for($i = 0; $i < count($frutas); $i++) {
       echo "Fruta en la posición $i: " . $frutas[$i] . "<br>";
   }

     echo "<br>Usando foreach:<br>";
    foreach ($frutas as $clave => $fruta) {
        echo $clave . " -> " . $fruta . "<br>";
    }



   //Ficha persona 
    $persona = array("nombre" => "Ana", "edad" => 30, "ciudad" => "Madrid");
    foreach($persona as $clave => $valor) {
        echo $clave . ": " . $valor . "<br>";
    }


    //Array multidimensional
    $personas = array(
        array("nombre" => "Ana", "edad" => 30, "ciudad" => "Madrid"),
        array("nombre" => "Luis", "edad" => 25, "ciudad" => "Barcelona"),
        array("nombre" => "Pedro", "edad" => 35, "ciudad" => "Valencia")
    );


    foreach($personas as $persona) {
      foreach($persona as $clave => $valor) {
          echo $clave . ": " . $valor . ", ";
      }
      echo "<br>";
    }




?>
</body>
</html>