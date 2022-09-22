<?php

include('../connection/connection.php');

$phpcodigoempresa = $_GET['id'];

$deleteempresa = "DELETE FROM empresa WHERE codigo = '$phpcodigoempresa'";

$resultado = mysqli_query($connection,$deleteempresa);

header ('Location: ../empresas.php')

?>

