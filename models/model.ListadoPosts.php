<?php
function ObtenerPostsBorradores($conexion,$id){

            $sentencia = $conexion->prepare("SELECT post.Id as IdPost, post.Titulo as PostTitulo, usuario.Nombre as Autor, post.Estado as PostEstado  FROM post  INNER JOIN usuario ON usuario.Id = post.IdAutor WHERE post.Estado='BORRADOR' and usuario.Id=$id");

            $sentencia->execute();
            return $sentencia->fetchAll();
            }


function ObtenerPostsEnviadosEscritor($conexion,$id){

            $sentencia = $conexion->prepare("SELECT post.Id as IdPost, post.Titulo as PostTitulo, usuario.Nombre as Autor, post.Estado as PostEstado  FROM post  INNER JOIN usuario ON usuario.Id = post.IdAutor WHERE post.Estado='ENVIADO' and usuario.Id=$id ");

            $sentencia->execute();
            return $sentencia->fetchAll();
            }

function ObtenerPostsParaRevision($conexion){

    $sentencia = $conexion->prepare("SELECT post.Id as IdPost, post.Titulo as PostTitulo, usuario.Nombre as Autor, post.Estado as PostEstado  FROM post  INNER JOIN usuario ON usuario.Id = post.IdAutor WHERE post.Estado='ENVIADO'");

    $sentencia->execute();
    return $sentencia->fetchAll();
    }


function ObtenerPostsPublicados($conexion,$id){

            $sentencia = $conexion->prepare("SELECT post.Id as IdPost, post.Titulo as PostTitulo, usuario.Nombre as Autor, post.Estado as PostEstado  FROM post  INNER JOIN usuario ON usuario.Id = post.IdAutor WHERE post.Estado='PUBLICADO' and usuario.Id=$id");
            $sentencia->execute();
            return $sentencia->fetchAll();
            }

function ObtenerPostsRechazados($conexion,$id){

    $sentencia = $conexion->prepare("SELECT post.Id as IdPost, post.Titulo as PostTitulo, usuario.Nombre as Autor, post.Estado as PostEstado  FROM post  INNER JOIN usuario ON usuario.Id = post.IdAutor WHERE post.Estado='RECHAZADO' and usuario.Id=$id");
    $sentencia->execute();
    return $sentencia->fetchAll();
    }

?>