<?php

require __DIR__.'/../vendor/autoload.php';

$settings = require __DIR__.'/../app/settings.php';

$app = new Slim\App(['settings' => $settings]);

foreach (['services', 'routes'] as $filename) {
    require __DIR__."/../app/{$filename}.php";
}

$app->run();
