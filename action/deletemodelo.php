<?php

include('../connection/connection.php');

$phpcodigoModelo = $_GET['id'];

$deleteModelo = "DELETE FROM modelo WHERE codigo = '$phpcodigoModelo'";

$resultado = mysqli_query($connection,$deleteModelo);

header ('Location: ../modelos.php')

?>

