<?php
    include("conexion.php");

    $idPrestamo=$_REQUEST['idPrestamo'];
    $alumno=$_REQUEST['alumno'];

    $query= "DELETE FROM tbprestamos WHERE idPrestamo='$idPrestamo'";
    $query2= "UPDATE tbhistprestamos SET estatus='Entregado' WHERE idPrestamo='$idPrestamo' ";
    $resultado= $conexion->query($query);
    $resultado2= $conexion->query($query2);

    if($resultado && $resultado2){
        echo "<script> window.location='editarPrestarHerramienta.php?alumno=$alumno'</script>";
    } else {
        echo "no jalo";
    }
    ?>