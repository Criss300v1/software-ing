<?php
$conexion = mysqli_connect("localhost","root","","software-ing");

	if(isset($_FILES['imagen'])) {
		$imagen = $_FILES['imagen']['tmp_name'];
		$nombre_imagen = $_FILES['imagen']['name'];
		$tamaño_imagen = $_FILES['imagen']['size'];
		$tipo_imagen = $_FILES['imagen']['type'];

		$contenido_imagen = file_get_contents($imagen);

		$descripcion = $_POST['descripcion'];

		$sql = "INSERT INTO imagenes (nombre, tipo, tamaño, imagen, descripcion) 
				VALUES ('$nombre_imagen', '$tipo_imagen', '$tamaño_imagen', '$contenido_imagen', '$descripcion')";

		if(mysqli_query($conexion, $sql)) {
			echo "La imagen se ha guardado correctamente en la base de datos.";
		} else {
			echo "Error al guardar la imagen en la base de datos: " . mysqli_error($conexion);
		}
	}
?>