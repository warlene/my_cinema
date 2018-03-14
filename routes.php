<?php
  namespace Core;

  Router::connect('/',  ['controller' => 'app', 'action' => 'index']);
  Router::connect('/user',  ['controller' => 'user', 'action' => 'index']);
  Router::connect('/user/register',  ['controller' => 'user', 'action' => 'register']);
  Router::connect('/user/login',  ['controller' => 'user', 'action' => 'login']);
  Router::connect('/user/logout',  ['controller' => 'user', 'action' => 'logout']);
  Router::connect('/user/profil/',  ['controller' => 'user', 'action' => 'profil']);
  Router::connect('/user/delete/',  ['controller' => 'user', 'action' => 'delete']);

  Router::connect('/film',  ['controller' => 'film', 'action' => 'index']);
  Router::connect('/film/info/',  ['controller' => 'film', 'action' => 'info_film']);
  Router::connect('/film/add',  ['controller' => 'film', 'action' => 'add_film']);
  Router::connect('/film/search_title',  ['controller' => 'film', 'action' => 'search_title']);
  Router::connect('/film/delete/',  ['controller' => 'film', 'action' => 'delete']);
  Router::connect('/film/modify/',  ['controller' => 'film', 'action' => 'modify']);
  Router::connect('/film/modifyValid',  ['controller' => 'film', 'action' => 'modify_validate']);
