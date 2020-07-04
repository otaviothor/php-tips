<?php

require __DIR__."/vendor/autoload.php";

use Source\Models\User;

$user = new User();
// $user = (new User())->findById(8);
$user->first_name = "Otávio";
$user->last_name = "Silva";
$user->email = "otavio3@gmail.com";
$user->password = "12345";

if (!$user->save()) {
  echo "<h3>oooops: {$user->fail()->getMessage()}</h3>";
}

echo "<h2>Usuário</h2>";
var_dump($user->data());