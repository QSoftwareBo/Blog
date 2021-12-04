<?php
require '../models/model.conexion.php';
require '../models/model.Comentarios.php';
require 'view.Header.php';
require '../ComprobarAccesos.php';
$acceso=AccesoSoloEditor();
if ($acceso){
$conexion=conexion();

$comentarios=ObtenerComentariosDePostsPublicados($conexion);
?>

<hr></hr>
<table>
        <h2>Lista General De Comentarios de Posts PUBLICADOS</h2>
        <tr>
            <th>Id</th>
            <th>Comentario</th>
            <th>Autor</th>
            <th>Titulo Del Post</th>
            <th>Tipo de Comentario</th>
            <th>Fecha de Comentario</th>
            
        </tr>
        <tr>
           <?php foreach ($comentarios as $dato):?>
            <tr>
            <td><?php echo $dato['IdComentario'];?></td>
            <td><?php echo $dato['Contenido'];?></td>
            <td><?php echo $dato['NombreUsuario'];?></td>
            <td><?php echo $dato['TituloPost'];?></td>
            <td><?php echo $dato['TipoDeComentario'];?></td>
            <td><?php echo $dato['FechaDeComentario'];?></td>
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