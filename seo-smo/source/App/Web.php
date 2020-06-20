<?php

namespace Source\App;

use Source\Models\User;
use League\Plates\Engine;
use Source\Support\Seo;

/**
 * Class web
 * @package Source\App
 */
class Web
{
  /** @var Engine */
  private $view;

  /** @var $seo Seo */
  private $seo;

  /**
   * Web constructor.
   */
  public function __construct()
  {
    $this->view = Engine::create(__DIR__."/../../theme", "php");
    $this->seo = new Seo();
  }

  /**
   * 
   */
  public function home(): void
  {
    $users = (new User())->find()->fetch(true);
    $head = $this->seo->render(
      "Home | " . SITE,
      "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, quas pariatur similique minus provident sequi laudantium asperiores quos architecto ad?",
      url(),
      "https://via.placeholder.com/1200x628.png?text=Home+Cover"
    ); 

    echo $this->view->render("home", [
      "head" => $head,
      "users" => $users
    ]);
  }

  /**
   * 
   */
  public function contact(): void
  {
    $head = $this->seo->render(
      "Contato | " . SITE,
      "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, quas pariatur similique minus provident sequi laudantium asperiores quos architecto ad?",
      url("contato"),
      "https://via.placeholder.com/1200x628.png?text=Contato+Cover"
    ); 

    echo $this->view->render("contact", [
      "head" => $head
    ]);
  }

  /**
   * @param array $data
   */
  public function error(array $data): void
  {
    $head = $this->seo->render(
      "Erro {$data["errcode"]} | " . SITE,
      "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, quas pariatur similique minus provident sequi laudantium asperiores quos architecto ad?",
      url("ops/{$data["errcode"]}"),
      "https://via.placeholder.com/1200x628.png?text=Erro+{$data["errcode"]}"
    ); 

    echo $this->view->render("error", [
      "head" => $head,
      "error" => $data["errcode"]
    ]);
  }
}
