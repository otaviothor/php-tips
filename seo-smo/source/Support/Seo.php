<?php

namespace Source\Support;

use CoffeeCode\Optimizer\Optimizer;

class Seo
{
  protected $optimizer;

  public function __construct(string $schema = "article")
  {
    $this->optimizer = new Optimizer;
    $this->optimizer->openGraph(
      SITE,
      "pt_BR",
      $schema
    )->publisher(
      "upinside",
      "12531212"
    )->twitterCard(
      "@robsonvleite",
      "@upinside",
      "upinside.com.br"
    )->facebook(
      "71203581729051235"
    );
  }

  public function render(string $title, string $description, string $url, string $image, bool $follow = true): string
  {
    return $this->optimizer->optimize(
      $title, 
      $description, 
      $url, 
      $image, 
      $follow
    )->render();
  }
}