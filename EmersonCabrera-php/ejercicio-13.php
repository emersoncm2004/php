<?php
$numero = intval(readline("ingrese un numero del 1 al 7 \n"));

if($numero ==1){
    echo"lunes\n";
}
elseif($numero ==2){
    echo"martes\n";
}
elseif($numero ==3){
    echo"miercoles\n";
}
elseif($numero ==4){
    echo"jueves\n";
}
elseif($numero ==5){
    echo"viernes\n";
}
elseif($numero ==6){
    echo"sabado\n";
}
elseif($numero ==7){
    echo"domingo\n";
}
else{
  echo"  numeor invalido";
}


?>