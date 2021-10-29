<?php
require '../models/model.conexion.php';
require '../models/model.ListadoPosts.php';
require 'view.Header.php';
$conexion=conexion();
$publicados =ObtenerPostsPublicados($conexion);
?>
<hr></hr>
<table>
        <h2>Listado de Posts Públicos</h2>
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>IdAutor</th>
            <th>Estado</th>
        </tr>
        <tr>
           <?php foreach ($publicados as $dato):?>
            <tr>
            <td><?php echo $dato['Id'];?></td>
            <td><?php echo $dato['Titulo'];?></td>
            <td><?php echo $dato['IdAutor'];?></td>
            <td><?php echo $dato['Estado'];?></td>
            </tr>
            <?php endforeach;?> 
        </tr>
</table>

<?php 
require 'view.Footer.php';
?>