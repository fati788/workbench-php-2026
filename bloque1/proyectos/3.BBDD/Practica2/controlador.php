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
if(isset($_REQUEST['eliminarIncidencia'])){
    $id = $_REQUEST['id_incidencia'];
    eliminarIncidencia($id);
    header("Location: dashboard.php");
             
}
    
if(isset($_REQUEST['accion'])){
    switch($_REQUEST['accion']){
        case 'cerrarsecion': 
            session_destroy();
            header("Location: login.php");
            break;
       /* case 'eliminar':
            $id = $_REQUEST['id'];
            eliminarIncidencia($id);
             header("Location: dashboard.php");
             break;*/
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
           $fecha_creacion = (new DateTime())->format('Y-m-d H:i:s');
            crearIncidencia($titulo , $descripcion , $tipo , $estado , $prioridad , $fecha_creacion, $id_tecnico);
            header("Location: dashboard.php");

            break;
        case 'verIncidencia':
            $id = $_REQUEST['id'];
            header("Location: verIncidencia.php?id=" . $id);
            break;

        case 'listar':
          
            if (isset($_POST['estado']) && $_POST['estado'] != "") {
                $estado = $_POST['estado'];
            } else {
                $estado = "Todas";
            }

            if (isset($_POST['tipo']) && $_POST['tipo'] != "") {
                $tipo = $_POST['tipo'];
            } else {
                $tipo = "Todas";
            }

            if (isset($_POST['prioridad']) && $_POST['prioridad'] != "") {
                $prioridad = $_POST['prioridad'];
            } else {
                $prioridad = "Todas";
            }

            $filtros = array(
                "estado" => $estado,
                "tipo" => $tipo,
                "prioridad" => $prioridad
            );

            $id_tecnico = $_SESSION['id_tecnico'];

            //Obtener incidencias filtradas
            $incidencias = obtenerIncidenciasPorTecnicos($id_tecnico, $filtros);

            //Guardar resultados en sesión para que el dashboard los muestre
            $_SESSION['incidencias_filtradas'] = $incidencias;

            header("Location: dashboard.php");
            break;

        
        
        default:
          break;    
    }
}