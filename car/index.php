<?php

include 'Car.php';

$automobilis = new Car();
$automobilis->spalva = 'raudona';
$automobilis->greitis = '50km/h';

echo $automobilis->gautiSpalva() . '<br>'; // raudona
$automobilis->vaziuoti(1); // Automobilis važiuoja 50km/h greičiu
echo "<br>Rida: " . $automobilis->gautiRida();
$automobilis->greitis = '30km/h';
$automobilis->vaziuoti(0.5); // Automobilis važiuoja 30km/h greičiu
echo "<br>Rida: " . $automobilis->gautiRida();
