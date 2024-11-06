<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
    <link href="css/estilos.css" rel="stylesheet">
    <?php require_once "controller/dependenciasforms.php"; ?>
    <style>
        body{
            background: #C40FB6;
            background: linear-gradient(to right, #0FAEC4, #C40FB6);
        }
        .bg{
            background-image: url(img/imgregistro.jpg);
            background-position: center center;
        }
    </style>
</head>

<body>

<div class="container w-85 bg-primary my-4 rounded shadow">

<div class="row align-items-stretch">

<div class="col bg d-none d-lg-block cold-md-5 col-lg-5 col-xl-6 rounded-start">

</div>

<div class="col bg-white p-5 rounded-end">
<center><img src="img/tonella3.png" width="100" height="100" alt=""></center>
<h2 class="fw-bold text-center py-5">ADMINISTRADOR</h2>

<form action="vista/paneladmin/controller/registrarusuario.php" method="post">
    <input type='hidden' name='login' value='1' required>
    <input type='hidden' name='rol' value='4' required>

    <div class="form-group mb-2">
        <label for="nombre">NOMBRE</label>
        <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="emailHelp" required>
      </div>
      <div class="form-group mb-2">
        <label for="apellidos">APELLIDOS</label>
        <input name="apellidos" type="text" class="form-control" id="apellidos" aria-describedby="emailHelp" required>
      </div>
      <div class="form-group mb-2">
        <label for="usuario">NOMBRE DE USUARIO</label>
        <input name="usuario" type="text" class="form-control" id="usuario" aria-describedby="emailHelp" required>
      </div>
      <div class="form-group mb-2">
        <label for="correo">CORREO ELECTRONICO</label>
        <input name="correo" type="text" class="form-control" id="correo" aria-describedby="emailHelp" required>
      </div>
      <div class="form-group mb-2">
        <label for="contraseña">CONTRASEÑA</label>
        <input name="contraseña" type="password" class="form-control" id="contraseña" aria-describedby="emailHelp" required>
      </div>
      <div class="form-group mb-2">
        <label for="celular">CELULAR</label>
        <input name="celular" type="number" class="form-control" id="celular" aria-describedby="emailHelp" required>
      </div>
      <div class="form-group mb-2">
        <label for="sexo">SEXO</label>
        <input name="sexo" type="text" class="form-control" id="sexo" aria-describedby="emailHelp" required>
      </div>
      <div class="form-group mb-4">
        <label for="fecha">FECHA DE NACIMIENTO</label>
        <input name="fecha" type="date" class="form-control" id="fecha" aria-describedby="emailHelp" required>
      </div>
      <div class="d-grid">
    <button type="submit" class="btn btn-bd-primary mb-2" >REGISTRARME</button>
    </div>

    <p>¿Ya tienes cuenta? <a href="login.php" class="link-info">Iniciar sesion</a></p>

  </form>

</div>

</div>


</div>

<script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
<script src="lib/jquery/jquery-3.3.1.min.js"></script>  
</body>
</html>