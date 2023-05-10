<?php
  $conexion = mysqli_connect("localhost", "root", "", "software-ing");
  

  if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
    $id_usuario = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $tipo = $_FILES['imagen']['type'];
    $datos = file_get_contents($_FILES['imagen']['tmp_name']);
    

    $query = "INSERT INTO imagenes VALUES ('','$id_usuario', '$nombre', '$descripcion','$tipo')";
    $stmt = mysqli_query($conexion, $query);
    //mysqli_stmt_bind_param($stmt, "sss", $nombre, $descripcion, $datos, $id_usuario);
    //mysqli_stmt_execute($stmt);

    if($stmt){
        header('location:indice.html');
    }
    else{
        echo "error al enviar archivo";
    }
    
    mysqli_close($conexion);
  }
?>