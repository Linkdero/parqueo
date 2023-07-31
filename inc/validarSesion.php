<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['nombre_usuario'])) {
    // El usuario no ha iniciado sesión, redirigir al formulario de inicio de sesión
    header("Location: production/login.php");
    exit(); // Asegurarse de que el script se detenga después de redireccionar
}
