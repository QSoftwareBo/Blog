<?php
require 'models/model.conexion.php';
require 'models/model.CambioRol.php';
require 'views/view.Header.php';
require 'ComprobarAccesos.php';
$acceso=AccesoSoloAdministrador();
if ($acceso){

$conexion=conexion();

if(isset($_GET['id'])){
    $IdUser = htmlspecialchars ($_GET['id']);
    }
else{
    echo 'no establecido un usuario especifico';
    }  

    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $Rol = $_POST['rolNuevo'];
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
}
else {
    echo "<script>alert('Acceso Restringido')</script>";
    echo "<script>location.href='index.php'</script>";
}
?>