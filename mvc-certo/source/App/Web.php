<?php

namespace Source\App;

use Source\Models\User;
use League\Plates\Engine;

/**
 * Class web
 * @package Source\App
 */
class Web
{
  /**
   * @var Engine
   */
  private $view;

  /**
   * Web constructor.
   */
  public function __construct()
  {
    $this->view = Engine::create(__DIR__."/../../theme", "php");
  }

  /**
   * 
   */
  public function home(): void
  {
    $users = (new User())->find()->fetch(true);
    echo $this->view->render("home", [
      "title" => "Home | " . SITE,
      "users" => $users
    ]);
  }

  /**
   * 
   */
  public function contact(): void
  {
    echo $this->view->render("contact", [
      "title" => "Contato | " . SITE,
    ]);
  }

  /**
   * @param array $data
   */
  public function error(array $data): void
  {
    echo $this->view->render("error", [
      "title" => "Erro {$data["errcode"]} | " . SITE,
      "error" => $data["errcode"]
    ]);
  }
}
