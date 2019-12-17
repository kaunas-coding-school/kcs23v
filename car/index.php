<?php

include 'Car.php';
include 'Asmuo.php';

$automobilis = new Car();

$automobilis->spalva = 'raudona';
echo $automobilis->gautiSpalva() . '<br>'; // raudona

$automobilis->greitis = '50km/h';
$automobilis->vaziuoti(1); // Automobilis važiuoja 50km/h greičiu
echo '<br>Po pirmo reiso rida: ' . $automobilis->gautiRida();

$automobilis->greitis = '30km/h';
$automobilis->vaziuoti(0.5); // Automobilis važiuoja 30km/h greičiu
echo '<br>Po antro reiso rida: ' . $automobilis->gautiRida();

echo '<hr>';

$vairuotojoAdresas = new Adresas();
$vairuotojoAdresas->setCountry('Lithuania');
$vairuotojoAdresas->setCity('Kaunas');
$vairuotojoAdresas->setStreet('Savanorių pr.');
$vairuotojoAdresas->setHouseNr('192');
$vairuotojoAdresas->setApartmentNr('100');
$vairuotojoAdresas->setExtraInfo('Duru kodas 1234');

$vairuotojas = new Asmuo(200101);
$vairuotojas->setVardas('Jonas')->setPavarde('Jonaitis')->setAdresas($vairuotojoAdresas);

echo $vairuotojas->getAdresas()->getCountry().'<br>';
echo $vairuotojas->getAdresas()->getExtraInfo().'<br>';

