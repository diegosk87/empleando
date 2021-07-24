<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'empleandodb',
    'username' => 'dev_user',
    'password' => 'testing123',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
], "default");

// Second connection to load states
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'test_data',
    'username' => 'dev_user',
    'password' => 'testing123',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
], "states");

$capsule->setAsGlobal();
$capsule->bootEloquent();