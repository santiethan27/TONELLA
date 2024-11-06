<?php
include('../model/conexion.php');

insertar($conexion);

function insertar($conexion){
$tipo_producto=$_POST['tipo_producto'];
$consulta = "INSERT INTO `categorias`(`categorian`, `id_categoria`) VALUES ('$tipo_producto','')";

$resultado=mysqli_query($conexion, $consulta);
if ($resultado) {
    header("location:../vista/categorias.php");
}else{

echo "No se guardo";
}

}

?>