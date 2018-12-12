<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name // 默认数据库连接名称
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | 在这里，您可以指定以下数据库连接
    | to use as your default connection for all database work. Of course
    | 将其用作所有数据库工作的默认连接。当然
    | you may use many connections at once using the Database library.
    | 您可以使用数据库库同时使用多个连接
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections // 数据库连接
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | 下面是应用程序的每个数据库连接设置。
    | Of course, examples of configuring each database platform that is
    | 当然，配置每个数据库平台的例子
    | supported by Laravel is shown below to make development simple.
    | 下面显示了Laravel的支持，以简化开发。
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | Laravel中的所有数据库工作都是通过PHP PDO工具完成的
    | so make sure you have the driver for your particular database of
    | 因此，确保您有特定数据库的驱动程序
    | choice installed on your machine before you begin development.
    | 选择在开始开发之前安装在您的机器上。
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
        ],

//        'mysql' => [
//            'driver' => 'mysql',
//            'host' => env('DB_HOST', '127.0.0.1'),
//            'port' => env('DB_PORT', '3306'),
//            'database' => env('DB_DATABASE', 'laravel'),
//            'username' => env('DB_USERNAME', 'root'),
//            'password' => env('DB_PASSWORD', '830979'),
//            'unix_socket' => env('DB_SOCKET', ''),
//            'charset' => 'utf8mb4',
//            'collation' => 'utf8mb4_unicode_ci',
//            'prefix' => '',
//            'strict' => true,
//            'engine' => null,
//        ],
        'mysql' => [
//            'read' => [
//                'host' => '192.168.1.1',
//            ],
//            'write' => [
//                'host' => '196.168.1.2'
//            ],
            'host' => '101.132.114.75',
            'driver'    => 'mysql',
            'database'  => '1605',
            'username'  => 'root',
            'password'  => 'root',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => 'teach_',
        ],


        'pgsql' => [
            'driver' => 'pgsql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table // 迁移库表
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | 这个表跟踪已经运行的所有迁移
    | your application. Using this information, we can determine which of
    | 您的应用程序。利用这些信息，我们可以确定其中的哪一个
    | the migrations on disk haven't actually been run in the database.
    | 磁盘上的迁移实际上还没有在数据库中运行。
    |
    */

    'migrations' => 'migrations',//数据库迁移

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis是一个开源的、快速的、高级的键值存储
    | 提供比典型键值系统更丰富的命令集
    | 例如APC或Memcached。拉瑞威尔让人很容易就能挖进去。
    |
    */

    'redis' => [

        'client' => 'predis',

        'default' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => 0,
        ],

    ],

];
