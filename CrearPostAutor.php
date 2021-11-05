<?php 
require 'models/model.conexion.php';
require 'views/view.Header.php';
$conexion=conexion();
$IdUsuario='1';

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $EstadoBorrador=htmlspecialchars($_POST['Borrador']);
    $EstadoRevision=htmlspecialchars($_POST['Revision']);
    if(isset($EstadoBorrador)){
        $Estado='BORRADOR';
    }
    if(isset($EstadoRevision)){
        $Estado='ENVIADO';
    }
    $Titulo=htmlspecialchars($_POST['Titulo']);
    $Contenido = htmlspecialchars($_POST['Contenido']);
    $statement = $conexion->prepare ("INSERT INTO post (Id, Titulo, Contenido, FechaDePublicacion, Estado, IdAutor) VALUES (null, :Titulo, :Contenido, CURDATE(), :Estado, :IdUsuario)");   
    $statement->execute(array(
        ":Titulo"=>$Titulo,
        ":Contenido"=>$Contenido,
        ":Estado"=>$Estado,
        ":IdUsuario"=>$IdUsuario
    ));
    if ($EstadoBorrador){
        header ('Location: views/view.PostsBorradores.php');
    }
    if ($EstadoRevision){
        header ('Location: views/view.PostsEnviados.php');
    }
   
}

require 'views/view.CrearPostAutor.php';
?>