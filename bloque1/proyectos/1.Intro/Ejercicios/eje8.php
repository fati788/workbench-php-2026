<?php

//Meter 6 números distintos entre 1 y 49

$combinacion = array();

for ($i = 0; $i < 6; $i++) {
    //Ver si está en el array
    do {
        $valor = rand(1, 49);
    } while (in_array($valor, $combinacion));
    array_push($combinacion, $valor);
}

sort($combinacion);
foreach ($combinacion as $num) {
    echo $num . " - ";
}