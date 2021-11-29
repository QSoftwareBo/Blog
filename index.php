<?php 

session_start();
//Se recibe la variable de sesion
//si esta establecida se la envia a la vista de posts publicos
//caso contrario a una pagina de prueba
if(isset($_SESSION['nombre'] )) {
	header ('Location: AccesoSegunRol.php');
	die();
} else {
	//Por ahora se redirige al usuario a una pagina de Login
    //debido a que aun no esta creada la vista de registro
	header ('Location: Login.php');
}

?>