<?php
require 'models/model.conexion.php';
require 'models/model.Comentarios.php';
require 'models/model.EditarPost.php';
require 'ComprobarAccesos.php';
$acceso=AccesoSoloEditor();
if ($acceso){
$conexion=conexion();
if(isset($_GET['id'])){
    $IdPost = htmlspecialchars ($_GET['id']);
}else{
    header('location: index.php');
}

if ($_SERVER['REQUEST_METHOD']=='POST'){
    
    $Comentario = htmlspecialchars($_POST['Comentario']);
    $IdUsuario=$_POST['IdAutor'];
    $IdPost=$_POST['IdPost'];
    $TipoComentario=$_POST['TipoDeComentario'];
    GuardarComentario($conexion,$Comentario,$TipoComentario,$IdUsuario,$IdPost);
    
    if($TipoComentario=='RECHAZO'){
    $EstadoPost='RECHAZADO';
    }else{
    $EstadoPost='PUBLICADO';
    }
    CambiarEstadoPost($conexion, $IdPost, $EstadoPost);



    header ('Location: index.php');
   
}

else{
     $post = ObtenerDetalleDePost($conexion, $IdPost);
     $post=$post[0];
     require 'views/view.NuevoComentarioAutor.php';
}


}
else{
    echo "<script type='text/javascript'> alert('Acceso no permitido');</script>";
    echo "<script>location.href='index.php'</script>";
}
?>