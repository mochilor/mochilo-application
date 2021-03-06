<?php

require_once '../vendor/autoload.php';

$paths = [
    'envPath' => dirname(__DIR__),
    'configPath' =>  __DIR__ . '/config',
    'templatesPath' =>  __DIR__ . '/templates',
    'dataPath' =>  __DIR__ . '/data',
    'logPath' =>  __DIR__ . '/../var/log',
];

(new Dotenv\Dotenv($paths['envPath']))->load();

$appDependencies = require $paths['configPath'] . '/dependencies.php';
$routes = require_once $paths['configPath'] . '/routes.php';

(new Mochilo\Starter($paths, $routes, $appDependencies))->startApplication();
