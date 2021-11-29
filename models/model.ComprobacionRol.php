<?php
session_start();
function comprobar(){
    
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
}

function restringirEditor(){
        if ($_SESSION['rol']!='EDITOR'){
            header('location: ../index.php');
        }
       
}
function restringirEscritor(){
        
        if ($_SESSION['rol']!='ESCRITOR'){
            header('location: ../index.php');
        }
}

function restringirPublico(){
        if ($_SESSION['rol']!='PUBLICO'){
            header('location: ../index.php');
        }
}
?>