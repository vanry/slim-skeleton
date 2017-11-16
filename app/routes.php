<?php

$app->get('/', function () {
    return 'Slim 3 Skeleton';
});

$app->get('/welcome', function ($request, $response) {
    $name = $this->cache->fetch('name');

    if ($name === false) {
        var_dump('Data from database');

        $this->cache->save('name', $name = 'Tom', 3);
    }

    return $this->view->render($response, 'welcome.php', ['name' => $name]);
});
