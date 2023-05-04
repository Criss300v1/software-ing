<?php
require("conexion.php");
$conexion=conexion();
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Iniciar sesión</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="formulario">
		<h1>Iniciar sesión</h1>
		<form method="post" action="validar.php">
			<label for="usuario">Usuario:</label>
			<input type="text" id="usuario" name="usuario" required><br>

			<label for="contraseña">Contraseña:</label>
			<input type="password" id="contraseña" name="contraseña" required><br>

			<button type="submit">Iniciar sesión</button>
		</form>
	</div>
</body>
</html>