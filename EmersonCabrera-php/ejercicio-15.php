<?php
$numero= intval(readline("ingrese un numero\n"));
function esPrimo($numero) {
    if ($numero <= 1) {
      return false;
    }
  
    for ($i = 2; $i <= sqrt($numero); $i++) {
      if ($numero % $i == 0) {
        return false;
      }
    }
  
    return true;
  }
  

  
$resultado = (esPrimo($numero)) ? "su numero es primo":"su numero no es primo";
  echo "$resultado";
  
  
?>