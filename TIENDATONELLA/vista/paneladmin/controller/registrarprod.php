<?php
include('../model/conexion.php');

insertar($conexion);
function insertar($conexion){
$nombrep=$_POST['nombrep'];
$valorp=$_POST['valorp'];
$descripcionp=$_POST['descripcionp'];
$marcap=$_POST['marcap'];
$categoriap=$_POST['categoriap'];
$colorp=$_POST['colorp'];
$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$consulta = "INSERT INTO `productos`(`nombrep`, `valorp`, `descripcionp`, `idp`, `marcap`, `categoriap`, `colorp`, `imagen`) VALUES ('$nombrep','$valorp','$descripcionp','','$marcap','$categoriap','$colorp','$imagen')";

$resultado=mysqli_query($conexion, $consulta);
if ($resultado) {
    header("location:../vista/productos.php");
}else{

echo "No se guardo";
}

}
?>