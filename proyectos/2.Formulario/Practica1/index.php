<?php
session_start();

if(isset($_SESSION['Usuarion'])){
    header("Location: login.php");
}else{
    header("Location: table.php")
}

