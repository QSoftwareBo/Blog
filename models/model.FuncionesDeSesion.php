<?php
/*Asegura una sesion vigente para las vistas*/
function ComprobarSesionVistas(){
    session_start();
    if(!isset($_SESSION['nombre'])){
        header('Location: ../index.php');
    }
    
}
/*Asegura una sesion vigente para los Controladores*/
function ComprobarSesionControladores(){
    session_start();
    if(!isset($_SESSION['nombre'])){
        header('Location: index.php');
    }
    
}


?>