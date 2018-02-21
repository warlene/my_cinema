<?php
  namespace Core;

  Router::connect('/',  ['controller' => 'app', 'action' => 'index']);
  Router::connect('/user',  ['controller' => 'user', 'action' => 'index']);
  Router::connect('/user/add',  ['controller' => 'user', 'action' => 'add']);
  Router::connect('/user/login',  ['controller' => 'user', 'action' => 'login']);
?>
