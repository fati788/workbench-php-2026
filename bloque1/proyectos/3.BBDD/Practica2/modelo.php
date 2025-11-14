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
/**
 * obtenir el password
 */
function getTecnico($email){
    $conexion = connexionDB();
    $stmt = $conexion->prepare("SELECT * FROM tecnicos WHERE email=:email");
    $stmt->bindParam(":email" , $email);
    $stmt->execute();

    $tectico = $stmt->fetch(); //la primera fila
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

    // Base de la consulta
    $sql = "SELECT * FROM incidencias WHERE id_tecnico = :id_tecnico";

    // Filtrar por estado
    if (isset($filtros['estado']) && $filtros['estado'] != "Todas") {
        $sql .= " AND estado = :estado";
    }

    // Filtrar por tipo
    if (isset($filtros['tipo']) && $filtros['tipo'] != "Todas") {
        $sql .= " AND tipo = :tipo";
    }

    // Filtrar por prioridad
    if (isset($filtros['prioridad']) && $filtros['prioridad'] != "Todas") {
        $sql .= " AND prioridad = :prioridad";
    }

    // Ordenar por fecha
    $sql .= " ORDER BY fecha_creacion DESC";

    // Preparar la consulta
    $stmt = $conexion->prepare($sql);

    // Bind de id_tecnico
    $stmt->bindValue(":id_tecnico", $id_tecnico);

    // Bind de los filtros (solo si existen)
    if (isset($filtros['estado']) && $filtros['estado'] != "Todas") {
        $stmt->bindValue(":estado", $filtros['estado']);
    }
    if (isset($filtros['tipo']) && $filtros['tipo'] != "Todas") {
        $stmt->bindValue(":tipo", $filtros['tipo']);
    }
    if (isset($filtros['prioridad']) && $filtros['prioridad'] != "Todas") {
        $stmt->bindValue(":prioridad", $filtros['prioridad']);
    }

    // Ejecutar
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}



?>