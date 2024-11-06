<?php
session_start();
$_SESSION['detalle'] = array();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>

        .bg{

          background-image: linear-gradient( 109.6deg,  rgba(254,87,98,1) 11.2%, rgba(255,107,161,1) 99.1% );
        }
        .bg2{
          background-color: #FFDEE9;
background-image: linear-gradient(0deg, #FFDEE9 0%, #B5FFFC 100%);
        }
        .bg3{
          background: rgb(253,142,255);
background: linear-gradient(90deg, rgba(253,142,255,1) 0%, rgba(225,184,240,1) 50%, rgba(253,142,255,1) 100%);
        }
        .bg7{
  background-color: #FD8EFF;
}
        .bg4{
            background-image: url(https://img.freepik.com/foto-gratis/concepto-belleza-maquillaje-cepillo-cosmeticos-que-libera-nube-polvo-rosado-brillante-sobre-fondo-negro_160204-1106.jpg);
            background-position: right;
            background-size: 30rem;
            background-repeat: no-repeat
        }
        .ht{
          font-size: 11px;

        }
    </style>

  </head>
  <body>

  <div class="container-fluid expand-lg bg3">
    <header class="d-flex justify-content-center py-1 ">
      <ul class="nav nav-pills">
        <li class="nav-item"><h1 class="text-white ht my-2"> ENVIO GRATIS POR COMPRAS IGUALES O SUPERIORES A $150.000 COP </h5> </li>
      </ul>
    </header>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark mb-4 bg7 sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
    <img src="./img/tonella.png" alt="" width="150" height="45" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-md-auto row row-cols-auto">
        <li class="nav-item mb-2 col-xs-2">
        <a href="index.php" class="btn btn-bd-primary" aria-pressed="true">Inicio</a>
        </li>
        <?php 
        include "model/conexion.php";
        $sql = $conexion->query("SELECT * from categorias");
        while ($datos = $sql->fetch_object()){?>
            <li class="nav-item mb-1 col-xs-2">
              <a href="categorias.php?id=<?= $datos-> id_categoria ?>" class="btn btn-bd-primary" aria-pressed="true"><?= $datos-> categorian ?></a>
            </li>
      <?php 
      }
        ?>
        <li class="nav-item mb-2 col-xs-2">
        <div class="dropdown">
        <a class="btn btn-bd-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-pressed="false">Sobre nosotros...</a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Nosotros</a></li>
            <li><a class="dropdown-item" href="#">Novedades</a></li>
            <li><a class="dropdown-item" href="#">Contáctenos</a></li>
          </ul>
          </div>
        </li>

    <?php
    if (!isset($_SESSION['s_usuario'])) {
    }else{ 
    $usuario = $_SESSION['s_usuario'];
    include "model/conexion.php";
    $result = mysqli_query($conexion,"SELECT * FROM usuario WHERE usuario ='$usuario' ");
    $row = mysqli_fetch_array($result);
    $rol = $row['rol'];
    if ($rol == 4) {    ?>
    
    <li class="nav-item mb-2 col-xs-2">
        <div class="dropdown">
        <a class="btn btn-bd-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-pressed="false">Insertar datos</a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="vista/paneladmin/vista/categorias.php">Categorias</a></li>
            <li><a class="dropdown-item" href="vista/paneladmin/vista/productos.php">Productos</a></li>
            <li><a class="dropdown-item" href="vista/paneladmin/vista/pedidos.php">Pedidos</a></li>
            <li><a class="dropdown-item" href="vista/paneladmin/vista/roles.php">Roles</a></li>
            <li><a class="dropdown-item" href="vista/paneladmin/vista/usuarios.php">Usuarios</a></li>
          </ul>
          </div>
      </li>
    <?php
    }
  }
    ?>


      </ul>
      </div>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

      <li class="nav-item">
          <a href="VerCarta.php" class="nav-link" style="color: red; cursor:pointer;">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#ffffff" class="bi bi-cart4" viewBox="0 0 16 16">
          <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
            </svg>
        </a>
        </li>

<?php 

if (!isset($_SESSION['s_usuario'])) {
?>

<li class="nav-item">
        <a href="login.php" class="btn btn-bd-primary2" aria-pressed="true">Iniciar sesion</a>
</li>
<?php
}else{
?>
  <div class="dropdown dropstart">
  <a class="btn btn-bd-primary2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-pressed="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg> <?php echo $_SESSION["s_usuario"];?></a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="vista/paneladmin/vista/categorias.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-optical-audio-fill" viewBox="0 0 16 16">
  <path d="M8 6a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm1 3a1 1 0 1 0-2 0 1 1 0 0 0 2 0Z"/>
  <path d="M2.5 15a.5.5 0 0 1-.5-.5v-3.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 1 .146-.354l2-2A.5.5 0 0 1 4.5 2h7a.5.5 0 0 1 .354.146l2 2A.5.5 0 0 1 14 4.5v2.05a2.5 2.5 0 0 1 0 4.9v3.05a.5.5 0 0 1-.5.5h-11ZM8 5a4 4 0 1 0 0 8 4 4 0 0 0 0-8Z"/>
</svg>  
            Perfil</a></li>
            <li><a class="dropdown-item" href="vista/paneladmin/vista/productos.php" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/><path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
          </svg> Cerrar sesion</a></li>
          </ul>
          </div>
<?php
}
?>
      </ul>
    </div>  
  </div>
</nav>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Cerrar sesion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <a type="submit" class="btn btn-primary" href="controller/cerrarsesion.php">Salir</a>
      </div>
    </div>
  </div>
</div>



<div class="container w-75 bg-primary my-4 rounded shadow">

  <div class="row align-items-stretch">
  
  <div class="col bg4 d-none d-lg-block cold-md-5 col-lg-5 col-xl-5 rounded-start">
  
  </div>
  <div class="col bg7 p-5 rounded-end">

    <form action="busqueda.php" method="post">
        <input class="form-control m-2" name="busqueda" id="busqueda" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-bd-primary m-2" name="Buscar" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</div>
