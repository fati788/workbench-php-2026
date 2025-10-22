<?php
session_start();
if(isset($_REQUEST['login'])){
     
 $_SESSION['usuario'] = $_REQUEST['email'];
 $password = $_REQUEST['password']; 

  if((strlen($password) < 8 ) || (!preg_match('/[A-Z]/', $password))){
    header("Location: login.php");
  }else{
     $_SESSION['proyectos'] = array(
    array("id" => "1" , "nombre" => "proyecto1" , "fechaIni" =>"2025-10-19" , "fechaFinPrevista" => "2026-10-20" , "diasTranscurridos" => 123 , "porcentageCompletado" => "12" , "importancia" => 4),
    array("id" => "2" , "nombre" => "proyecto2" , "fechaIni" =>"2025-10-12" , "fechaFinPrevista" => "2026-10-11" , "diasTranscurridos" => 13 , "porcentageCompletado" => "21" , "importancia" => 5),
    array("id" => "3" , "nombre" => "proyecto3" , "fechaIni" =>"2025-10-13" , "fechaFinPrevista" => "2026-10-12" , "diasTranscurridos" => 61 , "porcentageCompletado" => "15" , "importancia" => 3),
    array("id" => "4" , "nombre" => "proyecto4" , "fechaIni" =>"2025-10-15" , "fechaFinPrevista" => "2026-10-02" , "diasTranscurridos" => 23 , "porcentageCompletado" => "65" , "importancia" => 2)
      
       );
    header("Location: proyectos.php");
  }
 
}
if(isset($_REQUEST['accion'])){
    switch($_REQUEST['accion']){
        case 'cerrarsecion': 
            session_destroy();
            header("Location: login.php");
            break;
        case 'eliminarTodo':
                $_SESSION['proyectos'] = [];
              header("Location: proyectos.php");
              break;
        case 'eliminar':
            $id = $_REQUEST['id'];
            $posicion = 0;
            foreach($_SESSION['proyectos'] as $proyecto){
               if($proyecto['id'] == $id){
                break;
               }
                $posicion++;
            }
            unset($_SESSION['proyectos'][$posicion]);
             $_SESSION['proyectos'] = array_values($_SESSION['proyectos']);
             header("Location: proyectos.php");
             break;
        case 'nuevo':
            if(!empty($_SESSION['proyectos'])){
                $ids = array_column($_SESSION['proyectos'] , 'id');
                $id = max($ids) +1 ;
            }else{
                $id = 0;
            }
            $proyecto = array("id" => $id , "nombre" => $_REQUEST['nombre'] , "fechaIni" => $_REQUEST['fechaIni'] 
            ,"fechaFinPrevista" => $_REQUEST['fechaFinPrevista'] , "diasTranscurridos" => $_REQUEST['diasTranscurridos'] 
            , "porcentageCompletado" => $_REQUEST['porcentageCompletado'], "importancia" => $_REQUEST['importancia']);
             array_push($_SESSION['proyectos'] , $proyecto);
            header("Location: proyectos.php");
            break;
        default:
          break;    
    }
}