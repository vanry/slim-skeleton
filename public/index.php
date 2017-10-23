<?php

require __DIR__.'/../vendor/autoload.php';

$settings = require __DIR__.'/../app/settings.php';

ORM::configure($settings['database']);

$app = new Slim\App(['settings' => $settings]);

foreach (['services', 'routes'] as $filename) {
    require __DIR__."/../app/{$filename}.php";
}

$app->run();
