<?php

include('../connection/connection.php');

//print_r($_POST);

if(isset($_POST['enviar'])){

    $phpNombre = $_POST['inputNombre'];
    $phpPrecio = $_POST['inputPrecio'];
    $phpIndustria = $_POST['inputIndustria'];

    $insertModelo = "INSERT INTO modelo (nombre, precio, codigo_empresa) Value('$phpNombre', '$phpPrecio', '$phpIndustria')";

    $resultado = mysqli_query($connection,$insertModelo);

}

header ('location: ../modelos.php')

?>