<?php
  function my_autoloader($class) {
    $dir = explode('\\', $class);
    switch ($dir[0]) {
    case 'Controller':
      if (file_exists('src/Controller/' . $dir[1] . '.php')) {
        include 'src/Controller/' . $dir[1] . '.php';
      }
        break;
    case 'Core':
        include $class . '.php';
        break;
    }
  }
  spl_autoload_register('my_autoloader');
?>
