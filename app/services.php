<?php

$container = $app->getContainer();

$container['db'] = function ($c) {
    return new Medoo\Medoo($c->settings['database']);
};

$container['view'] = function ($c) {
    return new Slim\Views\PhpRenderer($c->settings['view']['path']);
};

$container['logger'] = function ($c) {
    $settings = $c->settings['logger'];

    $logger = new Monolog\Logger($settings['name']);

    $handler = new Monolog\Handler\RotatingFileHandler(
        $settings['path'], $settings['max_files'], $settings['level']
    );

    $logger->pushHandler($handler);

    return $logger;
};
