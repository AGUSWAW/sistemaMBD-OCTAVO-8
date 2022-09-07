<?php

include('../connection/connection.php');

$phpcodigoProducto = $_GET['id'];

$deleteProducto = "DELETE FROM producto WHERE codigo = '$phpcodigoProducto'";

$resultado = mysqli_query($connection,$deleteProducto);

header ('Location: ../productos.php')

?>

