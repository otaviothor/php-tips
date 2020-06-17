<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;
use Source\Models\Address;

$user = new User();
$user->first_name = "Ana";
$user->last_name = "Carolina";
$user->genre = "F";
$user->save();

// $addr = new Address();
// $addr->add($user, "Nome da rua", "123b");
// $addr->save();

var_dump($user);