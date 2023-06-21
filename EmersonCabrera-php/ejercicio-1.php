<?php
$var1 = intval(readline("Querido usuario ingrese la cantidad de computadoras que desea comprar \n"));
$VAR = 700;
$var2 = $VAR - ($VAR*0.10);
$var3 = $VAR - ($VAR*0.20);
$var4 = $VAR - ($VAR*0.40);

if ($var1 < 5){
    $result = $var2*$var1;
    echo "Se le aplicará un descuento del 10% por la compra de $var1 y su total a pagar será: $result";
}

if (($var1 >= 5) AND ($var1 <= 10)){
    $result2 = $var3*$var1;
    echo "Se le aplicará un descuento del 20% por la compra de $var1 y su total a pagar será: $result2";
}

if ($var1 >=11){
    $result3 = $var4*$var1;
    echo "Se le aplicará un descuento del 40% por la compra de $var1 y su total a pagar será: $result3";
}
?>