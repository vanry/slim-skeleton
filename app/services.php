<?php

$container = $app->getContainer();

$container['db'] = function ($container) {
    return new Medoo\Medoo($container->settings['database']);
};

$container['cache'] = function ($container) {
    return new Doctrine\Common\Cache\FilesystemCache($container->settings['cache']['path']);
};

$container['view'] = function ($container) {
    return new Slim\Views\PhpRenderer($container->settings['view']['path']);
};
