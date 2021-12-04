<?php
function ObtenerPostPorId($conexion, $idpost){
        $sentencia=conexion()->prepare("SELECT post.Id, post.Titulo, post.Contenido, post.FechaDePublicacion, post.Estado, usuario.Nombre As NombreUsuario FROM post INNER JOIN usuario ON usuario.Id=post.IdAutor WHERE post.Id=$idpost");
        $sentencia->execute();
        
        return $sentencia->fetchAll();
}

function ActualizarPost($conexion,$Id,$Contenido,$Estado){
        $statement = $conexion->prepare ("UPDATE post SET Contenido = :contenido, Estado=:estado WHERE Id=:id");
        $statement->execute(array(
            ':id'=>$Id,
            ':contenido'=>$Contenido,
            ':estado'=>$Estado
        ));
        
}

function CambiarEstadoPost($conexion,$IdPost,$Estado){
        $statement = $conexion->prepare ("UPDATE post SET Estado=:estado WHERE Id=:id");
        $statement->execute(array(
            ':id'=>$IdPost,
            ':estado'=>$Estado
        ));
}

?>