<?php
function ObtenerListaUsuarios($conexion){

    $sentencia = $conexion->prepare("SELECT Id,Nombre,FechaRegistro,Rol FROM usuario");

    $sentencia->execute();
    return $sentencia->fetchAll();
    }

?>