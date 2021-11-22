<?php
require 'models/model.conexion.php';
require 'models/model.DetalleComentariosAutor.php';
require 'models/model.FuncionesDeSesion.php';
$comprobar=ComprobarSesionControladores();
$conexion=conexion();
$IdPost='1';

if ($_SERVER['REQUEST_METHOD']=='POST'){
   
    $Contenido = htmlspecialchars($_POST['Contenido']);
    $statement = $conexion->prepare ("UPDATE comentario SET Contenido = '$Contenido' WHERE Id=$IdPost");
    $statement->execute();
    header ('Location: index.php');
    
}

else{
     $post = DetalleComentariosAutor($conexion, $IdPost);
     $post=$post[0];
}

require 'views/view.DetalleComentariosAutor.php';
?>