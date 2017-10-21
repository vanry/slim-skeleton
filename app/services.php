<?php

$container = $app->getContainer();

$container['cache'] = function ($container) {
    return new Doctrine\Common\Cache\FilesystemCache($container->settings['cache']['path']);
};

$container['view'] = function ($container) {
    return new Slim\Views\PhpRenderer($container->settings['view']['path']);
};
