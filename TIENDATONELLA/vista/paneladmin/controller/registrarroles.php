<?php
include('../model/conexion.php');

insertar($conexion);
function insertar($conexion){

$id_rol=$_POST['id_rol'];
$descripcion=$_POST['descripcion'];
$consulta = "INSERT INTO roles(id_rol,descripcion) VALUES ('$id_rol','$descripcion')";

mysqli_query($conexion, $consulta);
mysqli_close($conexion);
header("location:../vista/roles.php");


}
?>