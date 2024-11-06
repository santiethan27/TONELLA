<?php
include("../model/conexion.php");
$id = $_POST['id_categoria'];
$categorian = $_POST['categorian'];

$sql = "UPDATE categorias SET categorian='$categorian' WHERE id_categoria='$id'";

if(mysqli_query($conexion, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro actualizado exitósamente");';
	echo 'window.location="../vista/categorias.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error en proceso de actualización de registro!");';
	echo 'window.location="../vista/categorias.php";';
	echo '</script>';
}
?>