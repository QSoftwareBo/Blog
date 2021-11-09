<?php
function DetalleComentariosAutor($conexion, $IdComentario){
        $sentencia=conexion()->prepare("SELECT p.Id AS IdPost, p.Titulo, p.FechaDePublicacion, p.IdAutor,c.Id AS IdComentario,c.TipoDeComentario,c.Contenido AS ContenidoComentario,c.FechaDeComentario 
        FROM post p INNER JOIN comentario c ON c.IdPost = p.Id WHERE c.Id=$IdComentario");
        $sentencia->execute();
        
        return $sentencia->fetchAll();
}
?>