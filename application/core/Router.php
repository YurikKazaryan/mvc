<?php

namespace application\core;

use application\core\View;

class Router 
{
  protected $routes = [];
  protected $params = [];

  public function __construct()
  {
    $routes = require 'application/config/routes.php';
    foreach ($routes as $route => $params)
      $this->add($route, $params);
  }

  public function add($route, $params)
  {
    $route = '#^' . $route . '$#';
    $this->routes[$route] = $params;
  }

  public function match()
  {
    $url = trim($_SERVER['REQUEST_URI'], '/');
    $url = $_SERVER['QUERY_STRING'] ? substr($url, 0, strpos($url, '?')) : $url;
    foreach ($this->routes as $route => $params) {
      if (preg_match($route, $url, $matches)) {
        $this->params = $params;
        return true;
      }
    }
    return false;
  }

  public function run()
  {
    if ($this->match()) {
      $controller = 'application\controllers\\' 
        . ucfirst($this->params['controller']) . 'Controller';
      if (class_exists($controller)) {
        $action = $this->params['action'] . 'Action';
        if (method_exists($controller, $action)) {
          $controller = new $controller($this->params);
          $controller->$action();
        } else {
          View::errorCode(404);
        }
      } else {
        View::errorCode(404);
      }
    } else {
      View::errorCode(404);
    }
  }
}