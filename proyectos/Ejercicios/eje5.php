<?php
//Tenemos una variable $numero que tiene un número de 0 a 99. Mostrarlo escrito.
// Por ejemplo, para 56 mostrar: cincuenta y seis.

function genererNumeroAleatorio($min , $max){   
    return rand($min,$max);   //genera un numero aleatorio entre el minimo y el maximo
  }

  function numeroALetras($numero) {
    $unidades = [
        0 => "cero", 1 => "uno", 2 => "dos", 3 => "tres", 4 => "cuatro",
        5 => "cinco", 6 => "seis", 7 => "siete", 8 => "ocho", 9 => "nueve",
        10 => "diez", 11 => "once", 12 => "doce", 13 => "trece", 14 => "catorce",
        15 => "quince", 16 => "dieciséis", 17 => "diecisiete", 18 => "dieciocho", 19 => "diecinueve"
    ];

    $decenas = [
        20 => "veinte", 30 => "treinta", 40 => "cuarenta", 50 => "cincuenta",
        60 => "sesenta", 70 => "setenta", 80 => "ochenta", 90 => "noventa"
    ];

    if ($numero < 20) {
        return $unidades[$numero];
    } elseif ($numero < 30) {
        if ($numero == 20) {
            return "veinte";
        } else {
            return "veinti" . $unidades[$numero - 20];
        }
    } else {
        $decena = intval($numero / 10) * 10;
        $unidad = $numero % 10;

        if ($unidad == 0) {
            return $decenas[$decena];
        } else {
            return $decenas[$decena] . " y " . $unidades[$unidad];
        }
    }
}

 
  $numero = genererNumeroAleatorio(1,99);
 echo("$numero . <br>");
 echo numeroALetras($numero);


?>