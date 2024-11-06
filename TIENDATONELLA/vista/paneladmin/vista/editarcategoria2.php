<?php
	include("../model/conexion.php");
	$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Actualizar</h2>
<hr/>

<form action="../controller/editarcategoria.php" method="POST" enctype="multipart/form-data">
  <div class="container">
  <?php
	$result = mysqli_query($conexion,"SELECT * FROM categorias WHERE id_categoria ='$id'");
	while($row = mysqli_fetch_array($result))
	{
    echo"<input type='hidden' name='id_categoria' value='{$row['id_categoria']}' required>";
    echo"<input type='text' name='categorian' value='{$row['categorian']}' required>";
    ?>
    <?php
    echo"<button type='submit'>Actualizar</button>";
	}?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</form>