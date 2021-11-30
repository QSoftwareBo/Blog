<?php
require '../models/model.conexion.php';
require '../models/model.Comentarios.php';
require '../models/model.ComprobacionRol.php';
require 'view.Header.php';
restringirEditor();
$conexion=conexion();
$comentarios =ObtenerComentariosPublicos($conexion);
?>

<hr></hr>
<table>
        <h2>Lista General De Comentarios</h2>
        <tr>
            <th>Id</th>
            <th>Comentario</th>
            <th>IdAutor</th>
            <th>IdPost</th>
            <th>Tipo de Comentario</th>
            <th>Fecha de Comentario</th>
            <th>Detalle</th>
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
            <td><input type="button" onclick="location.href='../DetalleComentariosAutor.php?IdComentario=<?php echo $dato['Id'];?>&IdPost=<?php echo $dato['IdPost'];?>'" value="Detalle"></td>
            </tr>
            <?php endforeach;?> 
        </tr>
    </table>

<?php 
require 'view.Footer.php';
?>