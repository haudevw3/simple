<?php

return [

    'defaults' => [
        'guard' => 'web'
    ],

    'guards' => [

        'web' => [
            'driver' => 'session',
            'table' => 'users'
        ],

        'api' => [
            'driver' => 'jwt',
            'table' => 'users',
            'secret' => '',
            'expire' => 3600
        ]
    ]
];