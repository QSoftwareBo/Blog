<?php
    require 'view.Header.php';
    $acceso=AccesoSoloAdministrador();
    if ($acceso){
        
?>
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
            <?php foreach ($listaUsuarios as $usuario):?>
                <tr>
                <td name="Id" value="<?php echo $Usuario['Id'];?>"><?php echo $usuario['Id'];?></td>
                <td><?php echo $usuario['Nombre'];?></td>
                <td><?php echo $usuario['Rol'];?>  <input type="button" onclick="location.href='DetalleUsuario.php?id=<?php echo $usuario['Id'];?>'" value="Modificar"></td>
                <td></td>   
                </tr>
            <?php endforeach;?> 
            </tr>
            
    </table>
    
</form>
<?php 

    require 'view.Footer.php';
    }
    else{
        echo "<script>alert('Acceso Restringido')</script>";
        echo "<script>location.href='../'</script>";
    }
?>