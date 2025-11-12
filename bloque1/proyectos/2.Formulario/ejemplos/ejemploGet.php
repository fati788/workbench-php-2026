<?php
echo "<h4>Ejemplo GET </h4>";

if(isset($_GET['sensor']))
    echo $_GET['sensor'] . "<br>";

if(isset($_GET['finca']))
    echo $_GET['finca']. "<br>";

?>

<a href="./ejemploGet.php?sensor=12&finca=34ÁAR">Finca 1</a>
<a href="./ejemploGet.php?sensor=341&finca=33AAR">Finca 2</a>