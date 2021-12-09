<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Iniciar Sesión</title>
  </head>
  <body>

    <!--Formulario index -->
<div class="contindex">


    <div class="banner-text">
            <h1>Iniciar sesion<span class="typer" id="some-id" data-delay="200" data-delim=":" data-words=".:..:..." data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>


              <div class="contenedorform">

                  <img  class="centrado " src="imagenes/cecynice1.png">



                  <form class="needs-validation" novalidate action="login/loguear.php"  method="POST">

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



              <div class="col text-center">
                  <button type="submit" name="btnLogin" class="btn btn-primary btn-sm" style="width: 150px; height: 50px; font-size: 1.1rem;">Iniciar Sesión</button>
              </div>

              </form>
              </div>

            </div>
</div>
    <!--Fin Formulario de index -->




        <!-- JS para que los h1 se vean mamalon -->
        <script src="js/typer.js"></script>
        <!-- JS para que no acepte campos vacios -->
        <script src="js/camposvacios.js"></script>
  </body>
</html>
