<?php
        //include es importa archio de conexion
        include('../connection/connection.php');
        
        

        $phpId = $_POST['inputId'];
        $phpNombre = $_POST['inputNombre'];
        $phpPrecio = $_POST['inputPrecio'];
        $phpProveedor = $_POST['inputProveedor'];
        

        
       $updateProducto = "UPDATE producto SET nombre = '$phpNombre', precio = '$phpPrecio', codigo_fabricante = '$phpProveedor ' WHERE codigo = '$phpId'";
       
       

        $resultado = mysqli_query($connection,$updateProducto);



        header ('location:../productos.php')

       


    ?>  

