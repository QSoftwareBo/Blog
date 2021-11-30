<?php
require 'models/model.conexion.php';
require 'models/model.CambioRol.php';
require 'views/view.Header.php';
require 'models/model.FuncionesDeSesion.php';
$comprobar=ComprobarSesionControladores();
$conexion=conexion();

if(isset($_GET['id'])){
    $IdUser = htmlspecialchars ($_GET['id']);
    }
else{
    echo 'no establecido un usuario especifico';
    }  

    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $Rol = $_POST['rolB'];
        $Id=$_POST['IdUser'];
        $statement = $conexion->prepare('UPDATE usuario SET Rol = :rol WHERE Id= :id');
        $statement->execute(array(
            ":id"=>$Id,
            ":rol"=>$Rol
            
        ));
        header ('Location: index.php');
    }
    
    else{
        $user = ObtenerUsuarioPorID($conexion, $IdUser);
        $user=$user[0];
    }

require 'views/view.DetallesUsuario.php';
?>