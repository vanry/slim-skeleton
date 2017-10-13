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
        'path' => __DIR__.'/../storage/cache',
        'extension' => '',
        'umask' => 0002,
    ],

    'view' => [
        'path' => __DIR__.'/../views',
    ],

    'logger' => [
        'name' => 'slim',
        'path' => __DIR__.'/../storage/logs/app.log',
        'max_files' => 30,
        'level' => Monolog\Logger::DEBUG,
    ],

];
