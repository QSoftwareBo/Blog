<?php 
require 'view.Header.php';
require '../models/model.ComprobacionRol.php';
restringirEditor();
echo "<script type='text/javascript'> alert('Acceso no permitido');</script>";
?>
    <link rel="stylesheet" href="css/estilos.css">
    <h1>Acceso al sistema con Rol Editor</h1>
    <input type="button" onclick="location.href='../CerrarSesion.php'" value="Cerrar Sesion">
    <ul>
        <li><a href="../views/view.PostsEnviados.php">Listado de Posts Enviados</a></li>
        <li><a href="../views/view.ComentariosPublicos.php">Listado de Comentarios Públicos</a></li>
        <li><a href="../views/view.ComentariosRechazados.php">Listado de Comentarios Rechazados</a></li>
    </ul>
    <hr></hr>
    <h2>Opciones para el usuario</h2>
    <ul>
       
        <li><a href="<?php echo "../DetalleComentariosAutor.php";?>">Blog 12 - Editar y Crear Comentarios</a></li>
       
    </ul>
<?php 
require 'view.Footer.php';
?>