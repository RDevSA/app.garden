<?php
require_once "core/composer/vendor/autoload.php";

use Core\Config;
use Core\Libs\DotEnv;
//use Core\Routing_v2\RouteAction;
use Core\Routing_v3_finish\RouteAction;


//use Core\Routing\Router;

Dotenv::dotEnv();

/**
 * for Routing
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
$routeAction = new RouteAction(new Config());
$routeAction->init();

//phpinfo();