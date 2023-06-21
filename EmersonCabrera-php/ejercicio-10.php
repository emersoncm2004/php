<?php
$nota = intval(readline("ingrese su nota \n"));
 

if($nota >=90){
    echo"sobresaliente\n";
}
elseif (($nota >= 60) AND ($nota <= 89)){
    echo"APROBO\n";
}
else{
    echo"reporbo\n";
}

?>