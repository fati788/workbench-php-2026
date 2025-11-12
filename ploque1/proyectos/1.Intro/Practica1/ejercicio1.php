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
         text-align:center;
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
        
        echo '<table>
               <tr>';
        foreach($carrito[0] as $clave => $valor){
               echo"<th> $clave </th>";
        }
          echo '<th> Subtotal
          </tr>';
        $total = 0; 
        foreach($carrito as $linea){
           echo "<tr>";
           foreach($linea as $clave => $valor){
              echo "<td> $valor </td>";
           }
           $subtotal = subtotal($linea);
           $total += $subtotal;
           echo"<td>" . $subtotal."€</td>";
           echo "</tr>";
        }
        echo '<tr>
               <td colspan = "5"> Total</td> 
               <td>' . $total .'€</td>
               </tr>';
?>   
</body>
</html>