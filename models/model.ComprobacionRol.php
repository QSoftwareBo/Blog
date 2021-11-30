<?php

function comprobar(){
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

function restringirEditor(){
        session_start();
        if ($_SESSION['rol']!='EDITOR'){
            header('location: ../index.php');
        }
       
}
function restringirEscritor(){
        session_start();
        if ($_SESSION['rol']!='ESCRITOR'){
            header('location: ../index.php');
        }
}

function restringirPublico(){
        session_start();
        if ($_SESSION['rol']!='PUBLICO'){
            header('location: ../index.php');
        }
}

function restringirAdministrador(){
    if ($_SESSION['rol']!='ADMINISTRADOR'){
        header('location: ../index.php');
    }
}
?>