<?php
function ObtenerComentariosRechazados($conexion,$IdUsuario,$IdPost){
    $sentencia = $conexion->prepare("SELECT cmt.Id, cmt.Contenido, cmt.FechaDeComentario,cmt.TipoDeComentario,cmt.IdUsuario,cmt.IdPost FROM comentario cmt INNER JOIN post pst on pst.Id = cmt.IdPost WHERE cmt.TipoDeComentario='RECHAZO' and cmt.Idusuario=:IdUsuario and cmt.IdPost=:IdPost");
    $sentencia->execute(array(
        ':IdUsuario'=>$IdUsuario, 
        ':IdPost'=>$IdPost
    ));
    
    return $sentencia->fetchAll();
}

function ObtenerComentariosDelPost($conexion,$IdUser,$IdPost){
    $sentencia = $conexion->query("SELECT  comentario.Id AS IdComentario,comentario.Contenido,comentario.FechaDeComentario,comentario.TipoDeComentario,comentario.IdUsuario,comentario.IdPost, post.Id, post.Titulo as TituloPost, post.Estado, post.IdAutor, usuario.Id FROM comentario INNER JOIN post ON comentario.IdPost=post.Id INNER JOIN usuario ON comentario.IdUsuario = usuario.Id WHERE post.Id=$IdPost and usuario.Id=$IdUser ");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function ObtenerComentariosDePostsPublicados($conexion){
    $sentencia=$conexion->prepare("SELECT comentario.Id as IdComentario, comentario.Contenido, comentario.FechaDeComentario, comentario.TipoDeComentario, comentario.IdUsuario, comentario.IdPost, usuario.Id, usuario.Nombre as NombreUsuario,post.Id, post.Titulo as TituloPost, post.Estado FROM comentario INNER JOIN usuario On comentario.IdUsuario=usuario.Id INNER JOIN post ON comentario.IdPost=post.Id WHERE post.Estado='PUBLICADO' ");
    $sentencia->execute();
    return $sentencia->fetchAll();
}


function ObtenerDetalleDePost($conexion, $IdPost){
    $sentencia=$conexion->prepare("SELECT post.Id as IdPost, post.Titulo, post.Contenido, post.FechaDePublicacion, post.IdAutor FROM post WHERE post.Id=$IdPost");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function GuardarComentario($conexion,$Contenido,$TipoComentario,$IdUsuario,$IdPost){
    $statement = $conexion->prepare ("INSERT INTO comentario  (Id, Contenido, FechaDeComentario, TipoDeComentario, IdUsuario, IdPost) VALUES (null, :Contenido, CURDATE(), :TipoComentario, :IdUsuario, :IdPost)");   
    $statement->execute(array(
        ":Contenido"=>$Contenido,
        ":TipoComentario"=>$TipoComentario,
        ":IdUsuario"=>$IdUsuario,
        ":IdPost"=>$IdPost
    ));
    
}

function PublicarPost($conexion,$IdPost){

    $statement = $conexion->prepare ("UPDATE post SET  Estado='PUBLICADO' WHERE Id=$IdPost");   
    $statement->execute();
}

function RechazarPost($conexion,$IdPost){

    $statement = $conexion->prepare ("UPDATE post SET  Estado='RECHAZADO' WHERE Id=$IdPost");   
    $statement->execute();
}
?>