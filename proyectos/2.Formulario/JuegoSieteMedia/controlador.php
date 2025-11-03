<?php
session_start();
if(isset($_REQUEST['login'])){
   $_SESSION['usuario'] = $_REQUEST['email'];

    $_SESSION['mazo'] = array();
    $letras = ['c','d','p','t'];
    $numeros = ['1','2','3','4','5','6','7','11','12','13'];

    foreach($letras as $l){
        foreach($numeros as $n){
            $_SESSION['mazo'][] = "cartas/". $l . $n .".svg";
        }
    }

    shuffle($_SESSION['mazo']);

    $_SESSION['cartas_mostradas'] = array();
    $_SESSION['puntacion'] = 0;
    $_SESSION['bloqueado'] = false;

    if(!isset($_SESSION['jugadas'])){
        $_SESSION['jugadas'] = 0;
    }
    if(!isset($_SESSION['ganadas'])){
        $_SESSION['ganadas'] = 0;
    }
    if(!isset($_SESSION['perdidas'])){
        $_SESSION['perdidas'] = 0;
    }
    $_SESSION['mensaje'] = "";

    header("Location: index.php");
}

if(isset($_REQUEST['dorso'])){
    if(!$_SESSION['bloqueado'] && !empty($_SESSION['mazo'])){
        $carta = array_pop($_SESSION['mazo']);
        $_SESSION['cartas_mostradas'][] = $carta;
                
        $nombre = $carta; 
        $nombre = substr($nombre, 7, -4); // quita "cartas/" y ".svg"
        $numero = substr($nombre, 1);     // quita la letra del palo
        $numero = (int)$numero;           // convierte a número

        if ($numero == 1 || $numero >= 11) {
            $valor = 0.5;
        } else {
            $valor = $numero;
        }

        $_SESSION['puntacion'] += $valor;

    
         if ($_SESSION['puntacion'] == 7.5) {
            $_SESSION['mensaje'] = "¡Has ganado! 🎉🎉";
            $_SESSION['jugadas']++;
            $_SESSION['ganadas']++;
            $_SESSION['bloqueado'] = true;
        } elseif ($_SESSION['puntacion'] > 7.5) {
            $_SESSION['mensaje'] = "Has perdido 😢😢. Te pasaste de 7.5.";
            $_SESSION['jugadas']++;
            $_SESSION['perdidas']++;
            $_SESSION['bloqueado'] = true;
        }
    }
    header("Location: index.php");
   
}

if(isset($_REQUEST['accion'])){
    switch($_REQUEST['accion']){
        case 'cerrarsesion':
            session_destroy();
            header("Location: login.php");
            break;
        default:
           ////
        break;       
    }
}

if(isset($_REQUEST['reiniciar'])) {
    $_SESSION['mazo'] = array();
    $_SESSION['cartas_mostradas'] = array();
    $_SESSION['puntacion'] = 0;
    $_SESSION['bloqueado'] = false;
    $_SESSION['mensaje'] = '';

    $letras = ['c', 'd', 'p', 't'];
    $numeros = ['1','2','3','4','5','6','7','11','12','13'];
     foreach($letras as $l){
        foreach($numeros as $n){
            $_SESSION['mazo'][] = "cartas/". $l . $n .".svg";
        }
    }

    shuffle($_SESSION['mazo']);
    header("Location: index.php");
}





?>