<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
  

</head>
<body>
     <?php
    //Tabla de multiplicar del 1 al 10

    echo "<h2>Tablas de multiplicar del 1 al 10</h2>";

    //Tabla HTML
    echo "<table border='1'>";
   
  
    //Cabecera de la tabla
   echo "<tr>";

   for($i = 1 ; $i<= 10 ; $i ++){
      echo "<th>";
        echo "Tabla de " .$i;
     echo "</th>";
    }

   echo "</tr>";

    for($i = 1 ; $i<= 10 ; $i ++){
       echo "<tr>";
    
       for($j = 1 ; $j<= 10 ; $j ++){
        echo "<td>";
            echo $j . "X" . $i . " = " . ($j * $i);

        echo " </td>";

       }

       echo "</tr>";

    }
   

    ?>
    

</body>
</html>