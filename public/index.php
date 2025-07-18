<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\App\Router;

$router = new Router();
$router->loadRoutes();
$router->run();


