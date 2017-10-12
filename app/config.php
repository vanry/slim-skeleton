<?php

return [

    'displayErrorDetails' => true, // set to false in production

    'addContentLengthHeader' => false, // Allow the web server to send the content-length header

    'database' => [
        'database_type' => 'mysql',
        'database_name' => 'wechat',
        'server'   => 'localhost',
        'username' => 'root',
        'password' => 'root',
        'charset'  => 'utf8',
    ],

    'view' => [
        'path' => __DIR__.'/../views',
    ],

    'logger' => [
        'name' => 'slim',
        'path' => __DIR__.'/../logs/app.log',
        'max_files' => 30,
        'level' => Monolog\Logger::DEBUG,
    ],

];
