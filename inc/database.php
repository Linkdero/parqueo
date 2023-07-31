<?php
// Datos de conexión a la base de datos
$host = "localhost";       // Cambia esto si tu servidor MySQL no está en localhost
$usuario = "root";   // Reemplaza 'tu_usuario' con el nombre de usuario de MySQL
$contrasena = "";   // Reemplaza 'tu_contraseña' con la contraseña de MySQL
$basedatos = "parqueo";   // Reemplaza 'nombre_de_tu_basedatos' con el nombre de tu base de datos

// Crear una conexión a la base de datos
$conexion = new mysqli($host, $usuario, $contrasena, $basedatos);

if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

