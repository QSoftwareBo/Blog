<?php 

session_start();
//Se recibe la variable de sesion
//si esta establecida se la envia a la vista de posts publicos
//caso contrario a una pagina de prueba
if(isset($_SESSION['nombre'] )) {
	if ($_SESSION['rol']=="PUBLICO"){
	header('Location: views/view.ListadoPublico.php');
    die();
	}
	elseif ($_SESSION['rol']=="ESCRITOR") {
		header('Location: views/view.ListadoEscritor.php');
    	die();
	}
	else{
		header('Location: views/view.ListadoEditor.php');
    	die();
	}
} else {
	//Por ahora se redirige al usuario a una pagina de Login
    //debido a que aun no esta creada la vista de registro
	header ('Location: Login.php');
}

?>