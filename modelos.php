<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  

    <title>MODELO</title>
  </head>
  <body>


  <div class="container">
  <br>



 <!-- inicio formulario -->
 <form action="action/insertmodelo.php" method="POST">
  <div class="mb-3">
       <label class="form-label">Nombre Modelo </label>
      <input type="text" name="inputNombre" class="form-control">
      <br>
      <label class="form-label">Precio </label>
      <input type="number" name="inputPrecio" class="form-control">
      <br>
       <label class="form-label">Industria </label>
       
   <!--  </div> -->
          <!--  select para los nombres de modelos -->
        <select name="inputIndustria" class="form-select form-select-md">
              <option selected>Seleccione Modelo</option>
              <br>
                <?php
                  //include es importa archio de conexion
                  include('connection/connection.php');
                  //variable para enlistar toda la tabla de modelos
                  $consulta = "SELECT empresa.codigo as codigo, empresa.nombre as codigo_empresa FROM empresa";
                  //query de conexcion y query de listado
                  $resultado = mysqli_query($connection,$consulta);
                  //mientras haya algo de la tabla, seguria enlistando
                  while ($fila = mysqli_fetch_array($resultado)){
               ?>  
                <option value="<?php echo $fila["codigo"] ?>"><?php echo $fila["codigo_empresa"] ?></option>              
                <?php } //cierre while ?>
        
        </select>
        <br>
     <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
     <br>
</form>
<!-- fin formulario -->
<br>

<!-- inicio tabla modelos -->
  <table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Industria</th>
      <th scope="col">Eliminar</th>
      <th scope="col">Editar</th>
    </tr>
    </tr>
  </thead>
  <tbody>

     <?php
        //include es importa archio de conexion
        include('connection/connection.php');
        //variable para enlistar toda la tabla de modelos
        $consulta = "SELECT modelo.codigo, modelo.nombre, precio,
        empresa.nombre as codigo_empresa FROM modelo INNER JOIN empresa ON modelo.codigo_empresa = empresa.codigo";
        //query de conexcion y query de listado
        $resultado = mysqli_query($connection,$consulta);
        //mientras haya algo de la tabla, seguria enlistando
        while ($fila = mysqli_fetch_array($resultado)){
      ?>  

    
    

    <tr>
      <th scope="row"><?php echo $fila["codigo"] ?></th>
      <td><?php echo $fila["nombre"] ?></td>
      <td><?php echo $fila["precio"] ?></td>
      <td><?php echo $fila["codigo_empresa"] ?></td>
      <td><a href="action/deletemodelo.php?id=<?php echo $fila["codigo"] ?>" class="btn btn-danger">Eliminar</a></td>    
      <td><a href="action/editarmodelo.php?id=<?php echo $fila["codigo"] ?>" class="btn btn-warning">Editar</a></td>        
     
    </tr>
   
        <?php } //cierre while ?>

  </tbody>
</table>
</div>

<!-- final tabla modelos -->





    <!-- <h1>Hello, world!</h1> -->



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>
