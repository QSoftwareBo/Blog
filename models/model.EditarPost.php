<?php
function ObtenerPostPorId($conexion, $idpost){
        $sentencia=conexion()->prepare("SELECT Id, Titulo, Contenido, FechaDePublicacion, Estado, IdAutor FROM post WHERE Id=$idpost");
        $sentencia->execute();
        
        return $sentencia->fetchAll();
}
?>