<?php
  $conexion = mysqli_connect("localhost", "root", "", "software-ing");
  

  if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $tipo = $_FILES['imagen']['type'];
    $datos = file_get_contents($_FILES['imagen']['tmp_name']);
    $remember = isset($_POST["remember"]);
    

    $query = "INSERT INTO imagenes (nombre, descripcion, imagen) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conexion, $query);
    mysqli_stmt_bind_param($stmt, "sss", $nombre, $descripcion, $datos);
    mysqli_stmt_execute($stmt);

    if($stmt){
        header('location:indice.html');
    }
    else{
        echo "error al enviar archivo";
    }
    
    mysqli_close($conexion);
  }
?>