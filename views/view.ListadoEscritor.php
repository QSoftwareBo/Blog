<?php 
require 'view.Header.php';
require '../ComprobacionRol.php';
restringirEscritor();
echo "<script type='text/javascript'> alert('Acceso no permitido');</script>";
?>
    <link rel="stylesheet" href="css/estilos.css">
    <h1>Acceso al sistema  con Rol Escritor</h1>
    <input type="button" onclick="location.href='../CerrarSesion.php'" value="Cerrar Sesion">
    <ul>
        <li><a href="../views/view.PostsPublicos.php">Listado de Posts Públicos</a></li>
        <li><a href="../views/view.PostsBorradores.php">Listado de Posts Borradores</a></li>
        <li><a href="../views/view.PostsEnviados.php">Listado de Posts Enviados</a></li>
        
    </ul>
    <hr></hr>
    <h2>Opciones para el Usuario</h2>
    <ul>
        <li><a href="<?php echo "../EditarPost.php";?>">Blog 11 - Edicion de Posts</a></li>
        <li><a href="<?php echo "../CrearPostAutor.php";?>">Blog 13 - Crear un Post del Autor</a></li>
    </ul>
<?php 
require 'view.Footer.php';
?>