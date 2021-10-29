<?php
function conexion(){
     try {
        $conexion = new PDO('mysql:host=localhost;dbname=proyecto001','root','centinela');
        
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }

}
?>