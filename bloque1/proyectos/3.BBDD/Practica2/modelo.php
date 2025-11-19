<?php
function connexionDB(){
    try {
        //mariadb -> nombre del contenedor donde está bbdd
        //3306 -> puerto interno del contenedor
        $dsn = "mysql:host=mariadb:3306;dbname=gestion_incidencias";
        $conexion = new PDO($dsn, "usuario", "usuario");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    return $conexion;    
}
/**
 * Metodos para las incidencias
 */
function getIncidencias(){
    $conexion = connexionDB();
    $stmt = $conexion->prepare("SELECT * FROM incidencias");
    $stmt->execute();
    $incidencias = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $incidencias;
}
/** funcion para validar el tecnico */
function validarTecnico($email, $password){
    $conexion = connexionDB();
    $stmt = $conexion->prepare("SELECT * FROM tecnicos WHERE email=:email AND password=:password");
    $stmt->bindParam(":email" , $email);
    $stmt->bindParam(":password" , $password);
    $stmt->execute();

    $tectico = $stmt->fetch();
    if ($tectico === false) {
        return null;
    } //la primera fila
    return $tectico;
}
/**
 * obtenir el password
 */
function getTecnico($email){
    $conexion = connexionDB();
    $stmt = $conexion->prepare("SELECT * FROM tecnicos WHERE email=:email");
    $stmt->bindParam(":email" , $email);
    $stmt->execute();

    $tectico = $stmt->fetch();
    if ($tectico === false) {
        return null;
    } //la primera fila
    return $tectico;

}
/**
 * obtener Incidencias Por Tecnico
 */
function obtenerIncidenciasPorTecnico($id_tecnico){
     $conexion = connexionDB();
    $stmt = $conexion->prepare("SELECT * FROM incidencias WHERE id_tecnico=:id_tecnico");
    $stmt->bindParam(":id_tecnico" , $id_tecnico);
    $stmt->execute();
    $incidencias = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $incidencias;
}
/**
 * Crear una nueva incidencia
 */
function crearIncidencia($titulo , $descripcion , $tipo , $estado , $prioridad, $fecha_creacion , $id_tecnico){
    $conexion = connexionDB();
    $stmt = $conexion->prepare("INSERT INTO incidencias (titulo , descripcion , tipo , estado , prioridad, fecha_creacion , id_tecnico) VALUES (:titulo , :descripcion , :tipo , :estado , :prioridad, :fecha_creacion , :id_tecnico)");
    $stmt->bindParam(":titulo" , $titulo);
    $stmt->bindParam(":descripcion" , $descripcion);
    $stmt->bindParam(":tipo" , $tipo);
    $stmt->bindParam(":estado" , $estado);
    $stmt->bindParam(":prioridad" , $prioridad);
    $stmt->bindParam(":fecha_creacion" , $fecha_creacion);
    $stmt->bindParam(":id_tecnico" , $id_tecnico);
    $stmt->execute();
}  
  
/**
 * obtener Incidencia
 */
function getIncidencia($id){
    $conexion = connexionDB();
    $stmt = $conexion->prepare("SELECT * FROM incidencias WHERE id_incidencia=:id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $incidencia = $stmt->fetch(); //La primera fila
    if ($incidencia == false) {   //Ese id no existe
        return null;
    } else {                      //El id lo ha encontrado
        return $incidencia;
    }
}
/**
 * funcion para actualizar una incidencia
 */
function actualizarIncidencia($id_incidencia , $titulo , $descripcion , $tipo , $estado , $prioridad , $fecha_actualizacion){
    $conexion = connexionDB();
    $stmt = $conexion->prepare("UPDATE  incidencias 
    SET titulo=:titulo , descripcion=:descripcion , tipo=:tipo , estado=:estado , prioridad=:prioridad , fecha_actualizacion=:fecha_actualizacion 
    WhERE id_incidencia=:id_incidencia ");
    $stmt->bindParam(":titulo" , $titulo);
    $stmt->bindParam(":descripcion" , $descripcion);
    $stmt->bindParam(":tipo" , $tipo);
    $stmt->bindParam(":estado" , $estado);
    $stmt->bindParam(":prioridad" , $prioridad);
    $stmt->bindParam(":fecha_actualizacion" , $fecha_actualizacion);
    $stmt->bindParam(":id_incidencia" , $id_incidencia);
    $stmt->execute();
}
/**
 * Eliminar incidencia
 */
function eliminarIncidencia($id){
    $conexion = connexionDB();
    $stmt= $conexion->prepare("DELETE FROM incidencias WHERE  id_incidencia=:id ");
    $stmt->bindParam(":id" , $id);
    $stmt->execute();

}

/**
 * obtenir incidencias por filtros
 */
function obtenerIncidenciasPorTecnicos($id_tecnico, $filtros = []) {
    $conexion = connexionDB();

    $sql = "SELECT * FROM incidencias WHERE id_tecnico = :id_tecnico";
     //por estado
    if ($filtros['estado'] != "Todas") {
        $sql .= " AND estado = :estado";
    }

    // por tipo
    if ( $filtros['tipo'] != "Todas") {
        $sql .= " AND tipo = :tipo";
    }

    //por prioridad
    if ($filtros['prioridad'] != "Todas") {
        $sql .= " AND prioridad = :prioridad";
    }
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(":id_tecnico", $id_tecnico);
    // bind de los filtros (--> solo si existen)
    if ($filtros['estado'] != "Todas") {
        $stmt->bindParam(":estado", $filtros['estado']);
    }
    if ($filtros['tipo'] != "Todas") {
        $stmt->bindParam(":tipo", $filtros['tipo']);
    }
    if ($filtros['prioridad'] != "Todas") {
        $stmt->bindParam(":prioridad", $filtros['prioridad']);
    }
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
/**
 * Metodo para buscar
 */
function buscarIncidencias($id_tecnico, $termino){
    $conexion = connexionDB();
    $stmt = $conexion->prepare("SELECT * FROM incidencias WHERE id_tecnico =:id_tecnico 
    AND (titulo LIKE :termino OR descripcion LIKE :termino OR tipo LIKE :termino) ");
    $stmt->bindParam(":id_tecnico", $id_tecnico);
    $stmt->bindValue(":termino", "%".$termino."%");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}



?>