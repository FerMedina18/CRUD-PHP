<?php
    include("conexion.php");
    $con=conection();

    $cod_estudiante=$_GET['id'];

    $sql="Delete from alumno where cod_estudiante='$cod_estudiante'";
    $query=mysqli_query($con, $sql);

    if($query){
        Header("Location: alumno.php");
    }
?>