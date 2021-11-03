<?php
function DetalleRegistro($conexion, $id){
    $resultado = $conexion->query("SELECT * FROM post WHERE id = $id LIMIT 1");
    $resultado = $resultado->fetchAll();
    //print_r($resultado);
    return ($resultado) ? $resultado : false;
}
?>

