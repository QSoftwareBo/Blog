<?php
//llamada a la funcion conexion
$conexion=conexion();

//llamada a la funciones para Posts
$publicados =ObtenerPostsPublicados($conexion);
$borradores =ObtenerPostsBorradores($conexion);
$enviados   =ObtenerPostsEnviados($conexion);

//llamada a las funciones para Comentarios
$comentarios=ObtenerComentariosPublicos($conexion);

?>