<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/estilos.css" rel="stylesheet">
  <script src="lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <style>
        body{
          background-image: linear-gradient( 92.7deg,  rgba(245,212,212,1) 8.5%, rgba(252,251,224,1) 90.2% );
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
    </style>

  </head>
  <body>
  <?php require_once "menu.php"; ?>

<div class="container w-70 my-5 rounded shadow">
<div class="row row-cols-1 row-cols-md-4 g-4 mb-4 rounded shadow">
<?php 
    include "model/conexion.php";
     
    $buscarproducto = $_POST['busqueda'];

    $sql = $conexion->query("SELECT * from productos WHERE nombrep LIKE '%$buscarproducto%'");

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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script src="lib/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html> 