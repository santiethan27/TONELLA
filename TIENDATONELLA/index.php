<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/estilos.css" rel="stylesheet">
  <script src="lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body{
      background: rgb(254,225,255);
background: linear-gradient(90deg, rgba(254,225,255,1) 0%, rgba(255,255,255,1) 50%, rgba(254,225,255,1) 100%);
    }
        .bg{

          background-image: linear-gradient( 109.6deg,  rgba(254,87,98,1) 11.2%, rgba(255,107,161,1) 99.1% );
        }
        .bg2{
          background-color: #FFDEE9;
background-image: linear-gradient(0deg, #FFDEE9 0%, #B5FFFC 100%);
        }
        .bg3{
          background-color: #00DBDE;
background-image: linear-gradient(90deg, #00DBDE 0%, #FC00FF 100%);
        }
        .bg4{
            background-image: url(img/img2.jpg);
            background-position: right;
            background-size: 30rem;
            background-repeat: no-repeat
        }
        .bgt{

background-color: #E1B8F0;
}
    </style>

  </head>
  <body>
  <?php
include_once "model/config.php";

$productosPorPagina = 8;
$pagina = 1;
if (isset($_GET["pagina"])) {
$pagina = $_GET["pagina"];
}
$limit = $productosPorPagina;
$offset = ($pagina - 1) * $productosPorPagina;
$sentencia = $base_de_datos->query("SELECT count(*) AS conteo FROM productos");
$conteo = $sentencia->fetchObject()->conteo;
$paginas = ceil($conteo / $productosPorPagina);
$sentencia = $base_de_datos->prepare("SELECT * FROM productos LIMIT ? OFFSET ?");
$sentencia->execute([$limit, $offset]);
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<?php require_once "menu.php"; ?>  

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="https://www.shutterstock.com/image-vector/beauty-make-banner-template-cosmetic-600nw-1927734332.jpg"/></img>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


<div class="container w-70 my-5 rounded shadow">
<div class="row row-cols-1 row-cols-md-4 g-4 mb-4 rounded shadow">
<?php 
    include "model/conexion.php";
    $sql = $conexion->query("SELECT * from productos ORDER BY RAND()");
    while ($datos = $sql->fetch_object()){?>
  <div class="col mb-4">
    <div class="card h-100 text-white shadow round-2">
    <img src="data:image/jpeg;base64, <?php echo  base64_encode($datos->imagen); ?>" class="card-img-top img-fluid">
      <div class="card-body bgt">
        <h5 class="card-title"><?= $datos->nombrep ?></h5>
        <p class="card-text"><?= $datos->valorp ?></p>
        <a class="btn btn-bd-primary btn-block" href="AccionCarta.php?action=addToCart&id=<?php echo $datos->idp; ?>">Comprar</a>
      </div>
    </div>
  </div>
  <?php 
  }
    ?>
</div>
</div>

<div class="text-center">
                <p>Página <?php echo $pagina ?> de <?php echo $paginas ?> </p>
            </div>
<div class="btn-toolbar justify-content-center mb-3" role="toolbar" aria-label="Toolbar with button groups">
<div class="btn-group me-2" role="group" aria-label="First group">
                <?php if ($pagina > 1) { ?>

                        <a class="btn btn-primary" href="./paginacion.php?pagina=<?php echo $pagina - 1 ?>&id=<?php echo $categoria; ?>">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                <?php } ?>
                <?php for ($x = 1; $x <= $paginas; $x++) { ?>
                        <a class="btn btn-primary" href="./paginacion.php?pagina=<?php echo $x ?>&id=<?php echo $categoria; ?>">
                            <?php echo $x ?></a>
                <?php } ?>
                <?php if ($pagina < $paginas) { ?>

                        <a class="btn btn-primary" href="./paginacion.php?pagina=<?php echo $pagina + 1 ?>&id=<?php echo $categoria; ?>">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                <?php } ?>
            </div></div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script src="lib/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html> 