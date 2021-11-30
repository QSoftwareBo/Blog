<?php

require 'models/model.conexion.php';
require 'models/model.ListadoUsuarios.php';
require 'models/model.FuncionesDeSesion.php';
require 'views/view.Header.php';
$comprobar=ComprobarSesionControladores();
$conexion=conexion();
$lista =ObtenerListaUsuarios($conexion);
require 'views/view.PanelAdministrador.php';

?>