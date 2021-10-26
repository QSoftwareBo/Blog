<?php
function ObtenerComentariosRechazados($conexion,$IdUsuario,$IdPost){

            $sentencia = $conexion->prepare("SELECT cmt.Id, cmt.Contenido, cmt.FechaDeComentario,cmt.TipoDeComentario,cmt.IdUsuario,cmt.IdPost FROM comentario cmt INNER JOIN post pst on pst.Id = cmt.IdPost WHERE cmt.TipoDeComentario='RECHAZO' and cmt.Idusuario=:IdUsuario and cmt.IdPost=:IdPost");
            $sentencia->execute(array(
                ':IdUsuario'=>$IdUsuario, 
                ':IdPost'=>$IdPost

            ));
            
            return $sentencia->fetchAll();
            }

function ObtenerComentariosPublicos($conexion){

            $sentencia = $conexion->prepare("SELECT  Id,Contenido,FechaDeComentario,TipoDeComentario,IdUsuario,IdPost FROM comentario where TipoDeComentario='PUBLICO'");
            
            $sentencia->execute();
            return $sentencia->fetchAll();
            }
?>