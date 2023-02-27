<?php

namespace MVC;

class Route
{
    public static function start()
    {
        $controllerName = "";
        $actionName = "index";

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        if (!empty($routes[1])) {
            $controllerName = ucfirst($routes[1]);
        }

        if (!empty($routes[2])) {
            $actionName = $routes[2];
        }

        $controllerName = $controllerName . 'Controller';
        $controllerPath = "Controllers/" . $controllerName . ".php";

        if (file_exists($controllerPath)) {
            $class = "MVC\Controllers\\" . $controllerName;
            $controller = new $class();
            if (method_exists($controller, $actionName)) {
                $controller->$actionName();
            }
        }
    }
}
