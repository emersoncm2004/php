<?php

$numero = intval(readline("Ingrese un número \n "));
$VAR = 0;

if ($numero == 0){
    echo "Su numero es cero";
}

elseif ($numero > 0){
    echo "Su número es positivo";
}

else {
    echo "Su número es negativo";
}

?>