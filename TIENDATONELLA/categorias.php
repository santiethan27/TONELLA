<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/estilos.css" rel="stylesheet">
  <script src="lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

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

<div class="container w-70 my-5 rounded shadow">
<div class="row row-cols-1 row-cols-md-4 g-4 mb-4 rounded shadow">
<?php 
    include "model/conexion.php";
     
        $buscarproducto = $_GET['id'];

    $sql = $conexion->query("SELECT * from productos WHERE categoriap LIKE '%$buscarproducto%'");

    while ($datos = $sql->fetch_object()){?>
  <div class="col mb-4">
    <div class="card h-100">
    <img src="data:image/jpeg;base64, <?php echo  base64_encode($datos->imagen); ?>" class="card-img-top img-fluid">
      <div class="card-body">
        <h5 class="card-title"><?= $datos->nombrep ?></h5>
        <p class="card-text"><?= $datos->valorp ?></p>

        <a class="btn btn-bd-primary btn-block bg" href="#" name="submit" type="submit">Comprar</a>
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