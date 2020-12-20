<?php
require_once 'core/init.php';

$users = DB::getInstance()->get('users', array('username', '=', 'angel'));

if(!$users->count()){
  echo "no user";
} else {
  echo $users->first()->username;
}