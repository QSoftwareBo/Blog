<?php 
require 'view.Header.php';
?>
    <link rel="stylesheet" href="css/estilos.css">
    <h1>Acceso al usuario con Rol Publico</h1>
    <input type="button" onclick="location.href='../models/model.CerrarSesion.php'" value="Cerrar Sesion">
    <ul>
        <li><a href="../views/view.PostsPublicos.php">Listado de Posts Públicos</a></li>
        
    </ul>
<?php 
require 'view.Footer.php';
?>