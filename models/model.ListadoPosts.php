<?php
function ObtenerPostsBorradores($conexion){

            $sentencia = $conexion->prepare("SELECT post.Id as IdPost, post.Titulo as PostTitulo, usuario.Nombre as Autor, post.Estado as PostEstado  FROM post  INNER JOIN usuario ON usuario.Id = post.IdAutor WHERE post.Estado='BORRADOR'");

            $sentencia->execute();
            return $sentencia->fetchAll();
            }


function ObtenerPostsEnviados($conexion){

            $sentencia = $conexion->prepare("SELECT post.Id as IdPost, post.Titulo as PostTitulo, usuario.Nombre as Autor, post.Estado as PostEstado  FROM post  INNER JOIN usuario ON usuario.Id = post.IdAutor WHERE post.Estado='ENVIADO' ");

            $sentencia->execute();
            return $sentencia->fetchAll();
            }

function ObtenerPostsPublicados($conexion){

            $sentencia = $conexion->prepare("SELECT post.Id as IdPost, post.Titulo as PostTitulo, usuario.Nombre as Autor, post.Estado as PostEstado  FROM post  INNER JOIN usuario ON usuario.Id = post.IdAutor WHERE post.Estado='PUBLICADO' ");
            $sentencia->execute();
            return $sentencia->fetchAll();
            }
?>