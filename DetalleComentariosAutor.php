<?php
require 'models/model.conexion.php';
require 'models/model.DetalleComentariosAutor.php';

$conexion=conexion();
if (isset($_GET['IdComentario'])){
    $IdComentario=htmlspecialchars($_GET['IdComentario']);
    
} 

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $Contenido = htmlspecialchars($_POST['Contenido']);
    $statement = $conexion->prepare ("UPDATE comentario SET Contenido = '$Contenido' WHERE Id=$IdComentario");
    $statement->execute();
    header ('Location: index.php');
}

else{
     $post = ObtenerDetalleComentariosAutor($conexion, $IdComentario);
     $post=$post[0];
}

require 'views/view.DetalleComentariosAutor.php';
?>