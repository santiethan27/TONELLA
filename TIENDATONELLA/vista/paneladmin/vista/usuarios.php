<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USUARIOS</title>
    <?php require_once "../controller/dependenciasforms.php"; ?>
</head>

<body>
<?php require_once "menu.php"; ?>
    <div class="container">

    <div class="row">

    <div class="col-sm-12">

        <center><h1>REGISTRAR USUARIO</h1></center>        

        <form action="../controller/registrarusuario.php" method="post">
            <div class="form-group">
                <label for="nombre">NOMBRE</label>
                <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="emailHelp" >
              </div>
              <div class="form-group">
                <label for="apellidos">APELLIDOS</label>
                <input name="apellidos" type="text" class="form-control" id="apellidos" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="usuario">NOMBRE DE USUARIO</label>
                <input name="usuario" type="text" class="form-control" id="usuario" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="correo">CORREO ELECTRONICO</label>
                <input name="correo" type="text" class="form-control" id="correo" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="contraseña">CONTRASEÑA</label>
                <input name="contraseña" type="password" class="form-control" id="contraseña" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="celular">CELULAR</label>
                <input name="celular" type="number" class="form-control" id="celular" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="sexo">SEXO</label>
                <input name="sexo" type="text" class="form-control" id="sexo" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="fecha">FECHA DE NACIMIENTO</label>
                <input name="fecha" type="date" class="form-control" id="fecha" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="rol">ROL</label>
                <input name="rol" type="number" class="form-control" id="rol" aria-describedby="emailHelp">
              </div>
            <button type="submit" class="btn btn-primary">AGREGAR USUARIO</button>
          </form>    <br>

    </div>

    </div>

    </div>
 
</body>
</html>