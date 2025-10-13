<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    
<?php
$height = 100;       // corregido
$width = 100;
$cx = 50;
$cy = 50;
$r = 40;
$stroke = "black";
$strokeWidth = 3;
$fillColor = "red";

for($i= 1 ; $i<= 5 ; $i++){
    echo '<svg height="' . $height . '" width="' . $width . '" >';
    echo '<circle cx="' . $cx . '" cy="' . $cy . '" r="' . $r . '" stroke="' . $stroke . '" stroke-width="' . $strokeWidth . '" fill="' . $fillColor . '" />';
    echo "</svg>";
}
?>
</body>
</html>
