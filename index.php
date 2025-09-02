<?php
require_once "core/composer/vendor/autoload.php";

use Core\Libs\DotEnv;
use Core\Routing_v2\Route;
use Core\Routing_v2\Router;
use Core\TestPagePublic\TestPagePublicController;

//use Core\Routing\Router;

Dotenv::dotEnv();
//$router = new Router();

$router = new Router([
    new Route('test_page_new', '/test_page_new', [TestPagePublicController::class]),
]);



try {

    $route = $router->matchFromPath($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
    $params = $route->getParams();
    $args = $route->getVars();

    $controllerName = $params[0];
    $methodName = $params[1]??null;

    $controller = new $controllerName();
    if (!is_callable($controller)){
        $controller = [$controller,$methodName];
    }
    echo $controller(...array_values($args));
}catch (Exception $exception){
    header("HTTP/1.0 404 Not Found");
    //echo "HTTP/1.0 404 Not Found";
}

//phpinfo();
//test git connect