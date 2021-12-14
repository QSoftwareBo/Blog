<?php 

require 'models/model.conexion.php';
require 'views/view.Header.php';
require 'ComprobarAccesos.php';
require 'models/model.CrearPost.php';

$acceso=AccesoSoloEscritor();
if($acceso){

$conexion=conexion();
$IdUsuario=$_SESSION['id'];
$Autor=$_SESSION['nombre'];

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $Titulo = htmlspecialchars($_POST['Titulo']);
    $Contenido = htmlspecialchars($_POST['Contenido']);
    
    if(isset($_POST['Borrador'])){
        $Estado='BORRADOR';
    }
    if(isset($_POST['Enviar'])){
        $Estado='ENVIADO';
    }
    
    CrearPost($conexion,$Titulo,$Contenido,$Estado,$IdUsuario);
    header('location: index.php');
}

require 'views/view.CrearPostAutor.php';
}
else{
    echo "<script>alert('Acceso Restringido')</script>";
    echo "<script>location.href='index.php'</script>";
}
?>