<?php

return [

    /*
    |---------------------------------------------------------------------
    |     Connection to database [ mysql, sqlite, pgsql, oci (oracle) ]
    |---------------------------------------------------------------------
    */

    'connection' => env('DB_TYPE'),
    'sqlite' => [
        'connection'   => 'sqlite',
        'database' => 'laventure.db',
        'options'  => []
    ],
    'mysql' => [
        'connection'     => 'mysql',
        'database'   => env('DB_NAME', 'laventure'),
        'host'       => env('DB_HOST', '127.0.0.1'),
        'port'       => env('DB_PORT', '3306'),
        'username'   => env('DB_USER', 'root'),
        'password'   => env('DB_PASS', ''),
        'collation'  => 'utf8_unicode_ci',
        'charset'    => 'utf8',
        'prefix'     => '',
        'engine'     => 'InnoDB', // MyISAM
        'options'    => [],
    ],
    'pgsql' => [
        'connection'     => 'pgsql',
        'database'   => env('DB_NAME', 'laventure'),
        'host'       => env('DB_HOST', '127.0.0.1'),
        'port'       => env('DB_PORT', '5432'),
        'username'   => env('DB_USER', 'postgres'),
        'password'   => env('DB_PASS', '123456'),
        'collation'  => 'utf8_unicode_ci',
        'charset'    => 'utf8',
        'prefix'     => '',
        'engine'     => 'InnoDB', // MyISAM
        'options'    => [],
    ],
    'mysqli' => [
        'connection'     => 'mysqli',
        'database'   => env('DB_NAME', 'laventure'),
        'host'       => env('DB_HOST', '127.0.0.1'),
        'port'       => env('DB_PORT', '3306'),
        'username'   => env('DB_USER', 'root'),
        'password'   => env('DB_PASS', 'secret'),
        'collation'  => 'utf8_unicode_ci',
        'charset'    => 'utf8',
        'prefix'     => '',
        'engine'     => 'InnoDB', // MyISAM
        'options'    => [],
    ],
    'migration_path'  => 'database/migrations/',
    'migration_table' => 'laventure_migrations'
];