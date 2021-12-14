<?php
require '../models/model.conexion.php';
require '../models/model.ListadoPosts.php';
require 'view.Header.php';
require '../ComprobarAccesos.php';
$acceso=AccesoSoloEscritor();
if ($acceso){
$conexion=conexion();
$Id=$_SESSION['id'];
$publicados =ObtenerPostsPublicados($conexion,$Id);
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
            <td><input type="button" onclick="location.href='../EditarPost.php?id=<?php echo $dato['IdPost'];?>'" value="Ver"></td>
            </tr>
            <?php endforeach;?> 
        </tr>
</table>

<?php 
require 'view.Footer.php';
}
else{
    echo "<script>alert('Acceso Restringido')</script>";
    echo "<script>location.href='../'</script>";
}
?>