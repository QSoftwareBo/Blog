<?php
require '../models/model.conexion.php';
require '../models/model.Comentarios.php';
$conexion=conexion();
$comentarios =ObtenerComentariosPublicos($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    
    <title>Blog_Prototipo</title>
</head>
<hr></hr>
<table>
        <h2>Listado de Comentarios Públicos</h2>
        <tr>
            <th>Id</th>
            <th>Comentario</th>
            <th>IdAutor</th>
            <th>IdPost</th>
            <th>Tipo de Comentario</th>
            <th>Fecha de Comentario</th>
        </tr>
        <tr>
           <?php foreach ($comentarios as $dato):?>
            <tr>
            <td><?php echo $dato['Id'];?></td>
            <td><?php echo $dato['Contenido'];?></td>
            <td><?php echo $dato['IdUsuario'];?></td>
            <td><?php echo $dato['IdPost'];?></td>
            <td><?php echo $dato['TipoDeComentario'];?></td>
            <td><?php echo $dato['FechaDeComentario'];?></td>
            </tr>
            <?php endforeach;?> 
        </tr>
    </table>