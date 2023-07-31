<?php
session_start();

include_once 'inc/database.php';
// Obtener los datos del formulario
$nombre_usuario = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];

// Consulta para verificar el usuario y contraseña
$sql = "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre_usuario' AND contrasena = '$contrasena'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    // El usuario es autenticado
    $_SESSION['nombre_usuario'] = $nombre_usuario;
    // Redirecciona al usuario a la página protegida
    header("Location: index.php");
} else {
    // Usuario o contraseña incorrectos
    echo "Nombre de usuario o contraseña incorrectos. Inténtalo nuevamente.";
}

$conexion->close();
