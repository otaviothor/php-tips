<?php 

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Post extends DataLayer{
  
  public function __construct()
  {
    parent::__construct("posts", ["title", "description"]);
  }

  public function add(User $user, string $street, string $number): Post
  {
    $this->user_id = $user->id;
    $this->street = $street;
    $this->number = $number;

    return $this;
  }
}
