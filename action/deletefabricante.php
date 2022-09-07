<?php

include('../connection/connection.php');

$phpcodigoFabricante = $_Get['id'];

$deleteFabricante = "DELETE FROM fabricante WHERE codigo = '$phpcodigoFabricante'";

$resultado = mysqli_query($connection,$deleteFabricante);

header ('Location: ../fabricantes.php')

?>

