<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <?php require_once "../controller/dependenciasforms.php"; ?>
</head>

<body>
<?php require_once "menu.php"; ?>

  <center><h1>HACER PEDIDO</h1></center>  

    <form action="../controller/registrarpedidos.php" method="post">
    <div class="container">
        <div class="col-md-12">
        <div class="row-md">

          <div class="form-group" class="col-md-6">
            <label for="id_usuario">ID Usuario</label>
            <input type="text" class="form-control" name="id_usuario" aria-describedby="emailHelp" placeholder="Ingresa aquí tu dirección"></div><br>
          </div>

        <div class="form-group" class="col-md-6">
          <label for="direccion">Dirección</label>
          <input type="text" class="form-control" name="direccion" aria-describedby="emailHelp" placeholder="Ingresa aquí tu dirección"></div><br>
        </div>

        <div class="form-group">
          <label for="cel_pedido">Celular</label>
          <input type="number" class="form-control" name="cel_pedido" placeholder="Ingresa aquí tu número"><br>
        </div>

        <div class="form-group">
            <label for="cpostal">Código Postal</label>
            <input type="number" class="form-control" name="cpostal" placeholder="Ingresa aquí tu código postal"><br>
          </div>

          <div class="form-group">
            <label for="fecha_pedido">Fecha</label>
            <input type="date" class="form-control" name="fecha_pedido" placeholder="Fecha actual"><br>
          </div>

          <div class="form-group">
            <label for="id_propedido">Producto</label>
            <input type="number" class="form-control" name="id_propedido" placeholder="Nombre del producto"><br>
          </div>

          <div class="form-group">
            <label for="ciudad">Ciudad</label>
            <input type="text" class="form-control" name="ciudad" placeholder="Ingresa aquí tu ciudad"><br>
          </div>

          <div class="form-group">
            <label for="informacion">Información</label>
            <input type="text" class="form-control" name="informacion" placeholder="Ingresa la Información"><br>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Valor</label>
            <input type="number" class="form-control" name="valor_pedido" placeholder="Valor del producto">
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Cantidad</label>
            <input type="number" class="form-control" name="cantidad" placeholder="Valor del producto">
          </div>


          <br>
        <button type="submit" class="btn btn-danger">Enviar</button>
      </div></div></div>
      </form>
</body>
</html>