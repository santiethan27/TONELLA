<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROLES</title>
    <?php require_once "../controller/dependenciasforms.php"; ?>
</head>

<body>
<?php require_once "menu.php"; ?>
    <div class="container">

    <div class="row">

    <div class="col-sm-12">

        <center><h1>CATEGORIA DEL PRODUCTO</h1></center>        

        <form action="../controller/registrarroles.php" method="POST">
            <div class="form-group">
                <label for="id_rol">ID del rol</label>
                <input name="id_rol" type="number" class="form-control" id="id_rol" aria-describedby="emailHelp" >
              </div>
              <div class="form-group">
                <label for="descripcion">Descripcion del rol</label>
                <input name="descripcion" type="text" class="form-control" id="descripcion" aria-describedby="emailHelp">
              </div>
            <button type="submit" class="btn btn-primary">AGREGAR ROL</button>
          </form>    <br>

    </div>

    </div>

    </div>
 
</body>
</html>
