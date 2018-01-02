<?php
require('config.php');
require('functions.php');

$template = $Router->rewrite(URL);
$layout = ($moduloURL=='' or $moduloURL=='app') ? 'app' : $moduloURL;
title('Inicio');

if (file_exists($template)) {
  ob_start();
  include("$template");
  $content['default'] = ob_get_contents();
  ob_end_clean();
} else {
  header('HTTP/1.0 404 Not Found');
  include('404.php');
  die();
}

include('layouts/'. $layout .'.php');