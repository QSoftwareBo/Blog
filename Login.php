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
		//Con el avance de las tareas cumplidas, en esta seccion se utilizara 
		//el método password_verify()
		//Por ahora sólo se utiliza un if para el password NO ENCRIPTADO
		if (password_verify($password,$resultado['Password'])){
			
			//Se establecen las variables de sesion que seran recibidas en 
			//en index.php para iniciar sesion
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