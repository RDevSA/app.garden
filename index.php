<?php
require_once "core/composer/vendor/autoload.php";

use Core\Libs\DotEnv;
use Core\Routing_v3_finish\RouteUtils;
use Core\Routing_v3_finish\RouteAction;

//use Core\Routing_v2\RouteAction;


//use Core\RoutingFromURL\Router;

Dotenv::dotEnv();

/**
 * for RoutingFromURL
 */
//$router = new Router();

/**
 * for Routing_v2
 */
//$routeAction1 = new RouteAction();
//$routeAction1->init();

/**
 * for Routing_v3_finish
 */
$routeAction = new RouteAction(new RouteUtils());
$routeAction->init();

//phpinfo();