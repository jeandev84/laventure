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
        'dir'        => 'app/ORM',
        'prefix'     => "App\\ORM",
        'current'    => 'mapper',
        // use data mapper entity manager
        'mapper' => [
            'entity'     => [
                'dir'    => 'app/ORM/DataMapper/Entity',
                'prefix' => "App\\ORM\\DataMapper\\Entity"
            ],
            'repository' => [
                'dir'    => 'app/ORM/DataMapper/Repository',
                'prefix' => "App\\ORM\\DataMapper\\Repository"
            ],
            'fixtures'   => [
                'dir'    => 'app/ORM/DataMapper/Fixtures',
                'prefix' => "App\\ORM\\DataMapper\\Fixtures"
            ],
            'migrations' => [
                'dir'     => 'app/ORM/DataMapper/Migrations',
                'version' => 'migrations',
                'prefix'  => "App\\ORM\\DataMapper\\Migrations"
            ],
        ],
        // use active record
        'model' => [
            'dir'    => 'app/ORM/ActiveRecord',
            'prefix' => "App\\ORM\\ActiveRecord",
            'migrations' => [
                'dir'     => 'migrations',
                'version' => 'migrations',
                'prefix'  => "Migrations"
            ],
        ]
    ]
];