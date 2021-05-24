<?php

function conection(){
    $host="localhost";
    $user="id16883147_root";
    $password="Auditoria2021*";

    $bd="id16883147_pruebaphp";

    $con=mysqli_connect ($host, $user, $password);

    mysqli_select_db($con, $bd);

    return $con;
}

?>