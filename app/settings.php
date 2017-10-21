<?php

return [

    'displayErrorDetails' => true,

    'addContentLengthHeader' => false,

    'database' => [
        'connection_string' => "mysql:host=localhost;dbname=database",
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
