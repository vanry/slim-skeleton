<?php

$container = $app->getContainer();

$container['db'] = function ($container) {
    return new Medoo\Medoo($container->settings['database']);
};

$container['cache'] = function ($container) {
    $settings = $container->settings['cache'];

    return new Doctrine\Common\Cache\FilesystemCache(
        $settings['path'], $settings['extension'], $settings['umask']
    );
};

$container['view'] = function ($container) {
    return new Slim\Views\PhpRenderer($container->settings['view']['path']);
};

$container['logger'] = function ($container) {
    $settings = $container->settings['logger'];

    $logger = new Monolog\Logger($settings['name']);

    $handler = new Monolog\Handler\RotatingFileHandler(
        $settings['path'], $settings['max_files'], $settings['level']
    );

    $logger->pushHandler($handler);

    return $logger;
};
