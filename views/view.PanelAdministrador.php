<?php
require '../models/model.conexion.php';
require '../models/model.ListadoUsuarios.php';
require '../models/model.FuncionesDeSesion.php';
require 'view.Header.php';
$conexion=conexion();
/*Sesion Vigente para la vista*/
$comprobar=ComprobarSesionVistas();
$lista =ObtenerListaUsuarios($conexion);
?>
<hr></hr>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" >
    <table>
            <h2>Listado de Usuarios</h2>
            <input type="button" onclick="location.href='../models/model.CerrarSesion.php'" value="Cerrar Sesion"></br>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Fecha de Registro</th>
                <th>Rol Actual</th>
            </tr>
            <tr>
            <?php foreach ($lista as $dato):?>
                <tr>
                <td><?php echo $dato['Id'];?></td>
                <td><?php echo $dato['Nombre'];?></td>
                <td><?php echo $dato['FechaRegistro'];?></td>
                <td>
                    <select  name="rol">
                        <option value="<?php $dato['Rol'];?>"><?php echo $dato['Rol'];?></option>
                        <option value="ESCRITOR">ESCRITOR</option>
                        <option value="EDITOR">EDITOR</option>
                        <option value="PUBLICO">PUBLICO</option>
                    </select>
                </td>
                
                </tr>
                
                <?php endforeach;?> 
            </tr>
            <tr>
                <td><input type="submit" value="Ejecutar Cambio de roles"></td>
            </tr>
    </table>
    
</form>
<?php 
require 'view.Footer.php';
?>