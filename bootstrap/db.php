<?php
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
  'driver'    => getenv('DB_DRIVER'),
  'host'      => getenv('DB_HOST'),
  'database'  => getenv('DB_DATABASE'),
  'username'  => getenv('DB_USER'),
  'password'  => getenv('DB_PASS'),

  // 'smtp_host' => getenv('SMTP_HOST')
  // 'smtp_port' => getenv('SMTP_PORT'),
  // 'smtp_user' => getenv('SMTP_USER'),
  // 'smtp_pass' => getenv('SMTP_PASS'),
  // 'smtp_from' => getenv('SMTP_FROM'),

  // 'host2'     => getenv('HOST'),
  // 'csrf'      => getenv('CSRF_SECRET'),
  
  'views_dir' => getenv('VIEWS_DIRECTORY'),
  'cache_dir' => getenv('CACHE_DIRECTORY'),
  'charset'   => 'utf8',
  'collation' => 'utf8_unicode_ci',
  'prefix'    => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();
