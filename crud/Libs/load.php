<?php
require_once 'Includes/Database.class.php';
include 'Includes/Session.class.php';
include 'Includes/WebAPI.class.php';
include 'message.php';

global $__site_config;

/*
NOTE: Loacation of configuration
in Lab: /home/user/crudconfig.json
in server: /var/www/crudconfig.json
*/

$wapi = new WebAPI();
$wapi->initiate_Session();

function get_config($key, $default = null)
{
 global $__site_config;
 $array = json_decode($__site_config, true);
 if (isset($array[$key])) {
  return $array[$key];
 } else {
  return $default;
 }
}
