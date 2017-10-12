<?php

$app->get('/', function () {
    return 'Slim 3 Skeleton';
});

$app->get('/welcome/{name}', function ($request, $response, $args) {
    $this->logger->info('Welcome', $args);

    return $this->view->render($response, 'welcome.php', $args);
});

$app->get('/cache', function () {
    $value = $this->cache->fetch('foo');

    if ($value === false) {
        $value = 'bars';

        $this->cache->save('foo', $value);
    }

    return $value;
});
