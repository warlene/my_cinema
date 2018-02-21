<?php
  function my_autoloader($class) {
    $dir = explode('\\', $class);
    
    switch ($dir[0]) {
    case 'Controller':
        include 'src/Controller/' . $dir[1] . '.php';
        break;
    case 'Core':
        include $class . '.php';
        break;
    case 2:
        echo "i égal 2";
        break;
    }
  }
  spl_autoload_register('my_autoloader');
?>
