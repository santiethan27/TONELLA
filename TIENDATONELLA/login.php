<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio sesion</title>
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
    <link href="css/estilos.css" rel="stylesheet">
    <?php require_once "controller/dependenciasforms.php"; ?>
<style>
    .bg{
      background-image: linear-gradient( 109.6deg,  rgba(209,0,116,1) 11.2%, rgba(110,44,107,1) 91.1% );
        }
</style>
</head>

<body>

<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 bg text-white">
        <div class="d-flex align-items-center h-custom-1 px-5 ms-xl-2 mt-2 pt-5 pt-xl-0 mt-xl-n5">

          <form id="formLogin" method="POST" action="" style="width: 23rem;">

           <center> 
           <div class="form-outline mb-4">
           <img src="img/tonella.png" width="160" height="85" alt="">
            </div>
           <h5 class="fw-normal mb-0 pb-3" style="letter-spacing: 1px;">Iniciar sesion</h3> </center>

            <div class="form-outline mb-4">
              <input type="text" name="usuario" id="usuario" class="form-control form-control-lg" />
              <label class="form-label" for="usuario">Usuario</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="password" class="form-control form-control-lg" />
              <label class="form-label" name="password" for="password">Contraseña</label>
            </div>        

            <div class="d-grid pt-1 mb-4">
          <button class="btn btn-bd-primary2 btn-lg btn-block" name="submit" type="submit">Entrar</button>
            </div>
            <div class="d-grid pt-1 mb-4">
            <a href="index.php" class="btn btn-bd-primary2 btn-lg btn-block" aria-pressed="true">Volver</a>
            </div>
            <p>¿No tienes cuenta? <a href="registro.php" class="link-info">Registrate aqui</a></p>
          </form>
        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block rounded-start rounded-start">
        <img src="img/imglogin.jpg"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>

<script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
<script src="lib/jquery/jquery-3.3.1.min.js"></script>  
<script src="iniciosesion.js"></script>
</body>
</html>

    