<?php

$vardas = $_GET['vardas'];
$pastas = $_GET['pastas'];
$tema = $_GET['tema'];
$zinute = $_GET['zinute'];

echo "<html lang='lt'><head><meta charset='UTF-8'><title>SuperGlobals</title></head><body>";

echo "<b>Vardas</b>: $vardas<br>";
echo "<b>El.Pašto adresas</b>: $pastas<br>";
echo "<b>Tema</b>: $tema<br>";
echo "<b>Žinutė</b>: $zinute<br>";

echo "<a href='saugotiSesijosDuomenis.php?vardas=$vardas&pastas=$pastas&tema=$tema&zinute=$zinute'>Saugoti į sesija</a>";
echo "<a href='saugotiSausaineliuDuomenis.php?vardas=$vardas&pastas=$pastas&tema=$tema&zinute=$zinute'>Saugoti į sausainėlius</a>";

echo '</body></html>';

