<?php
    include("conexion.php");
    $con=conection();

    $cod_estudiante=$_POST['cod_estudiante'];
    $dni=$_POST['dni'];
    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];

    $sql="Update alumno set dni='$dni', nombres='$nombres', apellidos='$apellidos' Where cod_estudiante='$cod_estudiante'";
    $query=mysqli_query($con, $sql);

    if($query){
        Header("Location: alumno.php");
    }
?>