<?php

require 'models/model.conexion.php';
require 'models/model.ListadoUsuarios.php';
require 'ComprobarAccesos.php';
require 'views/view.Header.php';
$acceso=AccesoSoloAdministrador();
if($acceso){
$conexion=conexion();
$listaUsuarios =ObtenerListaUsuarios($conexion);
require 'views/view.PanelAdministrador.php';
}
else{
    echo "<script>alert('Acceso Restringido')</script>";
    echo "<script>location.href='index.php'</script>";
}

?>