<?php
session_start();

// obtener los datos del formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// validar las credenciales
if ($usuario === 'usuario' && $contrasena === 'contraseña') {
    $_SESSION['usuario'] = $usuario;
    header('Location: pagina_secreta.php');
} else {
    header('Location: inicio_sesion.php?error=1');
}
?>