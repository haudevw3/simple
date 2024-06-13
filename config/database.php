<?php

return [

    'default' => 'mysql',
    
    'mysql' => [
        'driver'   => 'mysql',
        'host'     => 'localhost',
        'database' => '',
        'username' => 'root',
        'password' => '',
        'options'  => [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
