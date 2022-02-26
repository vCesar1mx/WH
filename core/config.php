<?php
$conf = array (
  'mysql' => 
  array (
    'host' => 'mc.haliacraft.com',
    'port' => '3306',
    'username' => '',
    'password' => '',
    'db' => 'my_namelessmc',
    'prefix' => 'nl2_',
    'charset' => 'utf8mb4',
    'engine' => 'InnoDB',
    'initialise_charset' => true,
  ),
  'remember' => 
  array (
    'cookie_name' => 'nl2',
    'cookie_expiry' => 604800,
  ),
  'session' => 
  array (
    'session_name' => '2user',
    'admin_name' => '2admin',
    'token_name' => '2token',
  ),
  'core' => 
  array (
    'hostname' => 'haliacraft.com',
    'path' => '',
    'friendly' => true,
    'force_https' => true,
    'force_www' => false,
    'captcha' => false,
  ),
  'allowedProxies' => '',
);
$CONFIG['installed'] = true;