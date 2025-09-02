<?php
require_once "core/composer/vendor/autoload.php";

use Core\Libs\DotEnv;
use Core\Routing_v2\Route;
use Core\Routing_v2\RouteAction;
use Core\Routing_v2\Router;
use Core\TestPagePublic\TestPagePublicController;

//use Core\Routing\Router;

Dotenv::dotEnv();

//for Routing
//$router = new Router();

/**
 * for Routing_v2
 */
$routeAction = new RouteAction();
$routeAction->init();

//phpinfo();