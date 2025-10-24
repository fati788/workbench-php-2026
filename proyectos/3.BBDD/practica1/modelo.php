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

 

