<?php 
require 'view.Header.php';
require '../ComprobarAccesos.php';
$acceso=AccesoSoloEscritor();
if ($acceso){
?>
    <link rel="stylesheet" href="css/estilos.css">
    <h1>Acceso al sistema con Rol Escritor</h1>
    <h1>Bienvenid@ <?php echo $_SESSION['nombre'];?></h1>
    <input type="button" onclick="location.href='../CerrarSesion.php'" value="Cerrar Sesion">
    <ul>
        <li><a href="../views/view.PostsPublicos.php">Listado de Posts Públicos</a></li>
        <li><a href="../views/view.PostsBorradores.php">Listado de Posts Borradores</a></li>
        <li><a href="../views/view.PostsEnviados.php">Listado de Posts Enviados</a></li>
        <li><a href="../views/view.PostsRechazados.php">Listado de Posts Rechazados</a></li>
    </ul>
    <hr></hr>
    <h2>Opciones para el Usuario</h2>
    <ul>
        <li><a href="<?php echo "../CrearPostAutor.php";?>">Crear Post</a></li>
    </ul>
<?php 
require 'view.Footer.php';
}
else{
    echo "<script>alert('Acceso Restringido')</script>";
    echo "<script>location.href='../'</script>";
}
?>