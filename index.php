<?php
require_once "core/composer/vendor/autoload.php";

use Core\Libs\DotEnv;
use Core\Routing\Router;

Dotenv::dotEnv();
$router = new Router();
//phpinfo();