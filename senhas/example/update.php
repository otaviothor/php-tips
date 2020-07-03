<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

$user = (new User())->findById(4);
$user->first_name = "Chatolina";
$user->save();

var_dump($user);