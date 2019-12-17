<?php

include 'Car.php';
include 'Asmuo.php';
include 'Adresas.php';
include 'Priedas.php';

$automobilis = new Car();
$automobilis2 = new Car(3);

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
$vairuotojas->setVardas('Jonas')
    ->setPavarde('Jonaitis')
    ->setAdresas($vairuotojoAdresas);

$adresas = $vairuotojas->getAdresas();
echo $adresas .'<br>';
echo $adresas->getExtraInfo().'<br>';

$automobilis->setVairuotojas($vairuotojas);

$priekaba = (new Priedas())->setName('Priekaba')->setDescription('Labai talpi ir didelė priekaba.');
$ratlankiai = (new Priedas())->setName('Ratlankiai')->setDescription('Labai grazus ratlankiai.');

$automobilis->setPriedai([$priekaba, $ratlankiai]);

$spoileris = (new Priedas())->setName('Spoileris')->setDescription('Labai grazus spoileris.');
$automobilis->addPriedas($spoileris);

foreach ($automobilis->getPriedai() as $priedas) {
    echo $priedas. '<br>';
}