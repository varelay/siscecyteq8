<?php
session_start();
  include("conexion.php");
if (isset($_POST['btnAHerramienta'])) {
  echo "<script>window.location='formherra.php'</script>";
}

if (isset($_POST['btnAUsuario'])) {
  echo "<script>window.location='formUsuarios.php'</script>";
}

if (isset($_POST['btnAQuimico'])) {
  echo "<script>window.location='formQuimicos.php'</script>";
}




if (isset($_POST['btnVolverAAAlumno'])) {
  echo "<script> window.location='formPrestarHerra.php'</script>";
}
//Volver de detalles historial a historial prestamo
if (isset($_POST['btnVolverPHerramienta'])) {
  echo "<script> window.location='consultaHistorialPrestamos.php'</script>";
}

//Volver de detalles prestamo a  prestamo
if (isset($_POST['btnVolverHerramientaPrestamo'])) {
  echo "<script> window.location='consultaPrestamos.php'</script>";
}
//Volver de detalles prestamo a  prestamo
if (isset($_POST['btnVolverAAlumno'])) {
  echo "<script> window.location='formPrestarHerra.php'</script>";
}

//volver borrar usuario 
if (isset($_POST['btnCancelarborrarusuario'])) {
  echo "<script> window.location='consultausu.php'</script>";
}

//boton borrar usuario 
if (isset($_POST['btnborrarusuario'])) {
  $idUsuario= $_REQUEST['idUsuario'];
  $query= "DELETE FROM tbusuarios WHERE idUsuario='$idUsuario' ";
  $resultado_eliminar = $conexion -> query($query);
  if($resultado_eliminar ){
    echo "<script> alert('Si se borro');window.location='consultausu.php'</script>";
  } else {
    echo "No se borro, favor de intentar de nuevo";
  }
}

//Volver de agregar alumnos a menu
if (isset($_POST['btnVolverAAlumno1'])) {
  echo "<script> window.location='consultaAlumnos.php'</script>";
}

//Volver de agregar alumnos a menu
if (isset($_POST['btnAAlumno1'])) {
  echo "<script> window.location='formAlumnos1.php'</script>";
}

//Volver de a invquimicos
if (isset($_POST['btnCancelarborrarquimico'])) {
  echo "<script> window.location='invquimicos.php'</script>";
}


if (isset($_POST['btnAAlumno2'])) {

  $alumno = $_POST['alumno'];
  $grado = $_POST['grado'];
  $ncontrol = $_POST['ncontrol'];
  $tel = $_POST['tel'];
  $correo = $_POST['correo'];

  $query= "insert into tbalumnos(alumno,grado,ncontrol,tel,correo) values('$alumno','$grado','$ncontrol','$tel','$correo')";

  $resultado = $conexion -> query($query);

  if($resultado){
    echo "<script>window.location='consultaAlumnos.php'</script>";
  } else {
    echo "Error favor de intentar de nuevo";
  }
}


//Volver de detalles prestamo a  prestamo
if (isset($_POST['btnVolverAeditarprestar'])) {

  $alumno=$_POST['alumno'];
  echo "<script> window.location='editarPrestarHerramienta.php?alumno=$alumno'</script>";
}

//btnAHerramientaPrestamo2 Boton agregar herramienta
if (isset($_POST['btnAHerramientaPrestamo2'])) {
  $alumno=$_POST['nombrealumno'];
  echo "<script> window.location='formPrestarMasHerra.php?alumno=$alumno'</script>";
}

//Boton Agregar Alumno
if (isset($_POST['btnAAlumno'])) {
  $alumno = $_POST['alumno'];
  $grado = $_POST['grado'];
  $ncontrol = $_POST['ncontrol'];
  $tel = $_POST['tel'];
  $correo = $_POST['correo'];

  $query= "insert into tbalumnos(alumno,grado,ncontrol,tel,correo) values('$alumno','$grado','$ncontrol','$tel','$correo')";

  $resultado = $conexion -> query($query);

  if($resultado){
    echo "<script>window.location='formPrestarHerra.php'</script>";
  } else {
    echo "Error favor de intentar de nuevo";
  }
}
//Boton Prestar Herramienta
if (isset($_POST['btnPrestarHerra'])) {
  $alumno = $_POST['alumno'];
  $herramientas = $_POST['herramientas'];
  $fecha = $_POST['fecha'];



  foreach($herramientas as $hobrow){
    //echo $hobrow;
    $query2= "insert into tbprestamos(alumno,herramientas,fecha) values('$alumno','$hobrow','$fecha')";
    $query3="insert into tbhistprestamos(alumno,herramientas,fecha,estatus) values('$alumno','$hobrow','$fecha','No entregado')";
    
    $resultado= mysqli_query($conexion, $query2);
    $resultado2= mysqli_query($conexion, $query3);
  }
    if($resultado && $resultado2){
      $_SESSION['mensaje']="Prestamo registrado";
      header("Location: formPrestarHerra.php");
    } else{
      echo "<script> alert('Error favor de intentar de nuevo');window.location='formPrestarHerra.php'</script>";
    }


  //$query3= "insert into tbpedorra(alumno,herramientas) values('$alumno','$herramientas')";

  //$resultado3 = $conexion -> query($query3);
/*
  if($resultado3){
    echo "<script> alert('Si jalo');window.location='formPrestarHerra.php'</script>";
  } else {
    echo "no jalo";
  }*/
}

