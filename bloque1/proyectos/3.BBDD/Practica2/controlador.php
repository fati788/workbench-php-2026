<?php
session_start();
require_once("modelo.php");
if(isset($_REQUEST['accion'])){
    switch($_REQUEST['accion']){
        case 'login':
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];

            //Habría que validar en BBDD que el password sea correcto
            $tecnico = getTecnico($email);
            if ($tecnico === null) {
                // No existe ese email
               header("Location: login.php?error=emailnoencontrado");
            }
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
            break;
        case 'logout': 
            session_destroy();
            header("Location: login.php");
            break;
        case 'eliminar':
            $id = $_REQUEST['id_incidencia'];
            eliminarIncidencia($id);
            header("Location: dashboard.php");
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
        case 'crear':
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
        case 'obtener':
            $id = $_REQUEST['id'];
            header("Location: verIncidencia.php?id=" . $id);
            break;

        case 'listar':
          
            if (isset($_REQUEST['estado']) && $_REQUEST['estado'] != "") {
                $estado = $_REQUEST['estado'];
            } else {
                $estado = "Todas";
            }
            if (isset($_REQUEST['tipo']) && $_REQUEST['tipo'] != "") {
                $tipo = $_REQUEST['tipo'];
            } else {
                $tipo = "Todas";
            }
            if (isset($_REQUEST['prioridad']) && $_REQUEST['prioridad'] != "") {
                $prioridad = $_REQUEST['prioridad'];
            } else {
                $prioridad = "Todas";
            }
            
            $filtros = array(
                "estado" => $estado,
                "tipo" => $tipo,
                "prioridad" => $prioridad
            );

            $id_tecnico = $_SESSION['id_tecnico'];

            // para obtener incidencias filtradas
            $incidencias = obtenerIncidenciasPorTecnicos($id_tecnico, $filtros);

            //guardar resultados en sesion para que el dashboard los muestre
            $_SESSION['incidencias_filtradas'] = $incidencias;

            header("Location: dashboard.php");
            break;
        case 'buscar':
            $termino = $_REQUEST['termino'];
            $id_tecnico = $_SESSION['id_tecnico'];
            $incidencias = buscarIncidencias($id_tecnico, $termino);
            $_SESSION['incidencias_filtradas'] = $incidencias;
            header("Location: dashboard.php");
            break;
        
        default:
        break;    
    }
}