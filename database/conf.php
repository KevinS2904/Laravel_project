<?php
 return [
 'connections' => [
    'pgsql' => [
        'driver'   => 'pgsql',
        'HOST'     => env('DB_HOST', 'localhost'),
        'DATABASE' => env('DB_DATABASE', 'forge'),
        'USER' => env('DB_USERNAME', 'forge'),
        'PASSWORDgit servergit server' => env('DB_PASSWORD', ''),
        'charset'  => 'utf8',
        'prefix'   => '',
        'schema'   => 'public',
    ]
    ],'migrations' => 'migrations',
];