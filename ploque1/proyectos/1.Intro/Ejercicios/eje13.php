<?php

/*Implementa una cola (FIFO: primero en entrar primero en salir) con php. Crear las
funciones para añadir o eliminar n elementos en la cola, para vaciar la cola y para
mostrar el contenido de la cola. Con esas funciones haz un programa en el que se
pueda apreciar claramente el funcionamiento de la cola llamando a todas las
funciones implementadas.*/

function anadirNumero($numero , &$numeros){
    array_push($numeros , $numero);
}

function daletNumero(&$numeros){
    array_shift($numeros);
}

$numeros = array();

anadirNumero(2 , $numeros);
anadirNumero(3 , $numeros);
anadirNumero(4 , $numeros);
anadirNumero(5 , $numeros);
anadirNumero(6 , $numeros);

print_r($numeros);
print("<br> --------------------- <br>");

daletNumero($numeros);
daletNumero($numeros);
daletNumero($numeros);

print_r($numeros);
?>