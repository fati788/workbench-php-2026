<?php 
/*Crea un array 7x7 con valores numéricos aleatorios excepto las diagonales que
deben ser 1. A continuación muestra el array y después genera un vector que
contenga la suma de cada fila y otro con la suma de cada columna. */

 function genererNumeroAleatorio($min , $max){   
    return rand($min,$max);   //genera un numero aleatorio entre el minimo y el maximo
  }

$numeros = array();
  echo "<table border = '1'>";

for ($i = 0; $i < 7; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 7; $j++) {
        echo "<td>";
        if($i == $j || $j == 6 - $i ){
             echo $numeros[$i][$j] = 1 ; 
        }else{
      echo $numeros[$i][$j] = genererNumeroAleatorio(2,4);
        }
      echo"</td>";
      
    }
    echo "</tr>";
}         
for ($i = 0; $i < 7; $i++) {
    $numeros[$i][$i] = 1;               // diagonal principal
    $numeros[$i][6 - $i] = 1;           // diagonal secundaria
}  

$totalFila = array();
  $sum = 0;
for ($i = 0; $i < 7; $i++) {
   
    for ($j = 0; $j < 7; $j++) {
        
        $sum +=  $numeros[$i][$j];
    }
    $totalFila[$i] =  $sum;
    $sum =0;
}
print_r($totalFila);

$totalColumna = array();
for ($j = 0; $j < 7; $j++) {
    $totalColumna[$j] = 0;  
}

for ($i = 0; $i < 7; $i++) {
   
    for ($j = 0; $j < 7; $j++) {
          $totalColumna[$j] += $numeros[$i][$j];
          

    }
  }
  echo "<br>";

  print_r($totalColumna);






?>