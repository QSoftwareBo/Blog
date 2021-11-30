<?php

function ObtenerUsuarioPorID($conexion,$IdUser){
    $sentencia=$conexion->prepare("SELECT Id, Nombre, FechaRegistro, Rol FROM usuario WHERE Id=$IdUser");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

?>