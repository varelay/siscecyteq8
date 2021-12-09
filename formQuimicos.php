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
        <li class="f"><a href="menu.php" style="font-family: 'Pacifico', cursive; font-size: 1.3rem;">Inicio  </a></li>
        <li class="f"><a href="invquimicos.php" style="font-family: 'Pacifico', cursive; font-size: 1.3rem;">Menú de químicos</a></li>
        <li class="f"><a href="formQuimicos.php" style="color: yellowgreen; font-family: 'Pacifico', cursive; font-size: 1.3rem;"  class="active">Agregar Químicos</a></li>
        <li class="a"><button onclick="window.location.href='login/salir.php'" name="btncerrar" type="button" style="border-color: #FF5733; color: #FF5733; font-family: 'Pacifico', cursive;" class="btn btn-outline">Cerrar Sesión</button></li>
    </ul>
    </div>
    <!-- Fin NavBar -->

    <!--Formulario index -->

<form class="contenedorform"  style="margin: 0vw 30vw;height: auto;" action="funcionesBD.php"  method="POST" enctype="multipart/form-data">

  
                                                <div class="form-group">
                                                <label >Químico u objeto:</label>
                                                <input type="text" class="form-control" id="" name="quimico" required>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                <label >No. Inventario:</label>
                                                <input type="text" class="form-control" id="" name="inve" required>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                <label >Cantidad:</label>
                                                <input type="number" class="form-control" id="" name="cantidad" required>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                <label >Unidad:</label>
                                                <input type="text" class="form-control" id="" name="unidad" required>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                <label>Caducidad:</label>&nbsp;&nbsp;<label style="color: gray;">(Solo si aplica)</label>
                                                <input type="date" class="form-control" id="" name="caducidad">
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                <label>Información General:</label>
                                                <textarea type="text" class="form-control" rows="3" id="" name="info" required></textarea>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                  <label class="form-group">Imagen: </label><br>
                                                  <input type="file" class="form-control" id="Imagen" name="Imagen" required>
                                                </div>
                                                <br>
                                           <div class="col text-center">
                                               <button type="submit" name="btnQuimico" class="btn btn-primary btn-sm" style="width: 150px; height: 60px; font-size: 1.1rem;">Agregar Químico</button>
                                           </div>
                                         </form>
  
            


    <!--Fin Formulario registro de herramientas -->




        <!-- JS para que los h1 se vean mamalon -->
        <script src="js/typer.js"></script>
        <!-- JS para que no acepte campos vacios -->
        <script src="js/camposvacios.js"></script>
  </body>
</html>
