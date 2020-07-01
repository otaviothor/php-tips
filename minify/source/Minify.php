<?php

use MatthiasMullie\Minify\CSS;
use MatthiasMullie\Minify\JS;

$minify = filter_input(INPUT_GET, "minify", FILTER_VALIDATE_BOOLEAN);

if ($_SERVER["SERVER_NAME"] == "localhost" || $minify) {

  /** 
   * MINIFY CSS 
   */
  $minCss = new CSS();
  $cssDir = scandir(dirname(__DIR__, 1) . "/assets/css/");
  foreach ($cssDir as $cssItem) {
    $cssFile = dirname(__DIR__, 1) . "/assets/css/{$cssItem}";
    if(is_file($cssFile) && pathinfo($cssFile)["extension"] == "css") {
      $minCss->add($cssFile);
    }
  }
  $minCss->minify(dirname(__DIR__, 1) . "/assets/style.min.css");

  /**
   * MINIFY JS
   */
  $minJs = new JS();
  $minJs->add(dirname(__DIR__, 1) . "/assets/js/jquery.js");
  $jsDir = scandir(dirname(__DIR__, 1) . "/assets/js/");
  foreach ($jsDir as $jsItem) {
    $jsFile = dirname(__DIR__, 1) . "/assets/js/{$jsItem}";
    if (is_file($jsFile) && pathinfo($jsFile)["extension"] == "js") {
      $minJs->add($jsFile);
    }
  }
  $minJs->minify(dirname(__DIR__, 1) . "/assets/script.min.js");
}