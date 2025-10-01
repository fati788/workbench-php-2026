<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   echo "Hola, mundo. Estamos en proyectos/array.php";
   $numeros = array(1,2,3,4,5);
   $nombres = ["Ana","Luis","Pedro"];
   echo "<br>El primer numero es: $numeros[0]";
   echo "<br>El segundo nombre es: $nombres[1]";
 
   $asociativo = array("nombre"=>"Ana","edad"=>25,"ciudad"=>"Madrid");
   echo "<br>El nombre es: ".$asociativo["nombre"];
   echo "<br>La edad es: ".$asociativo["edad"];
   echo "<br>La ciudad es: ".$asociativo["ciudad"];



?>
</body>
</html>