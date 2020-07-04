<?php

phpinfo();
exit;

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Cropper\Cropper;
use Faker\Factory;

$faker = Factory::create("pt_br");
$generate = true;

if ($generate) {
  for ($i = 0; $i < 3; $i++) { 
    $faker->image(__DIR__."/images", 600, 300);
  }
}

$c = new Cropper("images/cache");

for ($image = 1; $image < 4; $image++) { 
  ?>
    <article>
      <h1>Images <?= $image ?></h1>
      <img src="images/<?= $image ?>.jpg" />
      <img src="<?= $c->make("images/{$image}.jpg", 300, 150) ?>" />
    </article>
  <?php

  // rotina de delete
  $c->flush("1.jpg");
  // $c->flush();
}




