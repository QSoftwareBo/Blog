<?php
session_start();
// Comprobamos si ya tiene una sesion
# Si ya tiene una sesion redirigimos al contenido, para que no pueda acceder al formulario
if (isset($_SESSION['nombre'])) {
	header('Location: index.php');
	die();
}

require "models/model.VerificarUsuario.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombre = htmlspecialchars($_POST['nombre']);
	$password = $_POST['password'];
	
	$errores='';

    $resultado=VerificarUsuario($nombre);
	
	if ($resultado !== false) {
		if (password_verify($password,$resultado['Password'])){
			$_SESSION['id']=$resultado['Id'];
			$_SESSION['nombre']=$resultado['Nombre'];
			$_SESSION['rol']=$resultado['Rol'];
			$_SESSION['fechaRegistro']=$resultado['FechaRegistro'];
			header('Location: index.php');
		}
		
		else{
			$errores='Password incorrecto';
		}
	} 
	else{
		$errores='Usuario no registrado';
	}
}


require 'views/view.Login.php';

?>