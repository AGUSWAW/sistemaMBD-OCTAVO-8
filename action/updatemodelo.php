<?php
        //include es importa archio de conexion
        include('../connection/connection.php');
        
        

        $phpId = $_POST['inputId'];
        $phpNombre = $_POST['inputNombre'];
        $phpPrecio = $_POST['inputPrecio'];
        $phpIndustria = $_POST['inputIndustria'];
        

        
       $updateIndustria= "UPDATE modelo SET nombre = '$phpNombre', precio = '$phpPrecio', codigo_empresa = '$phpIndustria ' WHERE codigo = '$phpId'";
       
       

        $resultado = mysqli_query($connection,$updateIndustria);



        header ('location:../modelos.php')

       


    ?>  

