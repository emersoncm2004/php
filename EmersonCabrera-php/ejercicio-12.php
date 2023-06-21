<?php
$numero = intval(readline("ingrese su calificación\n"));

if (($numero >= 90) AND ($numero <=100)){
    echo"exelente\n";
}
elseif (($numero >=80)AND($numero <= 89)){
    echo"bueno \n";
}
elseif (($numero >=70)AND($numero <= 79)){
echo"regular\n";
}
elseif(($numero >= 60)AND($numero<=69)){
    echo"aprobo\n";
}
elseif (($numero >=0)AND($numero<=59)){
    echo"reprobo\n";
}

?>