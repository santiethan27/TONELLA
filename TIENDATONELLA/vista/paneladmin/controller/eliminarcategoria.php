<?php
include("../model/conexion.php");

$id = $_GET['id'];


$sql = "DELETE FROM categorias WHERE id_categoria='$id'";
if(mysqli_query($conexion, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro eliminado exitósamente");';
	echo 'window.location="../vista/categorias.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="../vista/categorias.php";';
	echo '</script>';
}
?>