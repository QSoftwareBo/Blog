<?php
function CrearPost($conexion,$Titulo,$Contenido,$Estado,$IdUsuario){
    $statement = $conexion->prepare ("INSERT INTO post (Id, Titulo, Contenido, FechaDePublicacion, Estado, IdAutor) VALUES (null, :Titulo, :Contenido, CURDATE(), :Estado, :IdUsuario)");   
    $statement->execute(array(
        ":Titulo"=>$Titulo,
        ":Contenido"=>$Contenido,
        ":Estado"=>$Estado,
        ":IdUsuario"=>$IdUsuario
    ));
}


?>