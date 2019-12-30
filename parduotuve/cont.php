<?php

require __DIR__ . '/../vendor/autoload.php';

use Shop\Services\MeniuGenerator;
use Shop\Services\TemplateEngine;

$templEngine = new TemplateEngine('layout.html');

$meniuHTML = (new MeniuGenerator())->generateMeniu();

$templEngine->printContent(['{{MENIU}}' => $meniuHTML]);

