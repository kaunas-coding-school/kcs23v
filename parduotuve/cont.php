<?php

require __DIR__ . '/../vendor/autoload.php';

use Shop\Services\Config;
use Shop\Services\Container;
use Shop\Services\DBConnector;
use Shop\Services\MeniuGenerator;
use Shop\Services\Router;
use Shop\Services\TemplateEngine;

$configs  = new Config();
$container = new Container();
$container->set('db', new DBConnector($configs));

$templEngine = new TemplateEngine('layout.html');

$meniuHTML = (new MeniuGenerator())->generateMeniu();

$router = new Router($_GET);
$parser = $router->getParser();
$content = $parser->getContent();
$pageTitle = $parser->getPageTitle() ?? 'E-Shop';

$templEngine->printContent(
    [
        '{{TITLE}}' => $pageTitle,
        '{{MENIU}}' => $meniuHTML,
        '{{CONTENT}}' => $content
    ]
);
