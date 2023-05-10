<?php
include('conexion.php');

if(isset($_POST['enviar'])){

    $Items=$_POST['Items'];
    $categoria=$_POST['categoria'];
    $foto= $_FILES['imagen']['name'];
    $administrador=$_POST['administrador'];
    $audio=$_FILES['audio']['name'];
 
  if(isset($foto) && $foto != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];
        $temp1  = $_FILES['audio']['tmp_name'];


       if( !((strpos($tipo,'png') || strpos($tipo,'jpeg') || strpos($tipo,'webp') || strpos($tipo,'jpg')))){
            echo "<script>alert('el archivo tiene que ser de extension png, jpeg, webp y jpg'); </script>";
            echo "<script>window.location.href='formulariocategorias.php';</script>";
            }else{
         $query = "INSERT INTO categorias values('$Items','$categoria','$audio','$foto', '$administrador')";
         $resultado = mysqli_query($conexion,$query);
         if ($resultado) { 
             move_uploaded_file($temp, '../imag/'.$foto);
             move_uploaded_file($temp1, 'audio/'.$audio);
          echo "<script>alert('se ha subido correctamente');</script>";
          echo "<script>window.location.href='formulariocategorias.php';</script>";

         }else{
          echo "<script>alert('ha ocurrido un error en el servidor');</script>";
            
         }
       }
    }
}


?>