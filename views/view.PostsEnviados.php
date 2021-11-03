<?php
require '../models/model.conexion.php';
require '../models/model.ListadoPosts.php';
require 'view.Header.php';
$conexion=conexion();
$enviados =ObtenerPostsEnviados($conexion);
?>
<hr></hr>
<table>
        <h2>Listado de Posts Enviados a Revisión</h2>
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>IdAutor</th>
            <th>Estado</th>
            <th>Ver Detalle</th>
        </tr>
        <tr>
           <?php foreach ($enviados as $dato):?>
            <tr>
            <td><?php echo $dato['Id'];?></td>
            <td><?php echo $dato['Titulo'];?></td>
            <td><?php echo $dato['IdAutor'];?></td>
            <td><?php echo $dato['Estado'];?></td>
            <td><input type="button" value="Detalle" onclick="location.href='../DetalleRegistro.php?id=<?php echo $dato['Id'];?>'"></td>
            </tr>
            <?php endforeach;?> 
        </tr>
    </table>
<?php 
require 'view.Footer.php';
?>