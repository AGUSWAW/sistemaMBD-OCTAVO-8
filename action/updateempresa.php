<?php
        //include es importa archio de conexion
        include('../connection/connection.php');

        $phpId = $_POST['inputId'];
        $phpNombre = $_POST['inputNombre'];

        $updateEmpresa= " UPDATE empresa SET nombre = '$phpNombre' WHERE codigo = '$phpId'";

        $resultado = mysqli_query($connection,$updateEmpresa);



        header ('location:../empresas.php')

       


    ?>  