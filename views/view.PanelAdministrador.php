
<link rel="stylesheet" href="css/estilos.css">
<hr></hr>
<form action="models/model.CambioRol.php" method="POST" >
    <table>
            <h2>Listado de Usuarios</h2>
            <input type="button" onclick="location.href='CerrarSesion.php'" value="Cerrar Sesion"></br>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Rol Actual</th>
            </tr>
            <tr>
            <?php foreach ($ListaUsuarios as $Usuario):?>
                <tr>
                <td name="Id" value="<?php echo $Usuario['Id'];?>"><?php echo $Usuario['Id'];?></td>
                <td><?php echo $Usuario['Nombre'];?></td>
                <td><?php echo $Usuario['Rol'];?>  <input type="button" onclick="location.href='DetalleUsuario.php?id=<?php echo $Usuario['Id'];?>'" value="Modificar"></td>
                <td></td>   
                </tr>
            <?php endforeach;?> 
            </tr>
            
    </table>
    
</form>
<?php 
require 'view.Footer.php';
?>