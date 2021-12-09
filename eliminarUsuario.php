<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Agregar herramienta</title>
    <!-- Validación sesiones -->
        <?php
        session_Start();
        $usuario= $_SESSION['username'];

        if(!isset($usuario))
          header("location: index.php")
         ?>
    <!-- Fin  Validación sesiones -->
  </head>
  <body>

    <!-- NavBar -->
    <div class="navbar">
        <img src="./imagenes/cecyteqlogo1.png" class="logo" alt="Main Logo">
    <ul>
    <li class="a"><button onclick="window.location.href='login/salir.php'" name="btncerrar" type="button" style="border-color: #FF5733; color: #FF5733; font-family: 'Pacifico', cursive;" class="btn btn-outline">Cerrar Sesión</button></li>
    </ul>
    </div>
    <!-- Fin NavBar -->
    <?php
        include("conexion.php");
        $idUsuario=$_REQUEST['idUsuario'];
        $query="select * from tbusuarios where idUsuario ='$idUsuario'";
        $resultado=$conexion->query($query);
        $row=$resultado->fetch_assoc();

       ?>



    <!--Formulario index -->

            <form class="contenedorform"  action="funcionesBD.php?idUsuario=<?php echo $row['idUsuario'] ?>"  method="POST" enctype="multipart/form-data">
                    <center><h1 style="text-align: center; color:#4C7295;display:inline-block;">¿Desea eliminar al usuario <?php echo "<h1 style=color:red;display:inline-block; >".$row['usuario']."</h1>" ?></h1><h1 style="display:inline-block; color:#4C7295; ">?</h1></center>
                    <br>
                  <div class="col text-center">
                     <button type="submit" name="btnborrarusuario" class="btn btn-outline-danger" style="width: 150px; height: 60px; font-size: 1.1rem;">Si</button>
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <button type="submit" name="btnCancelarborrarusuario" class="btn btn-outline-success" style="width: 150px; height: 60px; font-size: 1.1rem;">No</button>
                  </div>
            </form>


    <!--Fin Formulario registro de herramientas -->




        <!-- JS para que los h1 se vean mamalon -->
        <script src="js/typer.js"></script>
        <!-- JS para que no acepte campos vacios -->
        <script src="js/camposvacios.js"></script>
  </body>
</html>
