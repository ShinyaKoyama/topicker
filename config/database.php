<?php
$db = parse_url(env('DATABASE_URL'));
// CakePHPで使用するDBの設定
public $default = array(
    'datasource' => 'Database/Postgres',
    'persistent' => false,
    'host'       => $db['host'],
    'login'      => $db['user'],
    'password'   => $db['pass'],
    'database'   => substr($db['path'], 1),
    'prefix'     => '',
    'encoding'   => 'utf8',
);

// WordPressで使用するDBの設定
public $wordpress = array(
    'datasource' => 'Database/Postgres',
    'persistent' => false,
    'host'       => $db['host'],
    'login'      => $db['user'],
    'password'   => $db['pass'],
    'database'   => substr($db['path'], 1),
    'prefix'     => 'wp_',
    'encoding'   => 'utf8',
);