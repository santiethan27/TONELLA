<?php
include('../model/conexion.php');

insertar($conexion);

function insertar($conexion){

$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$celular=$_POST['celular'];
$sexo=$_POST['sexo'];
$fecha=$_POST['fecha'];
$rol=$_POST['rol'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$consulta =  "INSERT INTO `usuario`(`id`, `correo`, `usuario`, `contraseña`, `celular`, `sexo`, `fecha`, `rol`, `nombre`, `apellidos`) VALUES (NULL,'$correo','$usuario','$contraseña','$celular','$sexo','$fecha','$rol','$nombre','$apellidos')";
$consulta2=$_POST['login'];

$resultado=mysqli_query($conexion, $consulta) or die("Error: ". mysqli_error($conexion));

if ($consulta2 == 1) {
if ($resultado) {
header("location:../../../index.php");
}else{
echo "No se guardo";
}

} else 

if ($resultado) {

header("location:../vista/usuarios.php");
}else{
echo "No se guardo";
}

}
?>