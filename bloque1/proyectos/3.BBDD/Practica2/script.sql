CREATE DATABASE IF NOT EXISTS gestion_incidencias;
USE gestion_incidencias;

CREATE TABLE IF NOT EXISTS tecnicos (
    id_tecnico INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS incidencias (
    id_incidencia INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(200) NOT NULL,
    descripcion TEXT,
    tipo ENUM('Hardware', 'Software', 'Red', 'Otros') NOT NULL,
    estado ENUM('Pendiente', 'En proceso', 'Resuelta', 'Cerrada') NOT NULL,
    prioridad ENUM('Baja', 'Media', 'Alta', 'Crítica') NOT NULL,
    id_tecnico INT,
    fecha_creacion DATETIME DEFAULT CURRENT_TIMESTAMP,
    fecha_actualizacion DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (id_tecnico) REFERENCES tecnico(id_tecnico) ON DELETE CASCADE
);

INSERT INTO tecnico (nombre, email, password) VALUES 
('ana', 'ana@gmail.com', '1234'),
('jose', 'jose@gmail.com', '1234');

INSERT INTO incidencias (titulo, descripcion, tipo, estado, prioridad, id_tecnico) VALUES
('Problema con impresora', 'La impresora no imprime.', 'Hardware', 'Pendiente', 'Alta', 1),
('Error en Windows', 'Pantalla azul al iniciar.', 'Software', 'En proceso', 'Crítica', 1),
('Actualización de software', 'Actualizar navegador web.', 'Software', 'Resuelta', 'Media', 2),
('Cambio de teclado', 'Teclado da doble pulsación.', 'Hardware', 'Cerrada', 'Baja', 1),
('Correo no funciona', 'No se reciben emails.', 'Software', 'Pendiente', 'Alta', 2),
('Servidor lento', 'Servidor tarda en responder.', 'Red', 'En proceso', 'Crítica', 1),
('Configuración de VPN', 'No se conecta la VPN.', 'Red', 'Resuelta', 'Media', 2),
('Reparación monitor', 'Monitor parpadea.', 'Hardware', 'Pendiente', 'Media', 1),
('Instalación de impresora', 'Instalar impresora nueva.', 'Hardware', 'Pendiente', 'Baja', 2),
('Fallo en la red', 'No hay conexión en oficina A.', 'Red', 'Pendiente', 'Alta', 2);

SELECT * FROM gestion_incidencias.tecnicos;
SELECT * FROM gestion_incidencias.incidencias;
