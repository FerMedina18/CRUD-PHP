<?php
    include("conexion.php");
    $con=conection();

    $cod_estudiante=$_POST['cod_estudiante'];
    $dni=$_POST['dni'];
    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];

    $sql="Insert into alumno Values('$cod_estudiante', '$dni', '$nombres', '$apellidos')";
    $query=mysqli_query($con, $sql);

    if($query){
        Header("Location: alumno.php");
    }else{

    }
?>