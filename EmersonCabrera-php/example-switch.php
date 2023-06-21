<?php
$dia = intval(readline("Querido usuario ingrese un número del 1 al 7 \n "));

switch ($dia) {
    case 1:
        echo "El día de hoy es Lunes";
        break;
    
    case 2:
        echo "El día de hoy es Martes";
        break;

    case 3:
        echo "El día de hoy es Miércoles";
        break;

    case 4:
        echo "El día de hoy es Jueves";
        break;

    case 5:
        echo "El día de hoy es Viernes";
        break;

    case 6:
        echo "El día de hoy es Sábado";
        break;

    case 7:
        echo "El día de hoy es Domingo";
        break;

    default :
        echo "La opción es inválida";
        break;
}
?>