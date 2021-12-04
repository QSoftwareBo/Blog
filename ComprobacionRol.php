<?php

function comprobarRol(){
    session_start();
    if ($_SESSION['rol']=="ESCRITOR"){
    header('Location: views/view.ListadoEscritor.php');
        die();
	}
    
    if ($_SESSION['rol']=="EDITOR") {
        header('Location: views/view.ListadoEditor.php');
    	die();
	}

    if ($_SESSION['rol']=="PUBLICO"){
        header('Location: views/view.ListadoPublico.php');
    	die();
	}

    if ($_SESSION['rol']=="ADMINISTRADOR"){
        header('Location: PanelAdministrador.php');
    	die();
	}
}
?>