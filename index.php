<?php

require_once 'Carro.php';
require_once 'Moto.php';

$carro = new Carro ('Civic Type R', 2023, 4);
$carro->mostrarCarro();

echo '<br>';

$moto = new Moto('MT-03', 2016, 321);
$moto->mostrarMoto();
?>