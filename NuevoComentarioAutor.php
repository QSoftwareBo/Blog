<?php
require 'models/model.conexion.php';
require 'models/model.DetalleComentariosAutor.php';
require 'models/model.FuncionesDeSesion.php';
$comprobar=ComprobarSesionControladores();
$conexion=conexion();
$IdPost='1';
$IdUsuario='1';

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $TipoComentario='PUBLICO';
    $Contenido = htmlspecialchars($_POST['Contenido']);
    $statement = $conexion->prepare ("INSERT INTO comentario (Id, Contenido, FechaDeComentario, TipoDeComentario, IdUsuario, IdPost) VALUES (null, :Contenido, CURDATE(), :TipoComentario, :IdUsuario, :IdPost )");   
    $statement->execute(array(
        ":Contenido"=>$Contenido,
        ":TipoComentario"=>$TipoComentario,
        ":IdUsuario"=>$IdUsuario,
        ":IdPost"=>$IdPost
    ));
    header ('Location: index.php');
   
}

else{
     $post = DetalleComentariosAutor($conexion, $IdPost);
     $post=$post[0];
}

require 'views/view.NuevoComentarioAutor.php';
?>