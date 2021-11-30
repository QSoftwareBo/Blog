
<link rel="stylesheet" href="css/estilos.css">
<hr></hr>
<form action="models/model.CambioRol.php" method="POST" >
    <table>
            <h2>Listado de Usuarios</h2>
            <input type="button" onclick="location.href='models/model.CerrarSesion.php'" value="Cerrar Sesion"></br>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Rol Actual</th>
            </tr>
            <tr>
            <?php foreach ($lista as $dato):?>
                <tr>
                <td name="Id" value="<?php echo $dato['Id'];?>"><?php echo $dato['Id'];?></td>
                <td><?php echo $dato['Nombre'];?></td>
                <td><?php echo $dato['Rol'];?>  <input type="button" onclick="location.href='DetalleUsuario.php?id=<?php echo $dato['Id'];?>'" value="Modificar"></td>
                <td></td>   
                </tr>
                
                <?php endforeach;?> 
            </tr>
            
    </table>
    
</form>
<?php 
require 'view.Footer.php';
?>