<?php
require 'models/model.conexion.php';
require 'models/model.DetalleRegistro.php';
$id= $_GET["id"];
$conexion=conexion();
$post = DetalleRegistro($conexion,$id);
$post=$post[0];

require 'views/view.DetalleRegistro.php';
?>