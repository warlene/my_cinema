<?php
  namespace Core;

  class Core
  {
    public function run()
    {
      include 'routes.php';

      $url = substr($_SERVER['REQUEST_URI'], strlen(BASE_URI));
      $call = Router::get($url);
      $controller = $call['controller'];
      $action = $call['action'];

      $controller_name = 'Controller\\' . ucfirst($controller) . 'Controller';
      $action_name = ucfirst($action) . 'Action';

      if (class_exists($controller_name)) {
        $obj = new $controller_name();
        if (method_exists($controller_name, $action_name)) {
          $obj->$action_name();
        } else {
            include 'src/View/Error/404.php';
        }
      } else {
        include 'src/View/Error/404.php';
      }
    echo __CLASS__ . " [OK]" . PHP_EOL;

    }
  }

?>
