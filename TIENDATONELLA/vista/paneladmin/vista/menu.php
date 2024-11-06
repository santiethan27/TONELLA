<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require_once "../controller/dependenciasforms.php"; ?>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #790EC2">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">
    <img src="../../../img/tonella.png" alt="" width="150" height="45" class="d-inline-block align-text-top">
    Admistración</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-md-auto row row-cols-auto">
        <li class="nav-item col-xs-2">
        <a href="../../../index.php" class="btn btn-bd-primary" role="button"  aria-pressed="true">Inicio</a>
        </li>
        <li class="nav-item col-xs-2">
        <a href="categorias.php" class="btn btn-bd-primary" role="button"  aria-pressed="true">Categorias</a>
        </li>
        <li class="nav-item col-xs-2">
        <a href="productos.php" class="btn btn-bd-primary" role="button"  aria-pressed="true">Productos</a>
        </li>
        <li class="nav-item col-xs-2">
        <a href="pedidos.php" class="btn btn-bd-primary" role="button"  aria-pressed="true">Pedidos</a>
        </li>
        <li class="nav-item col-xs-2">
        <a href="roles.php" class="btn btn-bd-primary" role="button"  aria-pressed="true">Roles</a>
        </li>
        <li class="nav-item col-xs-2">
        <a href="usuarios.php" class="btn btn-bd-primary" role="button"  aria-pressed="true">Usuarios</a>
        </li>
      </ul>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <li class="nav-item">
      <a href="#" class="btn btn-bd-primary2" role="button" data-bs-toggle="button" aria-pressed="true">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#692b46" class="bi bi-person" viewBox="0 0 16 16">
          <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
          </svg>      
          Ingresar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script src="../../lib/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html> 