<?php
require 'models/model.RegistroUsuario.php';
require 'models/model.VerificarUsuario.php';

session_start();
// Comprobamos si ya tiene una sesion
if (isset($_SESSION['nombre'])) {
	header('Location: index.php');
	die();
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Validamos que los datos hayan sido rellenados
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
    $errores='';
    $nombre = VerificarUsuario($usuario);
    
    if ($nombre != false) {
        $errores .= 'El nombre de usuario ya existe';
    }
    
    $password = password_hash($password,PASSWORD_DEFAULT);
	$password2 = password_hash($password2,PASSWORD_DEFAULT);

	// Comprobamos que las contraseñas sean iguales.
	if (!password_verify($password,$password2)) {
			$errores.= 'Las contraseñas no son iguales';
	}

    // Comprobamos si hay errores, sino entonces agregamos el usuario y redirigimos.
	if ($errores == '') {
		$registrar=RegistrarUsuario($usuario,$password);
        if (isset($registrar)){
            // Despues de registrar al usuario redirigimos para que inicie sesion.
            header('Location: Login.php');
        }
		
	}
}  


require 'views/view.RegistroUsuario.php';

?>