<?php
$color = 'rojo';

$acction = match ($color) {
    'verde' => 'Avanzar',
    'naranja' => 'Prepara',
    'rojo' => 'Parar',
    default => 'No existe este color',
};

echo $acction;

?>

