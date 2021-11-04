<?php
require '../models/model.conexion.php';
require '../models/model.ListadoPosts.php';
require 'view.Header.php';
$conexion=conexion();
$borradores =ObtenerPostsBorradores($conexion);
?>

<hr></hr>
<table>
        <h2>Listado de Posts Borradores</h2>
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>IdAutor</th>
            <th>Estado</th>
            <th>Detalle</th>
        </tr>
        <tr>
           <?php foreach ($borradores as $dato):?>
            <tr>
            <td><?php echo $dato['Id'];?></td>
            <td><?php echo $dato['Titulo'];?></td>
            <td><?php echo $dato['IdAutor'];?></td>
            <td><?php echo $dato['Estado'];?></td>
            <td><input type="button" onclick="location.href='../EditarPost.php?id=<?php echo $dato['Id'];?>'" value="Ver Detalle"></td>
            </tr>
            <?php endforeach;?> 
        </tr>
    </table>
<?php 
require 'view.Footer.php';
?>