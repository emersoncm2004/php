<?php
$numero = intval(readline("Ingrese un número del 1 al 7 \n"));
$uno = "Lunes";
$dos = "Martes";
$tres = "Miércoles";
$cuatro = "Jueves";
$cinco = "Viernes";
$seis = "Sábado";
$siete = "Domingo";

if ($numero == 1){
    echo "$uno";
}
elseif ($numero == 2){
    echo "$dos";
}
elseif ($numero == 3){
    echo "$tres"; 
}
elseif ($numero == 4){
    echo "$cuatro";
}
elseif ($numero == 5){
    echo "$cinco";
}
elseif ($numero == 6){
    echo "$seis";
}
elseif ($numero == 7){
    echo "$siete";
}
else {
   echo "Número invalido";
}
?>