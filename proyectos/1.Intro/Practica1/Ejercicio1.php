<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
      table{
         border-collapse: collapse;
      }
      table , td , tr , th{
         border : 2px solid blue;
      }
      td , tr , th{
         width: 200px;
         height: 50px;
      }
   
    </style>
</head>
<body>
    

<?php
      function subtotal($linea_pedido) {
            $precio = $linea_pedido['precio'];
            $cantidad = $linea_pedido['cant'];
            $iva_r = $linea_pedido['iva_r'];
 
            if ($iva_r == 0) {
               $ivaF = 1.21; 
            } elseif ($iva_r == 1) {
               $ivaF = 1.10; 
            } else {
               $ivaF = 1.21; 
            }

            return ($precio * $cantidad) * $ivaF;
         }


        $carrito = array(
                array("id" => 1234, "nombre" => "PS4", "precio" => 349.95, "cant" => 2, "iva_r" => 0),
                array("id" => 1235, "nombre" => "iPhone XS", "precio" => 1249.95, "cant" => 1, "iva_r" => 0),
                array("id" => 1236, "nombre" => "Chocolate", "precio" => 9.95, "cant" => 5, "iva_r" => 1)
        );

       echo "<table border = '1'";
       echo "<tr>";
       echo"<th>";
       echo "#";
       echo "</th>";
       echo"<th>";
       echo "Nombre";
       echo "</th>";
       echo"<th>";
       echo "Precio";
       echo "</th>";
       echo"<th>";
        echo "Cantidad";
      echo "</th>";
      echo"<th>";
        echo "IVA";
      echo "</th>";
      echo"<th>";
         echo "Subtotal";
      echo "</th>";
         echo "</tr>";
   

        $precio = array_column($carrito , 'precio');
        $cantidad = array_column($carrito , 'cant');
        $iva = array_column($carrito , 'iva_r');
        $id = array_column($carrito , 'id');
        $nombre = array_column($carrito , 'nombre');
         $subtotal = 0;

          for ($i=0 ; $i<count($carrito) ; $i++){

            $totalPrecio = 0;
            $totalPrecio = subtotal($carrito[$i]);;
            $subtotal += $totalPrecio;

               echo "<tr>";
                echo "<td>";
                echo $id[$i];
                echo "</td>";
                echo "<td>";
                echo $nombre[$i];
                echo "</td>";
                echo "<td>";
                echo $precio[$i];
                echo "</td>";
                echo "<td>";
                echo $cantidad[$i];
                echo "</td>";
                echo "<td>";
                echo $iva[$i];
                echo "</td>";
                echo "<td>";
                echo $totalPrecio . "€";
                echo "</td>";

          echo "</tr>";
       
          }
          echo "<tr>";
                  echo "<td colspan = '5' >";
                  echo "Total";
                echo "<td>";
                echo $subtotal . "€";
                echo "</td>";
              
          echo "</tr>";
     echo "</table>";
?>
</body>
</html>