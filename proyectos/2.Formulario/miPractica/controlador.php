<?php
session_start();

if(isset($_REQUEST['login'])){
    $_SESSION['usuario'] = $_REQUEST['email'];

    $_SESSION['usuarios'] = array(
        array("nombre" => "Manuel Pérez", "dni" => "23492983-A", "email" => "manper@gmail.com"),
        array("nombre" => "Sonia Damaso", "dni" => "33444583-Z", "email" => "sondam@gmail.com"),
        array("nombre" => "Javier Saez", "dni" => "45457895-B", "email" => "javsae@gmail.com"),
    );
    $_SESSION['servicios'] = array(
        array("id" => "B-00001", "dni" => "23492983-A", "descr" => "Muy lento Internet"),
        array("id" => "B-00002", "dni" => "33444583-Z", "descr" => "No enciende router"),
        array("id" => "B-00003", "dni" => "45457895-B", "descr" => "Internet no funciona"),
        array("id" => "B-00004", "dni" => "23492983-A", "descr" => "El porno no se ve"),
    );
    header("Location: usuarios.php");
}
//añadir un nuevo usuario
if(isset($_REQUEST["nuevoUsuario"])){
    $usuario = array("nombre" => $_REQUEST["nombre"] , "dni" => $_REQUEST["dni"] , "email" => $_REQUEST["email"]);
    array_push($_SESSION['usuarios'] , $usuario);
    header("Location: usuarios.php");
}
//añadir un nueva servicio
if(isset($_REQUEST["nuevaServicio"])){
    $servicio = array("id" => $_REQUEST["id"] , "dni" => $_REQUEST["dni"] , "descr" => $_REQUEST["descr"]);
    array_push($_SESSION['servicios'] , $servicio);
    header("Location: servicios.php");
}

if(isset($_REQUEST['accion'])){
    switch($_REQUEST['accion']){
        //cerrar session
        case 'cerrarsesion':
            session_destroy();
            header("Location: login.php");
            break;
        case 'delUsuario' :
            $posicion = $_REQUEST['posicion']; 
            unset($_SESSION['usuarios'][$posicion]);
            $_SESSION['Usuarios'] = array_values($_SESSION['usuarios']);
            header("Location: usuarios.php");
            break;
        //delete servivio:
         case 'delServicio':
            //Eliminamos la posición indicada del array
            $posicion = $_REQUEST['posicion'];
            unset($_SESSION['servicios'][$posicion]);
            $_SESSION['servicios'] = array_values($_SESSION['servicios']); //Regenerar índices y no dejar huecos

            header("Location: servicios.php");
            break;
        default:
           break;    
    }
}