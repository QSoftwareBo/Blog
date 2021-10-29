<?php
require '../models/model.conexion.php';
require '../models/model.Comentarios.php';
require 'view.Header.php';
$conexion=conexion();
$comentarios =ObtenerComentariosPublicos($conexion);
?>

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

<?php 
require 'view.Footer.php';
?>