<?php
function DetalleComentariosAutor($conexion, $idpost){
        $sentencia=conexion()->prepare("SELECT p.Id AS IdPost, p.Titulo, p.FechaDePublicacion, p.IdAutor,c.Id AS IdComentario,c.TipoDeComentario,c.Contenido AS ContenidoComentario,c.FechaDeComentario 
        FROM post p INNER JOIN comentario c ON c.IdPost = p.Id WHERE p.Id =$idpost and c.Id='1'");
        $sentencia->execute();
        
        return $sentencia->fetchAll();
}
?>