//tbherramientas
if (isset($_POST['btnHerramienta'])) {
  $herra = $_POST['herramienta'];
  $noinv = $_POST['invh'];
  $cantidad = $_POST['canth'];
  $marcah = $_POST['marcah'];
  $infoa = $_POST['infoh'];
  $Imagenh = addslashes(file_get_contents($_FILES['Imagenh']['tmp_name']));

  $query= "insert into tbherramientas(herramienta,inv,cantidad,marca,observ,Imagenh) values('$herra','$noinv','$cantidad','$marcah','$infoa','$Imagenh')";

  $resultado1 = $conexion -> query($query);

  if($resultado1){
    echo "<script> window.location='formherra.php'</script>";
  } else {
    echo "Error favor de intentar de nuevo";
  }
}

//Boton Actualizar Herramientas
if  (isset($_POST['btnActualizarHerramienta'])){

  $idherramienta= $_REQUEST['idherramienta'];
  $herra = $_POST['herramienta'];
  $noinv = $_POST['invh'];
  $cantidad = $_POST['canth'];
  $marcah = $_POST['marcah'];
  $infoa = $_POST['infoh'];

  if (($_FILES['Imagenh']['tmp_name']!='')){
    $Imagenh = addslashes(file_get_contents($_FILES['Imagenh']['tmp_name']));
    $query= "UPDATE tbherramientas SET herramienta='$herra', inv='$noinv', cantidad='$cantidad', marca='$marcah', observ='$infoa', Imagenh='$Imagenh' WHERE idherramienta='$idherramienta' ";
    $resultado_actualizar = $conexion -> query($query);
    if($resultado_actualizar ){
      echo "<script>window.location='invherramientas.php'</script>";
    } else {
      echo "Error favor de intentar de nuevo";
    }
  } else {
    $query= "UPDATE tbherramientas SET herramienta='$herra', inv='$noinv', cantidad='$cantidad', marca='$marcah', observ='$infoa' WHERE idherramienta='$idherramienta' ";
    $resultado_actualizar = $conexion -> query($query);
    if($resultado_actualizar ){
      echo "<script>window.location='invherramientas.php'</script>";
    } else {
      echo "Error favor de intentar de nuevo";
    }
  }
}

//Boton de eliminar herramientas
if (isset($_POST['btnborrarherramienta'])){
  $idherramienta= $_REQUEST['idherramienta'];
  $query= "DELETE FROM tbherramientas WHERE idherramienta='$idherramienta' ";
  $resultado_eliminar = $conexion -> query($query);
  if($resultado_eliminar ){
    echo "<script>window.location='invherramientas.php'</script>";
  } else {
    echo "Error favor de intentar de nuevo";
  }
}

//Boton de cancelar eliminar herramientas
if (isset($_POST['btnCancelarborrarherramienta'])){

    echo "<script> window.location='invherramientas.php'</script>";
}

if (isset($_POST['btnborrarherramienta'])){
  $idherramienta= $_REQUEST['idherramienta'];
  $query= "DELETE FROM tbherramientas WHERE idherramienta='$idherramienta' ";
  $resultado_eliminar = $conexion -> query($query);
  if($resultado_eliminar ){
    echo "<script> alert('Si se borro');window.location='invherramientas.php'</script>";
  } else {
    echo "Error favor de intentar de nuevo";
  }
}

//Botón crear Usuario
if (isset($_POST['btnCrearusu'])) {
  $usuario = $_POST['usuario'];
  $pass = $_POST['pass'];
  $cpass = $_POST['cpass'];

if ($pass===$cpass) {
  $q= "INSERT INTO tbusuarios(usuario,pass) VALUES ('$usuario','$pass') ";
  $resultado = $conexion -> query($q);
  if($resultado){
    echo "<script> alert('Usuari@ $usuario se agregó correctamente!');window.location='formUsuarios.php'</script>";
  } else {
    echo "Error favor de intentar de nuevo";
  }
} else {
  echo "<script> alert('Las contraseñas no coinciden'); window.location='formUsuarios.php'; </script> ";
}

}

/* ------------------------------------------ Menu Químicos ---------------------------------- */
//Boton Actualizar Quimico
if  (isset($_POST['btnActualizarQuimico'])){

  $idquimico= $_REQUEST['idquimico'];
  $quimico = $_POST['quimico'];
  $inv = $_POST['inve'];
  $unidad = $_POST['unidad'];
  $cantidad = $_POST['cantidad'];
  $caducidad = $_POST['caducidad'];
  $info = $_POST['info'];

  if (($_FILES['Imagen']['tmp_name']!='')){
    $Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
    $query= "UPDATE tbquimicos SET quimico='$quimico', inv='$inv', unidad='$unidad', cantidad='$cantidad', caducidad='$caducidad', info='$info', Imagen='$Imagen' WHERE idquimico='$idquimico' ";
    $resultado_actualizar = $conexion -> query($query);
    if($resultado_actualizar ){
      echo "<script>window.location='invquimicos.php'</script>";
    } else {
      echo "Error favor de intentar de nuevo";
    }
  } else {
    $query= "UPDATE tbquimicos SET quimico='$quimico', inv='$inv', unidad='$unidad', cantidad='$cantidad', caducidad='$caducidad', info='$info' WHERE idquimico='$idquimico' ";
    $resultado_actualizar = $conexion -> query($query);
    if($resultado_actualizar ){
      echo "<script>window.location='invquimicos.php'</script>";
    } else {
      echo "Error favor de intentar de nuevo";
    }
  }
}



