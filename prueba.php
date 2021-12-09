<?php
  include("conexion.php");
  $q="select idherramienta,herramienta from tbherramientas";
  $resul=mysqli_query($conexion,$q);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="select2/select2.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="select2/select2.min.js"></script>
    <title></title>
  </head>
  <body>

      <select id="controlBuscador"  multiple="multiple">
        <?php while ($ver=mysqli_fetch_row($resul)) {?>
        <option value="<?php echo $ver[0]; ?>">
          <?php echo $ver[1] ?>
        </option>
      <?php } ?>
      </select>
      
  </body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    $('#controlBuscador').select2();
  });
</script>
