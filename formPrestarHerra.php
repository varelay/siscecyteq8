<?php
  include("conexion.php");
  $q="select herramienta from tbherramientas";
  $resul=mysqli_query($conexion,$q);
  $q2="select alumno from tbalumnos";
  $resul2=mysqli_query($conexion,$q2);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="select2/select2.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="select2/select2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilosform.css">
    <title>Prestar Herramienta</title>
    <!-- Validación sesiones -->
        <?php
        session_Start();
        $usuario= $_SESSION['username'];

        if(!isset($usuario))
          header("location: index.php")
         ?>
    <!-- Fin  Validación sesiones -->

    <style>
      h2{
        color: rgba(71, 170, 231, 1);
        text-emphasis: circle;
        text-align: center;
      }
    </style>

  </head>
  <body>
    <!-- NavBar -->
    <div class="navbar">
        <img src="./imagenes/cecyteqlogo1.png" class="logo" alt="Main Logo">
    <ul>
        <li class="f"><a href="menu.php" style="font-family: 'Pacifico', cursive; font-size: 1.3rem;">Inicio</a></li>
        <li class="f"><a href="invherramientas.php" style=" font-family: 'Pacifico', cursive; font-size: 1.3rem;" >Menú de herramientas</a></li>
        <li class="f"><a href="formPrestarHerra.php" style="color: yellowgreen; font-family: 'Pacifico', cursive; font-size: 1.3rem;" class="active">Prestar Herramienta</a></li>
        <li class="f"><a href="consultaPrestamos.php" style="font-family: 'Pacifico', cursive; font-size: 1.3rem;">Prestamos Activos</a></li>
        <li class="f"><a href="consultaHistorialPrestamos.php" style="font-family: 'Pacifico', cursive; font-size: 1.3rem;">Historial Prestamos</a></li>
        <li class="a"><button onclick="window.location.href='login/salir.php'" name="btncerrar" type="button" style="border-color: #FF5733; color: #FF5733; font-family: 'Pacifico', cursive;" class="btn btn-outline">Cerrar Sesión</button></li>
    </ul>
    </div>
    <!-- Fin NavBar -->



    <!--Formulario index -->
<div class="contindex">

            <h1>Prestar herramienta<span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="..." data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>


              <div class="contenedorform">

  <form class="needs-validation" novalidate action="funcionesBD.php"  method="POST">
  <?php  
  if(isset($_SESSION['mensaje'])){
    echo "<h2>".$_SESSION['mensaje']."</h2>";
    unset($_SESSION['mensaje']);
    }
    date_default_timezone_set('America/Mexico_City');
    $fecha_actual=date("d-m-Y H:i:s");
    ?>

              <div class="form-group & col mb-1">
              <label for="validationCustom01">Nombre del alumno:</label>
              <section style="text-align: center;">
                <select class="form-control" style="width: 100%;" id="controlBuscador2" name="alumno" required>
                  <?php while ($ver=mysqli_fetch_row($resul2)) {?>
                  <option value="">Selecciona un alumno</option>
                  <option value="<?php echo $ver[0]; ?>">
                    <?php echo $ver[0] ?>
                  </option>
                <?php } ?>
                </select> 
                <div class="invalid-feedback">
                    Ingrese nombre del alumno
              </div> 
            <div class="col mb-2">
              <a href="formAlumnos.php">Alumno sin registrar? Click aquí</a>
            </div>
            </section>

              <div class="form-group">
              <label>Herramientas:</label>
              <section style="text-align: center;">
                <select style="width: 100%;" id="controlBuscador"  multiple name="herramientas[]" required>
                  <?php while ($ver=mysqli_fetch_row($resul)) {?>
                  <option value="<?php echo $ver[0]; ?>">
                    <?php echo $ver[0] ?>
                  </option>
                <?php } ?>
                </select>
              <div class="invalid-feedback">
                    Ingrese una o más herramientas
              </div>
            </div>
              </section>
              <br>
            </div>

            <div class="col mb-3">
                    <label for="validationCustom01">Fecha y hora:</label>
                    <input type="datetime-local" class="form-control" id="" name="fecha" required>
                    <div style="text-align: center;" class="invalid-feedback">
                      Ingrese una fecha valida
                    </div>
                  </div>
              <div class="col text-center">
                  <button type="submit" name="btnPrestarHerra" class="btn btn-primary btn-sm" style="width: 500px; height: 50px; font-size: 1.1rem;">Registrar Prestamo</button>
                  
              </div>

              </form>
              </div>

</div>
    <!--Fin Formulario registro Videojuegos -->

        <!-- JS para que los h1 se vean mamalon -->
        <script src="js/typer.js"></script>
        <!-- JS para que no acepte campos vacios -->
        <script src="js/camposvacios.js"></script>
  </body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    $('#controlBuscador').select2({
      placeholder: "Introduzca todas las herramientas a prestar...",
    allowClear: true
    });
  });

  $(document).ready(function(){
    $('#controlBuscador2').select2({
      placeholder: "Selecciona un alumno",
      allowClear: true
    });

  });
</script>
