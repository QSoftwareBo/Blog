<?php

require 'models/model.conexion.php';
require 'models/model.ListadoUsuarios.php';
require 'ComprobacionRol.php';
require 'FuncionesDeSesion.php';
require 'views/view.Header.php';
restringirAdministrador();
ComprobarSesionControladores();
$conexion=conexion();
$ListaUsuarios =ObtenerListaUsuarios($conexion);
require 'views/view.PanelAdministrador.php';

?>