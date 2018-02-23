<?php
  namespace Core;

  Router::connect('/',  ['controller' => 'app', 'action' => 'index']);
  Router::connect('/user',  ['controller' => 'user', 'action' => 'index']);
  Router::connect('/user/register',  ['controller' => 'user', 'action' => 'register']);
  Router::connect('/user/login',  ['controller' => 'user', 'action' => 'login']);
?>
