<?php
$valor = intval(readline("total a pagar \n"));
$descuento = ($valor*10)/100 ;
$resul= $valor - $descuento;
$des= ($valor*5)/100;
$resul2= $valor - $des;
if($valor >= 1000){
echo"se le aplico un delcuento del 10%  $resul\n";
}
elseif(($valor >=500) AND ($valor<= 999)){
    echo"se le aplico un delcuento del 5% $resul2 \n";
}
else{
    echo"no se aplica descuento\n";
}


?>