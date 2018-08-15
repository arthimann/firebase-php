<?php
/**
 * Created by PhpStorm.
 * User: SYSTEM
 * Date: 18-Jul-18
 * Time: 22:15
 */

require_once './vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;


$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/secret/arthursystems-php-tutorials-0066e2bd5954.json');

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create();

$database = $firebase->getDatabase();

die(print_r($database));