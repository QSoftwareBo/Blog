<?php

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
		if ($password==$resultado['Password']){
			
			header('Location: views/view.PostsPublicos.php');
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