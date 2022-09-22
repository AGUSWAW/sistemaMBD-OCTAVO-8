<?php

include('../connection/connection.php');

print_r($_POST);

if(isset($_POST['enviar'])){

    $phpNombre = $_POST['inputNombre'];

    $insertFabricante = "INSERT INTO empresa (nombre) Value('$phpNombre')";

    $resultado = mysqli_query($connection,$insertFabricante);

}

header ('location: ../empresas.php')

?>