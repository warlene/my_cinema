<?php
  namespace Core;

  class Core
  {
    public function run()
    {
      include 'routes.php';

      $url = substr($_SERVER['REQUEST_URI'], strlen(BASE_URI));
      $call = Router::get($url);

      $controller_name = 'Controller\\' . ucfirst($call['controller']) . 'Controller';
      $action_name = ucfirst($call['action']) . 'Action';

      if (class_exists($controller_name) && method_exists($controller_name, $action_name)) {
        $controller_name::$action_name();
      } else {
        include 'src/View/Error/404.php';
      }
    echo __CLASS__ . " [OK]" . PHP_EOL;

    }
  }

?>
