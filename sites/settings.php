<?php

$databases = array (
  'default' =>
  array (
    'default' =>
    array (
      'database' => 'ikush_beta',
      'username' => 'beta',
      'password' => 'ikush123',
      'host' => 'localhost',
      'port' => '3306',
      'driver' => 'mysql',
      'prefix' => '',
    ),
  ),
);
unset($conf['cache_backends']);
unset($conf['cache_default_class']);
unset($conf['cache_class_cache_form']);
