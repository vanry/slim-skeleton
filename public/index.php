<?php

require __DIR__.'/../vendor/autoload.php';

//Create application
$config['settings'] = require __DIR__.'/../app/config.php';

$app = new Slim\App($config);

//Boot services
require __DIR__.'/../app/services.php';

//Register routes
require __DIR__.'/../app/routes.php';

$app->run();
