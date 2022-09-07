<?php

include('../connection/connection.php');

$phpcodigofabricante = $_GET['id'];

$deletefabricante = "DELETE FROM fabricante WHERE codigo = '$phpcodigofabricante'";

$resultado = mysqli_query($connection,$deletefabricante);

header ('Location: ../fabricantes.php')

?>