//Boton Agregar Quimico
if (isset($_POST['btnQuimico'])) {
  $quimi = $_POST['quimico'];
  $inv = $_POST['inve'];
  $unidad = $_POST['unidad'];
  $cantidad = $_POST['cantidad'];
  $cadu = $_POST['caducidad'];
  $informacion = $_POST['info'];
  $Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

  $query= "insert into tbquimicos(quimico,inv,unidad,cantidad,caducidad,info,Imagen) values('$quimi','$inv','$unidad','$cantidad','$cadu','$informacion','$Imagen')";

  $resultado = $conexion -> query($query);

  if($resultado){
    echo "<script>window.location='formQuimicos.php'</script>";
  } else {
    echo "Error favor de intentar de nuevo";
  }
}

//borrar quimico
if (isset($_POST['btnborrarquimico'])){

  $idquimico= $_REQUEST['idquimico'];
  $query= "DELETE FROM tbquimicos WHERE idquimico='$idquimico' ";
  $resultado_eliminar = $conexion -> query($query);
  if($resultado_eliminar ){
    echo "<script> alert('Si se borro');window.location='invquimicos.php'</script>";
  } else {
    echo "Error favor de intentar de nuevo";
  }
}

//cancelarborrar quimico
if (isset($_POST['btnCancelarborrarquimico'])){


    echo "<script> window.location='invquimicos.php'</script>";

}

//Boton Prestar Químico
if (isset($_POST['btnPrestarQuimico'])) {
  $alumno = $_POST['alumno'];
  $quimicos = $_POST['quimicos'];
  $fecha = $_POST['fecha'];



  foreach($quimicos as $hobrow){
    //echo $hobrow;
    $query2= "insert into tbprestamosquimi(alumno,quimico,fecha) values('$alumno','$hobrow','$fecha')";
    $query3="insert into tbhistprestamosquimi(alumno,quimico,fecha,estatus) values('$alumno','$hobrow','$fecha','No entregado')";
    
    $resultado= mysqli_query($conexion, $query2);
    $resultado2= mysqli_query($conexion, $query3);
  }
    if($resultado && $resultado2){
      $_SESSION['mensaje']="Prestamo registrado";
      header("Location: formPrestarQuimicos.php");
    } else{
      echo "<script> alert('Error favor de intentar de nuevo');window.location='formPrestarQuimicos.php'</script>";
    }


  //$query3= "insert into tbpedorra(alumno,herramientas) values('$alumno','$herramientas')";

  //$resultado3 = $conexion -> query($query3);
/*
  if($resultado3){
    echo "<script> alert('Si jalo');window.location='formPrestarHerra.php'</script>";
  } else {
    echo "no jalo";
  }*/
}

if(isset($_POST['btnVolverQuimicoPrestamo'])){
  echo "<script>window.location='consultaPrestamosQuimicos.php'</script>";
}

if(isset($_POST['btnVolverPQuimico'])){
  echo "<script>window.location='consultaHistorialPrestamosQuimicos.php'</script>";
}

//Volver de detalles prestamo a  prestamo
if (isset($_POST['btnVolverAeditarprestarquimi'])) {

  $alumno=$_POST['alumno'];
  echo "<script> window.location='editarPrestarQuimico.php?alumno=$alumno'</script>";
}

//btnAHerramientaPrestamo2 Boton agregar herramienta
if (isset($_POST['btnAQuimicosPrestamo2'])) {
  $alumno=$_POST['nombrealumno'];
  echo "<script> window.location='formPrestarMasQuimi.php?alumno=$alumno'</script>";
}

//Volver de detalles prestamo a  prestamo
if (isset($_POST['btnVolverAeditarprestarq'])) {

  $alumno=$_POST['alumno'];
  echo "<script> window.location='editarPrestarQuimico.php?alumno=$alumno'</script>";
}

//borrar inve
if (isset($_POST['btnborrarinve'])){

  $idInventario= $_REQUEST['idInventario'];
  $query= "DELETE FROM tbinventariotoño WHERE idInventario='$idInventario' ";
  $resultado_eliminar = $conexion -> query($query);
  if($resultado_eliminar ){
    echo "<script> alert('Si se borro');window.location='invcompleto.php'</script>";
  } else {
    echo "Error favor de intentar de nuevo";
  }
}

//cancelarborrar inve
if (isset($_POST['btnCancelarborrarinve'])){


    echo "<script> window.location='invcompleto.php'</script>";

}


 ?>

