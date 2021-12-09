<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <meta charset="utf-8">
    <title>Consulta Usuarios</title>

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
      <li class="f"><a href="consultausu.php" style="font-family: 'Pacifico', cursive; font-size: 1.3rem;">Usuarios</a></li>
      <li class="f"><a href="consultaAlumnos.php" style="color: yellowgreen; font-family: 'Pacifico', cursive; font-size: 1.3rem;" class="active">Alumnos</a></li>
      <li class="a"><button onclick="window.location.href='login/salir.php'" name="btncerrar" type="button" style="border-color: #FF5733; color: #FF5733; font-family: 'Pacifico', cursive;" class="btn btn-outline">Cerrar Sesión</button></li>

  </ul>
  </div>
  <!-- Fin NavBar -->


<h1>Alumnos<span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="..." data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>


<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<style>
    th,td {
        padding: 0.4rem !important;
        vertical-align: middle;
    }
</style>


<div class="container" style="padding: 5px; background: white; width: 1500px; height: auto; margin: 0vw 2vw; border-radius: 10px; box-shadow: 0px 0px 10px 0px #323435; display:block;
        margin-left: auto;
        margin-right: auto;">

<table id="tablax" class="table table-striped table-hover" style="text-align: center;">
    <thead>
        <th style="text-align:center;vertical-align: middle;">ID</th>
        <th style="text-align:center;vertical-align: middle;">Alumno</th>
        <th style="width:150px;text-align:center;vertical-align: middle;">Grado, especialidad y grupo:</th>
        <th style="text-align:center;vertical-align: middle;">No. de control</th>
        <th style="text-align:center;vertical-align: middle;">Tel</th>
        <th style="text-align:center;vertical-align: middle;">Correo</th>
    </thead>
    <tbody>
      <?php
        include("conexion.php");

        $query="select * from tbalumnos";
        $resultado=$conexion->query($query);
        while($row=$resultado->fetch_assoc()){
       ?>
       <tr>
         <td style="text-align:center;vertical-align: middle;"><?php echo $row['idAlumno'] ?></td>
         <td style="text-align:center;vertical-align: middle;"><?php echo $row['alumno'] ?></td>
         <td style="text-align:center;vertical-align: middle;"><?php echo $row['grado'] ?></td>
         <td style="text-align:center;vertical-align: middle;"><?php echo $row['ncontrol'] ?></td>
         <td style="text-align:center;vertical-align: middle;"><?php echo $row['tel'] ?></td>
         <td style="text-align:center;vertical-align: middle;"><?php echo $row['correo'] ?></td>
       </tr>
       <?php


     }

     ?>
    </tbody>
</table>
<form class="" action="funcionesBD.php" method="post">
  <button type="submit" name="btnAAlumno1" class="btn btn-primary btn-sm & centrado" style="width: 250px; height: 40px; font-size: 1.1rem;">Agregar Alumno</button>
</form>
</div>
</div>

<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
    </script>
<!-- DATATABLES -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
</script>
<!-- BOOTSTRAP -->
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js">
</script>
<script>
    $(document).ready(function () {
        $('#tablax').DataTable({
            language: {
                processing: "Tratamiento en curso...",
                search: "Buscar&nbsp;:",
                lengthMenu: "Agrupar de _MENU_ objetos",
                info: "Mostrando del objeto _START_ al _END_ de un total de _TOTAL_ objetos",
                infoEmpty: "No existen datos.",
                infoFiltered: "(filtrado de _MAX_ elementos en total)",
                infoPostFix: "",
                loadingRecords: "Cargando...",
                zeroRecords: "No se encontraron datos con tu busqueda",
                emptyTable: "No hay datos disponibles en la tabla.",
                paginate: {
                    first: "Primero",
                    previous: "Anterior",
                    next: "Siguiente",
                    last: "Ultimo"
                },
                aria: {
                    sortAscending: ": active para ordenar la columna en orden ascendente",
                    sortDescending: ": active para ordenar la columna en orden descendente"
                }
            },
            scrollY: 400,
            lengthMenu: [ [10, 25, -1], [10, 25, "All"] ],
        });
    });
</script>


<script src="js/typer.js"></script>
</body>
</html>
