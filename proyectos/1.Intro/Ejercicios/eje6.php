<?php

 function genererNumeroAleatorio($min , $max){   
    return rand($min,$max);   //genera un numero aleatorio entre el minimo y el maximo
  }
  

$letras = [
   0 => "T" , 1 => "R" , 2 => "W", 3 => "A", 4 => "G", 5 => "M", 6 => "Y", 7 => "F", 8 => "P", 9 => "D", 10 => "X",
    11 => "B", 12 => "N", 13 => "J", 14 => "Z", 15 => "S", 16 => "Q", 17 => "V", 18 => "H",
     19 => "L", 20 => "C", 21 => "K", 22 => "E"
];

$dni = genererNumeroAleatorio(10000000 , 99999999);

echo("$dni  <br>");
$idexLetra =($dni % 23);
 
echo("El index de la letra es :  <br> $idexLetra");

 echo(" <br> El DNI completo es: " . $dni .$letras[$idexLetra])


?>