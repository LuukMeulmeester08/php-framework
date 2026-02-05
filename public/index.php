<?php

use App\controllers\HomeController;
use App\controllers\TaskController;
use App\RouteProvider;
use Framework\Request;
use Framework\Response;
use Framework\Kernel;
use Framework\Router;

require __DIR__ . '/../vendor/autoload.php';

$routeProvider = new RouteProvider();
$router = new Router();;
$kernel = new Kernel($router,fn (Router $router) => $routeProvider->register($router));
$request = new Request();



$response = $kernel->handle($request);
echo $response-> body;