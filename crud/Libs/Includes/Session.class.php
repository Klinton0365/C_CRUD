<?php
class Session
{
 public static function load_template($name)
 {
  include $_SERVER['DOCUMENT_ROOT'] . "/template/$name.php";
 }

 public static function start()
 {
  session_start();
 }
}
