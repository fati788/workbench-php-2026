<?php
session_start();
if(isset($_REQUEST['login'])){
   $_SESSION['usuario'] = $_REQUEST['email'];

    header("Location: index.php");
}






?>