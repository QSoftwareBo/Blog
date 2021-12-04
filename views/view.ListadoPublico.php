<?php 
require 'view.Header.php';
require '../ComprobarAccesos.php';
$acceso=AccesoSoloPublico();
if ($acceso){

?>
    <link rel="stylesheet" href="css/estilos.css">
    <h1>Acceso al usuario con Rol Publico</h1>
    <input type="button" onclick="location.href='../CerrarSesion.php'" value="Cerrar Sesion">
    <ul>
        <li><a href="../views/view.PostsPublicos.php">Listado de Posts Públicos</a></li>
        
    </ul>
<?php 
require 'view.Footer.php';
}
else{
    echo "<script>alert('Acceso Restringido')</script>";
    echo "<script>location.href='../'</script>";
}
?>