<?php

require("../conexion.php");

session_Start();
if (isset($_POST['btnLogin'])) {
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

$q= "SELECT COUNT(*) as contar from tbusuarios where usuario = '$usuario' and pass = '$pass' ";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
  $_SESSION['username'] = $usuario;
  header("location: ../menu.php");
} else {
    echo "<script> alert('Contraseña Incorrecta');window.location='../index.php'</script>";
}
}


 ?>
