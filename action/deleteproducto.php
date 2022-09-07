<?php

include('../connection/connection.php');

$phpcodigoProducto = $_Get['id'];

$deleteProducto = "DELETE FROM fabricante WHERE codigo = '$phpcodigoProducto'";

$resultado = mysqli_query($connection,$deleteProducto);

header ('Location: ../productos.php')

?>

