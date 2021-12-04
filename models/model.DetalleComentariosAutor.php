<?php
function ObtenerDetalleComentariosAutor($conexion, $IdPost){
        $sentencia=conexion()->prepare("SELECT post.Id as IdPost, post.Titulo, post.Contenido, post.FechaDePublicacion, post.IdAutor,comentario.Id as IdComentario, comentario.TipoDeComentario as TipoComentario , comentario.Contenido as Comentario, comentario.FechaDeComentario 
        FROM post INNER JOIN comentario  ON comentario.IdPost = post.Id WHERE post.Id=$IdPost");
        $sentencia->execute();
        
        return $sentencia->fetchAll();
}
?>