<?php
require '../models/model.conexion.php';
require '../models/model.ListadoPosts.php';
$conexion=conexion();
$borradores =ObtenerPostsBorradores($conexion);
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
        <h2>Listado de Posts Borradores</h2>
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>IdAutor</th>
            <th>Estado</th>
        </tr>
        <tr>
           <?php foreach ($borradores as $dato):?>
            <tr>
            <td><?php echo $dato['Id'];?></td>
            <td><?php echo $dato['Titulo'];?></td>
            <td><?php echo $dato['IdAutor'];?></td>
            <td><?php echo $dato['Estado'];?></td>
            </tr>
            <?php endforeach;?> 
        </tr>
    </table>