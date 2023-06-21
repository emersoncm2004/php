<?php
$camisas = intval(readline("¿Cuantas camisas desea comprar? \n"));
$VALOR = 100;

$total = ($camisas>=3) ? ($VALOR-($VALOR*0.20))*$camisas : ($VALOR-($VALOR*0.10))*$camisas ;

echo "El valor de su compra es de $total";

?>