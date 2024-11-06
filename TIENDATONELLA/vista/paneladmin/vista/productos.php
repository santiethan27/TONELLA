<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTOS</title>
    <?php require_once "../controller/dependenciasforms.php"; ?>
</head>

<body>
<?php require_once "menu.php"; ?>
    <div class="container">

    <div class="row">

    <div class="col-sm-12">

        <center><h1>INGRESAR PRODUCTO</h1></center>        

        <form action="../controller/registrarprod.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombrep">NOMBRE DEL PRODUCTO</label>
                <input name="nombrep" type="text" class="form-control" id="nombrep" aria-describedby="emailHelp" >
              </div>
              <div class="form-group">
                <label for="valorp">VALOR PRODUCTO</label>
                <input name="valorp" type="text" class="form-control" id="valorp" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="descripcionp">DESCRIPCION DEL PRODUCTO</label>
                <input name="descripcionp" type="text" class="form-control" id="descripcionp" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="marcap">MARCA DEL PRODUCTO</label>
                <input name="marcap" type="text" class="form-control" id="marcap" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="categoriap">CATEGORIA DEL PRODUCTO</label>
                <input name="categoriap" type="number" class="form-control" id="categoriap" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="colorp">COLOR DEL PRODUCTO</label>
                <input name="colorp" type="text" class="form-control" id="colorp" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="imagen">IMAGEN</label>
                <input name="imagen" type="file" class="form-control" id="imagen" aria-describedby="emailHelp">
              </div>

            <button type="submit" class="btn btn-primary">AGREGAR PRODUCTO</button>
          </form>    <br>

    </div>

    </div>

    </div>
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

<div class="col-4 p-4">

<table class="table">
<thead class="text-light" style="background-color: #790EC2" >
<tr>
  <th scope="col">ID</th>
  <th scope="col">NOMBRE PRODUCTO</th>
  <th scope="col"></th>
</tr>
</thead>
<tbody>
<?php 
include "../model/conexion.php";
$sql = $conexion->query("SELECT * from productos");
while ($datos = $sql->fetch_object()){?>
      <tr>
  <td><?= $datos->idp ?></td>
  <td><?= $datos->nombrep ?></td>
  <td>
  <?php echo "<a href='editarcategoria2.php?id=".$datos->idp."' class='btn btn-warning' role='button'  aria-pressed='true'>Editar</a>
  <a href='../controller/eliminarcategoria.php?id=".$datos->idp."' class='btn btn-danger' role='button'  aria-pressed='true'>Eliminar</a>" ?>
</td>
</tr>

<?php
}
?>





</tbody>
</table>

</div>
</body>
</html>