<?php
namespace Core;

  class Router
  {
    private static $routes;

    public static function connect($url, $route)
    {
      self::$routes[$url] = $route;
    }
    public static function get($url)
    {
      $url_separator = explode('/', $url);
      $params = [];
      for ($i=3; $i<count($url_separator); $i++) {
        $params[] = $url_separator[$i];
      }

      $url = "/$url_separator[1]";
      if (isset($url_separator[2])) {
        $url .= "/$url_separator[2]";
      }

      if (!empty($params)) {
        $url .= "/";
        if (isset(self::$routes[$url])) {
          self::$routes[$url]['params'] = $params;
          return self::$routes[$url];
        }
      } else {
        if (isset(self::$routes[$url])) {
          return self::$routes[$url];
        }
      }
    }
  }
