<?php

require __DIR__.'/../vendor/autoload.php';

$config['settings'] = require __DIR__.'/../app/config.php';

$app = new Slim\App($config);

foreach (['services', 'routes', 'helpers'] as $filename) {
    require __DIR__."/../app/{$filename}.php";
}

$app->run();
