<?php
require 'models/model.conexion.php';
require 'models/model.EditarPost.php';
$conexion=conexion();
$IdPost='1';

if ($_SERVER['REQUEST_METHOD']=='POST'){
    
    $Contenido = $_POST['Contenido'];
    $statement = $conexion->prepare ("UPDATE post SET Contenido = '$Contenido' WHERE Id=$IdPost");
    $statement->execute();
    header ('Location: EditarPost.php');
}

else{
     $post = ObtenerPostPorID($conexion, $IdPost);
     $post=$post[0];
}

require 'views/view.EdicionPost.php';
?>