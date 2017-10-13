<?php

$app->get('/', function () {
    return 'Slim 3 Skeleton';
});

$app->get('/welcome/{name}', function ($request, $response, $args) {
    $this->logger->info('Welcome', $args);

    return view('welcome.php', $args);
});

$app->get('/cache', function () {
    return cache_remember('foo', 10, function () {
        return 'bar';
    });
});
