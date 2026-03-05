<?php
require_once "core/composer/vendor/autoload.php";


use Core\Routing_v3_finish\RouteAction;
use Core\Routing_v3_finish\RouteUtils;

/**
 * for ParseURL
 */
//$router = new ParseHost();

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