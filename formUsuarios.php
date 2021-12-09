<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Iniciar Sesión</title>
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
        <li class="f"><a href="menu.php" style="font-family: 'Pacifico', cursive; font-size: 1.3rem;">Inicio</a></li>
        <li class="f"><a href="consultausu.php" style="font-family: 'Pacifico', cursive; font-size: 1.3rem;">Usuarios</a></li>
        <li class="f"><a href="formUsuarios.php" style="color: yellowgreen; font-family: 'Pacifico', cursive; font-size: 1.3rem;"  class="active">Registrar Usuario</a></li>
        <li class="a"><button onclick="window.location.href='login/salir.php'" name="btncerrar" type="button" style="border-color: #FF5733; color: #FF5733; font-family: 'Pacifico', cursive;" class="btn btn-outline">Cerrar Sesión</button></li>
    </ul>
    </div>
    <!-- Fin NavBar -->



    <!--Formulario index -->
<div class="contindex">


    <div class="banner-text">
            <h1>Registrar Usuario<span class="typer" id="some-id" data-delay="200" data-delim=":" data-words=".:..:..." data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>


              <div class="contenedorform">


                  <form class="needs-validation" novalidate action="funcionesBD.php"  method="POST">

                    <div class="col mb-4">

                    </div>


                  <div class="col mb-3">
                    <label for="validationCustom01">Usuario:</label>
                    <input type="text" class="form-control" id="" name="usuario" required>
                    <div class="valid-feedback">
                      Tiene buena pinta!
                    </div>
                    <div class="invalid-feedback">
                      Ingrese un usuario
                    </div>
                  </div>



                      <div class="col mb-3">
                        <label for="validationCustom01">Contraseña:</label>
                        <input type="password" class="form-control" id="" name="pass" required>
                        <div class="valid-feedback">
                          Tiene buena pinta!
                        </div>
                        <div class="invalid-feedback">
                          Ingrese una contraseña
                        </div>
                      </div>


                      <div class="col mb-3">
                        <label for="validationCustom01">Confirmar Contraseña:</label>
                        <input type="password" class="form-control" id="" name="cpass" required>
                        <div class="valid-feedback">
                          Tiene buena pinta!
                        </div>
                        <div class="invalid-feedback">
                          Ingrese una contraseña
                        </div>
                      </div>



              <div class="col text-center">
                  <button type="submit" name="btnCrearusu" class="btn btn-primary btn-sm" style="width: 150px; height: 60px; font-size: 1.1rem;">Registrar Usuario</button>
              </div>

              </form>
              </div>

            </div>
</div>
    <!--Fin Formulario registro Videojuegos -->




        <!-- JS para que los h1 se vean mamalon -->
        <script src="js/typer.js"></script>
        <!-- JS para que no acepte campos vacios -->
        <script src="js/camposvacios.js"></script>
  </body>
</html>
