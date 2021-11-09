<?php 
require 'view.Header.php';
?>
    <link rel="stylesheet" href="css/estilos.css">
    <div>Estructura del Sprint hasta el Blog 10</div>
    <ul>
        <li><a href="views/view.PostsPublicos.php">Listado de Posts Públicos</a></li>
        <li><a href="views/view.PostsBorradores.php">Listado de Posts Borradores</a></li>
        <li><a href="views/view.PostsEnviados.php">Listado de Posts Enviados</a></li>
        <li><a href="views/view.ComentariosPublicos.php">Listado General De Comentarios</a></li>
        <li><a href="views/view.ComentariosRechazados.php">Listado de Comentarios Rechazados</a></li>
    </ul>
    <hr></hr>
    <div>Estructura del Sprint para los Blog 11, 12, 13</div>
    <ul>
        <li><a href="<?php echo "EditarPost.php";?>">Blog 11 - Edicion de Posts</a></li>
        <li><a href="<?php echo "DetalleComentariosAutor.php";?>">Blog 12 - Editar y Crear Comentarios</a></li>
        <li><a href="<?php echo "CrearPostAutor.php";?>">Blog 13 - Crear un Post del Autor</a></li>
    </ul>
<?php 
require 'view.Footer.php';
?>