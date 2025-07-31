<?php
require_once "core/composer/vendor/autoload.php";

use Core\Libs\DotEnv;
use Core\Routing_v2\Router;

//use Core\Routing\Router;

Dotenv::dotEnv();
//$router = new Router();
$router = new Router();

//phpinfo();