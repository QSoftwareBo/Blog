<?php
require '../models/model.conexion.php';
require '../models/model.ListadoPosts.php';
require 'view.Header.php';
require '../ComprobarAccesos.php';
$accesoEscritor=AccesoSoloEscritor();
$accesoEditor=AccesoSoloEditor();
if($accesoEscritor || $accesoEditor){
$conexion=conexion();

if(!empty($accesoEditor)){
    $enviados =ObtenerPostsParaRevision($conexion);    
}
if(!empty($accesoEscritor)){
$IdUser=$_SESSION['id'];
$enviados =ObtenerPostsEnviadosEscritor($conexion,$IdUser);
}

?>
<hr></hr>
<table>
        <h2>Listado de Posts Enviados a Revisión</h2>
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>IdAutor</th>
            <th>Estado</th>
        </tr>
        <tr>
           <?php foreach ($enviados as $dato):?>
            <tr>
            <td><?php echo $dato['IdPost'];?></td>
            <td><?php echo $dato['PostTitulo'];?></td>
            <td><?php echo $dato['Autor'];?></td>
            <td><?php echo $dato['PostEstado'];?> para Revisión</td>
            <?php if ($accesoEditor):?>
            <td><input type="button" onclick="location.href='../NuevoComentarioAutor.php?id=<?php echo $dato['IdPost'];?>'" value="Revisar"></td>
            <?php endif;?>
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