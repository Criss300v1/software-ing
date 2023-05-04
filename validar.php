<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost","root","","software-ing");

// Verificar si la conexión fue exitosa
if (!$conexion) {
	die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Obtener los datos del formulario de inicio de sesión
$nombre_usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

// Consulta para buscar el nombre de usuario y la contraseña en la base de datos
$consulta = "SELECT * FROM usuarios WHERE usuario='$nombre_usuario' AND contraseña='$contraseña'";
$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) == 1) {
	// Inicio de sesión exitoso, redirigir al usuario a la página principal
	header("Location: indice.html");
} 
else {
	?>
	<?php
	include("index.php")
	?>
	<h1 class="bad">ERROR EN LA AUTENTICACION</h1>
	<?php

}

mysqli_close($conexion);
?>