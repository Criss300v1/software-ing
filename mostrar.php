<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <?php
                    if (isset($_REQUEST['guardar'])) {
                           if(isset($_FILES['imagen']['name'])){
                            $tipoArchivo = $_FILES['imagen']['type'];
                            $nombreArchivo = $_FILES['imagen']['name'];
                            $tamanoArchivo = $_FILES['imagen']['size'];
                            $imagenSubida = fopen($_FILES['imagen']['tmp_name'],'r');
                            $binariosImagen = fread($imagenSubida,$tamanoArchivo);
                            include_once "conexion.php";
                            $conexion = mysqli_connect("localhost", "root", "", "software-ing");
                            $binariosImagen = mysqli_escape_string($conexion,$binariosImagen);
                            $query="INSERT INTO imagenes2 (nombre,             imagen,            tipo) values
                                                          ('".$nombreArchivo."','".$binariosImagen."','".$tipoArchivo."')";
                            $res = mysqli_query($conexion,$query);
                            if($res){
                    ?>
                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                
                                    <strong>Registro insertado exitosamente</strong> You should check in on some of those fields below.
                                </div>
                    <?php      
                            }
                            else{
                                ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                
                                    <strong>Error <?php echo mysqli_error($conexion);?></strong> You should check in on some of those fields below.
                                </div>
                    <?php

                            }    
                        }
                    }
                ?>
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <input type="file" class="form-control" name="imagen" id="" placeholder="" aria-describedby="fileHelpId">
                      <div id="fileHelpId" class="form-text">Help text</div>
                    </div>

                    <div>
                      <button type="submit" class="btn btn-primary" name="guardar">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  <header>
    <!-- place navbar here -->
  </header>
  <main>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>