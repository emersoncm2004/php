<?php
$año= intval(readline("Ingrese el año \n"));

$resultado = (($año % 4 == 0)AND($año %100 !=0)) ?"su año es bisiesto": "su año no es bisiesto";
echo"$resultado"
?>