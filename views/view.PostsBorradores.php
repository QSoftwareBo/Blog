<?php
require '../models/model.conexion.php';
require '../models/model.ListadoPosts.php';
require 'view.Header.php';
require '../ComprobarAccesos.php';

$acceso=AccesoSoloEscritor();
if($acceso){
$conexion=conexion();
$IdUser=$_SESSION['id'];
$borradores =ObtenerPostsBorradores($conexion,$IdUser);
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
            <td><?php echo $dato['IdPost'];?></td>
            <td><?php echo $dato['PostTitulo'];?></td>
            <td><?php echo $dato['Autor'];?></td>
            <td><?php echo $dato['PostEstado'];?></td>
            <td><input type="button" onclick="location.href='../EditarPost.php?id=<?php echo $dato['IdPost'];?>'" value="Editar"></td>
            </tr>
            <?php endforeach;?> 
        </tr>
    </table>
<?php 
require 'view.Footer.php';
}else{
    echo "<script>alert('Acceso Restringido')</script>";
    echo "<script>location.href='../'</script>";
}
?>