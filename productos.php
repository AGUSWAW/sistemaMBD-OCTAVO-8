<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PRODUCTO</title>
  </head>
  <body>


  <table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">precio</th>
    </tr>
  </thead>
  <tbody>

    <?php
        //include es importa archio de conexion
        include('connection/connection.php');
        //variable para enlistar toda la tabla de fabricante
        $consulta = "SELECT * FROM producto";
        //query de conexcion y query de listado
        $resultado = mysqli_query($connection,$consulta);
        //mientras haya algo de la tabla, seguria enlistando
        while ($fila = mysqli_fetch_array($resultado)){

    ?>  

    pero
    

    <tr>
      <th scope="row"><?php echo $fila["codigo"] ?></th>
      <td><?php echo $fila["nombre"] ?></td>
      <td><?php echo $fila["precio"] ?></td>
     
    </tr>
   
        <?php } //cierre while ?>

  </tbody>
</table>







    <!-- <h1>Hello, world!</h1> -->



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>