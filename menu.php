<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <meta charset="utf-8">
    <title>Menú</title>
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
      <li class="f"><a href="menu.php" style="color: yellowgreen; font-family: 'Pacifico', cursive; font-size: 1.3rem;" class="active">Inicio</a></li>
      <li class="f"><a href="consultausu.php" style="font-family: 'Pacifico', cursive; font-size: 1.3rem;">Usuarios</a></li>
      <li class="f"><a href="consultaAlumnos.php" style="font-family: 'Pacifico', cursive; font-size: 1.3rem;">Alumnos</a></li>
      <li class="a"><button onclick="window.location.href='login/salir.php'" name="btncerrar" type="button" style="border-color: #FF5733; color: #FF5733; font-family: 'Pacifico', cursive;" class="btn btn-outline">Cerrar Sesión</button></li>
  </ul>
  </div>
  <!-- Fin NavBar -->

<h1>Hola! <?php echo "$usuario"; ?><span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="..." data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>


<div class="contmenu">


<div class="contenedor">
  <div class="card">
    <a class="oculto" href="invherramientas.php">
    <div class="imgBx">
      <img src="./imagenes/img3.jpg" alt="">

    <div class="content">
      <br>
      <br>
      <label style="  font-family: 'Pacifico', cursive; font-size: 2rem;">Herramientas</label>
      <label >Podras agregar nuevas herramientas, ver las existentes y hacer prestamos.</label>
      </div>
    </div>
    </a>
  </div>

  <div class="card">
    <a class="oculto "href="invquimicos.php">
    <div class="imgBx">
      <img src="./imagenes/img2.jpg" alt="">

    <div class="content">
      <br>
      <br>
      <label style="font-family: 'Pacifico', cursive; font-size: 2rem;">Quimícos</label>
      <label >Podras agregar nuevos quimícos y materiales, ver los existentes y su información.</label>
      </div>
    </div>
    </a>
  </div>

  <div class="card">
    <a class="oculto "href="invcompleto.php">
    <div class="imgBx">
      <img src="./imagenes/img6.jpg" alt="">

    <div class="content">
      <br>
      <br>
      <label style="font-family: 'Pacifico', cursive; font-size: 2rem;">Inventario</label>
      <label></label>
      </div>
    </div>
    </a>
  </div>

  </div>
    </div>
<script src="js/typer.js"></script>
</body>
</html>
