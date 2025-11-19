# SISTEMA DE GESTIÓN DE INCIDENCIAS TÉCNICAS
## Descripción general
Desarrollarás una aplicación web para la gestión de incidencias técnicas utilizando PHP y MySQL. El sistema permitirá a los técnicos autenticarse y gestionar las incidencias asignadas a su cuenta, con funcionalidades CRUD completas y sistema de filtrado.
## Enlace de app en mi github
https://github.com/fati788/workbench-php-2026/tree/main/bloque1/proyectos/3.BBDD/Practica2
## Diagrama Entidad-Relación
![Diagrama ER](/bloque1/proyectos/3.BBDD/Practica2/img/DiagramaER.png) 

## Usuarios y contraseña de prueba
| Nombre       | Email           | Contraseña        |
|-------------|------------------|-------------------|
| ana         | ana@gmail.com    | 1234              |
| jose        | jose@gmail.com   | 1234              |

## Link AWS EC2 
1. Tienes que entrar al aws C2 
    1. https://us-east-1.console.aws.amazon.com/ec2-instance-connect/ssh/home?addressFamily=ipv4&connType=standard&instanceId=i-0ac11b9d43b3db2ae&osUser=ubuntu&region=us-east-1&sshPort=22
    2. Entrar al carpeta (workbench-php-2026/bloque1)
    3. Arancar los contenedores : podman-compose --file podman-compose.yml up -d
2. En el navigador :  http://18.207.228.108/3.BBDD/Practica2/login.php