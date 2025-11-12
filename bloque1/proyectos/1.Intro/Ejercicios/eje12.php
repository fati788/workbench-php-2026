<?php
/*Haz un diccionario de palabras español a inglés (20 palabras mínimo) con un array
asociativo. Haz un programa que dada una palabra compruebe si está en el
diccionario y si es así que muestre la traducción, y si no está que indique que no
está en el diccionario. A continuación, muestra el diccionario ordenador en
español*/ 

$diccionari = array(
   "hola" =>  "hello",
   "manzana" => "apple",
   "casa" => "house",
   "hermano" => "brother",
    "roza" => "pink",
    "verde" => "green",
    "azul" => "blue"

);
$parabla ="hola";

if ( array_key_exists($parabla , $diccionari)){
     
  echo "La traduccion es: " . $diccionari[$parabla];


}else{
    echo "no está que indique que no está en el diccionario";
}
ksort($diccionari);
echo "<br>";

foreach ($diccionari as $clave => $valo){
    echo $clave . " -> " . $valo ."<br>" ;
}






?> 