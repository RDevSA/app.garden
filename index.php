<?php
require_once "core/composer/vendor/autoload.php";

use Core\Libs\DotEnv;
use Core\Routing_v2\RouteAction;
use Core\Routing_v3_finish\Route;

//use Core\Routing\Router;

Dotenv::dotEnv();

//for Routing
//$router = new Router();

/**
 * for Routing_v2
 */
$routeAction = new RouteAction();
$routeAction->init();

/**
 * for Routing_v3_finish
 */
$route = new Route();

//phpinfo();