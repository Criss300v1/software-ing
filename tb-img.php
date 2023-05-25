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
                <div class="table-responsive">
                    <table class="table table-striped
                    table-hover	
                    table-borderless
                    table-primary
                    align-middle">
                        <thead class="table-light">
                            <caption>Table Name</caption>
                            <tr>
                                <th>Nombre</th>
                                <th>Tipo</th>
                                <th>Imagen</th>
                            </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php
                                    include_once "conexion.php";
                                    $conexion=mysqli_connect("localhost", "root", "", "software-ing");
                                    $query="SELECT nombre,tipo,imagen FROM imagenes2;";
                                    $resultado=mysqli_query($conexion,$query);
                                    while ($row=mysqli_fetch_assoc($resultado)){
                                ?>
                                <tr class="table-primary">
                                    <td scope="row"><?php echo $row['nombre'];?></td>
                                    <td><?php echo $row['tipo'];?></td>
                                    <td>
                                      <img src="data:<?php echo $row['tipo'];?>;base64,<?php echo base64_encode($row['imagen']);?>">

                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                
                            </tfoot>
                    </table>
                </div>
                
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