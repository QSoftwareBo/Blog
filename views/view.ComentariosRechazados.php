<?php
require '../models/model.conexion.php';
require '../models/model.Comentarios.php';
$conexion=conexion();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    
    <title>Blog_Prototipo</title>
</head>
<?php if ($_SERVER['REQUEST_METHOD']=='POST'){
    $IdUsuario=htmlspecialchars($_POST['IdUsuario']);
    $IdPost=htmlspecialchars($_POST['IdPost']);
    $rechazados =ObtenerComentariosRechazados($conexion,$IdUsuario,$IdPost);
}
?>
<hr></hr>
<table>
        <h2>Listado de Comentarios Rechazados</h2>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method='POST'>
            <label for="usuario">Ingrese IdUsuario:</label><br>
            <input type="number" id="IdUsuario" name="IdUsuario"><br>
            <label for="idpost">Ingrese IdPost:</label><br>
            <input type="number" id="IdPost" name="IdPost"><br>
            <input type="submit" value="Consultar">
        </form>
        <tr>
            <th>Id</th>
            <th>Comentario</th>
            <th>IdAutor</th>
            <th>IdPost</th>
            <th>Tipo de Comentario</th>
            <th>Fecha de Comentario</th>
        </tr>
        <tr>
           <?php foreach ($rechazados as $dato):?>
            <tr>
            <td><?php echo $dato['Id'];?></td>
            <td><?php echo $dato['Contenido'];?></td>
            <td><?php echo $dato['IdUsuario'];?></td>
            <td><?php echo $dato['IdPost'];?></td>
            <td><?php echo $dato['TipoDeComentario'];?></td>
            <td><?php echo $dato['FechaDeComentario'];?></td>
            </tr>
            <?php endforeach;?> 
        </tr>
    </table>