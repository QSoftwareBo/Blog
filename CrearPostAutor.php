<?php 
require 'models/model.conexion.php';
require 'views/view.Header.php';
$conexion=conexion();
$IdUsuario='1';

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $Estado1=$_POST['Borrador'];
    $Estado2=$_POST['Revision'];
    if(isset($Estado1)){
        $Estado='BORRADOR';
    }
    if(isset($Estado2)){
        $Estado='ENVIADO';
    }
    $Titulo=htmlspecialchars($_POST['Titulo']);
    $Contenido = htmlspecialchars($_POST['Contenido']);
    $statement = $conexion->prepare ("INSERT INTO post (Id, Titulo, Contenido, FechaDePublicacion, Estado, IdAutor) VALUES (null, :Contenido, :Titulo, CURDATE(), :Estado, :IdUsuario)");   
    $statement->execute(array(
        ":Titulo"=>$Titulo,
        ":Contenido"=>$Contenido,
        ":Estado"=>$Estado,
        ":IdUsuario"=>$IdUsuario
    ));
    if ($Estado1){
    header ('Location: views/view.PostsBorradores.php');
    }
    if ($Estado2){
        header ('Location: views/view.PostsEnviados.php');
    }
   
}

require 'views/view.CrearPostAutor.php';
?>