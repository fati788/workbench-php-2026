<?php
session_start();
require_once("modelo.php");
if (isset($_REQUEST["login"])) {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    //Habría que validar en BBDD que el password sea correcto
    $tecnico = getTecnico($email);
    $password_hash = $tecnico['password'];
    if (isset($password_hash)) {
        //Chequear que sea válida
        if (password_verify($password, $password_hash)) {
            //Login ok
            //Grabamos en la sesión el email logueado
            $_SESSION['usuario'] = $email;
            $_SESSION['id_tecnico'] = $tecnico['id_tecnico'];
            header("Location: dashboard.php");
        } else {
            //Contraseña incorrecta
            header("Location: login.php?error=passwordincorrecto");
        }
    } else {
        //No existe ese email
        header("Location: login.php?error=emailnoencontrado");
    }
}

    
if(isset($_REQUEST['accion'])){
    switch($_REQUEST['accion']){
        case 'cerrarsecion': 
            session_destroy();
            header("Location: login.php");
            break;
        case 'eliminar':
          
             break;
        case 'actualizar':
           $titulo = $_REQUEST['titulo'];
            $descripcion = $_REQUEST['descripcion'];
            $tipo = $_REQUEST['tipo'];
            $prioridad = $_REQUEST['prioridad'];
            $estado = $_REQUEST['estado'];
            $fecha_actualizacion =new DateTime();
            $fechaMySQL = $fecha_actualizacion->format('Y-m-d H:i:s');
            $id = $_REQUEST['id_incidencia'];
            actualizarIncidencia($id , $titulo , $descripcion , $tipo , $estado , $prioridad , $fechaMySQL);
            header("Location: verIncidencia.php?id=" . $id);
            break;
        case 'nuevo':
            $titulo = $_REQUEST['titulo'];
            $descripcion = $_REQUEST['descripcion'];
            $tipo = $_REQUEST['tipo'];
            $prioridad = $_REQUEST['prioridad'];
            $estado = 'Pendiente';
            $id_tecnico = $_SESSION['id_tecnico'];

           crearIncidencia($titulo , $descripcion , $tipo , $estado , $prioridad , $id_tecnico);
            header("Location: dashboard.php");

            break;
        case 'verIncidencia':
            $id = $_REQUEST['id'];
            header("Location: verIncidencia.php?id=" . $id);
            break;

        break;
        
        
        default:
          break;    
    }
}