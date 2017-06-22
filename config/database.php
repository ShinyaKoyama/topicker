<?php
$db = parse_url(env('CLEARDB_DATABASE_URL'));
// CakePHPで使用するDBの設定
public $default = array(
    'datasource' => 'Database/Mysql',
    'persistent' => false,
    'host'       => $db['host'],
    'login'      => $db['user'],
    'password'   => $db['pass'],
    'database'   => 'cakephp_db',
    'prefix'     => '',
    'encoding'   => 'utf8',
);

// WordPressで使用するDBの設定
public $wordpress = array(
    'datasource' => 'Database/Mysql',
    'persistent' => false,
    'host'       => $db['host'],
    'login'      => $db['user'],
    'password'   => $db['pass'],
    'database'   => 'wp_db',
    'prefix'     => 'wp_',
    'encoding'   => 'utf8',
);