<?php
if(isset($_POST["email"])){
    echo $_POST["email"] . "<br>";
}
if(isset($_POST["edad"])){
    echo $_POST["edad"] . "<br>";
}
if(isset($_POST['fecha'])){
    echo $_POST['fecha'] . "<br>";
}
if(isset($_POST['hora'])){
    echo $_POST['hora'] . "<br>";
}
/*Select***********/
if(isset($_POST['deporte'])){
    echo "Tu deporte es: " .  $_POST['deporte'] . "<br>";
}
/*Select MULTIPLE***********/

if(isset($_REQUEST['notificaciones'])){
    echo "notificaciones: ";
    foreach($_REQUEST['notificaciones'] as $noti){
        echo $noti . ", ";
    }
    echo "<br>";
}

if(isset($_REQUEST['movil'])){
    echo $_REQUEST['movil'] . "<br>";
}

if(isset($_REQUEST['paises'])){
    echo "paises favoritos: " ;
    foreach($_REQUEST['paises'] as $payi){
        echo $payi . ", ";
    }
    echo "<br>";
}

if (isset($_REQUEST['email'])) {
    echo "Email: " . $_REQUEST['email'] . "<br>";
}

if (isset($_REQUEST['password'])) {
    echo "Password: " . $_REQUEST['password'] . "<br>";
}

?>