<?php

return [

    'displayErrorDetails' => true,

    'addContentLengthHeader' => false,

    'database' => [
        'driver'   => 'mysql',
        'host'     => 'localhost',
        'database' => 'database',
        'username' => 'root',
        'password' => 'root',
    ],

    'cache' => [
        'path' => realpath(__DIR__.'/../cache'),
    ],

    'view' => [
        'path' => realpath(__DIR__.'/views'),
    ],

];
