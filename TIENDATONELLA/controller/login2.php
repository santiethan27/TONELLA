<?php
session_start();

include_once '../model/conexion.php';

//recepción de datos enviados mediante POST desde ajax
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';

//$pass = md5($password); //encripto la clave enviada por el usuario para compararla con la clava encriptada y almacenada en la BD


$consulta = "SELECT * FROM usuario WHERE usuario='$usuario' AND contraseña='$password' ";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
if($filas){
    $_SESSION["s_usuario"] = $usuario;
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
}else{
    $_SESSION["s_usuario"] = null;
    $data=null;
}

print json_encode($data);
$conexion=null;
