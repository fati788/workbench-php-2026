<?php
$a = 3;
$b = 12;
$c = 4;

echo "Ecuación: " . $a . "x² + " . $b . "x + " . $c . " = 0<br>";
 
$discriminante = $b * $b - 4 * $a * $c;

//Calculamos las soluciones
if ($discriminante > 0) {
    $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
    $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
    echo "Soluciones reales y diferentes: x1 = " . $x1 . ", x2 = " . $x2;
} elseif ($discriminante == 0) {
    $x = -$b / (2 * $a);
    echo "Solución real y única: x = " . $x;
} elseif ($a == 0) {
    echo "No es una ecuación de 2º grado.";
} else { //discriminante < 0
    echo "No existen soluciones reales.";
}


?>