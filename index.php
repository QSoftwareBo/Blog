<?php

//carga de archivos donde se encuentran las funciones en la carpeta model
require 'models/model.conexion.php';
require 'models/model.ListadoPosts.php';
require 'models/model.ListadoComentarios.php';

//llamada a funciones 
require 'functions.php'; 

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $IdUsuario=htmlspecialchars($_POST['IdUsuario']);
    $IdPost=htmlspecialchars($_POST['IdPost']);
    $rechazados =ObtenerComentariosRechazados($conexion,$IdUsuario,$IdPost);
}
//carga de la vista en el navegador

require 'views/ListadoPublico.php';

?>