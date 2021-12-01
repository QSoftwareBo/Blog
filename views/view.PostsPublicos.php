<?php
require '../models/model.conexion.php';
require '../models/model.ListadoPosts.php';
require '../ComprobacionRol.php';
require '../FuncionesDeSesion.php';
require 'view.Header.php';
restringirEscritor();
ComprobarSesionVistas();
$conexion=conexion();
$publicados =ObtenerPostsPublicados($conexion);
?>
<hr></hr>
<table>
        <h2>Listado de Posts Públicos</h2>
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Estado</th>
            <th>Detalle</th>
        </tr>
        <tr>
           <?php foreach ($publicados as $dato):?>
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