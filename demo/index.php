<?php 
require_once __DIR__.'/../vendor/autoload.php';

use AuthorityControl\Model\User;
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$capsule->addConnection(require __DIR__.'/../demo/config/database.php');
$capsule->bootEloquent();

//设置管理员
$user = new User();
$user->name = 'admin';
$user->email = 'seven@to8to.com';
$user->is_admin = 1;
$user->status = 1;
$user->save();