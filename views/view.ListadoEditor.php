<?php 
require 'view.Header.php';
require '../ComprobarAccesos.php';
$acceso=AccesoSoloEditor();
if ($acceso){
?>
    <link rel="stylesheet" href="css/estilos.css">
    <h1>Acceso al sistema con Rol Editor</h1>
    <h1>Bienvenid@ <?php echo $_SESSION['nombre'];?></h1>
    <input type="button" onclick="location.href='../CerrarSesion.php'" value="Cerrar Sesion">
    <ul>
        <li><a href="../views/view.PostsEnviados.php">Listado de Posts Enviados a Revision</a></li>
        <li><a href="../views/view.ComentariosAPostsPublicados.php">Listado de Comentarios de Posts Publicados</a></li>
        <li><a href="../views/view.ComentariosAPostsRechazados.php">Listado de Comentarios a Posts Rechazados</a></li>
    </ul>
    
    
<?php 
require 'view.Footer.php';
}
else{
    echo "<script type='text/javascript'> alert('Acceso no permitido');</script>";
    echo "<script>location.href='../'</script>";
}
?>