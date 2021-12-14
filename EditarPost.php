<?php
require 'models/model.conexion.php';
require 'models/model.EditarPost.php';
require 'models/model.Comentarios.php';
require 'views/view.Header.php';
require 'ComprobarAccesos.php';
$acceso=AccesoSoloEscritor();
if ($acceso){

$conexion=conexion();
if(isset($_GET['id'])){
    $IdPost = htmlspecialchars ($_GET['id']);
}else{
    header('location: index.php');
}
if ($_SERVER['REQUEST_METHOD']=='POST'){
    
    $Contenido = htmlspecialchars($_POST['Contenido']);
    $Id=$_POST['id'];
    
    if (isset($_POST['Borrador'])){
        $Estado = 'BORRADOR';
    } 
    if (isset($_POST['Enviar'])){
        $Estado = 'ENVIADO';
    }
    if (isset($_POST['Comentarios'])){
        $direccion='DetalleComentariosAutor.php?IdComentario='.$Id;
        echo $direccion;
    header('location:'.$direccion);
    }
    ActualizarPost($conexion,$Id,$Contenido,$Estado);
    header ('Location: index.php');
}
else{
     $IdUser=$_SESSION['id'];
     
     $post = ObtenerPostPorID($conexion, $IdPost);
     $comentarios=ObtenerComentariosDelPost($conexion,$IdUser,$IdPost);
     $post=$post[0];
}
    require 'views/view.EdicionPost.php';
}
else{
    echo "<script>alert('Acceso Restringido')</script>";
    echo "<script>location.href='../'</script>";
}
?>