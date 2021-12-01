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
            <th>Detalle</th>
        </tr>
        <tr>
           <?php foreach ($enviados as $dato):?>
            <tr>
            <td><?php echo $dato['IdPost'];?></td>
            <td><?php echo $dato['PostTitulo'];?></td>
            <td><?php echo $dato['Autor'];?></td>
            <td><?php echo $dato['PostEstado'];?></td>
            <td><input type="button" onclick="location.href='../EditarPost.php?id=<?php echo $dato['Id'];?>'" value="Ver Detalle"></td>
            </tr>
            <?php endforeach;?> 
        </tr>
    </table>
<?php 
require 'view.Footer.php';
?>