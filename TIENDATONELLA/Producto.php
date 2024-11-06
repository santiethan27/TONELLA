<?php

class Producto
{
	function get(){
		$sql = "SELECT * FROM productos";
		global $conexion;
		return $conexion->query($sql);
	}
	
	function getById($id){
		$sql = "SELECT * FROM productos WHERE idp=$id";
		global $conexion;
		return $conexion->query($sql);
	}
}