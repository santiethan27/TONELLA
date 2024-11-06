<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CATEGORIAS</title>
    <?php require_once "../controller/dependenciasforms.php"; ?>
</head>

<body>
<?php require_once "menu.php"; ?>

<div class="container-fluid row">
        <center><h1>CATEGORIA DEL PRODUCTO</h1></center>        

        <form class="col-4 p-4" action="../controller/registrarcat.php" method="POST">
              <div class="form-group">
                <label for="tipo_producto">Nombre de la categoria</label>
                <input name="tipo_producto" type="text" class="form-control" id="tipo_producto" aria-describedby="emailHelp">
              </div> <br>
            <button type="submit" class="btn text-light" style="background-color: #790EC2">AGREGAR CATEGORIA</button>
          </form>    <br>
          <div class="col-4 p-4">

    <table class="table">
    <thead class="text-light" style="background-color: #790EC2" >
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE CATEGORIA</th>
      <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php 
    include "../model/conexion.php";
    $sql = $conexion->query("SELECT * from categorias");
    while ($datos = $sql->fetch_object()){?>
          <tr>
      <td><?= $datos->id_categoria ?></td>
      <td><?= $datos->categorian ?></td>
      <td>
      <?php echo "<a href='editarcategoria2.php?id=".$datos->id_categoria."' class='btn btn-warning' role='button'  aria-pressed='true'>Editar</a>
      <a href='../controller/eliminarcategoria.php?id=".$datos->id_categoria."' class='btn btn-danger' role='button'  aria-pressed='true'>Eliminar</a>" ?>
    </td>
    </tr>

 <?php 
  }
    ?>
  </tbody>
</table>

</div>
</div>
</body>
</html>