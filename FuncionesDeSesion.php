<?php
/*Asegura una sesion vigente para las vistas*/
function ComprobarSesionVistas(){
    if(!isset($_SESSION['nombre'])){
        header('Location: ../index.php');
    }
    
}
/*Asegura una sesion vigente para los Controladores*/
function ComprobarSesionControladores(){
    if(!isset($_SESSION['nombre'])){
        header('location: ../');
    }
    
}


?>