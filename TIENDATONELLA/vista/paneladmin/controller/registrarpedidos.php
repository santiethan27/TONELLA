<?php
include('../model/conexion.php');

insertar($conexion);
function insertar($conexion){
$id_usuario=$_POST['id_usuario'];
$direccion=$_POST['direccion'];
$celpedido=$_POST['cel_pedido'];
$cpostal=$_POST['cpostal'];
$fecha_pedido=$_POST['fecha_pedido'];
$idpropedido=$_POST['id_propedido'];
$ciudad=$_POST['ciudad'];
$informacion=$_POST['informacion'];
$valor_pedido=$_POST['valor_pedido'];
$cantidad=$_POST['cantidad'];


$consulta = "INSERT INTO `pedidos`(`id_usuario`, `id_pedido`, `direccion`, `cel_pedido`, `cpostal`, `fecha_pedido`, `id_propedido`, `ciudad`, `informacion`, `valor_pedido`, `cantidad`) VALUES ('$id_usuario',NULL, '$direccion', '$celpedido', '$cpostal', '$fecha_pedido', '$idpropedido', '$ciudad', '$informacion', '$valor_pedido', '$cantidad')";

$resultado=mysqli_query($conexion, $consulta) or die("Error: ". mysqli_error($conexion));
if ($resultado) {
    header("location:../vista/pedidos.php");
}else{

echo "No se guardo";
}

}
?>