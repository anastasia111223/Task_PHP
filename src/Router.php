<?php
namespace Goods;

use Goods\Controllers\ErrorController;

class Router
{
    public static function start($routes = 'routes.php') {

        $method = $_SERVER['REQUEST_METHOD'];
        $uri = explode('?', $_SERVER['REQUEST_URI'])[0];
        
        $routes = require_once '../settings/routes.php';

        foreach ($routes as $route){
            if ($route['path'] === $uri && $route['method'] === $method) {
                $controller = explode("::", $route['controller'])[0];
                $action = explode("::", $route['controller'])[1];
                $obj = new $controller();
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $obj->$action($id);
                    return;
                } else {
                    $obj->$action();
                    return;
                }
            }
        }
        $obj = new ErrorController();
        $obj->error404();
    }
}