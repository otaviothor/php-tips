<?php 

require __DIR__."/vendor/autoload.php";

use Source\Support\Email;

$email = new Email();

$email->add(
  "EMAIL_TITLE",
  "CONTENT",
  "RECIPIENT_NAME",
  "RECIPIENT_EMAIL"
)->attach(
  "FILE_PATH",
  "FILE_NAME"
)->send();

if (!$email->error()) {
  var_dump(true);
} else {
  echo $email->error()->getMessage();
}