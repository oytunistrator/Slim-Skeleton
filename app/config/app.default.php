<?php
/**
 * This file is part of `oanhnn/slim-skeleton` project.
 *
 * (c) Oanh Nguyen <oanhnn.bk@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

return [
    'settings' => [
        // Application settings
        'displayErrorDetails' => true,

        // Renderer settings
        'renderer' => [
            'engine' => 'php',
            'template_path' => VIEW_PATH,
            'config' => [],
        ],

        // Monolog settings
        'logger' => [
            'name' => 'app',
            'path' => LOG_PATH . '/app.log',
            'level' => Monolog\Logger::DEBUG,
        ],

        // DoctrineDBAL settings
        'database' => [
            'meta' => [
                'entity_path' => [
                    'src/Model/Entity'
                ],
                'auto_generate_proxies' => true,
                'proxy_dir' => CACHE_PATH . '/proxies',
                'cache' => null,
            ],
            'connection' => [
                'driver'   => 'pdo_mysql',
                'host'     => '__DB_HOST__',
                'dbname'   => '__DB_NAME__',
                'user'     => '__DB_USER__',
                'password' => '__DB_PASS__',
            ],
        ],
    ],
];
