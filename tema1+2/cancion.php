<?php

ini_set('display_errors', 'On');
ini_set('html_errors', 0);

function obtenerVocal($parametro)
{
    $vocales = ['a', 'e', 'i', 'o', 'u'];
    $vocal= 'e';
   
for ($i=0; $i < strlen($parametro); $i++) { 
    if (empty($parametro)) {
        echo "el parametro esta vacio";
    } else {
        if (in_array($parametro[$i], $vocales)) {
            $parametro[$i]=$vocal;
        } else {
            continue;
        }
    }
   
}
    echo $parametro;
}
obtenerVocal("la casa");