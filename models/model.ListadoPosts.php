<?php
function ObtenerPostsBorradores($conexion){

            $sentencia = $conexion->prepare("SELECT Id,Titulo,IdAutor,Estado FROM post where Estado='BORRADOR'");

            $sentencia->execute();
            return $sentencia->fetchAll();
            }


function ObtenerPostsEnviados($conexion){

            $sentencia = $conexion->prepare("SELECT Id,Titulo,IdAutor,Estado FROM post where Estado='ENVIADO'");

            $sentencia->execute();
            return $sentencia->fetchAll();
            }

function ObtenerPostsPublicados($conexion){

            $sentencia = $conexion->prepare("SELECT Id,Titulo,FechaDePublicacion, IdAutor ,Estado FROM post WHERE Estado='PUBLICADO' ");
            $sentencia->execute();
            return $sentencia->fetchAll();
            }


?>