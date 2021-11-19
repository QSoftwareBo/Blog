<?php
require "model.conexion.php";

function VerificarUsuario($nombre){
	$conexion=conexion();
    $statement = $conexion->prepare('SELECT * FROM usuario WHERE Nombre = :usuario');
	$statement->execute(array(
			':usuario' => $nombre
		));
	return $resultado = $statement->fetch();
}
?>