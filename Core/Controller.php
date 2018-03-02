<?php
  namespace Core;

  use \Core\Request;
  use \Core\TemplateEngine;

  class Controller
  {
    protected static $_render;
    protected $request;
    protected $handle;

    public function __construct()
    {
      $this->request = new Request;
    }

    protected function render($view, $scope = [])
    {
      extract($scope);
      $f = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View',
      str_replace('Controller', '', basename(get_class($this))), $view]) . '.php';
      if (file_exists($f)) {
        $this->handle = new TemplateEngine;
        $this->handle->template($f);
        $storage = str_replace('View', 'StorageView', $f);
        ob_start();
        include($storage);
        $view = ob_get_clean();
        ob_start();
        include(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View', 'index']) . '.php');
        self::$_render = ob_get_clean();
      }
    }

    public function __destruct()
    {
      echo self::$_render;
    }
  }
?>
