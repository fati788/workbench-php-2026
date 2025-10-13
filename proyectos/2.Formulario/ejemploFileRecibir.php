<?php
//Estoy recibiendo datos por $_POST
$carpeta = "./files/";


if (!isset($_FILES["archivo"])) {
    echo "No estoy recibiendo archivo";
} elseif ($_FILES["archivo"]["size"] == 0) {
    echo "Error al enviar archivo " . $_FILES["archivo"]["error"];
} elseif ($_FILES["archivo"]["type"] != "application/pdf") {
    echo "No se permiten archivos diferentes de PDF";
} else {
 $destino = $carpeta . $_FILES["archivo"]["name"];
    if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $destino)) {
        echo "Tu archivo ha sido cargado correctamente";
    } else {
        echo "Fallo al cargar el archivo";
    }
}


?>