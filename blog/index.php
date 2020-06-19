<?php 

require __DIR__."/vendor/autoload.php";

use CoffeeCode\Paginator\Paginator;
use Source\Models\Post;

$post = new Post();
$page = filter_input(INPUT_GET, "page", FILTER_SANITIZE_STRIPPED);

$paginator = new Paginator("http://localhost/phptips/blog/?page=", "Página", ["Primeira página", "Primeira"], ["Última página", "Última"]);
// $paginator = new Paginator("http://localhost/phptips/blog/?page=");
$paginator->pager($post->find()->count(), 3, $page, 2);

echo "<link rel='stylesheet' href='style.css'/>";
echo "<p>Página {$paginator->page()} de {$paginator->pages()}</p>";

$posts = $post->find()->limit($paginator->limit())->offset($paginator->offset())->fetch(true);

if ($posts) {
  foreach ($posts as $post) {
    echo "
      <article class='post'>
        <img src='{$post->cover}' />
        <div>
          <h1>{$post->title}</h1>
          <div>{$post->description}</div>
        </div>
      </article>";
  }
}

echo $paginator->render();




