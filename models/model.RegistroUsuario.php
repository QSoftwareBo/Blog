<?php

function RegistrarUsuario($nombre, $password){
    
    $Reg=conexion();
    $statement = $Reg->prepare("INSERT INTO usuario (Id, Nombre, Password, Rol, FechaRegistro) VALUES (null, :nombre, :pass, 'PUBLICO', CURDATE())");

    $statement->execute(array(
        ':nombre' => $nombre,
        ':pass' => $password
    ));
    return ($statement) ? $statement : false;

}
?>