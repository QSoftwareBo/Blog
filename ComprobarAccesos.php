<?php
session_start();
function AccesoSoloEditor(){
        if ($_SESSION['rol']=='EDITOR'){
            return true;
        }
       return false;
}
function AccesoSoloEscritor(){
        if ($_SESSION['rol']=='ESCRITOR'){
            return true;
        }
        return false;
}

function AccesoSoloPublico(){
        if ($_SESSION['rol']=='PUBLICO'){
            return true;
        }
        return false;
}

function AccesoSoloAdministrador(){
        if ($_SESSION['rol']=='ADMINISTRADOR'){
        return true;
        }
        return false;
}
?>