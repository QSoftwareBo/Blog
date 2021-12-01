<?php

function ValidarPassword($password) {
    $r1='/[A-Z]/';  //Uppercase
    $r2='/[a-z]/';  //lowercase
    $r3='/[!@#$%^&*()\-_=+{};:,<.>]/';  // special chars
    $r4='/[0-9]/';  //Numeros
    $error='';
    if(preg_match_all($r1,$password, $o)<1) return $error.='Su password debe contener al menos 1 letra mayúscula\n';
 
    if(preg_match_all($r2,$password, $o)<2) return $error.='Su password debe contener al menos 2 letras minúsculas\n';
 
    if(preg_match_all($r3,$password, $o)<1) return $error.='Su password debe contener al menos 1 caracter especial\n';
 
    if(preg_match_all($r4,$password, $o)<1) return $error.='Su password debe contener al menos 1 numero\n';
 
    if(strlen($password)<8) return $error.='Su password debe contener por lo menos 8 caracteres entre letras, números y caracteres especiales\n';
 
    return $error;
 }

?>