<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class WebAPI
{
 public function __construct()
 {
  global $__site_config;

  $__site_config_path = __DIR__ . '/../../../Config/crudconfig.json';
  $__site_config = file_get_contents($__site_config_path);

  if ($__site_config === false) {
   die('Error reading config file: ' . error_get_last()['message']);
  }

  Database::getConnection();
 }
 public function initiate_Session()
 {
  Session::start();
 }
}
