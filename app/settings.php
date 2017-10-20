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
        'path' => __DIR__.'/../cache',
    ],

    'view' => [
        'path' => __DIR__.'/views',
    ],

];
