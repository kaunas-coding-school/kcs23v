<?php

require __DIR__ . '/../vendor/autoload.php';

use Shop\Services\MeniuGenerator;
use Shop\Services\Router;
use Shop\Services\TemplateEngine;

$templEngine = new TemplateEngine('layout.html');

$meniuHTML = (new MeniuGenerator())->generateMeniu();

$router = new Router($_GET);
$parser = $router->getParser();
$content = $parser->getContent();

$templEngine->printContent(['{{MENIU}}' => $meniuHTML, '{{CONTENT}}' => $content]);
