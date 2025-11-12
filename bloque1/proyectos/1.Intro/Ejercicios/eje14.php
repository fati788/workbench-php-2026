 <?php
/*Crea un array de notas de alumnos. Cada elemento del array debe contener las
notas de un alumno, incluyendo nombre, materia y nota. Haz un programa con 10
notas de alumnos. Luego debes mostrar las notas ordenadas en orden
descendente por alumno, luego ordenadas por nombre, luego mostrar la nota
media del curso, y el número de alumnos suspensos*/

function pintar($numeros){
    echo "<br>";
    foreach($numeros as $numero){
        foreach($numero as $clave => $valor){
            echo $clave . " -> " . $valor . ",&nbsp;";
        }
        echo "<br>";
    }
}

$alumnos = array(
    array("nombre" => "Fatima" , "materia" => "servidor" , "nota" => 8) ,
    array("nombre" => "Noha" , "materia" => "servidor" , "nota" => 5) ,
    array("nombre" => "Pepe" , "materia" => "servidor" , "nota" => 6) ,
    array("nombre" => "Fefe" , "materia" => "servidor" , "nota" => 7) ,
    array("nombre" => "Jefe" , "materia" => "servidor" , "nota" => 9) 
);

array_multisort(array_column($alumnos , 'nota'), SORT_DESC , $alumnos);
pintar($alumnos);

//Ordenar por nombre
array_multisort(array_column($alumnos, 'nombre'), SORT_ASC, $alumnos);
pintar($alumnos);

//Nota media del curso
$total = 0;
foreach ($alumnos as $nota) {
    $total += $nota["nota"];
}
$media = $total / count($alumnos);
//echo "La media es " . $media;

$media = array_sum(array_column($alumnos, 'nota')) / count($alumnos);
echo "La media es " . $media;


//Alumnos suspensos
$contador = 0;
$calificaciones = array_column($alumnos, 'nota');
foreach ($calificaciones as $calif) {
    if ($calif < 5)
        $contador++;
}

echo "Número de suspensos " . $contador;








?>