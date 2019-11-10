<?php
namespace App;
include 'vendor/autoload.php';
use App\Module\Shop\Controller\User;
include 'App\Module\Shop\Controller\User.php';
include 'App\Module\Shop\Server\User.php';
include 'App\Module\Shop\Server\Pay.php';

User::make();
