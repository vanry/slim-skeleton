<?php

return [

    'displayErrorDetails' => true,

    'addContentLengthHeader' => false,

    'database' => [
        'database_type' => 'mysql',
        'database_name' => 'database',
        'server'   => 'localhost',
        'username' => 'root',
        'password' => 'root',
        'charset'  => 'utf8',
    ],

    'cache' => [
        'path' => __DIR__.'/../cache',
    ],

    'view' => [
        'path' => __DIR__.'/views',
    ],

];
