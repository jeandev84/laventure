<?php

return [

    /*
     |---------------------------------------------------------------------
     |     PdoConnection to database [ mysql, sqlite, pgsql, oci (oracle) ]
     |---------------------------------------------------------------------
    */
    'connection'  => env('DB_TYPE', 'mysql'),
    'connections' => [
        'sqlite' => [
            'driver'   => 'sqlite',
            'database' => base_path('data.db'), // ':memory'
            'options'  => []
        ],
        'mysql' => [
            'driver'     => 'mysql',
            'database'   =>  env('DB_NAME', 'homestead'),
            'host'       =>  env('DB_HOST', '127.0.0.1'),
            'port'       =>  env('DB_PORT', '3306'),
            'username'   =>  env('DB_USER', 'root'),
            'password'   =>  env('DB_PASS', 'root'),
            'collation'  => 'utf8_general_ci', // utf8_unicode_ci
            'charset'    => 'utf8',
            'prefix'     => '',
            'engine'     => 'InnoDB', // MyISAM
            'options'    => [
                #PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
            ]
        ],
        'pgsql' => [
            'driver'     => 'pgsql',
            'database'   => env('DB_NAME', 'homestead'),
            'host'       => env('DB_HOST', '127.0.0.1'),
            'port'       => env('DB_PORT', '5432'),
            'username'   => env('DB_USER', 'postgres'),
            'password'   => env('DB_PASS', '123456'),
            'collation'  => 'utf8_unicode_ci',
            'charset'    => 'utf8',
            'prefix'     => '',
            'engine'     => '',
            'options'    => [],
        ],
        'mysqli' => [
            'database'   => env('DB_NAME', 'homestead'),
            'host'       => env('DB_HOST', '127.0.0.1'),
            'port'       => env('DB_PORT', '3306'),
            'username'   => env('DB_USER', 'root'),
            'password'   => env('DB_PASS', 'root'),
            'collation'  => 'utf8_unicode_ci',
            'charset'    => 'utf8',
            'prefix'     => '',
            'options'    => [],
        ]
    ],
    'orm' => [
        'dir'         => 'app/ORM',
        'prefix'      => "App\\ORM",
        'current'     => 'persistence', // model
        'persistence' => [
            'entity'     => [
                'dir'    => 'app/ORM/Persistence/Entity',
                'prefix' => "App\\ORM\\Persistence\\Entity"
            ],
            'repository' => [
                'dir'    => 'app/ORM/Persistence/Repository',
                'prefix' => "App\\ORM\\Persistence\\Repository"
            ],
            'fixtures'   => [
                'dir'    => 'app/ORM/Persistence/Fixtures',
                'prefix' => "App\\ORM\\Persistence\\Fixtures"
            ],
            'migrations' => [
                'dir'     => 'app/ORM/Persistence/Migrations',
                'version' => 'migrations',
                'prefix'  => "App\\ORM\\Persistence\\Migrations"
            ],
        ],
        // use active record
        'model' => [
            'dir'    => 'app/Model',
            'prefix' => "App\\ORM\\Model",
            'migrations' => [
                'dir'     => 'app/ORM/Model/Migrations',
                'version' => 'migrations',
                'prefix'  => "App\\ORM\\Model\\Migrations"
            ],
        ]
    ]
];