<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Comienza estilo de fondo CSS -->
    <style>
*{
  margin: 0;
  padding: 0;
  font-family: 'Poppins', sans-serif;
}

body{   
  
  background-image: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  color:white;
  
background-size: 400% 400%;
animation: gradient 15s ease infinite;
height: 08vh;    
}

.texto{
color: white;
text-align: center;
margin: 300px 0;
font-size: 28px;
}

@keyframes gradient {
0% {
background-position: 0% 50%;
    }
50% {
background-position: 100% 50%;
    }
100% {
background-position: 0% 50%;
}

  }
</style>  
<!-- Finaliza estilo de fondo CSS -->

    <title>EDITAR FABRICANTE</title>
  </head>
  <body>

<div class="container">

<!-- inicio tabla -->
    <?php
        //include es importa archio de conexion
        include('../connection/connection.php');

        $phpId = $_GET['id'];

        //variable para enlistar toda la tabla de fabricante
        $consulta = "SELECT * FROM fabricante WHERE codigo = '$phpId'";
        //query de conexcion y query de listado
        $resultado = mysqli_query($connection,$consulta);
        //mientras haya algo de la tabla, seguria enlistando
        $fila = mysqli_fetch_array($resultado)
    ?>  

            
            <form action="updatefabricante.php" method="POST">
            <div class="mb-3">
            <br>
                <label class="form-label">Nombre fabricante</label>
                <input type="text" name="inputNombre" value="<?php echo $fila["nombre"] ?>" class="form-control">
                <input type="hidden" name="inputId" value="<?php echo $fila["codigo"] ?>">
                </div>
                <button type="submit" name="actualizar" class="btn btn-primary">Actualizar</button>
            </form>
    
        

  </tbody>
</table>

</div>
<!-- final tabla fabricante -->


    <!-- <h1>Hello, world!</h1> -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>