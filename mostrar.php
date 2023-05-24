<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center> 
        <table border="3">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>descripcion</th>
                    <th>imagen</th>
                    <th>operaciones</th>
                    <th></th>
                </tr>
            <thead>
                <tbody>
                    <?php
                    include("conexion.php");
                    $conexion = mysqli_connect("localhost", "root", "", "software-ing");

                    $query = "SELECT * FROM imagenes";
                    $resultado = $conexion->query($query);
                    while($row = $resultado->fetch_assoc()){
                    ?>
                        <tr>
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['nombre'];?></td>
                            <td><?php echo $row['descripcion'];?></td>
                            <td><img width="100px" src="data:image/png;base64,<?php echo base64_encode($row['imagen']);?>"></img></td>
                            <td><a href="#">Modificar</a></td>
                            <td><a href="#">Eliminar</a></td>       
                        </tr>
                    <?php
                    }
                    ?>   
                </tbody>
        </table>


    </center>
</body>
</html>