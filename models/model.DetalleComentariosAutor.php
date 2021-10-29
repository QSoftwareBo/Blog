<?php
function DetalleComentariosAutor($conexion, $idpost){
        $sentencia=conexion()->prepare("SELECT p.Id AS IdP, p.Titulo, p.FechaDePublicacion, p.IdAutor,c.Id AS IdC,c.TipoDeComentario,c.Contenido AS CnCm,c.FechaDeComentario 
        FROM post p INNER JOIN comentario c ON c.IdPost = p.Id WHERE p.Id =$idpost and c.Id='1'");
        $sentencia->execute();
        
        return $sentencia->fetchAll();
}
?>