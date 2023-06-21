<?php
$edad = intval(readline("Querido usuario ingrese su edad \n" ));
 $si = "Puedes conducir";
 $no = "No puedes conducir";

 if ($edad >= 18):
    echo ($readline = readline("¿Tiene licencia de conducción? \n "));

    if ($readline == $no):
        echo "Debes tener licencia";
    endif;
    if ($readline == $si):
        echo "Puedes conducir";
    endif;
else:
     echo "No puedes conducir";
endif;
?>