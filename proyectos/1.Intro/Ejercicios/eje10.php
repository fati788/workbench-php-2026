<?php
//10. Rellena un array de 10 números enteros, con los 10 primeros números naturales.
//Calcula la media de los que están en posiciones pares y muestra los impares por
//pantalla.

$numeros = array(1,2,3,4,5,6,7,8,9,10);

$suma = 0;
$contador = 0;
for($i = 0 ; $i <count($numeros) ; $i ++){
    if($i % 2 == 0){
     $suma += $numeros[$i];
     $contador ++ ;
    }else{
        echo $numeros[$i] .", ";
    }
    
}
echo(" <br> la media de los que están en posiciones pares es: " . ($suma / $contador));



?>