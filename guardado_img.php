<?php
$conexion = mysqli_connect("localhost","root","","software-ing");

	if(isset($_FILES['imagen'])) {
		$imagen = $_FILES['imagen']['tmp_name'];
		$nombre_imagen = $_FILES['imagen']['name'];
		$tamaño_imagen = $_FILES['imagen']['size'];
		$tipo_imagen = $_FILES['imagen']['type'];

		$contenido_imagen = file_get_contents($imagen);

?>