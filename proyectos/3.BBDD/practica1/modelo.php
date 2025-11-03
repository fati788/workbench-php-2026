<?php

function conneBBDD(){
           // Con un el método PDO::setAttribute
    try {
        $dsn = "mysql:host=mariadb:3306;dbname=ejemplo";
        $connec = new PDO($dsn, "usuario", "usuario");
        $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e){
        echo $e->getMessage();
    }
    return $connec;
}
/**
 * Methodos para los clientes
 */
function getClientes(){
    $connec = conneBBDD();
    $stmt = $connec->prepare("SELECT * FROM new_table");
    $stmt->execute();
    $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $clientes;
}
function getClienteById($id){
    $connec = conneBBDD();

    $stmt = $connec->prepare("SELECT * FROM new_table WHERE id=?");
    $stmt->bindParam(1,$id);
    $stmt->execute();
    $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if(count($clientes)== 1){
        return $clientes[0];
    }else{
        return null;
    }

}
function delClienteBuyId($id){
    $connec = conneBBDD();
    
    $stmt = $connec->prepare("DELETE  FROM new_table WHERE id=?");
    $stmt->bindParam(1,$id);
    $stmt->execute();

}
//Eliminar todos los clientes:
function deleteAllCliente(){
    $connec = conneBBDD();
    $stmt = $connec->prepare("DELETE FROM new_table");
    $stmt->execute();
}
//Añadir un nuevo cliente
function insertCliente($nombre , $dni , $email){
    $connec = conneBBDD();
    $stmt = $connec->prepare("INSERT INTO new_table (nombre,dni,email) VALUES (:nombre, :dni, :email)");
    $stmt->bindValue(':nombre' , $nombre);
    $stmt->bindValue(':dni' , $dni);
    $stmt->bindValue(':email' ,$email);
    $stmt->execute();
}
/**
 * Métodos para las incidencias
 */
function getIncicdencias(){
   $connexion = conneBBDD();

   $stmt = $connexion->prepare("SELECT * FROM incidencias");
   $stmt->execute();
   $incidencias = $stmt->fetchAll(PDO::FETCH_ASSOC);
   return $incidencias;
}
 //Añadir un incidencia:
 function insertIncidencia($codigo, $dni, $descr, $fecha_creacion, $estado){
    $connexion = conneBBDD();
    $stmt = $connexion->prepare("INSERT INTO incidencias (dni, descr, estado, fecha_creacion, codigo) VALUES(:dni, :descr, :estado, :fecha_creacion, :codigo)");
    $stmt->bindParam(":dni",$dni);
    $stmt->bindParam(":descr", $descr);
    $stmt->bindParam(":estado", $estado);
    $stmt->bindParam(":fecha_creacion", $fecha_creacion);
    $stmt->bindParam(":codigo", $codigo);
    $stmt->execute();

}
 //eliminar todas las incidencias:
 function deleteAllIncidencias(){
    $connexion = conneBBDD();
    $stmt = $connexion-> prepare("DELETE FROM incidencias ");
    $stmt->execute();
}
 //delete un incidencia por id
 function deleteIncidenciaById($id){
    $connexion = conneBBDD();
    $stmt = $connexion->prepare("DELETE FROM incidencias WHERE id=:id");
    $stmt->bindParam(":id" , $id);
    $stmt->execute();
}
function getIncidencia($id){
    $connexion = conneBBDD();
    $stmt = $connexion->prepare("SELECT * FROM incidencias WHERE id=:id");
    $stmt->bindParam(":id",$id);
    $stmt->execute();

    $incidencia = $stmt->fetch(); //La primera fila
    if ($incidencia == false) {   //Ese id no existe
        return null;
    } else {                      //El id lo ha encontrado
        return $incidencia;
    }
}

function updateIncidencia($id, $estado)
{
    $conexion = conneBBDD();
    $stmt = $conexion->prepare("UPDATE incidencias SET estado=:estado WHERE id=:id");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":estado", $estado);
    $stmt->execute();
}

/**
 * MÉTODOS PARA USUARIOS ---------------------------------------------------
 * 
 */

function insertUsuario($email, $password, $nombre, $apellidos, $telefono)
{
    $conexion = conneBBDD();

    //Ver que el email no está ya en BBDD
    $existe = getPassword($email);
    if ($existe != null) {
        return false;
    }

    $stmt = $conexion->prepare("INSERT INTO usuarios (email, password, nombre, apellidos, telefono) VALUES (:email, :password, :nombre, :apellidos, :telefono)");
    //echo $stmt->queryString;
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->bindParam(":nombre", $nombre);
    $stmt->bindParam(":apellidos", $apellidos);
    $stmt->bindParam(":telefono", $telefono);
    $stmt->execute();

    return true;
}


function getPassword($email)
{
    $conexion = conneBBDD();

    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE email=:email");
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $usuario = $stmt->fetch(); //La primera fila
    if ($usuario == false) {   //Ese email no registrado
        return null;
    } else {                      //Encontrado y devuelvo password hasheada
        return $usuario['password'];
    }
}
