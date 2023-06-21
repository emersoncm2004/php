<?php
$edad = intval(readline("Querido usuario ingrese su edad \n "));
$genero = readline("Ingrese su género \n ");

$AÑOS1 = "60";
$AÑOS2 = "54";
$HOMBRE = "hombre";
$MUJER = "mujer";

if ($edad > $AÑOS1){

    if ($HOMBRE){
    echo "Si se puede pensionar";
    }

    elseif ($MUJER){
    echo "No se puede pensionar";
    }
}

if ($edad > $AÑOS2){

    if ($MUJER){
    echo "Si se puede pensionar";
    }

    elseif ($HOMBRE){
    echo "No se puede pensionar";
    }
}

?> 