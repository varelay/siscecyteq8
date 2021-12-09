<?php
    include("conexion.php");

    $alumno=$_REQUEST['alumno'];

    $query= "DELETE FROM tbprestamos WHERE alumno='$alumno'";
    $query2= "UPDATE tbhistprestamos SET estatus='Entregado' WHERE alumno='$alumno'";
    $resultado= $conexion->query($query);
    $resultado2= $conexion->query($query2);

    if($resultado && $resultado2){
        echo "<script> window.location='consultaPrestamos.php'</script>";
    } else {
        echo "no jalo";
    }
    ?>